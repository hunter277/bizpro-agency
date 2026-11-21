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
/**
 * Helper function to create or populate a dedicated navigation menu for a niche demo.
 */
function bizpro_agency_setup_demo_nav_menu( $menu_name, $items ) {
	$menu_exists = wp_get_nav_menu_object( $menu_name );
	if ( $menu_exists ) {
		wp_delete_nav_menu( $menu_exists->term_id );
	}
	$menu_id = wp_create_nav_menu( $menu_name );
	if ( ! is_wp_error( $menu_id ) ) {
		foreach ( $items as $it ) {
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'   => $it['title'],
				'menu-item-url'     => $it['url'],
				'menu-item-status'  => 'publish',
				'menu-item-type'    => 'custom',
			) );
		}
		// Assign to primary location
		$locations = get_theme_mod( 'nav_menu_locations', array() );
		$locations['primary'] = $menu_id;
		set_theme_mod( 'nav_menu_locations', $locations );
	}
}

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
		// 1. Visa & Immigration Demo
		$target = get_page_by_path( 'visa-immigration' );
		if ( ! $target ) { $target = get_page_by_title( 'Visa & Immigration' ); }
		if ( $target ) { update_option( 'page_on_front', $target->ID ); }
		update_option( 'blogdescription', __( 'Premier Legal Visa & Immigration Consultancy', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_text', __( 'Free Assessment', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_link', home_url( '/contact/' ) );

		bizpro_agency_setup_demo_nav_menu( 'Visa Navigation', array(
			array( 'title' => 'Home', 'url' => home_url( '/' ) ),
			array( 'title' => 'Visa Pathways', 'url' => home_url( '/visa-search/' ) ),
			array( 'title' => 'Eligibility Check', 'url' => home_url( '/contact/' ) ),
			array( 'title' => 'Case Studies', 'url' => home_url( '/case-studies/' ) ),
			array( 'title' => 'FAQs', 'url' => home_url( '/faq/' ) ),
			array( 'title' => 'Contact Us', 'url' => home_url( '/contact/' ) ),
		) );

	} elseif ( false !== strpos( $demo_name, 'Travel' ) ) {
		// 2. Travel & Tour Demo
		$target = get_page_by_path( 'travel-agency' );
		if ( ! $target ) { $target = get_page_by_title( 'Travel Agency' ); }
		if ( $target ) { update_option( 'page_on_front', $target->ID ); }
		update_option( 'blogdescription', __( 'Verified Global Tours & Holiday Itineraries', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_text', __( 'Book a Tour', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_link', home_url( '/tour-packages/' ) );

		bizpro_agency_setup_demo_nav_menu( 'Travel Navigation', array(
			array( 'title' => 'Home', 'url' => home_url( '/' ) ),
			array( 'title' => 'Tour Packages', 'url' => home_url( '/tour-packages/' ) ),
			array( 'title' => 'Case Studies', 'url' => home_url( '/case-studies/' ) ),
			array( 'title' => 'Pricing & Plans', 'url' => home_url( '/pricing/' ) ),
			array( 'title' => 'FAQs', 'url' => home_url( '/faq/' ) ),
			array( 'title' => 'Contact Us', 'url' => home_url( '/contact/' ) ),
		) );

	} elseif ( false !== strpos( $demo_name, 'IT Solutions' ) ) {
		// 3. IT Solutions Demo
		$target = get_page_by_path( 'it-solutions' );
		if ( ! $target ) { $target = get_page_by_title( 'IT Solutions' ); }
		if ( $target ) { update_option( 'page_on_front', $target->ID ); }
		update_option( 'blogdescription', __( 'Enterprise Cloud Architecture, DevOps & Custom Software', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_text', __( 'Architecture Review', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_link', home_url( '/contact/' ) );

		bizpro_agency_setup_demo_nav_menu( 'IT Solutions Navigation', array(
			array( 'title' => 'Home', 'url' => home_url( '/' ) ),
			array( 'title' => 'Services', 'url' => home_url( '/services/' ) ),
			array( 'title' => 'Case Studies', 'url' => home_url( '/case-studies/' ) ),
			array( 'title' => 'Pricing & SLA', 'url' => home_url( '/pricing/' ) ),
			array( 'title' => 'Leadership', 'url' => home_url( '/team/' ) ),
			array( 'title' => 'Contact Us', 'url' => home_url( '/contact/' ) ),
		) );

	} elseif ( false !== strpos( $demo_name, 'Digital' ) || false !== strpos( $demo_name, 'SaaS' ) ) {
		// 4. Digital Store & SaaS Demo
		$target = get_page_by_path( 'digital-store' );
		if ( ! $target ) { $target = get_page_by_title( 'Digital Products & SaaS Store' ); }
		if ( $target ) { update_option( 'page_on_front', $target->ID ); }
		update_option( 'blogdescription', __( 'Digital Software, UI Kits & SaaS Products', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_text', __( 'All-Access Pass', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_link', home_url( '/pricing/' ) );

		bizpro_agency_setup_demo_nav_menu( 'Digital Store Navigation', array(
			array( 'title' => 'Home', 'url' => home_url( '/' ) ),
			array( 'title' => 'Bento Features', 'url' => home_url( '/#features' ) ),
			array( 'title' => 'Pricing Plans', 'url' => home_url( '/pricing/' ) ),
			array( 'title' => 'Case Studies', 'url' => home_url( '/case-studies/' ) ),
			array( 'title' => 'FAQs', 'url' => home_url( '/faq/' ) ),
			array( 'title' => 'Contact Us', 'url' => home_url( '/contact/' ) ),
		) );

	} elseif ( false !== strpos( $demo_name, 'Consulting' ) ) {
		// 5. Consulting Demo
		$target = get_page_by_path( 'business-consulting' );
		if ( ! $target ) { $target = get_page_by_title( 'Business Consulting' ); }
		if ( $target ) { update_option( 'page_on_front', $target->ID ); }
		update_option( 'blogdescription', __( 'Strategic Management & Corporate Advisory', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_text', __( 'Executive Briefing', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_link', home_url( '/contact/' ) );

		bizpro_agency_setup_demo_nav_menu( 'Consulting Navigation', array(
			array( 'title' => 'Home', 'url' => home_url( '/' ) ),
			array( 'title' => 'Advisory Services', 'url' => home_url( '/services/' ) ),
			array( 'title' => 'Client Impact', 'url' => home_url( '/case-studies/' ) ),
			array( 'title' => 'Pricing Tiers', 'url' => home_url( '/pricing/' ) ),
			array( 'title' => 'Our Team', 'url' => home_url( '/team/' ) ),
			array( 'title' => 'Contact Us', 'url' => home_url( '/contact/' ) ),
		) );

	} elseif ( false !== strpos( $demo_name, 'Corporate' ) ) {
		// 6. Corporate Enterprise Demo
		$target = get_page_by_path( 'corporate' );
		if ( ! $target ) { $target = get_page_by_title( 'Corporate Enterprise' ); }
		if ( $target ) { update_option( 'page_on_front', $target->ID ); }
		update_option( 'blogdescription', __( 'Institutional Corporate Solutions & Governance', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_text', __( 'Corporate Inquiries', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_link', home_url( '/contact/' ) );

		bizpro_agency_setup_demo_nav_menu( 'Corporate Navigation', array(
			array( 'title' => 'Home', 'url' => home_url( '/' ) ),
			array( 'title' => 'Enterprise Solutions', 'url' => home_url( '/services/' ) ),
			array( 'title' => 'Portfolio', 'url' => home_url( '/case-studies/' ) ),
			array( 'title' => 'Leadership', 'url' => home_url( '/team/' ) ),
			array( 'title' => 'FAQs', 'url' => home_url( '/faq/' ) ),
			array( 'title' => 'Contact Us', 'url' => home_url( '/contact/' ) ),
		) );

	} else {
		// 7. Flagship Multi-Purpose Agency
		$target = get_page_by_path( 'home' );
		if ( ! $target ) { $target = get_page_by_title( 'Home' ); }
		if ( $target ) { update_option( 'page_on_front', $target->ID ); }
		update_option( 'blogdescription', __( 'Premier Business, Visa & Tech Consulting', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_text', __( 'Book a Free Consultation', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_link', home_url( '/contact/' ) );

		bizpro_agency_setup_demo_nav_menu( 'Primary Menu', array(
			array( 'title' => 'Home', 'url' => home_url( '/' ) ),
			array( 'title' => 'About Us', 'url' => home_url( '/about-us/' ) ),
			array( 'title' => 'Services', 'url' => home_url( '/services/' ) ),
			array( 'title' => 'Case Studies', 'url' => home_url( '/case-studies/' ) ),
			array( 'title' => 'Pricing', 'url' => home_url( '/pricing/' ) ),
			array( 'title' => 'FAQs', 'url' => home_url( '/faq/' ) ),
			array( 'title' => 'Contact Us', 'url' => home_url( '/contact/' ) ),
		) );
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
