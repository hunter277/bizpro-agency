<?php
/**
 * Template Name: Homepage - Agency Default
 *
 * Full Customizer-driven BizPro Agency landing page for any page.
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

// Hero
$bizpro_hero_title    = bizpro_agency_get( 'hero_title' );
$bizpro_hero_subtitle = bizpro_agency_get( 'hero_subtitle' );
$bizpro_hero_cta_text = bizpro_agency_get( 'hero_cta_text' );
$bizpro_hero_cta_link = bizpro_agency_get( 'hero_cta_link' );
$bizpro_hero_image    = bizpro_agency_get( 'hero_image' );

// Contact info
$bizpro_phone = bizpro_agency_get( 'topbar_phone' );
$bizpro_email = bizpro_agency_get( 'topbar_email' );

// Services
$bizpro_services_enable   = bizpro_agency_get( 'services_enable' );
$bizpro_services_eyebrow  = bizpro_agency_get( 'services_eyebrow' );
$bizpro_services_title    = bizpro_agency_get( 'services_title' );
$bizpro_services_subtitle = bizpro_agency_get( 'services_subtitle' );

// About
$bizpro_about_enable       = bizpro_agency_get( 'about_enable' );
$bizpro_about_eyebrow      = bizpro_agency_get( 'about_eyebrow' );
$bizpro_about_title        = bizpro_agency_get( 'about_title' );
$bizpro_about_description  = bizpro_agency_get( 'about_description' );
$bizpro_about_badge_number = bizpro_agency_get( 'about_badge_number' );
$bizpro_about_badge_label  = bizpro_agency_get( 'about_badge_label' );

// Stats
$bizpro_stats_enable = bizpro_agency_get( 'stats_enable' );

// Testimonials
$bizpro_testimonials_enable  = bizpro_agency_get( 'testimonials_enable' );
$bizpro_testimonials_eyebrow = bizpro_agency_get( 'testimonials_eyebrow' );
$bizpro_testimonials_title   = bizpro_agency_get( 'testimonials_title' );

// Team
$bizpro_team_enable  = bizpro_agency_get( 'team_enable' );
$bizpro_team_eyebrow = bizpro_agency_get( 'team_eyebrow' );
$bizpro_team_title   = bizpro_agency_get( 'team_title' );

// CTA Banner
$bizpro_cta_enable   = bizpro_agency_get( 'cta_enable' );
$bizpro_cta_title    = bizpro_agency_get( 'cta_title' );
$bizpro_cta_subtitle = bizpro_agency_get( 'cta_subtitle' );

// Client Logos
$bizpro_logos_enable = bizpro_agency_get( 'client_logos_enable' );
$bizpro_logos_title  = bizpro_agency_get( 'client_logos_title' );

// Case Studies
$bizpro_cases_enable  = bizpro_agency_get( 'cases_enable' );
$bizpro_cases_eyebrow = bizpro_agency_get( 'cases_eyebrow' );
$bizpro_cases_title   = bizpro_agency_get( 'cases_title' );

// Pricing
$bizpro_pricing_enable   = bizpro_agency_get( 'pricing_enable' );
$bizpro_pricing_eyebrow  = bizpro_agency_get( 'pricing_eyebrow' );
$bizpro_pricing_title    = bizpro_agency_get( 'pricing_title' );
$bizpro_pricing_subtitle = bizpro_agency_get( 'pricing_subtitle' );

// FAQ
$bizpro_faq_enable  = bizpro_agency_get( 'faq_enable' );
$bizpro_faq_eyebrow = bizpro_agency_get( 'faq_eyebrow' );
$bizpro_faq_title   = bizpro_agency_get( 'faq_title' );
?>

<main id="primary" class="site-main site-main--front">

	<!-- Hero -->
	<section id="home" class="hero<?php echo $bizpro_hero_image ? ' hero--has-image' : ''; ?>">
		<?php if ( $bizpro_hero_image ) : ?>
			<img class="hero__bg" src="<?php echo esc_url( $bizpro_hero_image ); ?>" alt="" fetchpriority="high" decoding="async">
		<?php endif; ?>
		<div class="hero__overlay" aria-hidden="true"></div>
		<div class="container hero__inner">
			<div class="hero__content">
				<?php if ( $bizpro_hero_title ) : ?>
					<h1 class="hero__title"><?php echo esc_html( $bizpro_hero_title ); ?></h1>
				<?php endif; ?>
				<?php if ( $bizpro_hero_subtitle ) : ?>
					<p class="hero__subtitle"><?php echo esc_html( $bizpro_hero_subtitle ); ?></p>
				<?php endif; ?>
				<?php if ( $bizpro_hero_cta_text ) : ?>
					<div class="hero__actions">
						<a class="btn btn--primary btn--lg" href="<?php echo esc_url( $bizpro_hero_cta_link ); ?>"><?php echo esc_html( $bizpro_hero_cta_text ); ?></a>
						<a class="btn btn--outline btn--lg" href="#services"><?php esc_html_e( 'Our Services', 'bizpro-agency' ); ?></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- Client Trust Logos -->
	<?php if ( $bizpro_logos_enable ) : ?>
		<div class="client-logos">
			<div class="container">
				<?php if ( $bizpro_logos_title ) : ?>
					<p class="client-logos__title"><?php echo esc_html( $bizpro_logos_title ); ?></p>
				<?php endif; ?>
				<div class="client-logos__grid">
					<?php for ( $bizpro_l = 1; $bizpro_l <= 6; $bizpro_l++ ) : ?>
						<?php $bizpro_logo_name = bizpro_agency_get( "client_logo_{$bizpro_l}" ); ?>
						<?php if ( $bizpro_logo_name ) : ?>
							<span class="client-logo-item"><?php echo esc_html( $bizpro_logo_name ); ?></span>
						<?php endif; ?>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- Services -->
	<?php if ( $bizpro_services_enable ) : ?>
		<section id="services" class="section section--services">
			<div class="container">
				<?php if ( $bizpro_services_eyebrow || $bizpro_services_title || $bizpro_services_subtitle ) : ?>
					<header class="section__header">
						<?php if ( $bizpro_services_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bizpro_services_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bizpro_services_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bizpro_services_title ); ?></h2>
						<?php endif; ?>
						<?php if ( $bizpro_services_subtitle ) : ?>
							<p class="section__subtitle"><?php echo esc_html( $bizpro_services_subtitle ); ?></p>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="services-grid">
					<?php
					for ( $bizpro_i = 1; $bizpro_i <= 4; $bizpro_i++ ) :
						$bizpro_title = bizpro_agency_get( "service_{$bizpro_i}_title" );
						$bizpro_text  = bizpro_agency_get( "service_{$bizpro_i}_text" );
						$bizpro_icon  = bizpro_agency_get( "service_{$bizpro_i}_icon" );

						if ( ! $bizpro_title && ! $bizpro_text ) {
							continue;
						}
						?>
						<article class="service-card">
							<div class="service-card__icon">
								<?php echo bizpro_agency_get_icon( $bizpro_icon ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<?php if ( $bizpro_title ) : ?>
								<h3 class="service-card__title"><?php echo esc_html( $bizpro_title ); ?></h3>
							<?php endif; ?>
							<?php if ( $bizpro_text ) : ?>
								<p class="service-card__text"><?php echo esc_html( $bizpro_text ); ?></p>
							<?php endif; ?>
						</article>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- About + Stats -->
	<?php if ( $bizpro_about_enable || $bizpro_stats_enable ) : ?>
		<section id="about" class="section section--about">
			<?php if ( $bizpro_about_enable ) : ?>
				<div class="container about__grid">
					<div class="about__media" aria-hidden="true">
						<?php if ( $bizpro_about_badge_number || $bizpro_about_badge_label ) : ?>
							<div class="about__badge">
								<?php if ( $bizpro_about_badge_number ) : ?>
									<strong><?php echo esc_html( $bizpro_about_badge_number ); ?></strong>
								<?php endif; ?>
								<?php if ( $bizpro_about_badge_label ) : ?>
									<span><?php echo esc_html( $bizpro_about_badge_label ); ?></span>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="about__content">
						<?php if ( $bizpro_about_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bizpro_about_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bizpro_about_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bizpro_about_title ); ?></h2>
						<?php endif; ?>
						<?php if ( $bizpro_about_description ) : ?>
							<p><?php echo esc_html( $bizpro_about_description ); ?></p>
						<?php endif; ?>

						<?php
						$bizpro_points = array();
						for ( $bizpro_p = 1; $bizpro_p <= 3; $bizpro_p++ ) {
							$bizpro_val = bizpro_agency_get( "about_point_{$bizpro_p}" );
							if ( $bizpro_val ) {
								$bizpro_points[] = $bizpro_val;
							}
						}
						if ( ! empty( $bizpro_points ) ) :
							?>
							<ul class="about__list">
								<?php foreach ( $bizpro_points as $bizpro_pt ) : ?>
									<li><?php echo esc_html( $bizpro_pt ); ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( $bizpro_stats_enable ) : ?>
				<div class="container">
					<div class="stats">
						<?php
						for ( $bizpro_s = 1; $bizpro_s <= 4; $bizpro_s++ ) :
							$bizpro_num    = bizpro_agency_get( "stat_{$bizpro_s}_number" );
							$bizpro_suffix = bizpro_agency_get( "stat_{$bizpro_s}_suffix" );
							$bizpro_label  = bizpro_agency_get( "stat_{$bizpro_s}_label" );

							if ( '' === (string) $bizpro_num && ! $bizpro_label ) {
								continue;
							}
							?>
							<div class="stat">
								<span class="stat__number" data-count="<?php echo esc_attr( $bizpro_num ); ?>" data-suffix="<?php echo esc_attr( $bizpro_suffix ); ?>">
									<?php echo esc_html( $bizpro_num . $bizpro_suffix ); ?>
								</span>
								<?php if ( $bizpro_label ) : ?>
									<span class="stat__label"><?php echo esc_html( $bizpro_label ); ?></span>
								<?php endif; ?>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			<?php endif; ?>
		</section>
	<?php endif; ?>

	<!-- Testimonials -->
	<?php if ( $bizpro_testimonials_enable ) : ?>
		<section id="testimonials" class="section section--testimonials">
			<div class="container">
				<?php if ( $bizpro_testimonials_eyebrow || $bizpro_testimonials_title ) : ?>
					<header class="section__header">
						<?php if ( $bizpro_testimonials_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bizpro_testimonials_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bizpro_testimonials_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bizpro_testimonials_title ); ?></h2>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="testimonials-grid">
					<?php
					for ( $bizpro_t = 1; $bizpro_t <= 3; $bizpro_t++ ) :
						$bizpro_quote = bizpro_agency_get( "testimonial_{$bizpro_t}_quote" );
						$bizpro_name  = bizpro_agency_get( "testimonial_{$bizpro_t}_name" );
						$bizpro_role  = bizpro_agency_get( "testimonial_{$bizpro_t}_role" );

						if ( ! $bizpro_quote && ! $bizpro_name ) {
							continue;
						}
						?>
						<figure class="testimonial">
							<?php if ( $bizpro_quote ) : ?>
								<blockquote class="testimonial__quote">
									<p><?php echo esc_html( $bizpro_quote ); ?></p>
								</blockquote>
							<?php endif; ?>
							<figcaption class="testimonial__author">
								<span class="testimonial__avatar" aria-hidden="true"><?php echo esc_html( mb_substr( $bizpro_name ? $bizpro_name : 'A', 0, 1 ) ); ?></span>
								<span class="testimonial__meta">
									<?php if ( $bizpro_name ) : ?>
										<span class="testimonial__name"><?php echo esc_html( $bizpro_name ); ?></span>
									<?php endif; ?>
									<?php if ( $bizpro_role ) : ?>
										<span class="testimonial__role"><?php echo esc_html( $bizpro_role ); ?></span>
									<?php endif; ?>
								</span>
							</figcaption>
						</figure>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Case Studies -->
	<?php if ( $bizpro_cases_enable ) : ?>
		<section id="cases" class="section section--cases">
			<div class="container">
				<?php if ( $bizpro_cases_eyebrow || $bizpro_cases_title ) : ?>
					<header class="section__header">
						<?php if ( $bizpro_cases_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bizpro_cases_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bizpro_cases_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bizpro_cases_title ); ?></h2>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="cases-grid">
					<?php for ( $bizpro_c = 1; $bizpro_c <= 3; $bizpro_c++ ) : ?>
						<?php
						$bizpro_tag    = bizpro_agency_get( "case_{$bizpro_c}_tag" );
						$bizpro_title  = bizpro_agency_get( "case_{$bizpro_c}_title" );
						$bizpro_desc   = bizpro_agency_get( "case_{$bizpro_c}_desc" );
						$bizpro_result = bizpro_agency_get( "case_{$bizpro_c}_result" );
						if ( ! $bizpro_title ) {
							continue; }
						?>
						<article class="case-card reveal">
							<?php if ( $bizpro_tag ) : ?>
								<span class="case-card__tag"><?php echo esc_html( $bizpro_tag ); ?></span>
							<?php endif; ?>
							<h3 class="case-card__title"><?php echo esc_html( $bizpro_title ); ?></h3>
							<?php if ( $bizpro_desc ) : ?>
								<p class="case-card__desc"><?php echo esc_html( $bizpro_desc ); ?></p>
							<?php endif; ?>
							<?php if ( $bizpro_result ) : ?>
								<p class="case-card__result"><strong><?php echo esc_html( $bizpro_result ); ?></strong></p>
							<?php endif; ?>
						</article>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Team -->
	<?php if ( $bizpro_team_enable ) : ?>
		<section id="team" class="section section--team">
			<div class="container">
				<?php if ( $bizpro_team_eyebrow || $bizpro_team_title ) : ?>
					<header class="section__header">
						<?php if ( $bizpro_team_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bizpro_team_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bizpro_team_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bizpro_team_title ); ?></h2>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="team-grid">
					<?php
					for ( $bizpro_m = 1; $bizpro_m <= 4; $bizpro_m++ ) :
						$bizpro_name = bizpro_agency_get( "team_{$bizpro_m}_name" );
						$bizpro_role = bizpro_agency_get( "team_{$bizpro_m}_role" );
						if ( ! $bizpro_name ) {
							continue;
						}
						?>
						<article class="team-card">
							<div class="team-card__avatar" aria-hidden="true">
								<?php echo esc_html( mb_substr( $bizpro_name, 0, 1 ) ); ?>
							</div>
							<h3 class="team-card__name"><?php echo esc_html( $bizpro_name ); ?></h3>
							<?php if ( $bizpro_role ) : ?>
								<p class="team-card__role"><?php echo esc_html( $bizpro_role ); ?></p>
							<?php endif; ?>
						</article>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Contact / CTA banner -->
	<?php if ( $bizpro_cta_enable ) : ?>
		<section id="contact" class="cta-banner">
			<div class="container cta-banner__inner">
				<div class="cta-banner__text">
					<?php if ( $bizpro_cta_title ) : ?>
						<h2 class="cta-banner__title"><?php echo esc_html( $bizpro_cta_title ); ?></h2>
					<?php endif; ?>
					<?php if ( $bizpro_cta_subtitle ) : ?>
						<p class="cta-banner__subtitle"><?php echo esc_html( $bizpro_cta_subtitle ); ?></p>
					<?php endif; ?>
				</div>
				<div class="cta-banner__actions">
					<?php if ( $bizpro_phone ) : ?>
						<a class="btn btn--light btn--lg" href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bizpro_phone ) ); ?>"><?php echo esc_html( $bizpro_phone ); ?></a>
					<?php endif; ?>
					<?php if ( $bizpro_email && is_email( $bizpro_email ) ) : ?>
						<a class="btn btn--outline btn--lg" href="<?php echo esc_url( 'mailto:' . $bizpro_email ); ?>"><?php esc_html_e( 'Email Us', 'bizpro-agency' ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Pricing Tables -->
	<?php if ( $bizpro_pricing_enable ) : ?>
		<section id="pricing" class="section section--pricing">
			<div class="container">
				<?php if ( $bizpro_pricing_eyebrow || $bizpro_pricing_title ) : ?>
					<header class="section__header">
						<?php if ( $bizpro_pricing_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bizpro_pricing_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bizpro_pricing_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bizpro_pricing_title ); ?></h2>
						<?php endif; ?>
						<?php if ( $bizpro_pricing_subtitle ) : ?>
							<p class="section__subtitle"><?php echo esc_html( $bizpro_pricing_subtitle ); ?></p>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="pricing-grid">
					<?php for ( $bizpro_p = 1; $bizpro_p <= 3; $bizpro_p++ ) : ?>
						<?php
						$bizpro_pname     = bizpro_agency_get( "pricing_{$bizpro_p}_name" );
						$bizpro_price     = bizpro_agency_get( "pricing_{$bizpro_p}_price" );
						$bizpro_period    = bizpro_agency_get( "pricing_{$bizpro_p}_period" );
						$bizpro_feats_raw = bizpro_agency_get( "pricing_{$bizpro_p}_features" );
						$bizpro_cta_text  = bizpro_agency_get( "pricing_{$bizpro_p}_cta_text" );
						$bizpro_cta_link  = bizpro_agency_get( "pricing_{$bizpro_p}_cta_link" );
						$bizpro_popular   = bizpro_agency_get( "pricing_{$bizpro_p}_popular" );
						$bizpro_feats     = $bizpro_feats_raw ? array_filter( array_map( 'trim', explode( "\n", $bizpro_feats_raw ) ) ) : array();
						if ( ! $bizpro_pname ) {
							continue; }
						?>
						<div class="pricing-card<?php echo $bizpro_popular ? ' pricing-card--popular' : ''; ?> reveal">
							<?php if ( $bizpro_popular ) : ?>
								<div class="pricing-ribbon"><?php esc_html_e( 'Most Popular', 'bizpro-agency' ); ?></div>
							<?php endif; ?>
							<h3 class="pricing-card__name"><?php echo esc_html( $bizpro_pname ); ?></h3>
							<div class="pricing-card__price">
								<span class="pricing-card__amount"><?php echo esc_html( $bizpro_price ); ?></span>
								<?php if ( $bizpro_period ) : ?>
									<span class="pricing-card__period"><?php echo esc_html( $bizpro_period ); ?></span>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $bizpro_feats ) ) : ?>
								<ul class="pricing-card__features">
									<?php foreach ( $bizpro_feats as $bizpro_feat ) : ?>
										<li><?php echo esc_html( $bizpro_feat ); ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
							<?php if ( $bizpro_cta_text ) : ?>
								<a href="<?php echo esc_url( $bizpro_cta_link ? $bizpro_cta_link : '#contact' ); ?>" class="btn <?php echo $bizpro_popular ? 'btn--primary' : 'btn--outline'; ?> btn--full">
									<?php echo esc_html( $bizpro_cta_text ); ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- FAQ Section -->
	<?php if ( $bizpro_faq_enable ) : ?>
		<section id="faq" class="section section--faq">
			<div class="container">
				<?php if ( $bizpro_faq_eyebrow || $bizpro_faq_title ) : ?>
					<header class="section__header">
						<?php if ( $bizpro_faq_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bizpro_faq_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bizpro_faq_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bizpro_faq_title ); ?></h2>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="faq-container">
					<?php for ( $bizpro_f = 1; $bizpro_f <= 6; $bizpro_f++ ) : ?>
						<?php
						$bizpro_q = bizpro_agency_get( "faq_{$bizpro_f}_q" );
						$bizpro_a = bizpro_agency_get( "faq_{$bizpro_f}_a" );
						if ( ! $bizpro_q && ! $bizpro_a ) {
							continue; }
						?>
						<div class="faq-item">
							<button class="faq-question" aria-expanded="false">
								<?php echo esc_html( $bizpro_q ); ?>
								<span class="faq-icon" aria-hidden="true"></span>
							</button>
							<div class="faq-answer" hidden>
								<p><?php echo esc_html( $bizpro_a ); ?></p>
							</div>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

</main><!-- #primary -->

<?php
get_footer();
