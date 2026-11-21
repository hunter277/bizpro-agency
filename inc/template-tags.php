<?php
/**
 * Custom template tags and helper functions for BizPro Agency.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return an SVG icon markup for services and features.
 *
 * @param string $icon Icon key or raw SVG markup.
 * @return string Safe SVG markup.
 */
function bizpro_agency_get_icon( $icon ) {
	$icon = trim( (string) $icon );

	// Predefined high quality GPL inline SVG icons.
	$icons = array(
		'it' => '<svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8M12 16v4"/></svg>',
		'consulting' => '<svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 20h18M6 16V9M12 16V5M18 16v-4"/></svg>',
		'visa' => '<svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 3h8l4 4v14H7z"/><path d="M15 3v4h4M10 13h6M10 17h6"/></svg>',
		'travel' => '<svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M2 16l20-8-8 14-3-6z"/><path d="M11 16l11-8"/></svg>',
		'support' => '<svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>',
		'marketing' => '<svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 11l18-5v12L3 13v-2z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>',
		'finance' => '<svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="2"/><path d="M6 12h.01M18 12h.01"/></svg>',
		'security' => '<svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>',
	);

	if ( isset( $icons[ $icon ] ) ) {
		return $icons[ $icon ];
	}

	// If it contains custom SVG markup, sanitize with allowed tags.
	if ( 0 === strpos( $icon, '<svg' ) ) {
		return wp_kses(
			$icon,
			array(
				'svg'      => array(
					'viewbox'     => true,
					'width'       => true,
					'height'      => true,
					'fill'        => true,
					'stroke'      => true,
					'stroke-width'=> true,
					'stroke-linecap' => true,
					'stroke-linejoin'=> true,
					'aria-hidden' => true,
					'focusable'   => true,
					'class'       => true,
				),
				'rect'     => array( 'x' => true, 'y' => true, 'width' => true, 'height' => true, 'rx' => true, 'ry' => true ),
				'circle'   => array( 'cx' => true, 'cy' => true, 'r' => true ),
				'path'     => array( 'd' => true ),
				'polyline' => array( 'points' => true ),
				'polygon'  => array( 'points' => true ),
				'line'     => array( 'x1' => true, 'y1' => true, 'x2' => true, 'y2' => true ),
			)
		);
	}

	// Default fallback to IT icon.
	return $icons['it'];
}

/**
 * Available icon choices for the Customizer dropdown.
 *
 * @return array
 */
function bizpro_agency_get_icon_choices() {
	return array(
		'it'         => esc_html__( 'IT / Technology', 'bizpro-agency' ),
		'consulting' => esc_html__( 'Consulting / Analytics', 'bizpro-agency' ),
		'visa'       => esc_html__( 'Visa / Document', 'bizpro-agency' ),
		'travel'     => esc_html__( 'Travel / Global', 'bizpro-agency' ),
		'support'    => esc_html__( 'Support / Helpdesk', 'bizpro-agency' ),
		'marketing'  => esc_html__( 'Marketing / Growth', 'bizpro-agency' ),
		'finance'    => esc_html__( 'Finance / Investment', 'bizpro-agency' ),
		'security'   => esc_html__( 'Security / Trust', 'bizpro-agency' ),
	);
}
