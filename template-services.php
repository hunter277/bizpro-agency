<?php
/**
 * Template Name: Services
 *
 * Dedicated services overview page detailing all company core capabilities.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bizpro_services = array(
	array(
		'title' => 'Visa & Global Immigration Consultancy',
		'tag'   => 'Immigration Law',
		'desc'  => 'Comprehensive end-to-end legal representation for permanent residency, skilled worker visas, provincial nominations, and university admissions across Canada, UK, Australia, and USA.',
		'icon'  => 'visa',
		'link'  => bizpro_agency_page_url( 'home', 'visa' ),
	),
	array(
		'title' => 'Enterprise Cloud & Custom Software',
		'tag'   => 'Technology & SRE',
		'desc'  => 'High-throughput microservices, multi-region Kubernetes deployments, automated CI/CD pipelines, and zero-trust cybersecurity architectures built for scale.',
		'icon'  => 'it',
		'link'  => bizpro_agency_page_url( 'home', 'it' ),
	),
	array(
		'title' => 'Strategic Management & M&A Advisory',
		'tag'   => 'Business Advisory',
		'desc'  => 'Pragmatic market penetration blueprints, commercial due diligence, supply chain cost optimization, and capital restructuring for high-growth enterprises.',
		'icon'  => 'consulting',
		'link'  => bizpro_agency_page_url( 'home', 'consulting' ),
	),
	array(
		'title' => 'Global Travel Planning & Group Tours',
		'tag'   => 'Travel & Hospitality',
		'desc'  => 'Bespoke international holiday itineraries, curated luxury destination packages, corporate retreat logistics, and verified flight reservations worldwide.',
		'icon'  => 'travel',
		'link'  => bizpro_agency_page_url( 'home', 'travel' ),
	),
	array(
		'title' => 'Institutional Corporate Governance',
		'tag'   => 'Enterprise Solutions',
		'desc'  => 'Cross-border regulatory compliance, global executive mobility programs, board succession frameworks, and multi-jurisdiction entity setup.',
		'icon'  => 'security',
		'link'  => bizpro_agency_page_url( 'home', 'corporate' ),
	),
	array(
		'title' => 'Financial Modeling & Valuation',
		'tag'   => 'Financial Services',
		'desc'  => 'Quantitative business valuation, working capital optimization, debt advisory, and scenario stress-testing for institutional investors.',
		'icon'  => 'finance',
		'link'  => bizpro_agency_page_url( 'home', 'consulting' ),
	),
);
?>

<main id="primary" class="site-main site-main--services">

	<!-- Services Hero -->
	<header class="page-header" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 75px 0 65px; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Core Capabilities & Practices', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2.2rem, 5vw, 3.4rem); color: #ffffff; margin-bottom: 16px;"><?php esc_html_e( 'Comprehensive Commercial Capabilities', 'bizpro-agency' ); ?></h1>
			<p style="max-width: 680px; margin: 0 auto; color: #94a3b8; font-size: 1.1rem; line-height: 1.6;"><?php esc_html_e( 'High-impact solutions tailored to high-conviction decision makers, delivered with speed, transparency, and guaranteed senior partner accountability.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding: 70px 0;">

		<!-- Services Grid -->
		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-bottom: 70px;">
			<?php foreach ( $bizpro_services as $bizpro_s ) : ?>
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
					<div>
						<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
							<div style="width: 50px; height: 50px; border-radius: 12px; background: rgba(37,99,235,0.1); color: #2563eb; display: inline-flex; align-items: center; justify-content: center;">
								<?php echo bizpro_agency_get_icon( $bizpro_s['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<span style="font-size: 0.75rem; font-weight: 700; color: #2563eb; background: rgba(37,99,235,0.08); padding: 4px 10px; border-radius: 20px; text-transform: uppercase;"><?php echo esc_html( $bizpro_s['tag'] ); ?></span>
						</div>
						<h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px; color: var(--bpa-text, #0f172a);"><?php echo esc_html( $bizpro_s['title'] ); ?></h3>
						<p style="color: var(--bpa-text-muted, #64748b); font-size: 0.95rem; line-height: 1.6; margin-bottom: 24px;"><?php echo esc_html( $bizpro_s['desc'] ); ?></p>
					</div>
					<div>
						<a href="<?php echo esc_url( $bizpro_s['link'] ); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
							<span>Explore Dedicated Demo</span>
							<span aria-hidden="true">&rarr;</span>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Action Callout -->
		<div style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); color: #ffffff; border-radius: 24px; padding: 50px 40px; text-align: center; box-shadow: 0 20px 45px rgba(0,0,0,0.14);">
			<h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 14px;"><?php esc_html_e( 'Need a Custom Multi-Disciplinary Scope?', 'bizpro-agency' ); ?></h2>
			<p style="max-width: 620px; margin: 0 auto 28px; color: #cbd5e1; font-size: 1.05rem; line-height: 1.6;"><?php esc_html_e( 'Our senior partners can assemble an integrated advisory pod spanning business strategy, legal visas, and enterprise engineering.', 'bizpro-agency' ); ?></p>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'contact' ) ); ?>" class="btn btn--light btn--lg"><?php esc_html_e( 'Schedule Executive Discovery Call', 'bizpro-agency' ); ?></a>
		</div>

	</div>

</main>

<?php
get_footer();
