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

	<header class="page-header bpa-page-hero">
		<div class="container">
			<span class="bpa-page-hero__eyebrow"><?php esc_html_e( 'Help & Knowledge Base', 'bizpro-agency' ); ?></span>
			<h1 class="page-title bpa-page-hero__title"><?php esc_html_e( 'Frequently Asked Questions', 'bizpro-agency' ); ?></h1>
			<p class="bpa-page-hero__desc"><?php esc_html_e( 'Find fast answers to common questions about our consultancy, visa pathways, IT development, and billing policies.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container bpa-faq-wrapper">
		
		<div class="bpa-faq-list">
			
			<div class="faq-item is-open bpa-faq-card">
				<button class="faq-question bpa-faq-btn" type="button" aria-expanded="false">
					<span><?php esc_html_e( 'How fast do your client advisory consultations begin?', 'bizpro-agency' ); ?></span>
					<span class="bpa-faq-icon">+</span>
				</button>
				<div class="faq-answer bpa-faq-body" hidden>
					<?php esc_html_e( 'Once you submit an inquiry through our contact form, an assigned senior partner reviews your requirements and responds within 24 business hours to schedule your preliminary diagnostic briefing.', 'bizpro-agency' ); ?>
				</div>
			</div>

			<div class="faq-item bpa-faq-card">
				<button class="faq-question bpa-faq-btn" type="button" aria-expanded="false">
					<span><?php esc_html_e( 'What is your visa approval track record?', 'bizpro-agency' ); ?></span>
					<span class="bpa-faq-icon">+</span>
				</button>
				<div class="faq-answer bpa-faq-body" hidden>
					<?php esc_html_e( 'Our documentation advisors review and structure applications thoroughly according to official embassy guidelines, ensuring comprehensive compliance for Canada, UK, Australia, and European programs.', 'bizpro-agency' ); ?>
				</div>
			</div>

			<div class="faq-item bpa-faq-card">
				<button class="faq-question bpa-faq-btn" type="button" aria-expanded="false">
					<span><?php esc_html_e( 'Can you build custom cloud software and mobile apps?', 'bizpro-agency' ); ?></span>
					<span class="bpa-faq-icon">+</span>
				</button>
				<div class="faq-answer bpa-faq-body" hidden>
					<?php esc_html_e( 'Yes. Our engineering division specializes in modern tech stacks including React, Next.js, Python, AWS cloud architecture, and microservice infrastructure with enterprise SLA support.', 'bizpro-agency' ); ?>
				</div>
			</div>

			<div class="faq-item bpa-faq-card">
				<button class="faq-question bpa-faq-btn" type="button" aria-expanded="false">
					<span><?php esc_html_e( 'What payment methods and currencies do you accept?', 'bizpro-agency' ); ?></span>
					<span class="bpa-faq-icon">+</span>
				</button>
				<div class="faq-answer bpa-faq-body" hidden>
					<?php esc_html_e( 'We support international bank wire transfers, major credit cards (Visa, MasterCard, Amex) via Stripe, PayPal, and Apple Pay across USD, EUR, GBP, and CAD currencies.', 'bizpro-agency' ); ?>
				</div>
			</div>

		</div>

		<div class="bpa-faq-cta-box">
			<h3 style="margin: 0 0 8px; color: #1e3a8a; font-size: 1.3rem;"><?php esc_html_e( 'Still have questions? We are here to help.', 'bizpro-agency' ); ?></h3>
			<p style="color: #3b82f6; margin-bottom: 20px;"><?php esc_html_e( 'Speak directly with our advisory coordinators today.', 'bizpro-agency' ); ?></p>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'contact' ) ); ?>" class="btn btn--primary" style="background: #2563eb; color: #fff; padding: 12px 24px; border-radius: 10px; font-weight: 700; text-decoration: none;"><?php esc_html_e( 'Contact Advisory Desk', 'bizpro-agency' ); ?></a>
		</div>

	</div>

</main>

<?php
get_footer();
