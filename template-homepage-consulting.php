<?php
/**
 * Template Name: Homepage - Business Consulting
 *
 * Tailored landing page for Business Consultancy, Strategy Advisors, and Corporate Advisory.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// If the page is being edited or viewed with Elementor:
if ( have_posts() && bizpro_agency_is_elementor() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<main id="primary" class="site-main site-main--builder">
			<?php the_content(); ?>
		</main>
		<?php
		get_footer();
		return;
	}
}

$bpa_phone = bizpro_agency_get( 'topbar_phone' );
$bpa_email = bizpro_agency_get( 'topbar_email' );

$pillars = array(
	array(
		'title' => __( 'Corporate Growth & Market Entry', 'bizpro-agency' ),
		'desc'  => __( 'Data-backed market expansion blueprints, customer segmentation, pricing optimization, and commercial due diligence.', 'bizpro-agency' ),
		'icon'  => 'consulting',
		'tag'   => 'Strategy',
	),
	array(
		'title' => __( 'M&A Due Diligence & Integration', 'bizpro-agency' ),
		'desc'  => __( 'Buy-side and sell-side mandate guidance, post-merger synergy realization, and cross-border commercial structuring.', 'bizpro-agency' ),
		'icon'  => 'finance',
		'tag'   => 'Transactions',
	),
	array(
		'title' => __( 'Operational Transformation & Lean', 'bizpro-agency' ),
		'desc'  => __( 'Process re-engineering, supply chain modernization, SG&A cost rationalization, and automated business workflows.', 'bizpro-agency' ),
		'icon'  => 'marketing',
		'tag'   => 'Operations',
	),
	array(
		'title' => __( 'Capital Restructuring & CFO Advisory', 'bizpro-agency' ),
		'desc'  => __( 'Working capital optimization, liquidity resilience, debt refinancing advisory, and predictive financial modeling.', 'bizpro-agency' ),
		'icon'  => 'security',
		'tag'   => 'Financial Advisory',
	),
	array(
		'title' => __( 'Digital & Business Model Innovation', 'bizpro-agency' ),
		'desc'  => __( 'Modernizing legacy operating frameworks, transitioning to high-margin recurring SaaS revenue models.', 'bizpro-agency' ),
		'icon'  => 'it',
		'tag'   => 'Digitalization',
	),
	array(
		'title' => __( 'Boardroom Governance & C-Suite Coaching', 'bizpro-agency' ),
		'desc'  => __( 'Empowering founders, board directors, and executive leadership teams with high-leverage strategic decision frameworks.', 'bizpro-agency' ),
		'icon'  => 'support',
		'tag'   => 'Leadership',
	),
);

$methodology = array(
	array(
		'step'  => '01',
		'title' => 'Diagnostic & Commercial Audit',
		'time'  => 'Weeks 1 – 2',
		'desc'  => 'Deep-dive analytical review of unit economics, operational bottlenecks, market competition, and executive alignment.',
	),
	array(
		'step'  => '02',
		'title' => 'Strategic Blueprint & Modeling',
		'time'  => 'Weeks 3 – 4',
		'desc'  => 'Formulating quantifiable, high-leverage strategic roadmaps with clear risk matrices and prioritized ROI initiatives.',
	),
	array(
		'step'  => '03',
		'title' => 'Phased Execution & Enablement',
		'time'  => 'Months 2 – 3',
		'desc'  => 'Hands-on operational deployment, change management workshops, workflow automation, and KPI tracking dashboards.',
	),
	array(
		'step'  => '04',
		'title' => 'Validation & Sustainable Scale',
		'time'  => 'Ongoing',
		'desc'  => 'Continuous EBITDA validation, quarterly board reviews, and institutional governance setup for lasting market leadership.',
	),
);

$results = array(
	array(
		'client' => 'Global Manufacturing Group ($450M Rev)',
		'title'  => 'Supply Chain Overhaul & Procurement Restructuring',
		'desc'   => 'Restructured global vendor network across 6 countries and renegotiated key freight contracts, eliminating $38M in recurring SG&A waste within 9 months.',
		'result' => '+$38M EBITDA',
	),
	array(
		'client' => 'European FinTech Enterprise',
		'title'  => 'Cross-Border M&A & Post-Merger Commercial Integration',
		'desc'   => 'Led commercial due diligence and 100-day integration playbook for an $85M cross-border acquisition, retaining 99% of key enterprise accounts.',
		'result' => '$85M Mandate',
	),
	array(
		'client' => 'Regional Healthcare Provider',
		'title'  => 'Comprehensive Operational & Operating Margin Turnaround',
		'desc'   => 'Re-engineered patient scheduling, clinical supply procurement, and automated billing, driving operating margins from -4% to +14% in 12 months.',
		'result' => '+18% Margin Lift',
	),
);
?>

<main id="primary" class="site-main site-main--consulting">

	<!-- Consulting Hero -->
	<section class="hero" style="background: linear-gradient(135deg, #090e17 0%, #1e293b 50%, #0f172a 100%);">
		<div class="container hero__inner">
			<div class="hero__content">
				<div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(251, 191, 36, 0.12); border: 1px solid rgba(251, 191, 36, 0.35); border-radius: 50px; padding: 6px 14px; margin-bottom: 20px;">
					<span style="width: 8px; height: 8px; background: #fbbf24; border-radius: 50%; box-shadow: 0 0 10px #fbbf24;"></span>
					<span style="color: #fbbf24; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;"><?php esc_html_e( 'Premier Strategic Management Consultants', 'bizpro-agency' ); ?></span>
				</div>
				<h1 class="hero__title" style="font-size: clamp(2.4rem, 5vw, 3.8rem); line-height: 1.15;"><?php esc_html_e( 'Transforming Business Ambition into Sustainable Market Leadership', 'bizpro-agency' ); ?></h1>
				<p class="hero__subtitle" style="max-width: 680px; font-size: 1.15rem; color: #94a3b8;"><?php esc_html_e( 'We partner with enterprise executives, private equity boards, and visionary founders to unlock hidden enterprise value, navigate complex cross-border transactions, and scale market share.', 'bizpro-agency' ); ?></p>
				<div class="hero__actions" style="margin-top: 28px;">
					<a class="btn btn--primary btn--lg" href="#consulting-pillars"><?php esc_html_e( 'Our Advisory Practices', 'bizpro-agency' ); ?></a>
					<a class="btn btn--outline btn--lg" href="#contact"><?php esc_html_e( 'Request Executive Briefing', 'bizpro-agency' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<!-- Advisory Pillars Grid -->
	<section id="consulting-pillars" class="section section--pillars">
		<div class="container">
			<header class="section__header">
				<p class="section__eyebrow" style="color: #d97706;"><?php esc_html_e( 'Strategic Focus', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'High-Leverage Advisory Practices', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'Pragmatic solutions tailored to high-stakes commercial environments.', 'bizpro-agency' ); ?></p>
			</header>

			<div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
				<?php foreach ( $pillars as $p ) : ?>
					<article class="service-card" style="position: relative; border-radius: 16px;">
						<span style="position: absolute; top: 16px; right: 16px; font-size: 11px; font-weight: 700; color: #d97706; background: rgba(217,119,6,0.1); padding: 3px 8px; border-radius: 20px; text-transform: uppercase;"><?php echo esc_html( $p['tag'] ); ?></span>
						<div class="service-card__icon" style="background: rgba(217,119,6,0.1); color: #d97706;">
							<?php echo bizpro_agency_get_icon( $p['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
						<h3 class="service-card__title"><?php echo esc_html( $p['title'] ); ?></h3>
						<p class="service-card__text"><?php echo esc_html( $p['desc'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 4-Phase Consulting Methodology -->
	<section id="consulting-process" class="section" style="background: var(--bpa-bg-alt, #0b1120); padding: 80px 0;">
		<div class="container">
			<header class="section__header">
				<p class="section__eyebrow" style="color: #fbbf24;"><?php esc_html_e( 'How We Deliver', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'Our 4-Phase Transformation Framework', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'A disciplined, milestone-driven roadmap engineered for measurable commercial impact.', 'bizpro-agency' ); ?></p>
			</header>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
				<?php foreach ( $methodology as $m ) : ?>
					<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 30px; position: relative; box-shadow: 0 10px 25px rgba(0,0,0,0.04);">
						<div style="font-size: 2.2rem; font-weight: 800; color: rgba(217,119,6,0.25); line-height: 1; margin-bottom: 12px;"><?php echo esc_html( $m['step'] ); ?></div>
						<div style="font-size: 0.78rem; font-weight: 700; color: #d97706; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;"><?php echo esc_html( $m['time'] ); ?></div>
						<h3 style="font-size: 1.15rem; font-weight: 700; color: var(--bpa-text, #0f172a); margin-bottom: 10px;"><?php echo esc_html( $m['title'] ); ?></h3>
						<p style="color: var(--bpa-text-muted, #64748b); font-size: 0.92rem; line-height: 1.55;"><?php echo esc_html( $m['desc'] ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Client Impact / Results -->
	<section id="consulting-results" class="section section--cases">
		<div class="container">
			<header class="section__header">
				<p class="section__eyebrow" style="color: #10b981;"><?php esc_html_e( 'Demonstrated Impact', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'Proven Value Creation for Clients', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'Real engagements that drove institutional profitability and market expansion.', 'bizpro-agency' ); ?></p>
			</header>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
				<?php foreach ( $results as $r ) : ?>
					<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 12px 30px rgba(0,0,0,0.05);">
						<div>
							<span style="font-size: 0.8rem; font-weight: 700; color: var(--bpa-text-muted, #64748b); text-transform: uppercase; margin-bottom: 12px; display: block;"><?php echo esc_html( $r['client'] ); ?></span>
							<h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 12px; color: var(--bpa-text, #0f172a);"><?php echo esc_html( $r['title'] ); ?></h3>
							<p style="color: var(--bpa-text-muted, #64748b); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;"><?php echo esc_html( $r['desc'] ); ?></p>
						</div>
						<div style="border-top: 1px solid var(--bpa-border, #f1f5f9); padding-top: 16px; display: flex; justify-content: space-between; align-items: center;">
							<span style="font-size: 0.85rem; color: var(--bpa-text-muted, #64748b);"><?php esc_html_e( 'Quantified Value:', 'bizpro-agency' ); ?></span>
							<strong style="color: #d97706; font-size: 1.2rem; font-weight: 800;"><?php echo esc_html( $r['result'] ); ?></strong>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Advisory Retainers / Pricing -->
	<section id="consulting-pricing" class="section section--pricing" style="background: var(--bpa-bg-alt, #0b1120); padding: 80px 0;">
		<div class="container">
			<header class="section__header">
				<p class="section__eyebrow"><?php esc_html_e( 'Engagement Options', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'Executive Advisory Mandate Models', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'Bespoke corporate engagements designed for high-conviction decision making.', 'bizpro-agency' ); ?></p>
			</header>

			<div class="pricing-grid">
				<div class="pricing-card reveal">
					<h3 class="pricing-card__name"><?php esc_html_e( 'Strategic Diagnostic Sprint', 'bizpro-agency' ); ?></h3>
					<div class="pricing-card__price">
						<span class="pricing-card__amount">$9,500</span>
						<span class="pricing-card__period"><?php esc_html_e( '/ 2-week sprint', 'bizpro-agency' ); ?></span>
					</div>
					<ul class="pricing-card__features">
						<li><?php esc_html_e( 'Complete Commercial Due Diligence Audit', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Unit Economics & Bottleneck Analysis', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Executive Strategic Recommendation Dossier', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Boardroom Presentation & Q&A Session', 'bizpro-agency' ); ?></li>
					</ul>
					<a class="btn btn--outline" href="#contact"><?php esc_html_e( 'Initiate Sprint', 'bizpro-agency' ); ?></a>
				</div>

				<div class="pricing-card pricing-card--popular reveal">
					<div class="pricing-ribbon" style="background: #d97706;"><?php esc_html_e( 'Most Popular', 'bizpro-agency' ); ?></div>
					<h3 class="pricing-card__name"><?php esc_html_e( 'Retained Advisory Partner', 'bizpro-agency' ); ?></h3>
					<div class="pricing-card__price">
						<span class="pricing-card__amount">$14,000</span>
						<span class="pricing-card__period"><?php esc_html_e( '/ month retainer', 'bizpro-agency' ); ?></span>
					</div>
					<ul class="pricing-card__features">
						<li><?php esc_html_e( 'Direct Senior Partner Access (Ex-McKinsey)', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Bi-Weekly Executive Steering Committee', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'On-Demand Deal / M&A Review Advisory', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Continuous Operational KPI Monitoring', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Dedicated WhatsApp / Private War Room', 'bizpro-agency' ); ?></li>
					</ul>
					<a class="btn btn--primary" style="background: #d97706; border-color: #d97706;" href="#contact"><?php esc_html_e( 'Retain Our Partners', 'bizpro-agency' ); ?></a>
				</div>

				<div class="pricing-card reveal">
					<h3 class="pricing-card__name"><?php esc_html_e( 'Full Mandate Execution', 'bizpro-agency' ); ?></h3>
					<div class="pricing-card__price">
						<span class="pricing-card__amount"><?php esc_html_e( 'Custom', 'bizpro-agency' ); ?></span>
						<span class="pricing-card__period"><?php esc_html_e( '/ milestone basis', 'bizpro-agency' ); ?></span>
					</div>
					<ul class="pricing-card__features">
						<li><?php esc_html_e( 'Embedded Advisory Pod (3-4 Specialists)', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'End-to-End Change Management Leadership', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Guaranteed EBITDA Milestones & Gain-Share', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Multi-Jurisdiction Entity Governance', 'bizpro-agency' ); ?></li>
					</ul>
					<a class="btn btn--outline" href="#contact"><?php esc_html_e( 'Schedule Mandate Discussion', 'bizpro-agency' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<!-- Confidential Executive Contact -->
	<section id="contact" class="cta-banner" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
		<div class="container cta-banner__inner">
			<div class="cta-banner__text">
				<h2 class="cta-banner__title"><?php esc_html_e( 'Accelerate Your Company Performance Today', 'bizpro-agency' ); ?></h2>
				<p class="cta-banner__subtitle"><?php esc_html_e( 'Book a strictly confidential 45-minute executive briefing with our senior management partners.', 'bizpro-agency' ); ?></p>
			</div>
			<div class="cta-banner__actions">
				<?php if ( $bpa_phone ) : ?>
					<a class="btn btn--light btn--lg" href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bpa_phone ) ); ?>"><?php echo esc_html( $bpa_phone ); ?></a>
				<?php endif; ?>
				<?php if ( $bpa_email ) : ?>
					<a class="btn btn--outline btn--lg" href="<?php echo esc_url( 'mailto:' . $bpa_email ); ?>"><?php esc_html_e( 'Email Senior Partners', 'bizpro-agency' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
