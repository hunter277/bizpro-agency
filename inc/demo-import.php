<?php
/**
 * One Click Demo Import (OCDI) Multi-Demo Integration for BizPro Agency.
 *
 * Provides dedicated, individual niche demo imports (Visa, Travel, IT, Consulting, Corporate, Main).
 * Compatible with OCDI v2.x (filter: pt-ocdi/import_files)
 *                 and v3.x (filter: ocdi/import_files).
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register dedicated individual demo import options.
 *
 * @return array
 */
function bizpro_agency_ocdi_import_files() {
	$demo_dir = trailingslashit( get_template_directory() ) . 'demo-data/';
	$img_dir  = trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/';

	return array(
		array(
			'import_file_name'           => esc_html__( 'Main Agency (Multi-Purpose)', 'bizpro-agency' ),
			'categories'                 => array( 'Agency', 'Multi-Purpose' ),
			'local_import_file'          => $demo_dir . 'content.xml',
			'import_preview_image_url'   => $img_dir . 'demo-main.png',
			'import_notice'              => esc_html__(
				'Sets up the complete multi-purpose flagship demo with Services, Portfolio Case Studies, Team, Pricing Tables, and Contact.',
				'bizpro-agency'
			),
		),
		array(
			'import_file_name'           => esc_html__( 'Visa & Immigration Consultancy', 'bizpro-agency' ),
			'categories'                 => array( 'Visa & Immigration', 'Consultancy' ),
			'local_import_file'          => $demo_dir . 'content.xml',
			'import_preview_image_url'   => $img_dir . 'demo-visa.png',
			'import_notice'              => esc_html__(
				'Sets up the dedicated Visa & Immigration agency demo as your homepage with 2-Minute Eligibility Checker, Country Pathways, and 4-Step Process.',
				'bizpro-agency'
			),
		),
		array(
			'import_file_name'           => esc_html__( 'Travel & Tour Agency', 'bizpro-agency' ),
			'categories'                 => array( 'Travel & Tours' ),
			'local_import_file'          => $demo_dir . 'content.xml',
			'import_preview_image_url'   => $img_dir . 'demo-travel.png',
			'import_notice'              => esc_html__(
				'Sets up the dedicated Travel & Tour Operator demo as your homepage with Floating Search Bar, Destination Cards, Tour Packages, and Reviews.',
				'bizpro-agency'
			),
		),
		array(
			'import_file_name'           => esc_html__( 'IT Solutions & Cloud Services', 'bizpro-agency' ),
			'categories'                 => array( 'IT Solutions', 'Technology' ),
			'local_import_file'          => $demo_dir . 'content.xml',
			'import_preview_image_url'   => $img_dir . 'demo-it.png',
			'import_notice'              => esc_html__(
				'Sets up the modern IT & Software agency demo as your homepage with Tech Stack Matrix, Production Case Studies, SLA Guarantee, and Retainers.',
				'bizpro-agency'
			),
		),
		array(
			'import_file_name'           => esc_html__( 'Business & Management Consulting', 'bizpro-agency' ),
			'categories'                 => array( 'Business Consulting', 'Corporate' ),
			'local_import_file'          => $demo_dir . 'content.xml',
			'import_preview_image_url'   => $img_dir . 'demo-consulting.png',
			'import_notice'              => esc_html__(
				'Sets up the executive Business Management consulting demo as your homepage with Strategic Advisory Practices, 4-Phase Methodology, and Mandate Retainers.',
				'bizpro-agency'
			),
		),
		array(
			'import_file_name'           => esc_html__( 'Corporate Enterprise', 'bizpro-agency' ),
		array(
			'import_file_name'           => esc_html__( 'Digital Products & SaaS Store', 'bizpro-agency' ),
			'categories'                 => array( 'eCommerce', 'Digital Products', 'SaaS' ),
			'local_import_file'          => $demo_dir . 'content.xml',
			'import_preview_image_url'   => $img_dir . 'demo-digital.png',
			'import_notice'              => esc_html__(
				'Sets up the high-converting eCommerce store for selling software, templates, UI kits, eBooks, and digital licenses with Bento grid.',
				'bizpro-agency'
			),
		),

			'categories'                 => array( 'Corporate', 'Enterprise' ),
			'local_import_file'          => $demo_dir . 'content.xml',
			'import_preview_image_url'   => $img_dir . 'demo-corporate.png',
			'import_notice'              => esc_html__(
				'Sets up the institutional Corporate agency demo with Enterprise Capabilities, Global Footprint, and Boardroom Governance.',
				'bizpro-agency'
			),
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'bizpro_agency_ocdi_import_files' );
add_filter( 'ocdi/import_files',    'bizpro_agency_ocdi_import_files' );

/**
 * After import: dynamically assign homepage, menu, and tagline according to the chosen niche demo.
 *
 * @param array $selected_import Selected import data.
 */
function bizpro_agency_ocdi_after_import( $selected_import ) {
	if ( function_exists( 'bizpro_agency_create_essential_pages' ) ) {
		bizpro_agency_create_essential_pages();
	}
	$demo_name = isset( $selected_import['import_file_name'] ) ? $selected_import['import_file_name'] : '';

	update_option( 'show_on_front', 'page' );

	if ( false !== strpos( $demo_name, 'Visa' ) ) {
		// 1. Visa Demo
		$target = get_page_by_path( 'visa-immigration' );
		if ( ! $target ) { $target = get_page_by_title( 'Visa & Immigration' ); }
		if ( $target ) {
			update_option( 'page_on_front', $target->ID );
		}
		update_option( 'blogdescription', __( 'Premier Legal Visa & Immigration Consultancy', 'bizpro-agency' ) );

		$visa_menu = get_term_by( 'name', 'Visa Navigation', 'nav_menu' );
		if ( ! $visa_menu ) { $visa_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' ); }
		if ( $visa_menu ) {
			set_theme_mod( 'nav_menu_locations', array( 'primary' => $visa_menu->term_id, 'menu_visa' => $visa_menu->term_id ) );
		}
	} elseif ( false !== strpos( $demo_name, 'Travel' ) ) {
		// 2. Travel Demo
		$target = get_page_by_path( 'travel-agency' );
		if ( ! $target ) { $target = get_page_by_title( 'Travel Agency' ); }
		if ( $target ) {
			update_option( 'page_on_front', $target->ID );
		}
		update_option( 'blogdescription', __( 'Verified Global Tours & Holiday Itineraries', 'bizpro-agency' ) );

		$travel_menu = get_term_by( 'name', 'Travel Navigation', 'nav_menu' );
		if ( ! $travel_menu ) { $travel_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' ); }
		if ( $travel_menu ) {
			set_theme_mod( 'nav_menu_locations', array( 'primary' => $travel_menu->term_id, 'menu_travel' => $travel_menu->term_id ) );
		}
	} elseif ( false !== strpos( $demo_name, 'IT Solutions' ) ) {
		// 3. IT Solutions Demo
		$target = get_page_by_path( 'it-solutions' );
		if ( ! $target ) { $target = get_page_by_title( 'IT Solutions' ); }
		if ( $target ) {
			update_option( 'page_on_front', $target->ID );
		}
		update_option( 'blogdescription', __( 'Enterprise Cloud Architecture, DevOps & Custom Software', 'bizpro-agency' ) );

		$it_menu = get_term_by( 'name', 'IT Navigation', 'nav_menu' );
		if ( ! $it_menu ) { $it_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' ); }
		if ( $it_menu ) {
			set_theme_mod( 'nav_menu_locations', array( 'primary' => $it_menu->term_id, 'menu_it' => $it_menu->term_id ) );
		}
	} elseif ( false !== strpos( $demo_name, 'Consulting' ) ) {
		// 4. Consulting Demo
		$target = get_page_by_path( 'business-consulting' );
		if ( ! $target ) { $target = get_page_by_title( 'Business Consulting' ); }
		if ( $target ) {
			update_option( 'page_on_front', $target->ID );
		}
		update_option( 'blogdescription', __( 'Strategic Management & Corporate Advisory', 'bizpro-agency' ) );

		$cons_menu = get_term_by( 'name', 'Consulting Navigation', 'nav_menu' );
		if ( ! $cons_menu ) { $cons_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' ); }
		if ( $cons_menu ) {
			set_theme_mod( 'nav_menu_locations', array( 'primary' => $cons_menu->term_id, 'menu_consulting' => $cons_menu->term_id ) );
		}
	} elseif ( false !== strpos( $demo_name, 'Corporate' ) ) {
		// 5. Corporate Demo
		$target = get_page_by_path( 'corporate' );
		if ( ! $target ) { $target = get_page_by_title( 'Corporate' ); }
		if ( $target ) {
			update_option( 'page_on_front', $target->ID );
		}
		update_option( 'blogdescription', __( 'Institutional Corporate Solutions & Governance', 'bizpro-agency' ) );

		$corp_menu = get_term_by( 'name', 'Corporate Navigation', 'nav_menu' );
		if ( ! $corp_menu ) { $corp_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' ); }
		if ( $corp_menu ) {
			set_theme_mod( 'nav_menu_locations', array( 'primary' => $corp_menu->term_id, 'menu_corporate' => $corp_menu->term_id ) );
		}
	} else {
		// 6. Default Flagship Agency
		$target = get_page_by_path( 'home' );
		if ( ! $target ) { $target = get_page_by_title( 'Home' ); }
		if ( $target ) {
			update_option( 'page_on_front', $target->ID );
		}
		update_option( 'blogdescription', __( 'Premier Business, Visa & Tech Consulting', 'bizpro-agency' ) );

		$main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
		if ( $main_menu ) {
			set_theme_mod( 'nav_menu_locations', array( 'primary' => $main_menu->term_id ) );
		}
	}

	$blog_page = get_page_by_path( 'blog' );
	if ( $blog_page ) {
		update_option( 'page_for_posts', $blog_page->ID );
	}

	// Seed Customizer defaults
	$defaults = bizpro_agency_defaults();
	foreach ( $defaults as $key => $val ) {
		$current = get_theme_mod( $key, null );
		if ( null === $current || '' === $current ) {
			set_theme_mod( $key, $val );
		}
	}
}
add_action( 'pt-ocdi/after_import', 'bizpro_agency_ocdi_after_import' );
add_action( 'ocdi/after_import',    'bizpro_agency_ocdi_after_import' );

/**
 * Disable OCDI's default branding notice for a cleaner ThemeForest-grade UI.
 */
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
add_filter( 'ocdi/disable_pt_branding',    '__return_true' );
