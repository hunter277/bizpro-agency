<?php
/**
 * The header template.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bizpro_phone   = bizpro_agency_get( 'topbar_phone' );
$bizpro_email   = bizpro_agency_get( 'topbar_email' );
$bizpro_address = bizpro_agency_get( 'topbar_address' );

// Context-aware CTA per niche demo
$bizpro_demo_context = function_exists( 'bizpro_agency_get_demo_context' ) ? bizpro_agency_get_demo_context() : 'default';
$bizpro_demo_info    = function_exists( 'bizpro_agency_get_demo_info' ) ? bizpro_agency_get_demo_info( $bizpro_demo_context ) : array(
	'cta_text'  => bizpro_agency_get( 'header_cta_text', __( 'Get a Quote', 'bizpro-agency' ) ),
	'cta_url'   => bizpro_agency_get( 'header_cta_link', '#contact' ),
	'tagline'   => __( 'Agency', 'bizpro-agency' ),
	'top_badge' => '',
);
$bizpro_cta_txt      = $bizpro_demo_info['cta_text'];
$bizpro_cta_url      = $bizpro_demo_info['cta_url'];
$bizpro_tagline      = $bizpro_demo_info['tagline'];
$bizpro_top_badge    = $bizpro_demo_info['top_badge'];

// Anchor-only links (e.g. #contact) must keep working on inner pages.
if ( $bizpro_cta_url && 0 === strpos( $bizpro_cta_url, '#' ) ) {
	$bizpro_cta_url = home_url( '/' ) . $bizpro_cta_url;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bizpro-agency' ); ?></a>

<div id="page" class="site">

	<?php if ( bizpro_agency_get( 'topbar_enable', true ) && ( $bizpro_phone || $bizpro_email || $bizpro_address ) ) : ?>
		<div class="top-bar">
			<div class="container top-bar__inner">
				<ul class="top-bar__list">
					<?php if ( $bizpro_phone ) : ?>
						<li class="top-bar__item top-bar__item--phone">
							<span class="screen-reader-text"><?php esc_html_e( 'Phone:', 'bizpro-agency' ); ?></span>
							<a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bizpro_phone ) ); ?>"><?php echo esc_html( $bizpro_phone ); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $bizpro_email && is_email( $bizpro_email ) ) : ?>
						<li class="top-bar__item top-bar__item--email">
							<span class="screen-reader-text"><?php esc_html_e( 'Email:', 'bizpro-agency' ); ?></span>
							<a href="<?php echo esc_url( 'mailto:' . $bizpro_email ); ?>"><?php echo esc_html( $bizpro_email ); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $bizpro_address ) : ?>
						<li class="top-bar__item top-bar__item--address">
							<span class="screen-reader-text"><?php esc_html_e( 'Address:', 'bizpro-agency' ); ?></span>
							<?php echo esc_html( $bizpro_address ); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>

	<header id="masthead" class="site-header">
		<div class="container site-header__inner">

			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-brand-link">
						<span class="site-brand-icon" aria-hidden="true">
							<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="34" height="34" rx="10" fill="url(#bpa-logo-gradient)" />
								<path d="M10 18L14.5 22.5L24 13" stroke="white" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
								<defs>
									<linearGradient id="bpa-logo-gradient" x1="0" y1="0" x2="34" y2="34" gradientUnits="userSpaceOnUse">
										<stop stop-color="#2563EB" />
										<stop offset="1" stop-color="#06B6D4" />
									</linearGradient>
								</defs>
							</svg>
						</span>
						<span class="site-brand-text">
							<span class="site-brand-name">Biz<span class="site-brand-accent">Pro</span></span>
							<span class="site-brand-tagline"><?php echo esc_html( $bizpro_tagline ); ?></span>
						</span>
					</a>
				<?php endif; ?>
			</div>

			<button id="menu-toggle" class="menu-toggle" type="button" aria-controls="site-navigation" aria-expanded="false">
				<span class="menu-toggle__bar" aria-hidden="true"></span>
				<span class="menu-toggle__bar" aria-hidden="true"></span>
				<span class="menu-toggle__bar" aria-hidden="true"></span>
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'bizpro-agency' ); ?></span>
			</button>

			<div id="site-navigation" class="main-navigation">
				<div class="main-navigation__mobile-header">
					<span class="mobile-menu-title"><?php esc_html_e( 'Navigation Menu', 'bizpro-agency' ); ?></span>
					<button id="menu-close" class="menu-close-btn" type="button" aria-label="<?php esc_attr_e( 'Close menu', 'bizpro-agency' ); ?>">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
				$bizpro_nav_location = function_exists( 'bizpro_agency_get_demo_menu_location' ) ? bizpro_agency_get_demo_menu_location() : 'primary';
				$bizpro_menu         = wp_nav_menu(
					array(
						'theme_location'       => $bizpro_nav_location,
						'menu_id'              => 'primary-menu',
						'menu_class'           => 'menu',
						'container'            => 'nav',
						'container_class'      => 'main-navigation__nav',
						'container_aria_label' => esc_attr__( 'Primary Menu', 'bizpro-agency' ),
						'fallback_cb'          => false,
						'echo'                 => false,
					)
				);

				if ( ! empty( $bizpro_menu ) ) {
					echo $bizpro_menu; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				} else {
					bizpro_agency_fallback_menu();
				}
				?>

				<?php if ( $bizpro_cta_txt ) : ?>
					<a class="btn btn--primary header-cta" href="<?php echo esc_url( $bizpro_cta_url ); ?>"><?php echo esc_html( $bizpro_cta_txt ); ?></a>
				<?php endif; ?>
			</div>

		</div>
	</header><!-- #masthead -->
