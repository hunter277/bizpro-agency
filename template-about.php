<?php
/**
 * Template Name: About Us
 *
 * Dedicated about us page showcasing company vision, history, team and values.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bpa_phone = bizpro_agency_get( 'topbar_phone', '+1 (555) 123-4567' );

$team = array(
	array(
		'name'  => 'Alexander Wright',
		'role'  => 'Managing Partner & Founder',
		'bio'   => 'Former BCG strategy director with 18+ years leading cross-border corporate transformations and M&A transactions.',
		'badge' => 'Strategy & M&A',
	),
	array(
		'name'  => 'Elena Rostova, Esq.',
		'role'  => 'Head of Legal & Global Mobility',
		'bio'   => 'Licensed international immigration attorney having processed 8,000+ approved skilled worker and investor residency petitions.',
		'badge' => 'Immigration Law',
	),
	array(
		'name'  => 'Marcus Vance',
		'role'  => 'Chief Technology Officer',
		'bio'   => 'Former AWS Principal Solutions Architect specializing in Kubernetes infrastructure, high-throughput microservices, and AI.',
		'badge' => 'Cloud & DevOps',
	),
	array(
		'name'  => 'Sophia Chen',
		'role'  => 'Director of Global Operations',
		'bio'   => 'Oversees international tour logistics and corporate expatriate operations across 28 destination markets.',
		'badge' => 'Global Logistics',
	),
);
?>

<main id="primary" class="site-main site-main--about">

	<!-- About Hero -->
	<header class="page-header" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 75px 0 65px; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Institutional Excellence & Integrity', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2.2rem, 5vw, 3.4rem); color: #ffffff; margin-bottom: 16px;"><?php esc_html_e( 'Empowering Global Success Through Integrated Advisory', 'bizpro-agency' ); ?></h1>
			<p style="max-width: 680px; margin: 0 auto; color: #94a3b8; font-size: 1.1rem; line-height: 1.6;"><?php esc_html_e( 'For over a decade, BizPro Agency has served as a single trusted bridge connecting enterprises and individuals to world-class business consulting, legal immigration, and advanced technology solutions.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding: 70px 0;">

		<!-- Core Story & Stats -->
		<div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 50px; align-items: center; margin-bottom: 80px;">
			<div>
				<span style="color: #2563eb; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;"><?php esc_html_e( 'Our Origin & Vision', 'bizpro-agency' ); ?></span>
				<h2 style="font-size: 2.1rem; font-weight: 800; color: var(--bpa-text, #0f172a); margin: 12px 0 20px; line-height: 1.25;"><?php esc_html_e( 'Founded on Transparency, Driven by Measurable Client Impact', 'bizpro-agency' ); ?></h2>
				<p style="color: var(--bpa-text-muted, #64748b); font-size: 1.05rem; line-height: 1.7; margin-bottom: 18px;"><?php esc_html_e( 'We recognized early on that ambitious businesses and professionals waste critical time and resources juggling fragmented agencies. Our multidisciplinary firm bridges the gap: combining elite strategic consulting, licensed global immigration counsel, and scalable enterprise cloud engineering under one unified roof.', 'bizpro-agency' ); ?></p>
				<p style="color: var(--bpa-text-muted, #64748b); font-size: 1.05rem; line-height: 1.7; margin-bottom: 24px;"><?php esc_html_e( 'Every mandate we take on is backed by bilateral non-disclosure agreements, clear milestone deliverables, and seasoned senior partner involvement from inception to completion.', 'bizpro-agency' ); ?></p>
				
				<div style="display: flex; gap: 16px; flex-wrap: wrap;">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Schedule Executive Consultation', 'bizpro-agency' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn--outline"><?php esc_html_e( 'Explore Services', 'bizpro-agency' ); ?></a>
				</div>
			</div>

			<div style="background: var(--bpa-bg-alt, #f8fafc); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 24px; padding: 40px; box-shadow: 0 14px 35px rgba(0,0,0,0.05);">
				<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
					<div>
						<strong style="font-size: 2.6rem; font-weight: 850; color: #2563eb; display: block; line-height: 1;">12+</strong>
						<span style="font-size: 0.9rem; color: var(--bpa-text-muted, #64748b); font-weight: 600;"><?php esc_html_e( 'Years Established', 'bizpro-agency' ); ?></span>
					</div>
					<div>
						<strong style="font-size: 2.6rem; font-weight: 850; color: #10b981; display: block; line-height: 1;">15k+</strong>
						<span style="font-size: 0.9rem; color: var(--bpa-text-muted, #64748b); font-weight: 600;"><?php esc_html_e( 'Cases Delivered', 'bizpro-agency' ); ?></span>
					</div>
					<div>
						<strong style="font-size: 2.6rem; font-weight: 850; color: #d97706; display: block; line-height: 1;">42</strong>
						<span style="font-size: 0.9rem; color: var(--bpa-text-muted, #64748b); font-weight: 600;"><?php esc_html_e( 'Operating Countries', 'bizpro-agency' ); ?></span>
					</div>
					<div>
						<strong style="font-size: 2.6rem; font-weight: 850; color: #6366f1; display: block; line-height: 1;">98.4%</strong>
						<span style="font-size: 0.9rem; color: var(--bpa-text-muted, #64748b); font-weight: 600;"><?php esc_html_e( 'Client Satisfaction', 'bizpro-agency' ); ?></span>
					</div>
				</div>
			</div>
		</div>

		<!-- Leadership Team -->
		<div style="margin-bottom: 70px;">
			<header class="section__header" style="text-align: center; margin-bottom: 50px;">
				<p class="section__eyebrow" style="color: #2563eb;"><?php esc_html_e( 'Executive Leadership', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'Meet Our Senior Practice Directors', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'Veteran executives bringing decades of collective domain expertise.', 'bizpro-agency' ); ?></p>
			</header>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 28px;">
				<?php foreach ( $team as $tm ) : ?>
					<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 28px; box-shadow: 0 10px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
						<div>
							<div style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #2563eb 0%, #06b6d4 100%); color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; font-weight: 800; margin-bottom: 18px;">
								<?php echo esc_html( substr( $tm['name'], 0, 1 ) ); ?>
							</div>
							<span style="font-size: 0.75rem; font-weight: 700; color: #2563eb; text-transform: uppercase; background: rgba(37,99,235,0.08); padding: 3px 8px; border-radius: 20px; display: inline-block; margin-bottom: 8px;"><?php echo esc_html( $tm['badge'] ); ?></span>
							<h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 4px; color: var(--bpa-text, #0f172a);"><?php echo esc_html( $tm['name'] ); ?></h3>
							<p style="font-size: 0.85rem; font-weight: 600; color: var(--bpa-text-muted, #64748b); margin-bottom: 12px;"><?php echo esc_html( $tm['role'] ); ?></p>
							<p style="font-size: 0.92rem; color: var(--bpa-text-muted, #64748b); line-height: 1.6; margin: 0;"><?php echo esc_html( $tm['bio'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

	</div>

</main>

<?php
get_footer();
