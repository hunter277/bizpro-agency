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
 */
function bizpro_agency_ajax_submit_lead() {
	check_ajax_referer( 'bpa_lead_nonce', 'nonce' );

	$name    = isset( $_POST['lead_name'] ) ? sanitize_text_field( wp_unslash( $_POST['lead_name'] ) ) : '';
	$email   = isset( $_POST['lead_email'] ) ? sanitize_email( wp_unslash( $_POST['lead_email'] ) ) : '';
	$phone   = isset( $_POST['lead_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['lead_phone'] ) ) : '';
	$subject = isset( $_POST['lead_type'] ) ? sanitize_text_field( wp_unslash( $_POST['lead_type'] ) ) : 'New Website Inquiry';
	$details = isset( $_POST['lead_details'] ) ? sanitize_textarea_field( wp_unslash( $_POST['lead_details'] ) ) : '';

	if ( empty( $name ) ) {
		wp_send_json_error( array( 'message' => esc_html__( 'Please provide your full name.', 'bizpro-agency' ) ) );
	}

	// Prepare email content
	$admin_email = get_option( 'admin_email' );
	$email_subject = sprintf( '[%s] %s from %s', get_bloginfo( 'name' ), $subject, $name );
	$body  = "You received a new inquiry from your BizPro Agency website:\n\n";
	$body .= "Name: " . $name . "\n";
	if ( $email ) { $body .= "Email: " . $email . "\n"; }
	if ( $phone ) { $body .= "Phone / WhatsApp: " . $phone . "\n"; }
	if ( $details ) { $body .= "Details / Preferences: " . $details . "\n"; }
	$body .= "Submitted on: " . current_time( 'mysql' ) . "\n";
	$body .= "\n---\nNotification sent automatically by BizPro Agency Theme.";

	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	if ( $email && is_email( $email ) ) {
		$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
	}

	@wp_mail( $admin_email, $email_subject, $body, $headers );

	// Store recent inquiry in transient for demo verification
	$recent_leads = get_option( 'bpa_recent_leads', array() );
	if ( ! is_array( $recent_leads ) ) {
		$recent_leads = array();
	}
	array_unshift( $recent_leads, array(
		'name'    => $name,
		'email'   => $email,
		'phone'   => $phone,
		'type'    => $subject,
		'details' => $details,
		'date'    => current_time( 'mysql' ),
	) );
	// Keep last 25 leads
	$recent_leads = array_slice( $recent_leads, 0, 25 );
	update_option( 'bpa_recent_leads', $recent_leads );

	wp_send_json_success( array(
		'message' => sprintf(
			esc_html__( 'Thank you, %s! Your inquiry has been received successfully. Our specialist team will review your details and contact you shortly.', 'bizpro-agency' ),
			$name
		),
	) );
}
add_action( 'wp_ajax_bpa_submit_lead',        'bizpro_agency_ajax_submit_lead' );
add_action( 'wp_ajax_nopriv_bpa_submit_lead', 'bizpro_agency_ajax_submit_lead' );

/**
 * Enqueue AJAX script parameters for lead forms.
 */
function bizpro_agency_enqueue_lead_scripts() {
	wp_localize_script( 'bizpro-agency-main', 'bpaLeadData', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'bpa_lead_nonce' ),
		'sending' => esc_html__( 'Submitting your details...', 'bizpro-agency' ),
		'success' => esc_html__( 'Inquiry Received Successfully!', 'bizpro-agency' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'bizpro_agency_enqueue_lead_scripts', 20 );
