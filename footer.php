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
						<?php
						$bizpro_footer_context  = function_exists( 'bizpro_agency_get_demo_context' ) ? bizpro_agency_get_demo_context() : 'default';
						$bizpro_about_fallbacks = array(
							'travel'     => array(
								'title' => __( 'About BizPro Travel', 'bizpro-agency' ),
								'desc'  => __( 'We are a premier travel and tour operator curating unforgettable journeys, customized holiday packages, and seamless flights worldwide.', 'bizpro-agency' ),
							),
							'visa'       => array(
								'title' => __( 'About BizPro Visa', 'bizpro-agency' ),
								'desc'  => __( 'We are a licensed immigration consultancy providing legal pathway guidance, document clearance, and seamless relocation support worldwide.', 'bizpro-agency' ),
							),
							'it'         => array(
								'title' => __( 'About BizPro Tech', 'bizpro-agency' ),
								'desc'  => __( 'We are an enterprise technology agency engineering scalable cloud infrastructure, custom software, and reliable DevOps solutions.', 'bizpro-agency' ),
							),
							'digital'    => array(
								'title' => __( 'About BizPro Store', 'bizpro-agency' ),
								'desc'  => __( 'We are a curated digital marketplace delivering high-performance UI kits, software tools, templates, and digital assets for creators.', 'bizpro-agency' ),
							),
							'consulting' => array(
								'title' => __( 'About BizPro Consulting', 'bizpro-agency' ),
								'desc'  => __( 'We are a strategic management consulting firm driving operational excellence, corporate growth, and long-term enterprise value.', 'bizpro-agency' ),
							),
							'corporate'  => array(
								'title' => __( 'About BizPro Corporate', 'bizpro-agency' ),
								'desc'  => __( 'We are a global institutional enterprise delivering boardroom advisory, regulatory compliance, and cross-border commercial solutions.', 'bizpro-agency' ),
							),
							'default'    => array(
								'title' => __( 'About BizPro', 'bizpro-agency' ),
								'desc'  => __( 'We are a trusted agency delivering professional consulting, technology, visa and travel services to clients worldwide.', 'bizpro-agency' ),
							),
						);
						$bizpro_about_info      = isset( $bizpro_about_fallbacks[ $bizpro_footer_context ] ) ? $bizpro_about_fallbacks[ $bizpro_footer_context ] : $bizpro_about_fallbacks['default'];
						?>
						<section class="widget">
							<h3 class="widget-title"><?php echo esc_html( $bizpro_about_info['title'] ); ?></h3>
							<p><?php echo esc_html( $bizpro_about_info['desc'] ); ?></p>
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
