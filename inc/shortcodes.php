<?php
/**
 * Shortcodes Suite for BizPro Agency.
 *
 * Implements Astra Pro grade shortcodes for Breadcrumbs, Search, Demos, Mini-Cart, etc.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * [bpa_breadcrumbs] - Output Breadcrumbs anywhere.
 */
function bizpro_agency_breadcrumbs_shortcode() {
	if ( function_exists( 'bizpro_agency_breadcrumbs' ) ) {
		ob_start();
		bizpro_agency_breadcrumbs();
		return ob_get_clean();
	}
	return '';
}
add_shortcode( 'bpa_breadcrumbs', 'bizpro_agency_breadcrumbs_shortcode' );

/**
 * [bpa_search] - Output sleek AJAX search bar.
 */
function bizpro_agency_search_shortcode( $atts ) {
	$a = shortcode_atts( array(
		'placeholder' => __( 'Search anything...', 'bizpro-agency' ),
	), $atts );

	ob_start();
	?>
	<form role="search" method="get" class="bpa-search-shortcode" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: flex; gap: 8px; max-width: 500px; margin: 16px 0;">
		<input type="search" name="s" placeholder="<?php echo esc_attr( $a['placeholder'] ); ?>" value="<?php echo get_search_query(); ?>" style="flex: 1; padding: 12px 18px; border-radius: 10px; border: 1px solid var(--bpa-border, #cbd5e1); font-size: 0.95rem;" required>
		<button type="submit" class="btn btn--primary" style="padding: 12px 20px; border-radius: 10px; font-weight: 700;">
			<?php esc_html_e( 'Search', 'bizpro-agency' ); ?>
		</button>
	</form>
	<?php
	return ob_get_clean();
}
add_shortcode( 'bpa_search', 'bizpro_agency_search_shortcode' );

/**
 * [bpa_demos] - Embed the 7 Niche Demos grid on any page or post.
 */
function bizpro_agency_demos_shortcode() {
	$img_uri = trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/';
	$demos = array(
		array( 'title' => 'Digital Products & SaaS', 'url' => home_url( '/digital-store/' ), 'img' => $img_uri . 'demo-digital.png', 'badge' => 'eCom' ),
		array( 'title' => 'Visa & Immigration', 'url' => home_url( '/visa-immigration/' ), 'img' => $img_uri . 'demo-visa.png', 'badge' => 'Hot' ),
		array( 'title' => 'Travel & Tour Agency', 'url' => home_url( '/travel-agency/' ), 'img' => $img_uri . 'demo-travel.png', 'badge' => 'New' ),
		array( 'title' => 'IT Solutions & Cloud', 'url' => home_url( '/it-solutions/' ), 'img' => $img_uri . 'demo-it.png', 'badge' => 'Tech' ),
		array( 'title' => 'Business Consulting', 'url' => home_url( '/business-consulting/' ), 'img' => $img_uri . 'demo-consulting.png', 'badge' => 'Pro' ),
		array( 'title' => 'Corporate Enterprise', 'url' => home_url( '/corporate/' ), 'img' => $img_uri . 'demo-corporate.png', 'badge' => 'Elite' ),
		array( 'title' => 'Main Flagship Agency', 'url' => home_url( '/' ), 'img' => $img_uri . 'demo-main.png', 'badge' => 'Popular' ),
	);

	ob_start();
	?>
	<div class="bpa-shortcode-demos-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin: 30px 0;">
		<?php foreach ( $demos as $d ) : ?>
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 14px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,0.04);">
				<div style="position: relative; height: 160px; overflow: hidden; background: #0f172a;">
					<img src="<?php echo esc_url( $d['img'] ); ?>" alt="<?php echo esc_attr( $d['title'] ); ?>" style="width: 100%; height: 100%; object-fit: cover;">
					<span style="position: absolute; top: 10px; right: 10px; background: #2563eb; color: #fff; font-size: 10px; font-weight: 800; padding: 2px 8px; border-radius: 4px; text-transform: uppercase;">
						<?php echo esc_html( $d['badge'] ); ?>
					</span>
				</div>
				<div style="padding: 16px;">
					<h4 style="margin: 0 0 10px; font-size: 1.1rem; color: var(--bpa-text, #0f172a); font-weight: 800;"><?php echo esc_html( $d['title'] ); ?></h4>
					<a href="<?php echo esc_url( $d['url'] ); ?>" class="btn btn--primary" style="display: block; text-align: center; padding: 8px 14px; border-radius: 8px; text-decoration: none; font-size: 0.88rem; font-weight: 700;">
						<?php esc_html_e( 'Preview Demo →', 'bizpro-agency' ); ?>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'bpa_demos', 'bizpro_agency_demos_shortcode' );

/**
 * [bpa_year] - Output current year for copyright text.
 */
function bizpro_agency_year_shortcode() {
	return date( 'Y' );
}
add_shortcode( 'bpa_year', 'bizpro_agency_year_shortcode' );
