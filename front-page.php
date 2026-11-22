<?php
/**
 * The front page template for BizPro Agency.
 *
 * Fully dynamic via the WordPress Customizer.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// If the page is being edited with Elementor OR was built with Elementor:
if ( have_posts() && bizpro_agency_is_elementor() ) {
	get_header();
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

// -------------------------------------------------------------------------
// NICHE DEMO DELEGATION: If a specific niche demo is set as front page,
// or page template is chosen, delegate directly to that rich template.
// -------------------------------------------------------------------------
$bizpro_front_id = get_option( 'page_on_front' );
if ( $bizpro_front_id ) {
	$bizpro_assigned_tpl = get_page_template_slug( $bizpro_front_id );
	if ( $bizpro_assigned_tpl && 'default' !== $bizpro_assigned_tpl && file_exists( get_template_directory() . '/' . $bizpro_assigned_tpl ) ) {
		include get_template_directory() . '/' . $bizpro_assigned_tpl;
		return;
	}
	$bizpro_front_slug = get_post_field( 'post_name', $bizpro_front_id );
	$bizpro_niche_map  = array(
		'digital'    => 'template-homepage-digital.php',
		'visa'       => 'template-homepage-visa.php',
		'travel'     => 'template-homepage-travel.php',
		'it'         => 'template-homepage-it.php',
		'consulting' => 'template-homepage-consulting.php',
		'corporate'  => 'template-homepage-corporate.php',
	);
	foreach ( $bizpro_niche_map as $bizpro_key => $bizpro_tpl_file ) {
		if ( false !== strpos( $bizpro_front_slug, $bizpro_key ) ) {
			$bizpro_tpl_full = get_template_directory() . '/' . $bizpro_tpl_file;
			if ( file_exists( $bizpro_tpl_full ) ) {
				include $bizpro_tpl_full;
				return;
			}
		}
	}
}

// The niche templates render their own header and footer, so load the
// standard header only after the delegation checks above.
get_header();

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
			<?php if ( ! $bizpro_hero_image ) : ?>
				<div class="hero__visual" aria-hidden="true">
					<?php for ( $bizpro_hv = 1; $bizpro_hv <= 3; $bizpro_hv++ ) : ?>
						<div class="hero__stat hero__stat--<?php echo esc_attr( $bizpro_hv ); ?>">
							<strong><?php echo esc_html( bizpro_agency_get( "stat_{$bizpro_hv}_number" ) . bizpro_agency_get( "stat_{$bizpro_hv}_suffix" ) ); ?></strong>
							<span><?php echo esc_html( bizpro_agency_get( "stat_{$bizpro_hv}_label" ) ); ?></span>
						</div>
					<?php endfor; ?>
				</div>
			<?php endif; ?>
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

	<?php if ( bizpro_agency_get( 'show_demos_showcase', true ) ) : ?>
	<!-- =========================================================================
		7 READY-MADE STARTER SITES SHOWCASE SECTION
		========================================================================= -->
	<section class="section section--demos-showcase" id="demos" style="padding: 100px 0; background: var(--bpa-bg-alt, #f8fafc); border-top: 1px solid var(--bpa-border, #e2e8f0); border-bottom: 1px solid var(--bpa-border, #e2e8f0);">
	<div class="container">
		<div style="text-align: center; max-width: 750px; margin: 0 auto 60px;">
			<div style="display: inline-flex; align-items: center; gap: 8px; background: #e0e7ff; color: #4338ca; padding: 6px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px;">
				<span>⚡ 1-Click Import Ready</span>
			</div>
			<h2 style="font-size: clamp(2.2rem, 4.5vw, 3.2rem); font-weight: 800; color: var(--bpa-text, #0f172a); margin: 0 0 16px; letter-spacing: -0.02em;">
				<?php esc_html_e( '7 Niche Demos Built for High-Growth Businesses', 'bizpro-agency' ); ?>
			</h2>
			<p style="color: var(--bpa-text-muted, #64748b); font-size: 1.15rem; line-height: 1.6; margin: 0;">
				<?php esc_html_e( 'Choose your industry below. Each starter site includes tailored typography, custom page layouts, responsive contact forms, and AdSense optimized areas.', 'bizpro-agency' ); ?>
			</p>
		</div>

		<?php
		$bizpro_demos_catalog = array(
			array(
				'title' => __( 'Digital Products & SaaS Store', 'bizpro-agency' ),
				'niche' => 'eCommerce / Software',
				'badge' => 'eCom',
				'desc'  => __( 'Sell software, plugins, templates, and digital assets with instant downloads and Bento grid.', 'bizpro-agency' ),
				'url'   => bizpro_agency_page_url( 'home', 'digital' ),
				'img'   => trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/demo-digital.jpg',
			),
			array(
				'title' => __( 'Visa & Immigration Consultancy', 'bizpro-agency' ),
				'niche' => 'Immigration & Law',
				'badge' => 'Hot',
				'desc'  => __( '2-minute eligibility checker, country pathway cards, and 4-step client onboarding framework.', 'bizpro-agency' ),
				'url'   => bizpro_agency_page_url( 'home', 'visa' ),
				'img'   => trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/demo-visa.jpg',
			),
			array(
				'title' => __( 'Travel & Tour Operator', 'bizpro-agency' ),
				'niche' => 'Tourism & Travel',
				'badge' => 'New',
				'desc'  => __( 'Floating search bar, curated destination packages, seasonal deals, and verified guest reviews.', 'bizpro-agency' ),
				'url'   => bizpro_agency_page_url( 'home', 'travel' ),
				'img'   => trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/demo-travel.jpg',
			),
			array(
				'title' => __( 'IT Solutions & Cloud Services', 'bizpro-agency' ),
				'niche' => 'Tech & DevOps',
				'badge' => 'Tech',
				'desc'  => __( 'Enterprise tech stack matrix, DevOps architecture, SLA guarantees, and recurring retainers.', 'bizpro-agency' ),
				'url'   => bizpro_agency_page_url( 'home', 'it' ),
				'img'   => trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/demo-it.jpg',
			),
			array(
				'title' => __( 'Business & Management Consulting', 'bizpro-agency' ),
				'niche' => 'Corporate Advisory',
				'badge' => 'Pro',
				'desc'  => __( 'Executive strategic practices, post-merger integration framework, and client value metric cards.', 'bizpro-agency' ),
				'url'   => bizpro_agency_page_url( 'home', 'consulting' ),
				'img'   => trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/demo-consulting.jpg',
			),
			array(
				'title' => __( 'Corporate Enterprise & Finance', 'bizpro-agency' ),
				'niche' => 'Enterprise & ESG',
				'badge' => 'Elite',
				'desc'  => __( 'Institutional boardroom governance, global footprint map, and Fortune 500 compliance.', 'bizpro-agency' ),
				'url'   => bizpro_agency_page_url( 'home', 'corporate' ),
				'img'   => trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/demo-corporate.jpg',
			),
			array(
				'title' => __( 'Main Agency (Flagship Multi-Purpose)', 'bizpro-agency' ),
				'niche' => 'All-in-One Agency',
				'badge' => 'Popular',
				'desc'  => __( 'Our versatile flagship layout with animated statistics, service pillars, portfolio case studies, and reviews.', 'bizpro-agency' ),
				'url'   => home_url( '/' ),
				'img'   => trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/demo-main.jpg',
			),
		);
		?>

		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 32px;">
			<?php foreach ( $bizpro_demos_catalog as $bizpro_dm ) : ?>
				<article class="bpa-demo-card" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; transition: transform 0.28s ease, box-shadow 0.28s ease;">
					<div>
						<div style="position: relative; overflow: hidden; background: #0f172a;">
							<img src="<?php echo esc_url( $bizpro_dm['img'] ); ?>" alt="<?php echo esc_attr( $bizpro_dm['title'] ); ?>" loading="lazy" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: transform 0.4s ease;">
							<span style="position: absolute; top: 14px; left: 14px; background: rgba(15,23,42,0.85); backdrop-filter: blur(6px); color: #ffffff; font-size: 0.75rem; font-weight: 700; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">
								<?php echo esc_html( $bizpro_dm['niche'] ); ?>
							</span>
							<?php if ( ! empty( $bizpro_dm['badge'] ) ) : ?>
								<span style="position: absolute; top: 14px; right: 14px; background: #2563eb; color: #ffffff; font-size: 0.75rem; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">
									<?php echo esc_html( $bizpro_dm['badge'] ); ?>
								</span>
							<?php endif; ?>
						</div>
						<div style="padding: 24px 24px 16px;">
							<h3 style="font-size: 1.25rem; font-weight: 800; color: var(--bpa-text, #0f172a); margin: 0 0 8px; line-height: 1.3;">
								<?php echo esc_html( $bizpro_dm['title'] ); ?>
							</h3>
							<p style="color: var(--bpa-text-muted, #64748b); font-size: 0.95rem; line-height: 1.5; margin: 0;">
								<?php echo esc_html( $bizpro_dm['desc'] ); ?>
							</p>
						</div>
					</div>
					<div style="padding: 0 24px 24px;">
						<a href="<?php echo esc_url( $bizpro_dm['url'] ); ?>" class="btn btn--primary" style="display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; padding: 12px; font-weight: 700; border-radius: 10px; text-decoration: none;">
							<span><?php esc_html_e( 'Live Preview Demo', 'bizpro-agency' ); ?></span>
							<span aria-hidden="true">→</span>
						</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

</main><!-- #primary -->

<?php
get_footer();
