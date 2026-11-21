<?php
/**
 * Template Name: FAQ Knowledge Base
 *
 * Interactive FAQ Accordion categorized by services, billing, and timelines.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--faq">

	<header class="page-header" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 80px 0 70px; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Help & Knowledge Base', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2.2rem, 5vw, 3.6rem); color: #ffffff; margin-bottom: 16px;"><?php esc_html_e( 'Frequently Asked Questions', 'bizpro-agency' ); ?></h1>
			<p style="max-width: 650px; margin: 0 auto; color: #94a3b8; font-size: 1.15rem; line-height: 1.6;"><?php esc_html_e( 'Find fast answers to common questions about our consultancy, visa pathways, IT development, and billing policies.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding: 80px 0; max-width: 900px; margin: 0 auto;">
		
		<div class="bpa-faq-list" style="display: flex; flex-direction: column; gap: 16px;">
			
			<div class="faq-item" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 14px; padding: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
				<button class="faq-question" type="button" aria-expanded="false" style="width: 100%; text-align: left; background: none; border: none; font-size: 1.2rem; font-weight: 700; color: var(--bpa-text, #0f172a); display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
					<span><?php esc_html_e( 'How fast do your client advisory consultations begin?', 'bizpro-agency' ); ?></span>
					<span style="font-size: 20px; color: #2563eb;">+</span>
				</button>
				<div class="faq-answer" hidden style="margin-top: 14px; color: var(--bpa-text-muted, #64748b); line-height: 1.7; font-size: 1rem;">
					<?php esc_html_e( 'Once you submit an inquiry through our contact form, an assigned senior partner reviews your requirements and responds within 24 business hours to schedule your preliminary diagnostic briefing.', 'bizpro-agency' ); ?>
				</div>
			</div>

			<div class="faq-item" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 14px; padding: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
				<button class="faq-question" type="button" aria-expanded="false" style="width: 100%; text-align: left; background: none; border: none; font-size: 1.2rem; font-weight: 700; color: var(--bpa-text, #0f172a); display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
					<span><?php esc_html_e( 'What is your visa approval track record?', 'bizpro-agency' ); ?></span>
					<span style="font-size: 20px; color: #2563eb;">+</span>
				</button>
				<div class="faq-answer" hidden style="margin-top: 14px; color: var(--bpa-text-muted, #64748b); line-height: 1.7; font-size: 1rem;">
					<?php esc_html_e( 'Over the past 8 years, our licensed legal immigration team has maintained an audited 98.4% success rate across Canada Express Entry, UK Skilled Worker, Australia PR, and European Schengen applications.', 'bizpro-agency' ); ?>
				</div>
			</div>

			<div class="faq-item" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 14px; padding: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
				<button class="faq-question" type="button" aria-expanded="false" style="width: 100%; text-align: left; background: none; border: none; font-size: 1.2rem; font-weight: 700; color: var(--bpa-text, #0f172a); display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
					<span><?php esc_html_e( 'Can you build custom cloud software and mobile apps?', 'bizpro-agency' ); ?></span>
					<span style="font-size: 20px; color: #2563eb;">+</span>
				</button>
				<div class="faq-answer" hidden style="margin-top: 14px; color: var(--bpa-text-muted, #64748b); line-height: 1.7; font-size: 1rem;">
					<?php esc_html_e( 'Yes. Our engineering division specializes in modern tech stacks including React, Next.js, Python, AWS cloud architecture, and microservice infrastructure with enterprise SLA support.', 'bizpro-agency' ); ?>
				</div>
			</div>

			<div class="faq-item" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 14px; padding: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
				<button class="faq-question" type="button" aria-expanded="false" style="width: 100%; text-align: left; background: none; border: none; font-size: 1.2rem; font-weight: 700; color: var(--bpa-text, #0f172a); display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
					<span><?php esc_html_e( 'What payment methods and currencies do you accept?', 'bizpro-agency' ); ?></span>
					<span style="font-size: 20px; color: #2563eb;">+</span>
				</button>
				<div class="faq-answer" hidden style="margin-top: 14px; color: var(--bpa-text-muted, #64748b); line-height: 1.7; font-size: 1rem;">
					<?php esc_html_e( 'We support international bank wire transfers, major credit cards (Visa, MasterCard, Amex) via Stripe, PayPal, and Apple Pay across USD, EUR, GBP, and CAD currencies.', 'bizpro-agency' ); ?>
				</div>
			</div>

		</div>

		<div style="margin-top: 50px; background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 16px; padding: 32px; text-align: center;">
			<h3 style="margin: 0 0 8px; color: #1e3a8a; font-size: 1.3rem;"><?php esc_html_e( 'Still have questions? We are here to help.', 'bizpro-agency' ); ?></h3>
			<p style="color: #3b82f6; margin-bottom: 20px;"><?php esc_html_e( 'Speak directly with our advisory coordinators today.', 'bizpro-agency' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary" style="background: #2563eb; color: #fff; padding: 12px 24px; border-radius: 10px; font-weight: 700; text-decoration: none;"><?php esc_html_e( 'Contact Advisory Desk', 'bizpro-agency' ); ?></a>
		</div>

	</div>

</main>

<?php
get_footer();
