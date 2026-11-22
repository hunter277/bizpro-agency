<?php
/**
 * Template Name: Contact Us
 *
 * Dedicated, conversion-optimized contact and inquiry page template.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bizpro_phone   = bizpro_agency_get( 'topbar_phone', '+1 (555) 123-4567' );
$bizpro_email   = bizpro_agency_get( 'topbar_email', 'info@bizproagency.com' );
$bizpro_address = bizpro_agency_get( 'topbar_address', '123 Business Avenue, Suite 500, New York, NY 10001' );

$bizpro_form_submitted = false;
$bizpro_form_error     = false;

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['bpa_contact_nonce'] ) ) {
	if ( wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['bpa_contact_nonce'] ) ), 'bpa_contact_action' ) ) {
		$bizpro_lead_name    = isset( $_POST['bpa_name'] ) ? sanitize_text_field( wp_unslash( $_POST['bpa_name'] ) ) : '';
		$bizpro_lead_email   = isset( $_POST['bpa_email'] ) ? sanitize_email( wp_unslash( $_POST['bpa_email'] ) ) : '';
		$bizpro_lead_phone   = isset( $_POST['bpa_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['bpa_phone'] ) ) : '';
		$bizpro_lead_service = isset( $_POST['bpa_service'] ) ? sanitize_text_field( wp_unslash( $_POST['bpa_service'] ) ) : '';
		$bizpro_lead_msg     = isset( $_POST['bpa_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['bpa_message'] ) ) : '';

		// Send email notification to site admin
		$bizpro_to      = get_option( 'admin_email' );
		$bizpro_subject = sprintf( '[%s] New Contact Request from %s', get_bloginfo( 'name' ), $bizpro_lead_name );
		$bizpro_body    = "Name: $bizpro_lead_name\nEmail: $bizpro_lead_email\nPhone: $bizpro_lead_phone\nService: $bizpro_lead_service\n\nMessage:\n$bizpro_lead_msg";
		$bizpro_headers = array( 'Content-Type: text/plain; charset=UTF-8' );
		if ( $bizpro_lead_email ) {
			$bizpro_headers[] = "Reply-To: $bizpro_lead_name <$bizpro_lead_email>";
		}
		wp_mail( $bizpro_to, $bizpro_subject, $bizpro_body, $bizpro_headers );

		$bizpro_form_submitted = true;
	} else {
		$bizpro_form_error = true;
	}
}
?>

<main id="primary" class="site-main site-main--contact">

	<!-- Contact Hero -->
	<header class="page-header" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 70px 0 60px; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Direct Consultation & Inquiries', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2.2rem, 5vw, 3.4rem); color: #ffffff; margin-bottom: 16px;"><?php esc_html_e( 'Get in Touch with Our Global Advisors', 'bizpro-agency' ); ?></h1>
			<p style="max-width: 650px; margin: 0 auto; color: #64748b; font-size: 1.1rem; line-height: 1.6;"><?php esc_html_e( 'Have a question or ready to launch your next project? Reach out to our senior team for a swift, confidential response within 24 hours.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding-block: 70px;">

		<!-- 3-Column Info Cards -->
		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-bottom: 60px;">
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 32px 24px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.04);">
				<div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(37,99,235,0.1); color: #2563eb; display: inline-flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px;">📍</div>
				<h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; color: var(--bpa-text, #0f172a);"><?php esc_html_e( 'Global Headquarters', 'bizpro-agency' ); ?></h3>
				<p style="color: var(--bpa-text-muted, #64748b); font-size: 0.95rem; line-height: 1.6; margin: 0;"><?php echo esc_html( $bizpro_address ); ?></p>
			</div>

			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 32px 24px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.04);">
				<div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(16,185,129,0.1); color: #10b981; display: inline-flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px;">📞</div>
				<h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; color: var(--bpa-text, #0f172a);"><?php esc_html_e( 'Direct Phone Lines', 'bizpro-agency' ); ?></h3>
				<p style="color: var(--bpa-text-muted, #64748b); font-size: 0.95rem; line-height: 1.6; margin: 0;">
					<a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bizpro_phone ) ); ?>" style="color: #2563eb; font-weight: 600; text-decoration: none;"><?php echo esc_html( $bizpro_phone ); ?></a><br>
					<span style="font-size: 0.82rem; color: #64748b;"><?php esc_html_e( 'Mon – Fri: 9:00 AM – 6:00 PM EST', 'bizpro-agency' ); ?></span>
				</p>
			</div>

			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 32px 24px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.04);">
				<div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(99,102,241,0.1); color: #4f46e5; display: inline-flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px;">✉️</div>
				<h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; color: var(--bpa-text, #0f172a);"><?php esc_html_e( 'Email & Advisory Desk', 'bizpro-agency' ); ?></h3>
				<p style="color: var(--bpa-text-muted, #64748b); font-size: 0.95rem; line-height: 1.6; margin: 0;">
					<a href="<?php echo esc_url( 'mailto:' . $bizpro_email ); ?>" style="color: #2563eb; font-weight: 600; text-decoration: none;"><?php echo esc_html( $bizpro_email ); ?></a><br>
					<span style="font-size: 0.82rem; color: #64748b;"><?php esc_html_e( 'Guaranteed 24-Hour Response SLA', 'bizpro-agency' ); ?></span>
				</p>
			</div>
		</div>

		<!-- Contact Form & Office Grid -->
		<div style="display: grid; grid-template-columns: 1.4fr 1fr; gap: 40px; align-items: start;">
			
			<!-- Left: Contact Form -->
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 40px; box-shadow: 0 14px 35px rgba(0,0,0,0.05);">
				<h2 style="font-size: 1.7rem; font-weight: 800; margin-bottom: 8px; color: var(--bpa-text, #0f172a);"><?php esc_html_e( 'Send Us an Official Message', 'bizpro-agency' ); ?></h2>
				<p style="color: var(--bpa-text-muted, #64748b); margin-bottom: 28px; font-size: 0.95rem;"><?php esc_html_e( 'Fill out the form below and an assigned specialist will get back to you promptly.', 'bizpro-agency' ); ?></p>

				<?php if ( $bizpro_form_submitted ) : ?>
					<div style="background: #ecfdf5; border: 1px solid #10b981; color: #065f46; border-radius: 12px; padding: 20px; margin-bottom: 24px; display: flex; align-items: center; gap: 12px;">
						<span style="font-size: 24px;">✅</span>
						<div>
							<strong style="display: block; font-size: 1.05rem;"><?php esc_html_e( 'Thank You! Message Received.', 'bizpro-agency' ); ?></strong>
							<span style="font-size: 0.9rem;"><?php esc_html_e( 'Our client advisory team has received your inquiry and will follow up within 24 hours.', 'bizpro-agency' ); ?></span>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( $bizpro_form_error ) : ?>
					<div style="background: #fef2f2; border: 1px solid #ef4444; color: #991b1b; border-radius: 12px; padding: 16px; margin-bottom: 24px;">
						<?php esc_html_e( 'Verification failed. Please refresh and try submitting again.', 'bizpro-agency' ); ?>
					</div>
				<?php endif; ?>

				<?php
				$bizpro_post_content = get_the_content();
				if ( ! empty( trim( $bizpro_post_content ) ) && ( has_shortcode( $bizpro_post_content, 'wpforms' ) || has_shortcode( $bizpro_post_content, 'contact-form-7' ) ) ) :
					the_content();
				else :
					?>

				<div class="bpa-demo-form-notice" style="background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; padding: 14px 18px; margin-bottom: 24px; font-size: 0.88rem; color: #166534; display: flex; align-items: center; gap: 10px;">
					<span style="font-size: 20px;">⚡</span>
					<div>
						<strong><?php esc_html_e( 'Interactive Demo Form:', 'bizpro-agency' ); ?></strong>
						<?php esc_html_e( 'Submissions deliver live AJAX confirmation and notify the admin email. Fully compatible with WPForms and Contact Form 7 shortcodes.', 'bizpro-agency' ); ?>
					</div>
				</div>

				<form method="post" action="" class="bpa-lead-form contact-form">
					<?php wp_nonce_field( 'bpa_contact_action', 'bpa_contact_nonce' ); ?>
					
					<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
						<div>
							<label for="bpa_name" style="display: block; font-size: 0.88rem; font-weight: 600; margin-bottom: 6px; color: var(--bpa-text, #334155);"><?php esc_html_e( 'Your Full Name *', 'bizpro-agency' ); ?></label>
							<input type="text" id="bpa_name" name="bpa_name" required placeholder="<?php esc_attr_e( 'John Doe', 'bizpro-agency' ); ?>" style="width: 100%; padding: 13px 16px; border: 1px solid var(--bpa-border, #cbd5e1); border-radius: 10px; font-size: 16px; background: var(--bpa-bg-alt, #f8fafc);">
						</div>
						<div>
							<label for="bpa_email" style="display: block; font-size: 0.88rem; font-weight: 600; margin-bottom: 6px; color: var(--bpa-text, #334155);"><?php esc_html_e( 'Email Address *', 'bizpro-agency' ); ?></label>
							<input type="email" id="bpa_email" name="bpa_email" required placeholder="<?php esc_attr_e( 'john@company.com', 'bizpro-agency' ); ?>" style="width: 100%; padding: 13px 16px; border: 1px solid var(--bpa-border, #cbd5e1); border-radius: 10px; font-size: 16px; background: var(--bpa-bg-alt, #f8fafc);">
						</div>
					</div>

					<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
						<div>
							<label for="bpa_phone" style="display: block; font-size: 0.88rem; font-weight: 600; margin-bottom: 6px; color: var(--bpa-text, #334155);"><?php esc_html_e( 'Phone / WhatsApp *', 'bizpro-agency' ); ?></label>
							<input type="tel" id="bpa_phone" name="bpa_phone" required placeholder="+1 (555) 000-0000" style="width: 100%; padding: 13px 16px; border: 1px solid var(--bpa-border, #cbd5e1); border-radius: 10px; font-size: 16px; background: var(--bpa-bg-alt, #f8fafc);">
						</div>
						<div>
							<label for="bpa_service" style="display: block; font-size: 0.88rem; font-weight: 600; margin-bottom: 6px; color: var(--bpa-text, #334155);"><?php esc_html_e( 'Primary Area of Interest', 'bizpro-agency' ); ?></label>
							<?php
							$bizpro_context        = function_exists( 'bizpro_agency_get_demo_context' ) ? bizpro_agency_get_demo_context() : 'default';
							$bizpro_services       = function_exists( 'bizpro_agency_get_demo_services' ) ? bizpro_agency_get_demo_services( $bizpro_context ) : array();
							$bizpro_preset_service = isset( $_GET['service'] ) ? sanitize_text_field( wp_unslash( $_GET['service'] ) ) : '';
							?>
							<select id="bpa_service" name="bpa_service" style="width: 100%; padding: 13px 16px; border: 1px solid var(--bpa-border, #cbd5e1); border-radius: 10px; font-size: 16px; background: var(--bpa-bg-alt, #f8fafc);">
								<?php foreach ( $bizpro_services as $bizpro_svc_k => $bizpro_svc_label ) : ?>
									<option value="<?php echo esc_attr( $bizpro_svc_k ); ?>" <?php selected( $bizpro_preset_service, $bizpro_svc_k ); ?>><?php echo esc_html( $bizpro_svc_label ); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div style="margin-bottom: 24px;">
						<label for="bpa_message" style="display: block; font-size: 0.88rem; font-weight: 600; margin-bottom: 6px; color: var(--bpa-text, #334155);"><?php esc_html_e( 'Project Scope / Message *', 'bizpro-agency' ); ?></label>
						<textarea id="bpa_message" name="bpa_message" rows="5" required placeholder="<?php esc_attr_e( 'Please provide a brief summary of your inquiry, goals, or requirements...', 'bizpro-agency' ); ?>" style="width: 100%; padding: 14px 16px; border: 1px solid var(--bpa-border, #cbd5e1); border-radius: 10px; font-size: 16px; background: var(--bpa-bg-alt, #f8fafc);"></textarea>
					</div>

					<button type="submit" class="btn btn--primary btn--lg" style="width: 100%; padding: 16px; font-size: 1.05rem; justify-content: center;"><?php esc_html_e( 'Send Consultation Request', 'bizpro-agency' ); ?></button>
				</form>
				<?php endif; ?>
			</div>

			<?php
			// Contextual right sidebar copy
			$bizpro_why_titles = array(
				'travel'     => __( 'Why Book With BizPro Travel?', 'bizpro-agency' ),
				'visa'       => __( 'Why Choose BizPro Visa?', 'bizpro-agency' ),
				'it'         => __( 'Why Partner With BizPro Tech?', 'bizpro-agency' ),
				'digital'    => __( 'Why Buy From BizPro Store?', 'bizpro-agency' ),
				'consulting' => __( 'Why Consult With BizPro?', 'bizpro-agency' ),
				'corporate'  => __( 'Why Partner With BizPro Enterprise?', 'bizpro-agency' ),
				'default'    => __( 'Why Work With BizPro Agency?', 'bizpro-agency' ),
			);
			$bizpro_why_title = isset( $bizpro_why_titles[ $bizpro_context ] ) ? $bizpro_why_titles[ $bizpro_context ] : $bizpro_why_titles['default'];

			$bizpro_emergency_data = array(
				'travel'     => array(
					'title' => __( 'Urgent Traveler Assistance?', 'bizpro-agency' ),
					'desc'  => __( 'For flight schedule disruptions, same-day hotel issues or immediate itinerary assistance, reach our 24/7 dedicated travel desk.', 'bizpro-agency' ),
					'btn'   => __( 'Call Travel Desk', 'bizpro-agency' ),
				),
				'visa'       => array(
					'title' => __( 'Urgent Visa Deadlines?', 'bizpro-agency' ),
					'desc'  => __( 'For urgent consular submission deadlines, interview clearances, or time-sensitive appeals, reach our 24/7 legal immigration desk.', 'bizpro-agency' ),
					'btn'   => __( 'Call Immigration Desk', 'bizpro-agency' ),
				),
				'it'         => array(
					'title' => __( 'Emergency Outages?', 'bizpro-agency' ),
					'desc'  => __( 'For critical enterprise IT incidents, cloud infrastructure outages or server downtime, reach our 24/7 dedicated DevOps desk.', 'bizpro-agency' ),
					'btn'   => __( 'Call Incident Desk', 'bizpro-agency' ),
				),
				'digital'    => array(
					'title' => __( 'Priority Product Support?', 'bizpro-agency' ),
					'desc'  => __( 'For urgent digital license activations, enterprise deployment issues or technical assistance, reach our dedicated product desk.', 'bizpro-agency' ),
					'btn'   => __( 'Call Support Desk', 'bizpro-agency' ),
				),
				'consulting' => array(
					'title' => __( 'Executive Escalations?', 'bizpro-agency' ),
					'desc'  => __( 'For time-critical boardroom decisions, crisis management or urgent transaction advisory, contact our senior practice lead.', 'bizpro-agency' ),
					'btn'   => __( 'Call Advisory Desk', 'bizpro-agency' ),
				),
				'corporate'  => array(
					'title' => __( 'Corporate Escalations?', 'bizpro-agency' ),
					'desc'  => __( 'For enterprise compliance matters, regulatory filings or urgent cross-border institutional inquiries, reach our dedicated client liaison.', 'bizpro-agency' ),
					'btn'   => __( 'Call Enterprise Desk', 'bizpro-agency' ),
				),
				'default'    => array(
					'title' => __( 'Emergency Escalations?', 'bizpro-agency' ),
					'desc'  => __( 'For critical business inquiries or urgent project submission deadlines, reach our 24/7 dedicated escalation desk.', 'bizpro-agency' ),
					'btn'   => __( 'Call Emergency Desk', 'bizpro-agency' ),
				),
			);
			$bizpro_emergency = isset( $bizpro_emergency_data[ $bizpro_context ] ) ? $bizpro_emergency_data[ $bizpro_context ] : $bizpro_emergency_data['default'];
			?>

			<!-- Right: Office Highlights & Security -->
			<div style="display: flex; flex-direction: column; gap: 24px;">
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.04);">
					<h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 16px; color: var(--bpa-text, #0f172a);"><?php echo esc_html( $bizpro_why_title ); ?></h3>
					<ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 14px;">
						<li style="display: flex; gap: 12px; font-size: 0.95rem; color: var(--bpa-text-muted, #475569);">
							<span style="color: #10b981; font-weight: 700;">✓</span>
							<span><strong><?php esc_html_e( 'Strict NDA & IP Confidentiality:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'Your trade secrets and personal data are protected by bilateral legal agreements.', 'bizpro-agency' ); ?></span>
						</li>
						<li style="display: flex; gap: 12px; font-size: 0.95rem; color: var(--bpa-text-muted, #475569);">
							<span style="color: #10b981; font-weight: 700;">✓</span>
							<span><strong><?php esc_html_e( 'Direct Senior Partner Access:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'No junior intermediaries—work directly with seasoned practice leads.', 'bizpro-agency' ); ?></span>
						</li>
						<li style="display: flex; gap: 12px; font-size: 0.95rem; color: var(--bpa-text-muted, #475569);">
							<span style="color: #10b981; font-weight: 700;">✓</span>
							<span><strong><?php esc_html_e( 'Zero Hidden Costs:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'Transparent retainers and milestone-based commercial arrangements.', 'bizpro-agency' ); ?></span>
						</li>
					</ul>
				</div>

				<div style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: #ffffff; border-radius: 20px; padding: 32px; box-shadow: 0 12px 30px rgba(0,0,0,0.12);">
					<h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;"><?php echo esc_html( $bizpro_emergency['title'] ); ?></h3>
					<p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin-bottom: 18px;"><?php echo esc_html( $bizpro_emergency['desc'] ); ?></p>
					<a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bizpro_phone ) ); ?>" class="btn btn--light" style="width: 100%; justify-content: center;"><?php echo esc_html( $bizpro_emergency['btn'] ); ?></a>
				</div>
			</div>

		</div>

	</div>

</main>

<?php
get_footer();
