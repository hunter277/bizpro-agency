<?php
/**
 * Template Name: Privacy Policy
 *
 * Dedicated, GDPR, CCPA and Google AdSense fully-compliant Privacy Policy template.
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
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Legal & Compliance', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2rem, 4vw, 3rem); color: #ffffff; margin-bottom: 12px;"><?php esc_html_e( 'Privacy Policy', 'bizpro-agency' ); ?></h1>
			<p style="color: #94a3b8; font-size: 1rem; margin: 0;"><?php esc_html_e( 'Last Updated:', 'bizpro-agency' ); ?> <?php echo esc_html( date_i18n( get_option( 'date_format' ) ) ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding-block: 60px; max-width: 900px; margin: 0 auto; line-height: 1.8; color: var(--bpa-text, #334155); font-size: 1.05rem;">
		
		<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 48px; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
			
			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a); margin-top: 0;"><?php esc_html_e( '1. Introduction and Scope', 'bizpro-agency' ); ?></h2>
			<p><?php printf( /* translators: 1: first value, 2: second value. */ esc_html__( 'At %1$s, accessible from %2$s, one of our main priorities is the privacy of our visitors. This Privacy Policy document outlines the types of information that is collected and recorded by %1$s and how we use it.', 'bizpro-agency' ), esc_html( $bizpro_site_name ), esc_url( $bizpro_site_url ) ); ?></p>
			<p><?php esc_html_e( 'If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact our Data Protection team.', 'bizpro-agency' ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '2. Consent', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'By using our website, you hereby consent to our Privacy Policy and agree to its terms.', 'bizpro-agency' ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '3. Information We Collect', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.', 'bizpro-agency' ); ?></p>
			<ul style="padding-left: 24px; margin-bottom: 24px;">
				<li><strong><?php esc_html_e( 'Contact Information:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'Name, email address, phone number, and message contents when submitting our contact or inquiry forms.', 'bizpro-agency' ); ?></li>
				<li><strong><?php esc_html_e( 'Log Files:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'Internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date/time stamps, referring/exit pages, and number of clicks for analytical and security purposes.', 'bizpro-agency' ); ?></li>
				<li><strong><?php esc_html_e( 'Cookies and Web Beacons:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'Preferences, user sessions, and pages visited to optimize user experience.', 'bizpro-agency' ); ?></li>
			</ul>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<!-- AdSense Critical Compliance Section -->
			<div style="background: #f0fdf4; border: 1px solid #86efac; border-radius: 12px; padding: 24px; margin: 30px 0;">
				<h2 style="font-size: 1.5rem; color: #166534; margin-top: 0;"><?php esc_html_e( '4. Google DoubleClick DART Cookies & Google AdSense', 'bizpro-agency' ); ?></h2>
				<p style="color: #15803d;"><?php esc_html_e( 'Google is one of our third-party vendors on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to our site and other sites on the internet.', 'bizpro-agency' ); ?></p>
				<p style="color: #15803d; margin-bottom: 0;"><?php esc_html_e( 'Visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL:', 'bizpro-agency' ); ?> <a href="https://policies.google.com/technologies/ads" target="_blank" rel="noopener noreferrer" style="color: #15803d; font-weight: 700; text-decoration: underline;"><?php esc_html_e( 'https://policies.google.com/technologies/ads', 'bizpro-agency' ); ?></a></p>
			</div>

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '5. Advertising Partners Privacy Policies', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'Third-party ad servers or ad networks use technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on this website, which are sent directly to users browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.', 'bizpro-agency' ); ?></p>
			<p><em><?php esc_html_e( 'Note that we have no access to or control over these cookies that are used by third-party advertisers.', 'bizpro-agency' ); ?></em></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '6. GDPR Data Protection Rights', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:', 'bizpro-agency' ); ?></p>
			<ul style="padding-left: 24px;">
				<li><strong><?php esc_html_e( 'The right to access:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'You have the right to request copies of your personal data.', 'bizpro-agency' ); ?></li>
				<li><strong><?php esc_html_e( 'The right to rectification:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'You have the right to request that we correct any information you believe is inaccurate.', 'bizpro-agency' ); ?></li>
				<li><strong><?php esc_html_e( 'The right to erasure:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'You have the right to request that we erase your personal data, under certain conditions.', 'bizpro-agency' ); ?></li>
				<li><strong><?php esc_html_e( 'The right to data portability:', 'bizpro-agency' ); ?></strong> <?php esc_html_e( 'You have the right to request that we transfer the data that we have collected to another organization, or directly to you.', 'bizpro-agency' ); ?></li>
			</ul>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '7. CCPA Privacy Rights (Do Not Sell My Personal Information)', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'Under the CCPA, among other rights, California consumers have the right to request that a business disclose the categories and specific pieces of personal data that a business has collected about consumers, and request that a business not sell the consumers personal data. If you make a request, we have one month to respond to you.', 'bizpro-agency' ); ?></p>

			<hr style="margin: 36px 0; border: none; border-top: 1px solid var(--bpa-border, #e2e8f0);">

			<h2 style="font-size: 1.6rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '8. Contact Information', 'bizpro-agency' ); ?></h2>
			<p><?php esc_html_e( 'If you have any questions or suggestions about our Privacy Policy, do not hesitate to reach out:', 'bizpro-agency' ); ?></p>
			<p style="margin-bottom: 0;"><strong><?php esc_html_e( 'Official Email:', 'bizpro-agency' ); ?></strong> <a href="<?php echo esc_url( 'mailto:' . $bizpro_email ); ?>" style="color: #2563eb; font-weight: 600;"><?php echo esc_html( $bizpro_email ); ?></a></p>

		</div>

	</div>

</main>

<?php
get_footer();
