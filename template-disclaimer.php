<?php
/**
 * Template Name: Disclaimer
 *
 * Dedicated Professional and AdSense compliant Disclaimer template.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bpa_email = bizpro_agency_get( 'topbar_email', get_bloginfo( 'admin_email' ) );
$site_name = get_bloginfo( 'name' );
$site_url  = home_url( '/' );
?>

<main id="primary" class="site-main site-main--legal">

	<header class="page-header" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 60px 0; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Legal Disclaimers', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2rem, 4vw, 3rem); color: #ffffff; margin-bottom: 12px;"><?php esc_html_e( 'Website & Advisory Disclaimer', 'bizpro-agency' ); ?></h1>
			<p style="color: #94a3b8; font-size: 1rem; margin: 0;"><?php esc_html_e( 'Transparency & Policies', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding: 60px 0; max-width: 900px; margin: 0 auto; line-height: 1.8; color: var(--bpa-text, #334155); font-size: 1.05rem;">
		
		<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 48px; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
			
			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a); margin-top: 0;"><?php esc_html_e( '1. General Website Disclaimer', 'bizpro-agency' ); ?></h2>
			<p><?php printf( esc_html__( 'The information provided by %1$s on %2$s is for general informational and educational purposes only. All information on the Site is provided in good faith, however we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any information on the Site.', 'bizpro-agency' ), esc_html( $site_name ), esc_url( $site_url ) ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '2. Professional Services & Consultation Disclaimer', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'The Site cannot and does not contain legal, immigration, financial, or engineering advice. The information is provided for general informational purposes only and is not a substitute for professional advice. Accordingly, before taking any actions based upon such information, we encourage you to consult with the appropriate licensed professionals.', 'bizpro-agency' ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<!-- AdSense and Advertising Disclaimer -->
			<div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 12px; padding: 24px; margin: 30px 0;">
				<h2 style="font-size: 1.5rem; color: #1e40af; margin-top: 0;"><?php esc_html_e( '3. Advertising & Google AdSense Disclosure', 'bizpro-agency' ); ?></h2>
				<p style="color: #1e3a8a;"><?php esc_html_e( 'This site may display advertisements served by Google AdSense and other third-party advertising networks. These advertisements help support the maintenance and free resources available on this website.', 'bizpro-agency' ); ?></p>
				<p style="color: #1e3a8a; margin-bottom: 0;"><?php esc_html_e( 'Third-party vendors, including Google, use cookies to serve ads based on a users prior visits to our website or other websites. We do not endorse any product or service advertised in these third-party ad blocks.', 'bizpro-agency' ); ?></p>
			</div>

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '4. External Links Disclaimer', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'The Site may contain (or you may be sent through the Site to) links to other websites or content belonging to or originating from third parties. Such external links are not investigated, monitored, or checked for accuracy, adequacy, validity, reliability, availability, or completeness by us.', 'bizpro-agency' ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '5. Questions and Concerns', 'bizpro-agency' ); ?></h2>
			<p style="margin-bottom: 0;"><strong><?php esc_html_e( 'Contact Desk:', 'bizpro-agency' ); ?></strong> <a href="<?php echo esc_url( 'mailto:' . $bpa_email ); ?>" style="color: #2563eb; font-weight: 600;"><?php echo esc_html( $bpa_email ); ?></a></p>

		</div>

	</div>

</main>

<?php
get_footer();
