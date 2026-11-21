<?php
/**
 * The footer template.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bpa_phone     = bizpro_agency_get( 'topbar_phone' );
$bpa_email     = bizpro_agency_get( 'topbar_email' );
$bpa_address   = bizpro_agency_get( 'topbar_address' );
$bpa_copyright = str_replace( '{year}', gmdate( 'Y' ), bizpro_agency_get( 'footer_copyright' ) );
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
							<p><?php esc_html_e( 'BizPro Agency is a world-class digital agency and global consultancy delivering tailored IT solutions, international visa assistance, luxury travel experiences and corporate advisory.', 'bizpro-agency' ); ?></p>
						</section>
					<?php endif; ?>
				</div>

				<div class="footer-widgets__col">
					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php else : ?>
						<section class="widget">
							<h3 class="widget-title"><?php esc_html_e( 'Explore Demos', 'bizpro-agency' ); ?></h3>
							<ul>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Agency Default', 'bizpro-agency' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/visa-immigration/' ) ); ?>"><?php esc_html_e( 'Visa & Immigration', 'bizpro-agency' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/travel-agency/' ) ); ?>"><?php esc_html_e( 'Travel Agency', 'bizpro-agency' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/it-solutions/' ) ); ?>"><?php esc_html_e( 'IT Solutions', 'bizpro-agency' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/business-consulting/' ) ); ?>"><?php esc_html_e( 'Business Consulting', 'bizpro-agency' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/corporate/' ) ); ?>"><?php esc_html_e( 'Corporate Enterprise', 'bizpro-agency' ); ?></a></li>
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
								<?php if ( $bpa_address ) : ?>
									<li><?php echo esc_html( $bpa_address ); ?></li>
								<?php endif; ?>
								<?php if ( $bpa_phone ) : ?>
									<li><a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bpa_phone ) ); ?>"><?php echo esc_html( $bpa_phone ); ?></a></li>
								<?php endif; ?>
								<?php if ( $bpa_email && is_email( $bpa_email ) ) : ?>
									<li><a href="<?php echo esc_url( 'mailto:' . $bpa_email ); ?>"><?php echo esc_html( $bpa_email ); ?></a></li>
								<?php endif; ?>
							</ul>
						</section>
					<?php endif; ?>
				</div>

			</div>
		</div>

		<div class="footer-bottom">
			<div class="container footer-bottom__inner">
				<p class="footer-bottom__copy"><?php echo wp_kses_post( $bpa_copyright ); ?></p>

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
	<div id="bpa-cookie-notice" class="bpa-cookie-notice" hidden>
		<p><?php esc_html_e( 'We use cookies to improve your experience. By continuing you accept our', 'bizpro-agency' ); ?> <a href="<?php echo esc_url( get_privacy_policy_url() ? get_privacy_policy_url() : '#' ); ?>"><?php esc_html_e( 'Privacy Policy', 'bizpro-agency' ); ?></a>.</p>
		<button class="bpa-cookie-accept btn btn--primary"><?php esc_html_e( 'Accept &amp; Close', 'bizpro-agency' ); ?></button>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
