<?php
/**
 * One Click Demo Import (OCDI) integration.
 *
 * Every demo is a self-contained content pack in demo-data/<key>/content.xml with its own
 * homepage, inner pages (About, Services, Pricing, FAQ, Contact, legal pages), blog posts and menus,
 * so each demo can be imported on its own. Compatible with OCDI v2 (pt-ocdi/*) and v3 (ocdi/*).
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Demo definitions.
 *
 * @return array[] Keyed by demo key.
 */
function bizpro_agency_get_demos() {
	return array(
		'default'    => array(
			'name'   => __( 'Main Agency (Multi-Purpose)', 'bizpro-agency' ),
			'cats'   => array( 'Agency', 'Multi-Purpose' ),
			'image'  => 'demo-main.jpg',
			'notice' => __( 'Flagship multi-purpose agency: services, case studies, team, pricing, FAQ and contact pages.', 'bizpro-agency' ),
			'desc'   => __( 'Premier Business, Visa & Tech Consulting', 'bizpro-agency' ),
			'cta'    => __( 'Book a Free Consultation', 'bizpro-agency' ),
			'cta_to' => 'contact',
		),
		'visa'       => array(
			'name'   => __( 'Visa & Immigration Consultancy', 'bizpro-agency' ),
			'cats'   => array( 'Visa & Immigration', 'Consultancy' ),
			'image'  => 'demo-visa.jpg',
			'notice' => __( 'Visa and immigration consultancy: eligibility checker, country pathways, case studies and FAQ.', 'bizpro-agency' ),
			'desc'   => __( 'Premier Legal Visa & Immigration Consultancy', 'bizpro-agency' ),
			'cta'    => __( 'Free Assessment', 'bizpro-agency' ),
			'cta_to' => 'contact',
		),
		'travel'     => array(
			'name'   => __( 'Travel & Tour Agency', 'bizpro-agency' ),
			'cats'   => array( 'Travel & Tours' ),
			'image'  => 'demo-travel.jpg',
			'notice' => __( 'Travel and tour operator: destinations, tour packages, reviews and booking enquiries.', 'bizpro-agency' ),
			'desc'   => __( 'Verified Global Tours & Holiday Itineraries', 'bizpro-agency' ),
			'cta'    => __( 'Book a Tour', 'bizpro-agency' ),
			'cta_to' => 'tour-packages',
		),
		'it'         => array(
			'name'   => __( 'IT Solutions & Cloud Services', 'bizpro-agency' ),
			'cats'   => array( 'IT Solutions', 'Technology' ),
			'image'  => 'demo-it.jpg',
			'notice' => __( 'IT and cloud services agency: tech stack, production case studies, SLA and retainers.', 'bizpro-agency' ),
			'desc'   => __( 'Enterprise Cloud Architecture, DevOps & Custom Software', 'bizpro-agency' ),
			'cta'    => __( 'Architecture Review', 'bizpro-agency' ),
			'cta_to' => 'contact',
		),
		'consulting' => array(
			'name'   => __( 'Business & Management Consulting', 'bizpro-agency' ),
			'cats'   => array( 'Business Consulting', 'Corporate' ),
			'image'  => 'demo-consulting.jpg',
			'notice' => __( 'Management consulting: advisory practices, methodology, client impact and retainers.', 'bizpro-agency' ),
			'desc'   => __( 'Strategic Management & Corporate Advisory', 'bizpro-agency' ),
			'cta'    => __( 'Executive Briefing', 'bizpro-agency' ),
			'cta_to' => 'contact',
		),
		'corporate'  => array(
			'name'   => __( 'Corporate Enterprise', 'bizpro-agency' ),
			'cats'   => array( 'Corporate', 'Enterprise' ),
			'image'  => 'demo-corporate.jpg',
			'notice' => __( 'Institutional corporate agency: capabilities, global footprint, governance and leadership.', 'bizpro-agency' ),
			'desc'   => __( 'Institutional Corporate Solutions & Governance', 'bizpro-agency' ),
			'cta'    => __( 'Corporate Inquiries', 'bizpro-agency' ),
			'cta_to' => 'contact',
		),
		'digital'    => array(
			'name'     => __( 'Digital Products & SaaS Store', 'bizpro-agency' ),
			'cats'     => array( 'eCommerce', 'Digital Products', 'SaaS' ),
			'image'    => 'demo-digital.jpg',
			'notice'   => __( 'Digital products and SaaS store. Requires the WooCommerce plugin for products, cart and checkout.', 'bizpro-agency' ),
			'desc'     => __( 'Digital Software, UI Kits & SaaS Products', 'bizpro-agency' ),
			'cta'      => __( 'All-Access Pass', 'bizpro-agency' ),
			'cta_to'   => 'pricing',
			'requires' => 'woocommerce',
			'accent'   => '#4f46e5',
		),
	);
}

/**
 * Register the demos with One Click Demo Import.
 *
 * @return array
 */
function bizpro_agency_ocdi_import_files() {
	$files = array();
	foreach ( bizpro_agency_get_demos() as $key => $demo ) {
		$notice = $demo['notice'];
		if ( ! empty( $demo['requires'] ) && ! class_exists( 'WooCommerce' ) ) {
			$notice .= ' ' . __( 'WooCommerce is not active yet: install and activate it before importing.', 'bizpro-agency' );
		}
		$files[] = array(
			'import_file_name'         => $demo['name'],
			'categories'               => $demo['cats'],
			'local_import_file'        => get_template_directory() . '/demo-data/' . $key . '/content.xml',
			'import_preview_image_url' => get_template_directory_uri() . '/assets/images/demos/' . $demo['image'],
			'import_notice'            => $notice,
			'preview_url'              => '',
		);
	}
	return $files;
}
add_filter( 'pt-ocdi/import_files', 'bizpro_agency_ocdi_import_files' );
add_filter( 'ocdi/import_files', 'bizpro_agency_ocdi_import_files' );

