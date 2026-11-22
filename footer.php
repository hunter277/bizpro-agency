<?php
/**
 * The footer template.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bizpro_phone     = bizpro_agency_get( 'topbar_phone' );
$bizpro_email     = bizpro_agency_get( 'topbar_email' );
$bizpro_address   = bizpro_agency_get( 'topbar_address' );
$bizpro_copyright = str_replace( '{year}', gmdate( 'Y' ), bizpro_agency_get( 'footer_copyright' ) );
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="footer-widgets">
			<div class="container footer-widgets__grid">

				<div class="footer-widgets__col">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php else : ?>
						<section class="widget">
							<h3 class="widget-title"><?php esc_html_e( 'About BizPro', 'bizpro-agency' ); ?></h3>
							<p><?php esc_html_e( 'We are a trusted agency delivering professional consulting, technology, visa and travel services to clients worldwide.', 'bizpro-agency' ); ?></p>
						</section>
					<?php endif; ?>
				</div>

				<div class="footer-widgets__col">
					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php else : ?>
						<section class="widget">
							<h3 class="widget-title"><?php esc_html_e( 'Quick Links', 'bizpro-agency' ); ?></h3>
							<ul>
								<li><a href="<?php echo esc_url( bizpro_agency_page_url( 'about' ) ); ?>"><?php esc_html_e( 'About Us', 'bizpro-agency' ); ?></a></li>
								<li><a href="<?php echo esc_url( bizpro_agency_page_url( 'services' ) ); ?>"><?php esc_html_e( 'Services', 'bizpro-agency' ); ?></a></li>
								<li><a href="<?php echo esc_url( bizpro_agency_page_url( 'pricing' ) ); ?>"><?php esc_html_e( 'Pricing', 'bizpro-agency' ); ?></a></li>
								<li><a href="<?php echo esc_url( bizpro_agency_page_url( 'faq' ) ); ?>"><?php esc_html_e( 'FAQs', 'bizpro-agency' ); ?></a></li>
								<li><a href="<?php echo esc_url( bizpro_agency_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Contact', 'bizpro-agency' ); ?></a></li>
							</ul>
						</section>
					<?php endif; ?>
				</div>

				<div class="footer-widgets__col">
					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-3' ); ?>
					<?php else : ?>
						<section class="widget">
							<h3 class="widget-title"><?php esc_html_e( 'Contact Info', 'bizpro-agency' ); ?></h3>
							<ul>
								<?php if ( $bizpro_address ) : ?>
									<li><?php echo esc_html( $bizpro_address ); ?></li>
								<?php endif; ?>
								<?php if ( $bizpro_phone ) : ?>
									<li><a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bizpro_phone ) ); ?>"><?php echo esc_html( $bizpro_phone ); ?></a></li>
								<?php endif; ?>
								<?php if ( $bizpro_email && is_email( $bizpro_email ) ) : ?>
									<li><a href="<?php echo esc_url( 'mailto:' . $bizpro_email ); ?>"><?php echo esc_html( $bizpro_email ); ?></a></li>
								<?php endif; ?>
							</ul>
						</section>
					<?php endif; ?>
				</div>

			</div>
		</div>

		<div class="footer-bottom">
			<div class="container footer-bottom__inner">
				<p class="footer-bottom__copy"><?php echo wp_kses_post( $bizpro_copyright ); ?></p>

				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location'       => 'footer',
							'menu_class'           => 'footer-menu',
							'container'            => 'nav',
							'container_class'      => 'footer-navigation',
							'container_aria_label' => esc_attr__( 'Footer Menu', 'bizpro-agency' ),
							'depth'                => 1,
						)
					);
					?>
				<?php endif; ?>
			</div>
		</div>

	</footer><!-- #colophon -->

	<!-- Back to Top -->
	<button class="bpa-back-to-top" type="button" aria-label="<?php esc_attr_e( 'Back to top', 'bizpro-agency' ); ?>">
		<span aria-hidden="true">↑</span>
	</button>

	<!-- Cookie Notice -->
	<?php
	$bizpro_privacy_link = get_privacy_policy_url();
	if ( ! $bizpro_privacy_link ) {
		$bizpro_privacy_page = get_page_by_path( 'privacy-policy' );
		$bizpro_privacy_link = $bizpro_privacy_page ? get_permalink( $bizpro_privacy_page ) : home_url( '/privacy-policy/' );
	}
	?>
	<div id="bpa-cookie-notice" class="bpa-cookie-notice" hidden>
		<p><?php esc_html_e( 'We use cookies to improve your experience. By continuing you accept our', 'bizpro-agency' ); ?> <a href="<?php echo esc_url( $bizpro_privacy_link ); ?>"><?php esc_html_e( 'Privacy Policy', 'bizpro-agency' ); ?></a>.</p>
		<button class="bpa-cookie-accept btn btn--primary"><?php esc_html_e( 'Accept &amp; Close', 'bizpro-agency' ); ?></button>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
