<?php
/**
 * TGM Plugin Activation configuration for BizPro Agency.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/tgmpa/class-tgm-plugin-activation.php';

/**
 * Register the required and recommended plugins for BizPro Agency.
 */
function bizpro_agency_register_required_plugins() {
	$plugins = array(
		array(
			'name'     => 'One Click Demo Import',
			'slug'     => 'one-click-demo-import',
			'required' => false,
		),
		array(
			'name'     => 'WooCommerce',
			'slug'     => 'woocommerce',
			'required' => false,
		),
		array(
			'name'     => 'Elementor Website Builder',
			'slug'     => 'elementor',
			'required' => false,
		),
		array(
			'name'     => 'Contact Form by WPForms',
			'slug'     => 'wpforms-lite',
			'required' => false,
		),
		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => false,
		),
	);

	// If companion plugin zip is present in /plugins/, allow 1-click local install
	$companion_zip = get_template_directory() . '/plugins/bizpro-agency-companion.zip';
	if ( file_exists( $companion_zip ) ) {
		$plugins[] = array(
			'name'               => 'BizPro Agency Companion',
			'slug'               => 'bizpro-agency-companion',
			'source'             => $companion_zip,
			'required'           => false,
			'version'            => '1.2.0',
			'force_activation'   => false,
			'force_deactivation' => false,
		);
	}

	$config = array(
		'id'           => 'bizpro-agency',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'bizpro_agency_register_required_plugins' );
