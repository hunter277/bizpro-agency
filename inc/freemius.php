<?php
/**
 * Freemius SDK Integration Stub for BizPro Agency.
 *
 * The free/lite version does not include the Freemius SDK.
 * To enable premium licensing, obtain your Product ID and Public Key
 * from https://freemius.com and replace the placeholders below,
 * then add the Freemius SDK to inc/freemius/start.php.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'bizpro_agency_fs' ) ) {

	/**
	 * Returns the Freemius instance (Premium builds only).
	 * In the free version this function always returns null.
	 *
	 * @return Freemius|null
	 */
	function bizpro_agency_fs() {
		global $bizpro_fs;

		if ( ! isset( $bizpro_fs ) ) {
			// Freemius SDK — only load if bundled (premium build).
			$sdk_path = get_template_directory() . '/inc/freemius/start.php';
			if ( file_exists( $sdk_path ) ) {
				require_once $sdk_path;

				$bizpro_fs = fs_dynamic_init(
					array(
						'id'               => '46015',
						'slug'             => 'bizpro-agency',
						'type'             => 'theme',
						'public_key'       => 'pk_7d6075f22a35eade776f0613d5ad6',
						'is_premium'       => false,
						'has_addons'       => false,
						'has_paid_plans'   => true,
						'is_org_compliant' => true,
						'menu'             => array(
							'slug'    => 'bizpro-agency-welcome',
							'parent'  => array(
								'slug' => 'themes.php',
							),
							'account' => true,
							'support' => false,
						),
						'navigation'       => 'tabs',
					)
				);
			} else {
				$bizpro_fs = null; // SDK not bundled (free/lite version).
			}
		}

		return $bizpro_fs;
	}

	// Init only if SDK is present.
	if ( file_exists( get_template_directory() . '/inc/freemius/start.php' ) ) {
		bizpro_agency_fs();
		do_action( 'bizpro_agency_fs_loaded' );
	}
}
