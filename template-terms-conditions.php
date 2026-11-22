<?php
/**
 * Template Name: Terms & Conditions
 *
 * Dedicated Terms of Service and Conditions legal template.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bizpro_email     = bizpro_agency_get( 'topbar_email', get_bloginfo( 'admin_email' ) );
$bizpro_site_name = get_bloginfo( 'name' );
$bizpro_site_url  = home_url( '/' );
?>

<main id="primary" class="site-main site-main--legal">

	<header class="page-header" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 60px 0; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Legal & Terms', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2rem, 4vw, 3rem); color: #ffffff; margin-bottom: 12px;"><?php esc_html_e( 'Terms & Conditions', 'bizpro-agency' ); ?></h1>
			<p style="color: #94a3b8; font-size: 1rem; margin: 0;"><?php esc_html_e( 'Effective Date:', 'bizpro-agency' ); ?> <?php echo esc_html( date_i18n( get_option( 'date_format' ) ) ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding: 60px 0; max-width: 900px; margin: 0 auto; line-height: 1.8; color: var(--bpa-text, #334155); font-size: 1.05rem;">
		
		<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 48px; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
			
			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a); margin-top: 0;"><?php esc_html_e( '1. Agreement to Terms', 'bizpro-agency' ); ?></h2>
			<p><?php printf( /* translators: 1: first value, 2: second value. */ esc_html__( 'These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity ("you") and %1$s ("we", "us", or "our"), concerning your access to and use of the %2$s website as well as any other media form, channel, or mobile website related, linked, or otherwise connected thereto.', 'bizpro-agency' ), esc_html( $bizpro_site_name ), esc_url( $bizpro_site_url ) ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '2. Intellectual Property Rights', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site and the trademarks, service marks, and logos contained therein are owned or controlled by us or licensed to us, and are protected by copyright and trademark laws.', 'bizpro-agency' ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '3. User Representations', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'By using the Site, you represent and warrant that: (1) all registration and inquiry information you submit will be true, accurate, current, and complete; (2) you will maintain the accuracy of such information; (3) you have the legal capacity and you agree to comply with these Terms and Conditions.', 'bizpro-agency' ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '4. Limitation of Liability', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'In no event will we or our directors, employees, or agents be liable to you or any third party for any direct, indirect, consequential, exemplary, incidental, special, or punitive damages, including lost profit, lost revenue, loss of data, or other damages arising from your use of the site or consulting advisory services.', 'bizpro-agency' ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '5. Contact Inquiries', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'In order to resolve a complaint regarding the Site or to receive further information regarding use of the Site, please contact us at:', 'bizpro-agency' ); ?></p>
			<p style="margin-bottom: 0;"><strong><?php esc_html_e( 'Email:', 'bizpro-agency' ); ?></strong> <a href="<?php echo esc_url( 'mailto:' . $bizpro_email ); ?>" style="color: #2563eb; font-weight: 600;"><?php echo esc_html( $bizpro_email ); ?></a></p>

		</div>

	</div>

</main>

<?php
get_footer();
