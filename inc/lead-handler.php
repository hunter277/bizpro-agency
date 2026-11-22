<?php
/**
 * Turnkey Lead & Inquiry Form Submission Handler
 *
 * Processes Visa eligibility inquiries, Travel booking requests,
 * and IT audits with AJAX feedback, admin email notifications, and zero bloat.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Handle AJAX lead form submission.
 *
 * Public form, so no nonce (cached pages would make it expire). Spam is limited by a honeypot field,
 * a minimum fill time and a per-IP rate limit. Nothing is stored in the database: the enquiry is emailed
 * to the site admin and exposed through the `bizpro_agency_lead_submitted` action for CRM integrations.
 */
function bizpro_agency_ajax_submit_lead() {
	// phpcs:disable WordPress.Security.NonceVerification.Missing -- public enquiry form, protected by honeypot, timing and rate limit.
	$honeypot = isset( $_POST['lead_website'] ) ? sanitize_text_field( wp_unslash( $_POST['lead_website'] ) ) : '';
	$elapsed  = isset( $_POST['lead_elapsed'] ) ? absint( $_POST['lead_elapsed'] ) : 0;
	$name     = isset( $_POST['lead_name'] ) ? sanitize_text_field( wp_unslash( $_POST['lead_name'] ) ) : '';
	$email    = isset( $_POST['lead_email'] ) ? sanitize_email( wp_unslash( $_POST['lead_email'] ) ) : '';
	$phone    = isset( $_POST['lead_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['lead_phone'] ) ) : '';
	$subject  = isset( $_POST['lead_type'] ) ? sanitize_text_field( wp_unslash( $_POST['lead_type'] ) ) : '';
	$raw      = isset( $_POST['lead_fields'] ) && is_array( $_POST['lead_fields'] ) ? wp_unslash( $_POST['lead_fields'] ) : array(); // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- sanitized per item below.
	// phpcs:enable WordPress.Security.NonceVerification.Missing

	$subject = $subject ? $subject : __( 'New Website Inquiry', 'bizpro-agency' );

	if ( '' !== $honeypot || $elapsed < 1500 ) {
		// Silently accept so bots learn nothing.
		wp_send_json_success( array( 'message' => esc_html__( 'Thank you! Your inquiry has been received.', 'bizpro-agency' ) ) );
	}

	if ( '' === $name ) {
		wp_send_json_error( array( 'message' => esc_html__( 'Please provide your full name.', 'bizpro-agency' ) ) );
	}
	if ( '' === $email && '' === $phone ) {
		wp_send_json_error( array( 'message' => esc_html__( 'Please provide an email address or phone number so we can reply.', 'bizpro-agency' ) ) );
	}
	if ( '' !== $email && ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => esc_html__( 'Please enter a valid email address.', 'bizpro-agency' ) ) );
	}

	// Rate limit: 5 enquiries per 10 minutes per visitor.
	$ip_raw = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';
	$key    = 'bizpro_lead_' . md5( $ip_raw . wp_salt( 'nonce' ) );
	$count  = (int) get_transient( $key );
	if ( $count >= 5 ) {
		wp_send_json_error( array( 'message' => esc_html__( 'Too many submissions. Please try again in a few minutes.', 'bizpro-agency' ) ) );
	}
	set_transient( $key, $count + 1, 10 * MINUTE_IN_SECONDS );

	$fields = array();
	foreach ( array_slice( $raw, 0, 20, true ) as $label => $value ) {
		if ( is_scalar( $value ) && '' !== trim( (string) $value ) ) {
			$fields[ mb_substr( sanitize_text_field( (string) $label ), 0, 60 ) ] = mb_substr( sanitize_textarea_field( (string) $value ), 0, 2000 );
		}
	}

	$to = apply_filters( 'bizpro_agency_lead_recipient', get_option( 'admin_email' ) );

	$body  = __( 'You received a new inquiry from your website:', 'bizpro-agency' ) . "\n\n";
	$body .= __( 'Name', 'bizpro-agency' ) . ': ' . $name . "\n";
	if ( $email ) {
		$body .= __( 'Email', 'bizpro-agency' ) . ': ' . $email . "\n";
	}
	if ( $phone ) {
		$body .= __( 'Phone / WhatsApp', 'bizpro-agency' ) . ': ' . $phone . "\n";
	}
	foreach ( $fields as $label => $value ) {
		$body .= $label . ': ' . $value . "\n";
	}
	$body .= __( 'Submitted on', 'bizpro-agency' ) . ': ' . current_time( 'mysql' ) . "\n";

	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	if ( $email ) {
		$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
	}

	$sent = wp_mail( $to, sprintf( '[%s] %s - %s', wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES ), $subject, $name ), $body, $headers );

	/**
	 * Fires after a lead was received (use it to push to a CRM).
	 *
	 * @param array $lead Lead data: name, email, phone, type, fields.
	 * @param bool  $sent Whether the notification email was accepted for delivery.
	 */
	do_action(
		'bizpro_agency_lead_submitted',
		array(
			'name'   => $name,
			'email'  => $email,
			'phone'  => $phone,
			'type'   => $subject,
			'fields' => $fields,
		),
		$sent
	);

	wp_send_json_success(
		array(
			'message' => esc_html__( 'Thank you! Your inquiry has been received. Our team will contact you shortly.', 'bizpro-agency' ),
		)
	);
}
add_action( 'wp_ajax_bpa_submit_lead', 'bizpro_agency_ajax_submit_lead' );
add_action( 'wp_ajax_nopriv_bpa_submit_lead', 'bizpro_agency_ajax_submit_lead' );

/**
 * Pass AJAX parameters and translated strings to the lead form script.
 */
function bizpro_agency_enqueue_lead_scripts() {
	wp_localize_script(
		'bizpro-agency-main',
		'bpaLeadData',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'sending' => esc_html__( 'Sending...', 'bizpro-agency' ),
			'success' => esc_html__( 'Inquiry received', 'bizpro-agency' ),
			'error'   => esc_html__( 'Something went wrong. Please check your connection and try again.', 'bizpro-agency' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'bizpro_agency_enqueue_lead_scripts', 20 );
