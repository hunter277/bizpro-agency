<?php
/**
 * Shortcodes Suite for BizPro Agency.
 *
 * Production-grade shortcodes: Breadcrumbs, Search, Demos Grid, Mini-Cart,
 * Pricing Table, Service Grid, Stats Bar, CTA Banner, Demo Switcher.
 *
 * Usage examples:
 *   [bpa_breadcrumbs]
 *   [bpa_search placeholder="Search..."]
 *   [bpa_mini_cart]
 *   [bpa_demos columns="3"]
 *   [bpa_pricing_table style="cards"]
 *   [bpa_service_grid count="6"]
 *   [bpa_stats_bar]
 *   [bpa_cta_banner title="Ready?" subtitle="Let's talk." btn_text="Contact Us" btn_url="/contact/"]
 *   [bpa_year]
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* =====================================================================
 * [bpa_breadcrumbs] — Accessible breadcrumb trail
 * ================================================================== */
function bizpro_agency_breadcrumbs_shortcode() {
	if ( function_exists( 'bizpro_agency_breadcrumbs' ) ) {
		ob_start();
		bizpro_agency_breadcrumbs();
		return ob_get_clean();
	}
	$trail  = '<nav class="bpa-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumbs', 'bizpro-agency' ) . '">';
	$trail .= '<ol class="bpa-breadcrumbs__list">';
	$trail .= '<li class="bpa-breadcrumbs__item"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'bizpro-agency' ) . '</a></li>';
	if ( is_singular() ) {
		$trail .= '<li class="bpa-breadcrumbs__item" aria-current="page">' . esc_html( get_the_title() ) . '</li>';
	}
	$trail .= '</ol></nav>';
	return $trail;
}
add_shortcode( 'bpa_breadcrumbs', 'bizpro_agency_breadcrumbs_shortcode' );

/* =====================================================================
 * [bpa_search placeholder="..."] — Accessible AJAX-ready search bar
 * ================================================================== */
function bizpro_agency_search_shortcode( $atts ) {
	$a = shortcode_atts(
		array(
			'placeholder' => __( 'Search anything...', 'bizpro-agency' ),
			'style'       => 'default',
		),
		$atts,
		'bpa_search'
	);
	$id = 'bpa-search-' . wp_unique_id();
	ob_start();
	?>
	<form role="search" method="get" class="bpa-search-form bpa-search-form--<?php echo esc_attr( $a['style'] ); ?>"
		action="<?php echo esc_url( home_url( '/' ) ); ?>"
		aria-label="<?php esc_attr_e( 'Site search', 'bizpro-agency' ); ?>">
		<label for="<?php echo esc_attr( $id ); ?>" class="screen-reader-text">
			<?php esc_html_e( 'Search for:', 'bizpro-agency' ); ?>
		</label>
		<input type="search" id="<?php echo esc_attr( $id ); ?>"
			class="bpa-search-form__input"
			name="s"
			placeholder="<?php echo esc_attr( $a['placeholder'] ); ?>"
			value="<?php echo get_search_query(); ?>"
			required
			autocomplete="off">
		<button type="submit" class="btn btn--primary bpa-search-form__btn"
			aria-label="<?php esc_attr_e( 'Submit search', 'bizpro-agency' ); ?>">
			<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
				<circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
			</svg>
			<span class="screen-reader-text"><?php esc_html_e( 'Search', 'bizpro-agency' ); ?></span>
		</button>
	</form>
	<?php
	return ob_get_clean();
}
add_shortcode( 'bpa_search', 'bizpro_agency_search_shortcode' );

/* =====================================================================
 * [bpa_mini_cart] — WooCommerce mini-cart icon with live item count
 * ================================================================== */
