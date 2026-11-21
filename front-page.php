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

get_header();

// If the page is being edited with Elementor OR was built with Elementor:
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

// -------------------------------------------------------------------------
// NICHE DEMO DELEGATION: If a specific niche demo is set as front page,
// or page template is chosen, delegate directly to that rich template.
// -------------------------------------------------------------------------
$bpa_front_id = get_option( 'page_on_front' );
if ( $bpa_front_id ) {
	$bpa_assigned_tpl = get_page_template_slug( $bpa_front_id );
	if ( $bpa_assigned_tpl && 'default' !== $bpa_assigned_tpl && file_exists( get_template_directory() . '/' . $bpa_assigned_tpl ) ) {
		include get_template_directory() . '/' . $bpa_assigned_tpl;
		return;
	}
	$bpa_front_slug = get_post_field( 'post_name', $bpa_front_id );
	$bpa_niche_map  = array(
		'visa'       => 'template-homepage-visa.php',
		'travel'     => 'template-homepage-travel.php',
		'it'         => 'template-homepage-it.php',
		'consulting' => 'template-homepage-consulting.php',
		'corporate'  => 'template-homepage-corporate.php',
	);
	foreach ( $bpa_niche_map as $key => $tpl_file ) {
		if ( false !== strpos( $bpa_front_slug, $key ) ) {
			$tpl_full = get_template_directory() . '/' . $tpl_file;
			if ( file_exists( $tpl_full ) ) {
				include $tpl_full;
				return;
			}
		}
	}
}


// Hero
$bpa_hero_title    = bizpro_agency_get( 'hero_title' );
$bpa_hero_subtitle = bizpro_agency_get( 'hero_subtitle' );
$bpa_hero_cta_text = bizpro_agency_get( 'hero_cta_text' );
$bpa_hero_cta_link = bizpro_agency_get( 'hero_cta_link' );
$bpa_hero_image    = bizpro_agency_get( 'hero_image' );

// Contact info
$bpa_phone = bizpro_agency_get( 'topbar_phone' );
$bpa_email = bizpro_agency_get( 'topbar_email' );

// Services
$bpa_services_enable   = bizpro_agency_get( 'services_enable' );
$bpa_services_eyebrow  = bizpro_agency_get( 'services_eyebrow' );
$bpa_services_title    = bizpro_agency_get( 'services_title' );
$bpa_services_subtitle = bizpro_agency_get( 'services_subtitle' );

// About
$bpa_about_enable       = bizpro_agency_get( 'about_enable' );
$bpa_about_eyebrow      = bizpro_agency_get( 'about_eyebrow' );
$bpa_about_title        = bizpro_agency_get( 'about_title' );
$bpa_about_description  = bizpro_agency_get( 'about_description' );
$bpa_about_badge_number = bizpro_agency_get( 'about_badge_number' );
$bpa_about_badge_label  = bizpro_agency_get( 'about_badge_label' );

// Stats
$bpa_stats_enable = bizpro_agency_get( 'stats_enable' );

// Testimonials
$bpa_testimonials_enable  = bizpro_agency_get( 'testimonials_enable' );
$bpa_testimonials_eyebrow = bizpro_agency_get( 'testimonials_eyebrow' );
$bpa_testimonials_title   = bizpro_agency_get( 'testimonials_title' );

// Team
$bpa_team_enable  = bizpro_agency_get( 'team_enable' );
$bpa_team_eyebrow = bizpro_agency_get( 'team_eyebrow' );
$bpa_team_title   = bizpro_agency_get( 'team_title' );

// CTA Banner
$bpa_cta_enable   = bizpro_agency_get( 'cta_enable' );
$bpa_cta_title    = bizpro_agency_get( 'cta_title' );
$bpa_cta_subtitle = bizpro_agency_get( 'cta_subtitle' );

// Client Logos
$bpa_logos_enable = bizpro_agency_get( 'client_logos_enable' );
$bpa_logos_title  = bizpro_agency_get( 'client_logos_title' );

