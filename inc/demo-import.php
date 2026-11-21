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
			'categories'                 => array( 'Corporate', 'Enterprise' ),
			'local_import_file'          => $demo_dir . 'content.xml',
			'import_preview_image_url'   => $img_dir . 'demo-corporate.png',
			'import_notice'              => esc_html__(
				'Sets up the institutional Corporate agency demo with Enterprise Capabilities, Global Footprint, and Boardroom Governance.',
				'bizpro-agency'
			),
		),
		array(
			'import_file_name'           => esc_html__( 'Digital Products & SaaS Store', 'bizpro-agency' ),
			'categories'                 => array( 'eCommerce', 'Digital Products', 'SaaS' ),
			'local_import_file'          => file_exists( $demo_dir . 'content-ecommerce.xml' ) ? $demo_dir . 'content-ecommerce.xml' : $demo_dir . 'content.xml',
			'import_preview_image_url'   => $img_dir . 'demo-digital.png',
			'import_notice'              => class_exists( 'WooCommerce' )
				? esc_html__( '✅ [WooCommerce Active] Ready to import digital products, cart, checkout flows, and Bento grid.', 'bizpro-agency' )
				: esc_html__( '⚠️ [REQUIRED PLUGIN] This demo requires WooCommerce to sell digital downloads and handle checkout. Please install and activate WooCommerce before importing.', 'bizpro-agency' ),
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'bizpro_agency_ocdi_import_files' );
add_filter( 'ocdi/import_files',    'bizpro_agency_ocdi_import_files' );

/**
 * Enforce plugin dependencies before content import starts.
 *
 * Prevents importing eCommerce / Digital store demos if WooCommerce is not installed and active.
 *
 * @param array $selected_import Selected demo configuration.
 */
function bizpro_agency_ocdi_check_required_plugins( $selected_import ) {
	$demo_name  = isset( $selected_import['import_file_name'] ) ? $selected_import['import_file_name'] : '';
	$categories = isset( $selected_import['categories'] ) ? (array) $selected_import['categories'] : array();

	$is_ecommerce = in_array( 'eCommerce', $categories, true )
		|| false !== stripos( $demo_name, 'eCommerce' )
		|| false !== stripos( $demo_name, 'Digital Products' )
		|| false !== stripos( $demo_name, 'SaaS Store' );

	if ( $is_ecommerce && ! class_exists( 'WooCommerce' ) ) {
		$install_url = admin_url( 'plugin-install.php?s=woocommerce&tab=search&type=term' );
		$back_url    = admin_url( 'themes.php?page=one-click-demo-import' );

		wp_die(
			sprintf(
				'<div style="max-width:560px;margin:50px auto;padding:36px;background:#ffffff;border-radius:18px;box-shadow:0 20px 40px rgba(0,0,0,0.08);font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,sans-serif;text-align:center;">' .
				'<div style="font-size:54px;line-height:1;margin-bottom:16px;">🛒</div>' .
				'<h2 style="color:#ef4444;font-size:24px;font-weight:800;margin:0 0 12px;">%s</h2>' .
				'<p style="color:#475569;font-size:15px;line-height:1.6;margin:0 0 24px;">%s</p>' .
				'<div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">' .
				'<a href="%s" class="button button-primary button-hero" style="font-weight:700;padding:12px 26px;height:auto;line-height:1.4;border-radius:8px;">%s</a>' .
				'<a href="%s" class="button button-hero" style="padding:12px 24px;height:auto;line-height:1.4;border-radius:8px;">%s</a>' .
				'</div>' .
				'</div>',
				esc_html__( 'WooCommerce Plugin Required!', 'bizpro-agency' ),
				sprintf(
					/* translators: %s: demo name */
					esc_html__( 'The "%s" demo strictly requires the WooCommerce plugin to generate digital products, configure cart & checkout flows, and manage orders. Please install and activate WooCommerce before importing this demo.', 'bizpro-agency' ),
					esc_html( $demo_name )
				),
				esc_url( $install_url ),
				esc_html__( '⚡ Install WooCommerce Now', 'bizpro-agency' ),
				esc_url( $back_url ),
				esc_html__( '← Back to Demos', 'bizpro-agency' )
			),
			esc_html__( 'Required Plugin Missing', 'bizpro-agency' ),
			array( 'response' => 200, 'back_link' => true )
		);
	}
}
add_action( 'pt-ocdi/before_content_import', 'bizpro_agency_ocdi_check_required_plugins' );
add_action( 'ocdi/before_content_import',    'bizpro_agency_ocdi_check_required_plugins' );

/**
 * Replace the placeholder demo domain in imported page content and menu links.
 *
 * The WXR importer does not reliably rewrite internal links in post content.
 */
function bizpro_agency_rewrite_demo_urls() {
	$replacements = array(
		'https://example.com' => untrailingslashit( home_url() ),
		'http://example.com'  => untrailingslashit( home_url() ),
	);

	$items = get_posts(
		array(
			'post_type'      => 'any',
			'post_status'    => 'any',
			'posts_per_page' => -1,
			'fields'         => 'all',
		)
	);

	foreach ( $items as $item ) {
		$updated = str_replace( array_keys( $replacements ), array_values( $replacements ), $item->post_content );
		if ( $updated !== $item->post_content ) {
			wp_update_post(
				array(
					'ID'           => $item->ID,
					'post_content' => $updated,
				)
			);
		}
	}

	$menu_items = get_posts(
		array(
			'post_type'      => 'nav_menu_item',
			'post_status'    => 'any',
			'posts_per_page' => -1,
		)
	);

	foreach ( $menu_items as $menu_item ) {
		$url = get_post_meta( $menu_item->ID, '_menu_item_url', true );
		if ( is_string( $url ) && '' !== $url ) {
			$updated_url = str_replace( array_keys( $replacements ), array_values( $replacements ), $url );
			if ( $updated_url !== $url ) {
				update_post_meta( $menu_item->ID, '_menu_item_url', esc_url_raw( $updated_url ) );
			}
		}
	}
}

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
	bizpro_agency_rewrite_demo_urls();
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

	} elseif ( false !== strpos( $demo_name, 'Digital' ) || false !== strpos( $demo_name, 'SaaS' ) ) {
		// 7. Digital Products & SaaS Store Demo
		$target = get_page_by_path( 'digital-store' );
		if ( ! $target ) { $target = get_page_by_title( 'Digital Store & SaaS' ); }
		if ( $target ) { update_option( 'page_on_front', $target->ID ); }
		update_option( 'blogdescription', __( 'High-Velocity Digital Products, Software & SaaS Store', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_text', __( 'Get All-Access Pass', 'bizpro-agency' ) );
		set_theme_mod( 'header_cta_link', home_url( '/pricing/' ) );
		set_theme_mod( 'color_primary', '#6366f1' );

		bizpro_agency_setup_demo_nav_menu( 'Digital Store Navigation', array(
			array( 'title' => 'Home', 'url' => home_url( '/' ) ),
			array( 'title' => 'Bento Features', 'url' => '#features' ),
			array( 'title' => 'Pricing Plans', 'url' => home_url( '/pricing/' ) ),
			array( 'title' => 'Case Studies', 'url' => home_url( '/case-studies/' ) ),
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
