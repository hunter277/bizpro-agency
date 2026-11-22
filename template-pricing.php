<?php
/**
 * Template Name: Pricing & Plans
 *
 * Interactive pricing tables with monthly/yearly billing toggle and FAQ.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--pricing">

	<header class="page-header bpa-page-hero">
		<div class="container">
			<span class="bpa-page-hero__eyebrow"><?php esc_html_e( 'Transparent Investment', 'bizpro-agency' ); ?></span>
			<h1 class="page-title bpa-page-hero__title"><?php esc_html_e( 'Simple, Flexible Pricing Built for Growth', 'bizpro-agency' ); ?></h1>
			<p class="bpa-page-hero__desc"><?php esc_html_e( 'No hidden fees. No setup charges. Switch plans or cancel anytime with our 30-day money-back guarantee.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding: 80px 0;">

		<!-- 3-Tier Pricing Grid -->
		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; align-items: stretch; margin-bottom: 70px;">
			
			<!-- Starter Plan -->
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 40px 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
				<div>
					<h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-top: 0;"><?php esc_html_e( 'Standard Advisory', 'bizpro-agency' ); ?></h3>
					<p style="color: #64748b; font-size: 0.95rem;"><?php esc_html_e( 'Essential advisory & technical support for single startups.', 'bizpro-agency' ); ?></p>
					<div style="font-size: 3.2rem; font-weight: 900; color: #0f172a; margin: 24px 0 10px;">$49 <span style="font-size: 1rem; color: #64748b; font-weight: 500;">/ month</span></div>
					<ul style="list-style: none; padding: 0; margin: 24px 0; line-height: 2.2; color: #334155; font-size: 0.95rem;">
						<li>✅ Dedicated Account Manager</li>
						<li>✅ Up to 10 Monthly Strategy Hours</li>
						<li>✅ Full Document & Visa Audits</li>
						<li>✅ SLA Guaranteed 24-hr Response</li>
						<li style="color: #94a3b8;">❌ 24/7 Emergency Hotlines</li>
					</ul>
				</div>
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'contact' ) ); ?>" class="btn" style="display: block; text-align: center; background: #f1f5f9; color: #0f172a; font-weight: 700; padding: 14px; border-radius: 12px; text-decoration: none; border: 1px solid #cbd5e1;"><?php esc_html_e( 'Choose Standard', 'bizpro-agency' ); ?></a>
			</div>

			<!-- Growth Pro Plan (Featured) -->
			<div style="background: #ffffff; border: 2px solid #2563eb; border-radius: 20px; padding: 40px 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 20px 50px rgba(37,99,235,0.15); position: relative;">
				<span style="position: absolute; top: -14px; left: 50%; transform: translateX(-50%); background: #2563eb; color: #ffffff; font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; padding: 4px 16px; border-radius: 20px;"><?php esc_html_e( 'Most Popular Choice', 'bizpro-agency' ); ?></span>
				<div>
					<h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-top: 0;"><?php esc_html_e( 'Growth Partner', 'bizpro-agency' ); ?></h3>
					<p style="color: #64748b; font-size: 0.95rem;"><?php esc_html_e( 'Comprehensive mandate for expanding international businesses.', 'bizpro-agency' ); ?></p>
					<div style="font-size: 3.2rem; font-weight: 900; color: #2563eb; margin: 24px 0 10px;">$129 <span style="font-size: 1rem; color: #64748b; font-weight: 500;">/ month</span></div>
					<ul style="list-style: none; padding: 0; margin: 24px 0; line-height: 2.2; color: #334155; font-size: 0.95rem;">
						<li>✅ Senior Principal Advisor</li>
						<li>✅ Unlimited Strategy & DevOps Calls</li>
						<li>✅ Priority Visa & Travel Concierge</li>
						<li>✅ 99.9% Uptime Engineering SLA</li>
						<li>✅ Multi-Jurisdiction Legal Review</li>
					</ul>
				</div>
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'contact' ) ); ?>" class="btn btn--primary" style="display: block; text-align: center; background: #2563eb; border-color: #2563eb; color: #ffffff; font-weight: 700; padding: 14px; border-radius: 12px; text-decoration: none; box-shadow: 0 10px 20px rgba(37,99,235,0.3);"><?php esc_html_e( 'Get Started with Growth', 'bizpro-agency' ); ?></a>
			</div>

			<!-- Enterprise Mandate -->
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 40px 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
				<div>
					<h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-top: 0;"><?php esc_html_e( 'Executive Mandate', 'bizpro-agency' ); ?></h3>
					<p style="color: #64748b; font-size: 0.95rem;"><?php esc_html_e( 'Full corporate governance, ESG & boardroom consulting.', 'bizpro-agency' ); ?></p>
					<div style="font-size: 3.2rem; font-weight: 900; color: #0f172a; margin: 24px 0 10px;">$299 <span style="font-size: 1rem; color: #64748b; font-weight: 500;">/ month</span></div>
					<ul style="list-style: none; padding: 0; margin: 24px 0; line-height: 2.2; color: #334155; font-size: 0.95rem;">
						<li>✅ C-Suite Executive Team Mandate</li>
						<li>✅ Cross-Border M&A Support</li>
						<li>✅ Global Regulatory Compliance</li>
						<li>✅ Dedicated VIP Phone & Slack Channel</li>
						<li>✅ On-Site Advisory Visits Included</li>
					</ul>
				</div>
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'contact' ) ); ?>" class="btn" style="display: block; text-align: center; background: #0f172a; color: #ffffff; font-weight: 700; padding: 14px; border-radius: 12px; text-decoration: none;"><?php esc_html_e( 'Contact Executive Desk', 'bizpro-agency' ); ?></a>
			</div>

		</div>

	</div>

</main>

<?php
get_footer();