function bizpro_agency_mini_cart_shortcode() {
	if ( ! function_exists( 'WC' ) ) {
		return '';
	}
	$count = ( WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
	ob_start();
	?>
	<div class="bpa-mini-cart" id="bpa-mini-cart-wrap">
		<a href="<?php echo esc_url( wc_get_cart_url() ); ?>"
			class="bpa-mini-cart__link"
			aria-label="<?php echo esc_attr( sprintf( _n( 'View cart (%d item)', 'View cart (%d items)', $count, 'bizpro-agency' ), $count ) ); ?>">
			<svg class="bpa-mini-cart__icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
				<path d="M6 2 3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
				<line x1="3" y1="6" x2="21" y2="6"/>
				<path d="M16 10a4 4 0 01-8 0"/>
			</svg>
			<?php if ( $count > 0 ) : ?>
				<span class="bpa-mini-cart__count" aria-hidden="true"><?php echo esc_html( $count ); ?></span>
			<?php endif; ?>
		</a>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'bpa_mini_cart', 'bizpro_agency_mini_cart_shortcode' );

// Update cart count via WC AJAX fragment.
function bizpro_agency_mini_cart_fragments( $fragments ) {
	ob_start();
	$count = ( function_exists( 'WC' ) && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
	echo '<span class="bpa-mini-cart__count">' . esc_html( $count ) . '</span>';
	$fragments['span.bpa-mini-cart__count'] = ob_get_clean();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'bizpro_agency_mini_cart_fragments' );

/* =====================================================================
 * [bpa_demos columns="3"] — 7 Niche Demos showcase grid
 * ================================================================== */
function bizpro_agency_demos_shortcode( $atts ) {
	$a = shortcode_atts(
		array(
			'columns' => '3',
			'show'    => 'all',
		),
		$atts,
		'bpa_demos'
	);

	$img_uri = trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/';
	$all_demos = array(
		'agency'      => array( 'title' => 'Main Flagship Agency',           'url' => home_url( '/' ),                     'img' => $img_uri . 'demo-main.png',        'badge' => 'Popular' ),
		'visa'        => array( 'title' => 'Visa & Immigration',             'url' => home_url( '/visa-immigration/' ),    'img' => $img_uri . 'demo-visa.png',        'badge' => 'Hot' ),
		'travel'      => array( 'title' => 'Travel & Tour Agency',           'url' => home_url( '/travel-agency/' ),       'img' => $img_uri . 'demo-travel.png',      'badge' => 'New' ),
		'it'          => array( 'title' => 'IT Solutions & Cloud',           'url' => home_url( '/it-solutions/' ),        'img' => $img_uri . 'demo-it.png',          'badge' => 'Tech' ),
		'consulting'  => array( 'title' => 'Business Consulting',            'url' => home_url( '/business-consulting/' ),   'img' => $img_uri . 'demo-consulting.png',  'badge' => 'Pro' ),
		'corporate'   => array( 'title' => 'Corporate Enterprise',           'url' => home_url( '/corporate/' ),           'img' => $img_uri . 'demo-corporate.png',   'badge' => 'Elite' ),
		'digital'     => array( 'title' => 'Digital Products & SaaS',        'url' => home_url( '/digital-store/' ),       'img' => $img_uri . 'demo-digital.png',     'badge' => 'eCom' ),
	);

	$demos = $all_demos;
	if ( 'all' !== $a['show'] ) {
		$keys  = array_map( 'trim', explode( ',', $a['show'] ) );
		$demos = array_intersect_key( $all_demos, array_flip( $keys ) );
	}

	$cols = max( 1, min( 4, intval( $a['columns'] ) ) );

	ob_start();
	?>
	<div class="bpa-demos-grid bpa-demos-grid--<?php echo esc_attr( $cols ); ?>col" role="list">
		<?php foreach ( $demos as $demo ) : ?>
		<div class="bpa-demo-card" role="listitem">
			<div class="bpa-demo-card__thumb">
				<img src="<?php echo esc_url( $demo['img'] ); ?>"
					alt="<?php echo esc_attr( $demo['title'] ); ?> demo screenshot"
					loading="lazy"
					width="400" height="267">
				<span class="bpa-demo-card__badge"><?php echo esc_html( $demo['badge'] ); ?></span>
			</div>
			<div class="bpa-demo-card__body">
				<h4 class="bpa-demo-card__title"><?php echo esc_html( $demo['title'] ); ?></h4>
				<a href="<?php echo esc_url( $demo['url'] ); ?>"
					class="btn btn--primary bpa-demo-card__btn">
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

/* =====================================================================
 * [bpa_pricing_table] — 3-tier pricing table
 * ================================================================== */
function bizpro_agency_pricing_table_shortcode( $atts ) {
	$a = shortcode_atts(
		array(
			'currency' => '$',
			'cta_url'  => '/contact/',
		),
		$atts,
		'bpa_pricing_table'
	);

	$plans = array(
		array(
			'name'     => __( 'Standard Advisory', 'bizpro-agency' ),
			'desc'     => __( 'Essential advisory & technical support for single startups.', 'bizpro-agency' ),
			'price'    => '49',
			'period'   => __( '/ month', 'bizpro-agency' ),
			'features' => array(
				__( 'Dedicated Account Manager', 'bizpro-agency' ),
				__( 'Up to 10 Monthly Strategy Hours', 'bizpro-agency' ),
				__( 'Full Document & Visa Audits', 'bizpro-agency' ),
				__( 'SLA Guaranteed 24-hr Response', 'bizpro-agency' ),
			),
			'disabled' => array(
				__( '24/7 Emergency Hotlines', 'bizpro-agency' ),
			),
			'popular'  => false,
			'cta'      => __( 'Choose Standard', 'bizpro-agency' ),
		),
		array(
			'name'     => __( 'Growth Partner', 'bizpro-agency' ),
			'desc'     => __( 'Comprehensive mandate for expanding international businesses.', 'bizpro-agency' ),
			'price'    => '129',
			'period'   => __( '/ month', 'bizpro-agency' ),
			'features' => array(
				__( 'Senior Principal Advisor', 'bizpro-agency' ),
				__( 'Unlimited Strategy & DevOps Calls', 'bizpro-agency' ),
				__( 'Priority Visa & Travel Concierge', 'bizpro-agency' ),
				__( '99.9% Uptime Engineering SLA', 'bizpro-agency' ),
				__( 'Multi-Jurisdiction Legal Review', 'bizpro-agency' ),
			),
			'disabled' => array(),
			'popular'  => true,
			'cta'      => __( 'Get Started with Growth', 'bizpro-agency' ),
		),
		array(
			'name'     => __( 'Executive Mandate', 'bizpro-agency' ),
			'desc'     => __( 'Full corporate governance, ESG & boardroom consulting.', 'bizpro-agency' ),
			'price'    => '299',
			'period'   => __( '/ month', 'bizpro-agency' ),
			'features' => array(
				__( 'C-Suite Executive Team Mandate', 'bizpro-agency' ),
				__( 'Cross-Border M&A Support', 'bizpro-agency' ),
				__( 'Global Regulatory Compliance', 'bizpro-agency' ),
				__( 'Dedicated VIP Phone & Slack Channel', 'bizpro-agency' ),
				__( 'On-Site Advisory Visits Included', 'bizpro-agency' ),
			),
			'disabled' => array(),
			'popular'  => false,
			'cta'      => __( 'Contact Executive Desk', 'bizpro-agency' ),
		),
	);

	ob_start();
	?>
	<div class="pricing-grid">
		<?php foreach ( $plans as $plan ) : ?>
		<div class="pricing-card<?php echo $plan['popular'] ? ' pricing-card--popular' : ''; ?>">
			<?php if ( $plan['popular'] ) : ?>
				<div class="pricing-ribbon"><?php esc_html_e( 'Most Popular Choice', 'bizpro-agency' ); ?></div>
			<?php endif; ?>
			<h3 class="pricing-card__title"><?php echo esc_html( $plan['name'] ); ?></h3>
			<p class="pricing-card__desc"><?php echo esc_html( $plan['desc'] ); ?></p>
			<div class="pricing-price">
				<span class="pricing-price__currency"><?php echo esc_html( $a['currency'] ); ?></span>
				<span class="pricing-price__amount"><?php echo esc_html( $plan['price'] ); ?></span>
				<span class="pricing-price__period"><?php echo esc_html( $plan['period'] ); ?></span>
			</div>
			<ul class="pricing-features">
				<?php foreach ( $plan['features'] as $feat ) : ?>
					<li class="pricing-features__item pricing-features__item--yes">
						✅ <?php echo esc_html( $feat ); ?>
					</li>
				<?php endforeach; ?>
				<?php foreach ( $plan['disabled'] as $feat ) : ?>
					<li class="pricing-features__item pricing-features__item--no" style="color: #94a3b8;">
						❌ <?php echo esc_html( $feat ); ?>
					</li>
				<?php endforeach; ?>
			</ul>
			<a href="<?php echo esc_url( home_url( $a['cta_url'] ) ); ?>" class="btn<?php echo $plan['popular'] ? ' btn--primary' : ''; ?>">
				<?php echo esc_html( $plan['cta'] ); ?>
			</a>
		</div>
		<?php endforeach; ?>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'bpa_pricing_table', 'bizpro_agency_pricing_table_shortcode' );

/* =====================================================================
 * [bpa_year] — Current year
 * ================================================================== */
function bizpro_agency_year_shortcode() {
	return esc_html( gmdate( 'Y' ) );
}
add_shortcode( 'bpa_year', 'bizpro_agency_year_shortcode' );
