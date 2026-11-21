<?php
/**
 * Freemius SDK Integration for BizPro Agency.
 *
 * Handles license key validation, auto-updates, affiliate program,
 * and secure checkout for the Premium version.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'bpa_fs' ) ) {
	/**
	 * Create a helper function for easy SDK access.
	 *
	 * @return Freemius
	 */
	function bpa_fs() {
		global $bpa_fs;

		if ( ! isset( $bpa_fs ) ) {
			// Include Freemius SDK if available.
			$sdk_path = dirname( __FILE__ ) . '/freemius/start.php';
			if ( file_exists( $sdk_path ) ) {
				require_once $sdk_path;

				$bpa_fs = fs_dynamic_init(
					array(
						'id'                  => '12345', // Replace with your Freemius Product ID.
						'slug'                => 'bizpro-agency',
						'type'                => 'theme',
						'public_key'          => 'pk_replace_with_your_freemius_public_key',
						'is_premium'          => false, // Set to true in premium package.
						'has_addons'          => false,
						'has_paid_plans'      => true,
						'menu'                => array(
							'slug'       => 'bizpro-agency-welcome',
							'account'    => true,
							'support'    => true,
						),
						'navigation'          => 'tabs',
					)
				);
			}
		}

		return $bpa_fs;
	}

	// Init Freemius only if SDK file exists.
	if ( file_exists( dirname( __FILE__ ) . '/freemius/start.php' ) ) {
		bpa_fs();
		do_action( 'bpa_fs_loaded' );
	}
}
