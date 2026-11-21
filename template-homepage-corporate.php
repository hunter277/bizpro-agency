<?php
/**
 * Template Name: Homepage - Corporate Agency
 *
 * Tailored landing page for Corporate Enterprises, Law Firms, and Multi-disciplinary Agencies.
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

$capabilities = array(
	array(
		'title' => __( 'Corporate Governance & Compliance', 'bizpro-agency' ),
		'desc'  => __( 'Institutional-grade regulatory oversight, risk mitigation, and corporate governance architectures.', 'bizpro-agency' ),
		'icon'  => 'security',
	),
	array(
		'title' => __( 'Cross-Border Investment', 'bizpro-agency' ),
		'desc'  => __( 'Facilitating international trade alliances, foreign direct investments, and cross-border transactions.', 'bizpro-agency' ),
		'icon'  => 'finance',
	),
	array(
		'title' => __( 'Talent Acquisition & Global Mobility', 'bizpro-agency' ),
		'desc'  => __( 'Executive search, expatriate immigration compliance, and global workforce mobilization.', 'bizpro-agency' ),
		'icon'  => 'visa',
	),
	array(
		'title' => __( 'Enterprise Technology Modernization', 'bizpro-agency' ),
		'desc'  => __( 'Legacy system modernization, secure enterprise cloud migration, and data governance.', 'bizpro-agency' ),
		'icon'  => 'it',
	),
);
?>

<main id="primary" class="site-main site-main--corporate">

	<!-- Corporate Hero -->
	<section class="hero" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
		<div class="container hero__inner">
			<div class="hero__content">
				<p class="section__eyebrow" style="color: #cbd5e1;"><?php esc_html_e( 'Institutional Excellence & Global Mobility', 'bizpro-agency' ); ?></p>
				<h1 class="hero__title"><?php esc_html_e( 'Delivering Strategic Value Across Global Markets', 'bizpro-agency' ); ?></h1>
				<p class="hero__subtitle"><?php esc_html_e( 'A multi-disciplinary corporate agency providing unified solutions in business strategy, enterprise technology, and international mobility.', 'bizpro-agency' ); ?></p>
				<div class="hero__actions">
					<a class="btn btn--primary btn--lg" href="#capabilities"><?php esc_html_e( 'Enterprise Capabilities', 'bizpro-agency' ); ?></a>
					<a class="btn btn--outline btn--lg" href="#contact"><?php esc_html_e( 'Contact Corporate Desk', 'bizpro-agency' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<!-- Capabilities -->
	<section id="capabilities" class="section section--capabilities">
		<div class="container">
			<header class="section__header">
				<p class="section__eyebrow"><?php esc_html_e( 'Enterprise Solutions', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'Integrated Corporate Capabilities', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'Trusted by public and private organizations across four continents.', 'bizpro-agency' ); ?></p>
			</header>

			<div class="services-grid">
				<?php foreach ( $capabilities as $c ) : ?>
					<article class="service-card">
						<div class="service-card__icon">
							<?php echo bizpro_agency_get_icon( $c['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
						<h3 class="service-card__title"><?php echo esc_html( $c['title'] ); ?></h3>
						<p class="service-card__text"><?php echo esc_html( $c['desc'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Corporate CTA -->
	<section id="contact" class="cta-banner">
		<div class="container cta-banner__inner">
			<div class="cta-banner__text">
				<h2 class="cta-banner__title"><?php esc_html_e( 'Partner with an Industry Leader', 'bizpro-agency' ); ?></h2>
				<p class="cta-banner__subtitle"><?php esc_html_e( 'Connect with our corporate client engagement team for customized proposals.', 'bizpro-agency' ); ?></p>
			</div>
			<div class="cta-banner__actions">
				<?php if ( $bpa_phone ) : ?>
					<a class="btn btn--light btn--lg" href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bpa_phone ) ); ?>"><?php echo esc_html( $bpa_phone ); ?></a>
				<?php endif; ?>
				<?php if ( $bpa_email ) : ?>
					<a class="btn btn--outline btn--lg" href="<?php echo esc_url( 'mailto:' . $bpa_email ); ?>"><?php esc_html_e( 'Email Us', 'bizpro-agency' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
