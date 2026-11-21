<?php
/**
 * WooCommerce Compatibility File.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Check if WooCommerce is active.
 *
 * @return bool
 */
function bizpro_agency_is_woocommerce_active() {
	return class_exists( 'WooCommerce' );
}

/**
 * Enqueue WooCommerce styles.
 */
function bizpro_agency_woocommerce_scripts() {
	if ( ! bizpro_agency_is_woocommerce_active() ) {
		return;
	}

	wp_enqueue_style(
		'bizpro-agency-woocommerce',
		get_template_directory_uri() . '/assets/css/woocommerce.css',
		array( 'bizpro-agency-main' ),
		BIZPRO_AGENCY_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'bizpro_agency_woocommerce_scripts' );

/**
 * Adjust WooCommerce loop columns.
 *
 * @return int
 */
function bizpro_agency_woocommerce_loop_columns() {
	return 3;
}
add_filter( 'loop_shop_columns', 'bizpro_agency_woocommerce_loop_columns' );

/**
 * Related products count.
 *
 * @param array $args Arguments.
 * @return array
 */
function bizpro_agency_woocommerce_related_products_args( $args ) {
	$args['posts_per_page'] = 3;
	$args['columns']        = 3;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'bizpro_agency_woocommerce_related_products_args' );