// Case Studies
$bpa_cases_enable  = bizpro_agency_get( 'cases_enable' );
$bpa_cases_eyebrow = bizpro_agency_get( 'cases_eyebrow' );
$bpa_cases_title   = bizpro_agency_get( 'cases_title' );

// Pricing
$bpa_pricing_enable   = bizpro_agency_get( 'pricing_enable' );
$bpa_pricing_eyebrow  = bizpro_agency_get( 'pricing_eyebrow' );
$bpa_pricing_title    = bizpro_agency_get( 'pricing_title' );
$bpa_pricing_subtitle = bizpro_agency_get( 'pricing_subtitle' );

// FAQ
$bpa_faq_enable  = bizpro_agency_get( 'faq_enable' );
$bpa_faq_eyebrow = bizpro_agency_get( 'faq_eyebrow' );
$bpa_faq_title   = bizpro_agency_get( 'faq_title' );
?>

<main id="primary" class="site-main site-main--front">

	<!-- Hero -->
	<section id="home" class="hero<?php echo $bpa_hero_image ? ' hero--has-image' : ''; ?>">
		<?php if ( $bpa_hero_image ) : ?>
			<img class="hero__bg" src="<?php echo esc_url( $bpa_hero_image ); ?>" alt="" fetchpriority="high" decoding="async">
		<?php endif; ?>
		<div class="hero__overlay" aria-hidden="true"></div>
		<div class="container hero__inner">
			<div class="hero__content">
				<?php if ( $bpa_hero_title ) : ?>
					<h1 class="hero__title"><?php echo esc_html( $bpa_hero_title ); ?></h1>
				<?php endif; ?>
				<?php if ( $bpa_hero_subtitle ) : ?>
					<p class="hero__subtitle"><?php echo esc_html( $bpa_hero_subtitle ); ?></p>
				<?php endif; ?>
				<?php if ( $bpa_hero_cta_text ) : ?>
					<div class="hero__actions">
						<a class="btn btn--primary btn--lg" href="<?php echo esc_url( $bpa_hero_cta_link ); ?>"><?php echo esc_html( $bpa_hero_cta_text ); ?></a>
						<a class="btn btn--outline btn--lg" href="#services"><?php esc_html_e( 'Our Services', 'bizpro-agency' ); ?></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- Client Trust Logos -->
	<?php if ( $bpa_logos_enable ) : ?>
		<div class="client-logos">
			<div class="container">
				<?php if ( $bpa_logos_title ) : ?>
					<p class="client-logos__title"><?php echo esc_html( $bpa_logos_title ); ?></p>
				<?php endif; ?>
				<div class="client-logos__grid">
					<?php for ( $l = 1; $l <= 6; $l++ ) : ?>
						<?php $logo_name = bizpro_agency_get( "client_logo_{$l}" ); ?>
						<?php if ( $logo_name ) : ?>
							<span class="client-logo-item"><?php echo esc_html( $logo_name ); ?></span>
						<?php endif; ?>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- Services -->
	<?php if ( $bpa_services_enable ) : ?>
		<section id="services" class="section section--services">
			<div class="container">
				<?php if ( $bpa_services_eyebrow || $bpa_services_title || $bpa_services_subtitle ) : ?>
					<header class="section__header">
						<?php if ( $bpa_services_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bpa_services_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bpa_services_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bpa_services_title ); ?></h2>
						<?php endif; ?>
						<?php if ( $bpa_services_subtitle ) : ?>
							<p class="section__subtitle"><?php echo esc_html( $bpa_services_subtitle ); ?></p>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="services-grid">
					<?php
					for ( $i = 1; $i <= 4; $i++ ) :
						$title = bizpro_agency_get( "service_{$i}_title" );
						$text  = bizpro_agency_get( "service_{$i}_text" );
						$icon  = bizpro_agency_get( "service_{$i}_icon" );

						if ( ! $title && ! $text ) {
							continue;
						}
						?>
						<article class="service-card">
							<div class="service-card__icon">
								<?php echo bizpro_agency_get_icon( $icon ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<?php if ( $title ) : ?>
								<h3 class="service-card__title"><?php echo esc_html( $title ); ?></h3>
							<?php endif; ?>
							<?php if ( $text ) : ?>
								<p class="service-card__text"><?php echo esc_html( $text ); ?></p>
							<?php endif; ?>
						</article>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- About + Stats -->
	<?php if ( $bpa_about_enable || $bpa_stats_enable ) : ?>
		<section id="about" class="section section--about">
			<?php if ( $bpa_about_enable ) : ?>
				<div class="container about__grid">
					<div class="about__media" aria-hidden="true">
						<?php if ( $bpa_about_badge_number || $bpa_about_badge_label ) : ?>
							<div class="about__badge">
								<?php if ( $bpa_about_badge_number ) : ?>
									<strong><?php echo esc_html( $bpa_about_badge_number ); ?></strong>
								<?php endif; ?>
								<?php if ( $bpa_about_badge_label ) : ?>
									<span><?php echo esc_html( $bpa_about_badge_label ); ?></span>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="about__content">
						<?php if ( $bpa_about_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bpa_about_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bpa_about_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bpa_about_title ); ?></h2>
						<?php endif; ?>
						<?php if ( $bpa_about_description ) : ?>
							<p><?php echo esc_html( $bpa_about_description ); ?></p>
						<?php endif; ?>

						<?php
						$points = array();
						for ( $p = 1; $p <= 3; $p++ ) {
							$val = bizpro_agency_get( "about_point_{$p}" );
							if ( $val ) {
								$points[] = $val;
							}
						}
						if ( ! empty( $points ) ) :
							?>
							<ul class="about__list">
								<?php foreach ( $points as $pt ) : ?>
									<li><?php echo esc_html( $pt ); ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( $bpa_stats_enable ) : ?>
				<div class="container">
					<div class="stats">
						<?php
						for ( $s = 1; $s <= 4; $s++ ) :
							$num    = bizpro_agency_get( "stat_{$s}_number" );
							$suffix = bizpro_agency_get( "stat_{$s}_suffix" );
							$label  = bizpro_agency_get( "stat_{$s}_label" );

							if ( '' === (string) $num && ! $label ) {
								continue;
							}
							?>
							<div class="stat">
								<span class="stat__number" data-count="<?php echo esc_attr( $num ); ?>" data-suffix="<?php echo esc_attr( $suffix ); ?>">
									<?php echo esc_html( $num . $suffix ); ?>
								</span>
								<?php if ( $label ) : ?>
									<span class="stat__label"><?php echo esc_html( $label ); ?></span>
								<?php endif; ?>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			<?php endif; ?>
		</section>
	<?php endif; ?>

	<!-- Testimonials -->
	<?php if ( $bpa_testimonials_enable ) : ?>
		<section id="testimonials" class="section section--testimonials">
			<div class="container">
				<?php if ( $bpa_testimonials_eyebrow || $bpa_testimonials_title ) : ?>
					<header class="section__header">
						<?php if ( $bpa_testimonials_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bpa_testimonials_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bpa_testimonials_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bpa_testimonials_title ); ?></h2>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="testimonials-grid">
					<?php
					for ( $t = 1; $t <= 3; $t++ ) :
						$quote = bizpro_agency_get( "testimonial_{$t}_quote" );
						$name  = bizpro_agency_get( "testimonial_{$t}_name" );
						$role  = bizpro_agency_get( "testimonial_{$t}_role" );

						if ( ! $quote && ! $name ) {
							continue;
						}
						?>
						<figure class="testimonial">
							<?php if ( $quote ) : ?>
								<blockquote class="testimonial__quote">
									<p><?php echo esc_html( $quote ); ?></p>
								</blockquote>
							<?php endif; ?>
							<figcaption class="testimonial__author">
								<span class="testimonial__avatar" aria-hidden="true"><?php echo esc_html( mb_substr( $name ? $name : 'A', 0, 1 ) ); ?></span>
								<span class="testimonial__meta">
									<?php if ( $name ) : ?>
										<span class="testimonial__name"><?php echo esc_html( $name ); ?></span>
									<?php endif; ?>
									<?php if ( $role ) : ?>
										<span class="testimonial__role"><?php echo esc_html( $role ); ?></span>
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
	<?php if ( $bpa_cases_enable ) : ?>
		<section id="cases" class="section section--cases">
			<div class="container">
				<?php if ( $bpa_cases_eyebrow || $bpa_cases_title ) : ?>
					<header class="section__header">
						<?php if ( $bpa_cases_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bpa_cases_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bpa_cases_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bpa_cases_title ); ?></h2>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="cases-grid">
					<?php for ( $c = 1; $c <= 3; $c++ ) : ?>
						<?php
						$tag    = bizpro_agency_get( "case_{$c}_tag" );
						$title  = bizpro_agency_get( "case_{$c}_title" );
						$desc   = bizpro_agency_get( "case_{$c}_desc" );
						$result = bizpro_agency_get( "case_{$c}_result" );
						if ( ! $title ) { continue; }
						?>
						<article class="case-card reveal">
							<?php if ( $tag ) : ?>
								<span class="case-card__tag"><?php echo esc_html( $tag ); ?></span>
							<?php endif; ?>
							<h3 class="case-card__title"><?php echo esc_html( $title ); ?></h3>
							<?php if ( $desc ) : ?>
								<p class="case-card__desc"><?php echo esc_html( $desc ); ?></p>
							<?php endif; ?>
							<?php if ( $result ) : ?>
								<p class="case-card__result"><strong><?php echo esc_html( $result ); ?></strong></p>
							<?php endif; ?>
						</article>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Team -->
	<?php if ( $bpa_team_enable ) : ?>
		<section id="team" class="section section--team">
			<div class="container">
				<?php if ( $bpa_team_eyebrow || $bpa_team_title ) : ?>
					<header class="section__header">
						<?php if ( $bpa_team_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bpa_team_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bpa_team_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bpa_team_title ); ?></h2>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="team-grid">
					<?php
					for ( $m = 1; $m <= 4; $m++ ) :
						$name = bizpro_agency_get( "team_{$m}_name" );
						$role = bizpro_agency_get( "team_{$m}_role" );
						if ( ! $name ) {
							continue;
						}
						?>
						<article class="team-card">
							<div class="team-card__avatar" aria-hidden="true">
								<?php echo esc_html( mb_substr( $name, 0, 1 ) ); ?>
							</div>
							<h3 class="team-card__name"><?php echo esc_html( $name ); ?></h3>
							<?php if ( $role ) : ?>
								<p class="team-card__role"><?php echo esc_html( $role ); ?></p>
							<?php endif; ?>
						</article>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Contact / CTA banner -->
	<?php if ( $bpa_cta_enable ) : ?>
		<section id="contact" class="cta-banner">
			<div class="container cta-banner__inner">
				<div class="cta-banner__text">
					<?php if ( $bpa_cta_title ) : ?>
						<h2 class="cta-banner__title"><?php echo esc_html( $bpa_cta_title ); ?></h2>
					<?php endif; ?>
					<?php if ( $bpa_cta_subtitle ) : ?>
						<p class="cta-banner__subtitle"><?php echo esc_html( $bpa_cta_subtitle ); ?></p>
					<?php endif; ?>
				</div>
				<div class="cta-banner__actions">
					<?php if ( $bpa_phone ) : ?>
						<a class="btn btn--light btn--lg" href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bpa_phone ) ); ?>"><?php echo esc_html( $bpa_phone ); ?></a>
					<?php endif; ?>
					<?php if ( $bpa_email && is_email( $bpa_email ) ) : ?>
						<a class="btn btn--outline btn--lg" href="<?php echo esc_url( 'mailto:' . $bpa_email ); ?>"><?php esc_html_e( 'Email Us', 'bizpro-agency' ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Pricing Tables -->
	<?php if ( $bpa_pricing_enable ) : ?>
		<section id="pricing" class="section section--pricing">
			<div class="container">
				<?php if ( $bpa_pricing_eyebrow || $bpa_pricing_title ) : ?>
					<header class="section__header">
						<?php if ( $bpa_pricing_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bpa_pricing_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bpa_pricing_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bpa_pricing_title ); ?></h2>
						<?php endif; ?>
						<?php if ( $bpa_pricing_subtitle ) : ?>
							<p class="section__subtitle"><?php echo esc_html( $bpa_pricing_subtitle ); ?></p>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="pricing-grid">
					<?php for ( $p = 1; $p <= 3; $p++ ) : ?>
						<?php
						$pname     = bizpro_agency_get( "pricing_{$p}_name" );
						$price     = bizpro_agency_get( "pricing_{$p}_price" );
						$period    = bizpro_agency_get( "pricing_{$p}_period" );
						$feats_raw = bizpro_agency_get( "pricing_{$p}_features" );
						$cta_text  = bizpro_agency_get( "pricing_{$p}_cta_text" );
						$cta_link  = bizpro_agency_get( "pricing_{$p}_cta_link" );
						$popular   = bizpro_agency_get( "pricing_{$p}_popular" );
						$feats     = $feats_raw ? array_filter( array_map( 'trim', explode( "\n", $feats_raw ) ) ) : array();
						if ( ! $pname ) { continue; }
						?>
						<div class="pricing-card<?php echo $popular ? ' pricing-card--popular' : ''; ?> reveal">
							<?php if ( $popular ) : ?>
								<div class="pricing-ribbon"><?php esc_html_e( 'Most Popular', 'bizpro-agency' ); ?></div>
							<?php endif; ?>
							<h3 class="pricing-card__name"><?php echo esc_html( $pname ); ?></h3>
							<div class="pricing-card__price">
								<span class="pricing-card__amount"><?php echo esc_html( $price ); ?></span>
								<?php if ( $period ) : ?>
									<span class="pricing-card__period"><?php echo esc_html( $period ); ?></span>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $feats ) ) : ?>
								<ul class="pricing-card__features">
									<?php foreach ( $feats as $feat ) : ?>
										<li><?php echo esc_html( $feat ); ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
							<?php if ( $cta_text ) : ?>
								<a href="<?php echo esc_url( $cta_link ? $cta_link : '#contact' ); ?>" class="btn <?php echo $popular ? 'btn--primary' : 'btn--outline'; ?> btn--full">
									<?php echo esc_html( $cta_text ); ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- FAQ Section -->
	<?php if ( $bpa_faq_enable ) : ?>
		<section id="faq" class="section section--faq">
			<div class="container">
				<?php if ( $bpa_faq_eyebrow || $bpa_faq_title ) : ?>
					<header class="section__header">
						<?php if ( $bpa_faq_eyebrow ) : ?>
							<p class="section__eyebrow"><?php echo esc_html( $bpa_faq_eyebrow ); ?></p>
						<?php endif; ?>
						<?php if ( $bpa_faq_title ) : ?>
							<h2 class="section__title"><?php echo esc_html( $bpa_faq_title ); ?></h2>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<div class="faq-container">
					<?php for ( $f = 1; $f <= 6; $f++ ) : ?>
						<?php
						$q = bizpro_agency_get( "faq_{$f}_q" );
						$a = bizpro_agency_get( "faq_{$f}_a" );
						if ( ! $q && ! $a ) { continue; }
						?>
						<div class="faq-item">
							<button class="faq-question" aria-expanded="false">
								<?php echo esc_html( $q ); ?>
								<span class="faq-icon" aria-hidden="true"></span>
							</button>
							<div class="faq-answer" hidden>
								<p><?php echo esc_html( $a ); ?></p>
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
