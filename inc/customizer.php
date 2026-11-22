<?php
/**
 * Customizer settings for BizPro Agency.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register all Customizer panels, sections and controls.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function bizpro_agency_customize_register( $wp_customize ) {
	$d = bizpro_agency_defaults();

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'bizpro_agency_partial_blogname',
			)
		);
	}

	// Main Panel
	$wp_customize->add_panel(
		'bizpro_agency_panel',
		array(
			'title'    => esc_html__( 'BizPro Agency Options', 'bizpro-agency' ),
			'priority' => 30,
		)
	);

	/* =========================================================================
	 * 1. Brand Colour
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_brand',
		array(
			'title' => esc_html__( 'Brand Colour', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'primary_color',
		array(
			'default'           => $d['primary_color'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'primary_color',
			array(
				'label'   => esc_html__( 'Primary Brand Colour', 'bizpro-agency' ),
				'section' => 'bizpro_agency_brand',
			)
		)
	);

	/* =========================================================================
	 * 2. Top Bar
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_topbar',
		array(
			'title' => esc_html__( 'Top Bar', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'topbar_enable',
		array(
			'default'           => $d['topbar_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'topbar_enable',
		array(
			'label'   => esc_html__( 'Show top bar', 'bizpro-agency' ),
			'section' => 'bizpro_agency_topbar',
			'type'    => 'checkbox',
		)
	);
	$wp_customize->add_setting(
		'show_demo_switcher',
		array(
			'default'           => false,
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'show_demo_switcher',
		array(
			'label'       => esc_html__( 'Show demo switcher (showcase sites only)', 'bizpro-agency' ),
			'description' => esc_html__( 'Adds an "All Demos" menu and floating demo bar. Leave off on a live client site.', 'bizpro-agency' ),
			'section'     => 'bizpro_agency_topbar',
			'type'        => 'checkbox',
		)
	);
	$text_fields = array(
		'topbar_phone'   => esc_html__( 'Phone', 'bizpro-agency' ),
		'topbar_email'   => esc_html__( 'Email', 'bizpro-agency' ),
		'topbar_address' => esc_html__( 'Address', 'bizpro-agency' ),
	);
	foreach ( $text_fields as $id => $label ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $d[ $id ],
				'sanitize_callback' => 'topbar_email' === $id ? 'sanitize_email' : 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			$id,
			array(
				'label'   => $label,
				'section' => 'bizpro_agency_topbar',
				'type'    => 'topbar_email' === $id ? 'email' : 'text',
			)
		);
	}

	/* =========================================================================
	 * 3. Header Button
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_header',
		array(
			'title' => esc_html__( 'Header Button', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'header_cta_text',
		array(
			'default'           => $d['header_cta_text'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'header_cta_text',
		array(
			'label'       => esc_html__( 'Button Text', 'bizpro-agency' ),
			'description' => esc_html__( 'Leave empty to hide the button.', 'bizpro-agency' ),
			'section'     => 'bizpro_agency_header',
			'type'        => 'text',
		)
	);
	$wp_customize->add_setting(
		'header_cta_link',
		array(
			'default'           => $d['header_cta_link'],
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'header_cta_link',
		array(
			'label'   => esc_html__( 'Button Link', 'bizpro-agency' ),
			'section' => 'bizpro_agency_header',
			'type'    => 'text',
		)
	);

	/* =========================================================================
	 * 4. Hero Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_hero',
		array(
			'title' => esc_html__( 'Hero Section', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'hero_title',
		array(
			'default'           => $d['hero_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hero_title',
		array(
			'label'   => esc_html__( 'Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_hero',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'hero_subtitle',
		array(
			'default'           => $d['hero_subtitle'],
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'hero_subtitle',
		array(
			'label'   => esc_html__( 'Subtitle', 'bizpro-agency' ),
			'section' => 'bizpro_agency_hero',
			'type'    => 'textarea',
		)
	);
	$wp_customize->add_setting(
		'hero_cta_text',
		array(
			'default'           => $d['hero_cta_text'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hero_cta_text',
		array(
			'label'   => esc_html__( 'Button Text', 'bizpro-agency' ),
			'section' => 'bizpro_agency_hero',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'hero_cta_link',
		array(
			'default'           => $d['hero_cta_link'],
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'hero_cta_link',
		array(
			'label'   => esc_html__( 'Button Link', 'bizpro-agency' ),
			'section' => 'bizpro_agency_hero',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'hero_image',
		array(
			'default'           => $d['hero_image'],
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hero_image',
			array(
				'label'       => esc_html__( 'Hero Image', 'bizpro-agency' ),
				'description' => esc_html__( 'Recommended size: 1920 x 900 px.', 'bizpro-agency' ),
				'section'     => 'bizpro_agency_hero',
			)
		)
	);

	/* =========================================================================
	 * 5. Services Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_services',
		array(
			'title' => esc_html__( 'Services Section', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'services_enable',
		array(
			'default'           => $d['services_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'services_enable',
		array(
			'label'   => esc_html__( 'Show Services Section', 'bizpro-agency' ),
			'section' => 'bizpro_agency_services',
			'type'    => 'checkbox',
		)
	);
	$wp_customize->add_setting(
		'services_eyebrow',
		array(
			'default'           => $d['services_eyebrow'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'services_eyebrow',
		array(
			'label'   => esc_html__( 'Eyebrow', 'bizpro-agency' ),
			'section' => 'bizpro_agency_services',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'services_title',
		array(
			'default'           => $d['services_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'services_title',
		array(
			'label'   => esc_html__( 'Section Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_services',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'services_subtitle',
		array(
			'default'           => $d['services_subtitle'],
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'services_subtitle',
		array(
			'label'   => esc_html__( 'Section Subtitle', 'bizpro-agency' ),
			'section' => 'bizpro_agency_services',
			'type'    => 'textarea',
		)
	);

	$icon_choices = bizpro_agency_get_icon_choices();

	for ( $i = 1; $i <= 4; $i++ ) {
		// Service Title
		$wp_customize->add_setting(
			"service_{$i}_title",
			array(
				'default'           => $d[ "service_{$i}_title" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"service_{$i}_title",
			array(
				/* translators: %d: service index */
				'label'   => sprintf( esc_html__( 'Service %d Title', 'bizpro-agency' ), $i ),
				'section' => 'bizpro_agency_services',
				'type'    => 'text',
			)
		);

		// Service Text
		$wp_customize->add_setting(
			"service_{$i}_text",
			array(
				'default'           => $d[ "service_{$i}_text" ],
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);
		$wp_customize->add_control(
			"service_{$i}_text",
			array(
				/* translators: %d: service index */
				'label'   => sprintf( esc_html__( 'Service %d Description', 'bizpro-agency' ), $i ),
				'section' => 'bizpro_agency_services',
				'type'    => 'textarea',
			)
		);

		// Service Icon
		$wp_customize->add_setting(
			"service_{$i}_icon",
			array(
				'default'           => $d[ "service_{$i}_icon" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"service_{$i}_icon",
			array(
				/* translators: %d: service index */
				'label'   => sprintf( esc_html__( 'Service %d Icon', 'bizpro-agency' ), $i ),
				'section' => 'bizpro_agency_services',
				'type'    => 'select',
				'choices' => $icon_choices,
			)
		);
	}

	/* =========================================================================
	 * 6. About Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_about',
		array(
			'title' => esc_html__( 'About Section', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'about_enable',
		array(
			'default'           => $d['about_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'about_enable',
		array(
			'label'   => esc_html__( 'Show About Section', 'bizpro-agency' ),
			'section' => 'bizpro_agency_about',
			'type'    => 'checkbox',
		)
	);
	$wp_customize->add_setting(
		'about_eyebrow',
		array(
			'default'           => $d['about_eyebrow'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'about_eyebrow',
		array(
			'label'   => esc_html__( 'Eyebrow', 'bizpro-agency' ),
			'section' => 'bizpro_agency_about',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'about_title',
		array(
			'default'           => $d['about_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'about_title',
		array(
			'label'   => esc_html__( 'Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_about',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'about_description',
		array(
			'default'           => $d['about_description'],
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_description',
		array(
			'label'   => esc_html__( 'Description', 'bizpro-agency' ),
			'section' => 'bizpro_agency_about',
			'type'    => 'textarea',
		)
	);
	$wp_customize->add_setting(
		'about_badge_number',
		array(
			'default'           => $d['about_badge_number'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'about_badge_number',
		array(
			'label'   => esc_html__( 'Badge Highlight (e.g. 12+)', 'bizpro-agency' ),
			'section' => 'bizpro_agency_about',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'about_badge_label',
		array(
			'default'           => $d['about_badge_label'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'about_badge_label',
		array(
			'label'   => esc_html__( 'Badge Label', 'bizpro-agency' ),
			'section' => 'bizpro_agency_about',
			'type'    => 'text',
		)
	);

	for ( $p = 1; $p <= 3; $p++ ) {
		$wp_customize->add_setting(
			"about_point_{$p}",
			array(
				'default'           => $d[ "about_point_{$p}" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"about_point_{$p}",
			array(
				/* translators: %d: point number */
				'label'   => sprintf( esc_html__( 'Key Point %d', 'bizpro-agency' ), $p ),
				'section' => 'bizpro_agency_about',
				'type'    => 'text',
			)
		);
	}

	/* =========================================================================
	 * 7. Stats Counters
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_stats',
		array(
			'title' => esc_html__( 'Stats Counters', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'stats_enable',
		array(
			'default'           => $d['stats_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'stats_enable',
		array(
			'label'   => esc_html__( 'Show Stats Section', 'bizpro-agency' ),
			'section' => 'bizpro_agency_stats',
			'type'    => 'checkbox',
		)
	);

	for ( $s = 1; $s <= 4; $s++ ) {
		$wp_customize->add_setting(
			"stat_{$s}_number",
			array(
				'default'           => $d[ "stat_{$s}_number" ],
				'sanitize_callback' => 'absint',
			)
		);
		$wp_customize->add_control(
			"stat_{$s}_number",
			array(
				/* translators: %d: stat index */
				'label'   => sprintf( esc_html__( 'Stat %d Number', 'bizpro-agency' ), $s ),
				'section' => 'bizpro_agency_stats',
				'type'    => 'number',
			)
		);
		$wp_customize->add_setting(
			"stat_{$s}_suffix",
			array(
				'default'           => $d[ "stat_{$s}_suffix" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"stat_{$s}_suffix",
			array(
				/* translators: %d: stat index */
				'label'   => sprintf( esc_html__( 'Stat %d Suffix (e.g. + or %%)', 'bizpro-agency' ), $s ),
				'section' => 'bizpro_agency_stats',
				'type'    => 'text',
			)
		);
		$wp_customize->add_setting(
			"stat_{$s}_label",
			array(
				'default'           => $d[ "stat_{$s}_label" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"stat_{$s}_label",
			array(
				/* translators: %d: stat index */
				'label'   => sprintf( esc_html__( 'Stat %d Label', 'bizpro-agency' ), $s ),
				'section' => 'bizpro_agency_stats',
				'type'    => 'text',
			)
		);
	}

	/* =========================================================================
	 * 8. Testimonials Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_testimonials',
		array(
			'title' => esc_html__( 'Testimonials Section', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'testimonials_enable',
		array(
			'default'           => $d['testimonials_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'testimonials_enable',
		array(
			'label'   => esc_html__( 'Show Testimonials Section', 'bizpro-agency' ),
			'section' => 'bizpro_agency_testimonials',
			'type'    => 'checkbox',
		)
	);
	$wp_customize->add_setting(
		'testimonials_eyebrow',
		array(
			'default'           => $d['testimonials_eyebrow'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'testimonials_eyebrow',
		array(
			'label'   => esc_html__( 'Eyebrow', 'bizpro-agency' ),
			'section' => 'bizpro_agency_testimonials',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'testimonials_title',
		array(
			'default'           => $d['testimonials_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'testimonials_title',
		array(
			'label'   => esc_html__( 'Section Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_testimonials',
			'type'    => 'text',
		)
	);

	for ( $t = 1; $t <= 3; $t++ ) {
		$wp_customize->add_setting(
			"testimonial_{$t}_quote",
			array(
				'default'           => $d[ "testimonial_{$t}_quote" ],
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);
		$wp_customize->add_control(
			"testimonial_{$t}_quote",
			array(
				/* translators: %d: testimonial index */
				'label'   => sprintf( esc_html__( 'Testimonial %d Quote', 'bizpro-agency' ), $t ),
				'section' => 'bizpro_agency_testimonials',
				'type'    => 'textarea',
			)
		);
		$wp_customize->add_setting(
			"testimonial_{$t}_name",
			array(
				'default'           => $d[ "testimonial_{$t}_name" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"testimonial_{$t}_name",
			array(
				/* translators: %d: testimonial index */
				'label'   => sprintf( esc_html__( 'Client %d Name', 'bizpro-agency' ), $t ),
				'section' => 'bizpro_agency_testimonials',
				'type'    => 'text',
			)
		);
		$wp_customize->add_setting(
			"testimonial_{$t}_role",
			array(
				'default'           => $d[ "testimonial_{$t}_role" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"testimonial_{$t}_role",
			array(
				/* translators: %d: testimonial index */
				'label'   => sprintf( esc_html__( 'Client %d Designation/Role', 'bizpro-agency' ), $t ),
				'section' => 'bizpro_agency_testimonials',
				'type'    => 'text',
			)
		);
	}

	/* =========================================================================
	 * 8.5. Team Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_team',
		array(
			'title' => esc_html__( 'Team Section', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'team_enable',
		array(
			'default'           => $d['team_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'team_enable',
		array(
			'label'   => esc_html__( 'Show Team Section', 'bizpro-agency' ),
			'section' => 'bizpro_agency_team',
			'type'    => 'checkbox',
		)
	);
	$wp_customize->add_setting(
		'team_eyebrow',
		array(
			'default'           => $d['team_eyebrow'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'team_eyebrow',
		array(
			'label'   => esc_html__( 'Eyebrow', 'bizpro-agency' ),
			'section' => 'bizpro_agency_team',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'team_title',
		array(
			'default'           => $d['team_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'team_title',
		array(
			'label'   => esc_html__( 'Section Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_team',
			'type'    => 'text',
		)
	);

	for ( $m = 1; $m <= 4; $m++ ) {
		$wp_customize->add_setting(
			"team_{$m}_name",
			array(
				'default'           => $d[ "team_{$m}_name" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"team_{$m}_name",
			array(
				/* translators: %d: member index */
				'label'   => sprintf( esc_html__( 'Member %d Name', 'bizpro-agency' ), $m ),
				'section' => 'bizpro_agency_team',
				'type'    => 'text',
			)
		);
		$wp_customize->add_setting(
			"team_{$m}_role",
			array(
				'default'           => $d[ "team_{$m}_role" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"team_{$m}_role",
			array(
				/* translators: %d: member index */
				'label'   => sprintf( esc_html__( 'Member %d Role', 'bizpro-agency' ), $m ),
				'section' => 'bizpro_agency_team',
				'type'    => 'text',
			)
		);
	}

	/* =========================================================================
	 * 9. CTA Banner Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_cta',
		array(
			'title' => esc_html__( 'Call to Action Banner', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'cta_enable',
		array(
			'default'           => $d['cta_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'cta_enable',
		array(
			'label'   => esc_html__( 'Show CTA Banner', 'bizpro-agency' ),
			'section' => 'bizpro_agency_cta',
			'type'    => 'checkbox',
		)
	);
	$wp_customize->add_setting(
		'cta_title',
		array(
			'default'           => $d['cta_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'cta_title',
		array(
			'label'   => esc_html__( 'Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_cta',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'cta_subtitle',
		array(
			'default'           => $d['cta_subtitle'],
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'cta_subtitle',
		array(
			'label'   => esc_html__( 'Subtitle', 'bizpro-agency' ),
			'section' => 'bizpro_agency_cta',
			'type'    => 'textarea',
		)
	);

	/* =========================================================================
	 * 10. Footer Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_footer',
		array(
			'title' => esc_html__( 'Footer', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'footer_copyright',
		array(
			'default'           => $d['footer_copyright'],
			'sanitize_callback' => 'wp_kses_post',
		)
	);
	$wp_customize->add_control(
		'footer_copyright',
		array(
			'label'       => esc_html__( 'Copyright Text', 'bizpro-agency' ),
			'description' => esc_html__( 'Use {year} to print the current year automatically.', 'bizpro-agency' ),
			'section'     => 'bizpro_agency_footer',
			'type'        => 'textarea',
		)
	);

	/* =========================================================================
	 * 11. Client Logos Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_client_logos',
		array(
			'title' => esc_html__( 'Client Logos Bar', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	// Enable toggle
	$wp_customize->add_setting(
		'client_logos_enable',
		array(
			'default'           => $d['client_logos_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'client_logos_enable',
		array(
			'label'   => esc_html__( 'Show Client Logos Bar', 'bizpro-agency' ),
			'section' => 'bizpro_agency_client_logos',
			'type'    => 'checkbox',
		)
	);
	// Title
	$wp_customize->add_setting(
		'client_logos_title',
		array(
			'default'           => $d['client_logos_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'client_logos_title',
		array(
			'label'   => esc_html__( 'Bar Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_client_logos',
			'type'    => 'text',
		)
	);
	// Logo names 1-6
	for ( $l = 1; $l <= 6; $l++ ) {
		$wp_customize->add_setting(
			"client_logo_{$l}",
			array(
				'default'           => $d[ "client_logo_{$l}" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"client_logo_{$l}",
			array(
				/* translators: %d: logo number. */
				'label'   => sprintf( esc_html__( 'Logo %d Name', 'bizpro-agency' ), $l ),
				'section' => 'bizpro_agency_client_logos',
				'type'    => 'text',
			)
		);
	}

	/* =========================================================================
	 * 12. Case Studies Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_cases',
		array(
			'title' => esc_html__( 'Case Studies', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'cases_enable',
		array(
			'default'           => $d['cases_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'cases_enable',
		array(
			'label'   => esc_html__( 'Show Case Studies Section', 'bizpro-agency' ),
			'section' => 'bizpro_agency_cases',
			'type'    => 'checkbox',
		)
	);
	$wp_customize->add_setting(
		'cases_eyebrow',
		array(
			'default'           => $d['cases_eyebrow'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'cases_eyebrow',
		array(
			'label'   => esc_html__( 'Eyebrow Text', 'bizpro-agency' ),
			'section' => 'bizpro_agency_cases',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'cases_title',
		array(
			'default'           => $d['cases_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'cases_title',
		array(
			'label'   => esc_html__( 'Section Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_cases',
			'type'    => 'text',
		)
	);
	for ( $c = 1; $c <= 3; $c++ ) {
		$wp_customize->add_setting(
			"case_{$c}_tag",
			array(
				'default'           => $d[ "case_{$c}_tag" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_setting(
			"case_{$c}_title",
			array(
				'default'           => $d[ "case_{$c}_title" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_setting(
			"case_{$c}_desc",
			array(
				'default'           => $d[ "case_{$c}_desc" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_setting(
			"case_{$c}_result",
			array(
				'default'           => $d[ "case_{$c}_result" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"case_{$c}_tag",
			array(
				'label'   => sprintf( /* translators: %d: number. */ esc_html__( 'Case %d: Tag', 'bizpro-agency' ), $c ),
				'section' => 'bizpro_agency_cases',
				'type'    => 'text',
			)
		);
		$wp_customize->add_control(
			"case_{$c}_title",
			array(
				'label'   => sprintf( /* translators: %d: number. */ esc_html__( 'Case %d: Title', 'bizpro-agency' ), $c ),
				'section' => 'bizpro_agency_cases',
				'type'    => 'text',
			)
		);
		$wp_customize->add_control(
			"case_{$c}_desc",
			array(
				'label'   => sprintf( /* translators: %d: number. */ esc_html__( 'Case %d: Description', 'bizpro-agency' ), $c ),
				'section' => 'bizpro_agency_cases',
				'type'    => 'textarea',
			)
		);
		$wp_customize->add_control(
			"case_{$c}_result",
			array(
				'label'   => sprintf( /* translators: %d: number. */ esc_html__( 'Case %d: Result Metric', 'bizpro-agency' ), $c ),
				'section' => 'bizpro_agency_cases',
				'type'    => 'text',
			)
		);
	}

	/* =========================================================================
	 * 13. Pricing Tables Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_pricing',
		array(
			'title' => esc_html__( 'Pricing Tables', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'pricing_enable',
		array(
			'default'           => $d['pricing_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'pricing_enable',
		array(
			'label'   => esc_html__( 'Show Pricing Section', 'bizpro-agency' ),
			'section' => 'bizpro_agency_pricing',
			'type'    => 'checkbox',
		)
	);
	$wp_customize->add_setting(
		'pricing_eyebrow',
		array(
			'default'           => $d['pricing_eyebrow'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'pricing_eyebrow',
		array(
			'label'   => esc_html__( 'Eyebrow Text', 'bizpro-agency' ),
			'section' => 'bizpro_agency_pricing',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'pricing_title',
		array(
			'default'           => $d['pricing_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'pricing_title',
		array(
			'label'   => esc_html__( 'Section Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_pricing',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'pricing_subtitle',
		array(
			'default'           => $d['pricing_subtitle'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'pricing_subtitle',
		array(
			'label'   => esc_html__( 'Section Subtitle', 'bizpro-agency' ),
			'section' => 'bizpro_agency_pricing',
			'type'    => 'textarea',
		)
	);
	for ( $p = 1; $p <= 3; $p++ ) {
		$keys = array( 'name', 'price', 'period', 'features', 'cta_text', 'cta_link' );
		foreach ( $keys as $key ) {
			$sanitize = ( 'features' === $key ) ? 'sanitize_textarea_field' : 'sanitize_text_field';
			$type     = ( 'features' === $key ) ? 'textarea' : 'text';
			$wp_customize->add_setting(
				"pricing_{$p}_{$key}",
				array(
					'default'           => $d[ "pricing_{$p}_{$key}" ],
					'sanitize_callback' => $sanitize,
				)
			);
			$wp_customize->add_control(
				"pricing_{$p}_{$key}",
				array(
					'label'   => sprintf( /* translators: 1: first value, 2: second value. */ esc_html__( 'Plan %1$d: %2$s', 'bizpro-agency' ), $p, ucfirst( str_replace( '_', ' ', $key ) ) ),
					'section' => 'bizpro_agency_pricing',
					'type'    => $type,
				)
			);
		}
		$wp_customize->add_setting(
			"pricing_{$p}_popular",
			array(
				'default'           => $d[ "pricing_{$p}_popular" ],
				'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
			)
		);
		$wp_customize->add_control(
			"pricing_{$p}_popular",
			array(
				'label'   => sprintf( /* translators: %d: number. */ esc_html__( 'Plan %d: Mark as Popular', 'bizpro-agency' ), $p ),
				'section' => 'bizpro_agency_pricing',
				'type'    => 'checkbox',
			)
		);
	}

	/* =========================================================================
	 * 14. FAQ Section
	 * ======================================================================= */
	$wp_customize->add_section(
		'bizpro_agency_faq',
		array(
			'title' => esc_html__( 'FAQ Section', 'bizpro-agency' ),
			'panel' => 'bizpro_agency_panel',
		)
	);
	$wp_customize->add_setting(
		'faq_enable',
		array(
			'default'           => $d['faq_enable'],
			'sanitize_callback' => 'bizpro_agency_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'faq_enable',
		array(
			'label'   => esc_html__( 'Show FAQ Section', 'bizpro-agency' ),
			'section' => 'bizpro_agency_faq',
			'type'    => 'checkbox',
		)
	);
	$wp_customize->add_setting(
		'faq_eyebrow',
		array(
			'default'           => $d['faq_eyebrow'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'faq_eyebrow',
		array(
			'label'   => esc_html__( 'Eyebrow Text', 'bizpro-agency' ),
			'section' => 'bizpro_agency_faq',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(
		'faq_title',
		array(
			'default'           => $d['faq_title'],
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'faq_title',
		array(
			'label'   => esc_html__( 'Section Title', 'bizpro-agency' ),
			'section' => 'bizpro_agency_faq',
			'type'    => 'text',
		)
	);
	for ( $f = 1; $f <= 6; $f++ ) {
		$wp_customize->add_setting(
			"faq_{$f}_q",
			array(
				'default'           => $d[ "faq_{$f}_q" ],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_setting(
			"faq_{$f}_a",
			array(
				'default'           => $d[ "faq_{$f}_a" ],
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);
		$wp_customize->add_control(
			"faq_{$f}_q",
			array(
				'label'   => sprintf( /* translators: %d: number. */ esc_html__( 'FAQ %d: Question', 'bizpro-agency' ), $f ),
				'section' => 'bizpro_agency_faq',
				'type'    => 'text',
			)
		);
		$wp_customize->add_control(
			"faq_{$f}_a",
			array(
				'label'   => sprintf( /* translators: %d: number. */ esc_html__( 'FAQ %d: Answer', 'bizpro-agency' ), $f ),
				'section' => 'bizpro_agency_faq',
				'type'    => 'textarea',
			)
		);
	}
}
add_action( 'customize_register', 'bizpro_agency_customize_register' );