/**
 * Find the demo key that matches an OCDI selection.
 *
 * @param array $selected_import Selected import data.
 * @return string Demo key or empty string.
 */
function bizpro_agency_ocdi_match_demo( $selected_import ) {
	$name = isset( $selected_import['import_file_name'] ) ? $selected_import['import_file_name'] : '';
	foreach ( bizpro_agency_get_demos() as $key => $demo ) {
		if ( $demo['name'] === $name ) {
			return $key;
		}
	}
	return '';
}

/**
 * Stop demos that need a plugin (WooCommerce) before any content is written.
 *
 * @param array $selected_import Selected import data.
 */
function bizpro_agency_ocdi_check_required_plugins( $selected_import ) {
	$key   = bizpro_agency_ocdi_match_demo( $selected_import );
	$demos = bizpro_agency_get_demos();
	if ( ! $key || empty( $demos[ $key ]['requires'] ) || class_exists( 'WooCommerce' ) ) {
		return;
	}

	wp_die(
		sprintf(
			'<h1>%1$s</h1><p>%2$s</p><p><a class="button button-primary" href="%3$s">%4$s</a> <a class="button" href="%5$s">%6$s</a></p>',
			esc_html__( 'WooCommerce is required', 'bizpro-agency' ),
			esc_html__( 'This demo sells digital products, so WooCommerce must be installed and active before it is imported.', 'bizpro-agency' ),
			esc_url( admin_url( 'plugin-install.php?s=woocommerce&tab=search&type=term' ) ),
			esc_html__( 'Install WooCommerce', 'bizpro-agency' ),
			esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ),
			esc_html__( 'Back to demos', 'bizpro-agency' )
		),
		esc_html__( 'Required plugin missing', 'bizpro-agency' ),
		array(
			'response'  => 200,
			'back_link' => true,
		)
	);
}
add_action( 'pt-ocdi/before_content_import', 'bizpro_agency_ocdi_check_required_plugins' );
add_action( 'ocdi/before_content_import', 'bizpro_agency_ocdi_check_required_plugins' );

/**
 * Find an imported page by demo and page key.
 *
 * @param string $demo Demo key.
 * @param string $page Page key (home, blog, contact ...).
 * @return int Page ID or 0.
 */
function bizpro_agency_find_demo_page( $demo, $page ) {
	$found = get_posts(
		array(
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
			'fields'         => 'ids',
			'meta_query'     => array( // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_query
				'relation' => 'AND',
				array(
					'key'   => '_bizpro_demo',
					'value' => $demo,
				),
				array(
					'key'   => '_bizpro_page_key',
					'value' => $page,
				),
			),
		)
	);
	return $found ? (int) $found[0] : 0;
}

/**
 * After import: set homepage, posts page, tagline, header button and menus for the chosen demo.
 *
 * @param array $selected_import Selected import data.
 */
function bizpro_agency_ocdi_after_import( $selected_import ) {
	$key   = bizpro_agency_ocdi_match_demo( $selected_import );
	$demos = bizpro_agency_get_demos();
	if ( ! $key ) {
		return;
	}
	$demo = $demos[ $key ];

	$home = bizpro_agency_find_demo_page( $key, 'home' );
	if ( $home ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $home );
	}
	$blog = bizpro_agency_find_demo_page( $key, 'blog' );
	if ( $blog ) {
		update_option( 'page_for_posts', $blog );
	}

	update_option( 'blogdescription', $demo['desc'] );
	update_option( 'bizpro_agency_active_demo', 'default' === $key ? '' : $key );

	set_theme_mod( 'header_cta_text', $demo['cta'] );
	$cta_page = bizpro_agency_find_demo_page( $key, $demo['cta_to'] );
	if ( $cta_page ) {
		set_theme_mod( 'header_cta_link', get_permalink( $cta_page ) );
	}
	if ( ! empty( $demo['accent'] ) ) {
		set_theme_mod( 'primary_color', $demo['accent'] );
	}

	// Menus: primary + the demo-specific location, and the footer menu.
	$locations = get_theme_mod( 'nav_menu_locations', array() );
	$primary   = get_term_by( 'slug', $key . '-primary-menu', 'nav_menu' );
	$footer    = get_term_by( 'slug', $key . '-footer-menu', 'nav_menu' );
	$context   = array(
		'visa'       => 'menu_visa',
		'travel'     => 'menu_travel',
		'it'         => 'menu_it',
		'consulting' => 'menu_consulting',
		'corporate'  => 'menu_corporate',
		'digital'    => 'menu_digital',
	);
	if ( $primary ) {
		$locations['primary'] = $primary->term_id;
		if ( isset( $context[ $key ] ) ) {
			$locations[ $context[ $key ] ] = $primary->term_id;
		}
	}
	if ( $footer ) {
		$locations['footer'] = $footer->term_id;
	}
	set_theme_mod( 'nav_menu_locations', $locations );

	flush_rewrite_rules();
}
add_action( 'pt-ocdi/after_import', 'bizpro_agency_ocdi_after_import' );
add_action( 'ocdi/after_import', 'bizpro_agency_ocdi_after_import' );

// Keep the importer UI clean.
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
add_filter( 'ocdi/disable_pt_branding', '__return_true' );
