<?php
/**
 * Template Name: Our Team & Leadership
 *
 * Executive team profiles, advisory credentials, and bios.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--team">

	<header class="page-header" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 80px 0 70px; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Our People', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2.2rem, 5vw, 3.6rem); color: #ffffff; margin-bottom: 16px;"><?php esc_html_e( 'Leadership & Senior Advisory Council', 'bizpro-agency' ); ?></h1>
			<p style="max-width: 650px; margin: 0 auto; color: #94a3b8; font-size: 1.15rem; line-height: 1.6;"><?php esc_html_e( 'Former enterprise executives, licensed immigration barristers, and lead cloud engineers dedicated to your mission.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding-block: 80px;">
		
		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
			
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
				<div style="width: 100px; height: 100px; border-radius: 50%; background: #e0e7ff; color: #4338ca; font-size: 36px; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; font-weight: 800;"><?php esc_html_e( 'KH', 'bizpro-agency' ); ?></div>
				<h3 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0 0 6px;"><?php esc_html_e( 'Kamrul Hasan', 'bizpro-agency' ); ?></h3>
				<span style="color: #2563eb; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;"><?php esc_html_e( 'Founder & Managing Principal', 'bizpro-agency' ); ?></span>
				<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 16px 0 0;"><?php esc_html_e( 'Over 12 years directing enterprise business transformation, digital architecture and corporate governance.', 'bizpro-agency' ); ?></p>
			</div>

			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
				<div style="width: 100px; height: 100px; border-radius: 50%; background: #ecfdf5; color: #065f46; font-size: 36px; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; font-weight: 800;"><?php esc_html_e( 'ER', 'bizpro-agency' ); ?></div>
				<h3 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0 0 6px;"><?php esc_html_e( 'Elena Rostova, LL.M.', 'bizpro-agency' ); ?></h3>
				<span style="color: #10b981; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;"><?php esc_html_e( 'Head of Legal & Immigration', 'bizpro-agency' ); ?></span>
				<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 16px 0 0;"><?php esc_html_e( 'Licensed immigration legal specialist overseeing residency by investment and high-skilled migration filings.', 'bizpro-agency' ); ?></p>
			</div>

			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
				<div style="width: 100px; height: 100px; border-radius: 50%; background: #faf5ff; color: #6b21a8; font-size: 36px; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; font-weight: 800;"><?php esc_html_e( 'MC', 'bizpro-agency' ); ?></div>
				<h3 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0 0 6px;"><?php esc_html_e( 'Marcus Chen', 'bizpro-agency' ); ?></h3>
				<span style="color: #9333ea; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;"><?php esc_html_e( 'Chief Technology Officer', 'bizpro-agency' ); ?></span>
				<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 16px 0 0;"><?php esc_html_e( 'Former AWS Solutions Architect leading cloud infrastructure, microservices and automated deployment pipelines.', 'bizpro-agency' ); ?></p>
			</div>

		</div>

	</div>

</main>

<?php
get_footer();
