<?php
/**
 * Gutenberg Block Patterns for BizPro Agency.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Block Patterns and Block Pattern Category.
 */
function bizpro_agency_register_block_patterns() {
	if ( ! function_exists( 'register_block_pattern_category' ) || ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	register_block_pattern_category(
		'bizpro-agency',
		array( 'label' => esc_html__( 'BizPro Agency', 'bizpro-agency' ) )
	);

	// 1. Hero Banner Pattern
	register_block_pattern(
		'bizpro-agency/hero',
		array(
			'title'       => esc_html__( 'Hero Banner with CTA', 'bizpro-agency' ),
			'categories'  => array( 'bizpro-agency', 'header' ),
			'description' => esc_html__( 'High converting hero section with headings and call to action buttons.', 'bizpro-agency' ),
			'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"20px","right":"20px"}},"color":{"background":"var(--bpa-dark,#0f172a)","text":"#ffffff"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="background-color:var(--bpa-dark,#0f172a);color:#ffffff;padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px">
<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3rem","lineHeight":"1.2"}}} -->
<h1 class="wp-block-heading" style="font-size:3rem;line-height:1.2">Smart Solutions to Grow Your Business</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}}} -->
<p style="font-size:1.25rem">We help companies and individuals succeed with trusted IT, consultancy, visa and travel services delivered by experienced professionals.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px"}}}} -->
<div class="wp-block-buttons" style="margin-top:30px">
<!-- wp:button {"style":{"color":{"background":"var(--bpa-primary,#1d5fe0)","text":"#ffffff"},"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#contact" style="border-radius:8px;color:#ffffff;background-color:var(--bpa-primary,#1d5fe0)">Book a Free Consultation</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#services" style="border-radius:8px">Our Services</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
		)
	);

	// 2. Services Grid Pattern
	register_block_pattern(
		'bizpro-agency/services',
		array(
			'title'       => esc_html__( '4-Column Services Grid', 'bizpro-agency' ),
			'categories'  => array( 'bizpro-agency' ),
			'description' => esc_html__( 'A modern four-column services showcase grid.', 'bizpro-agency' ),
			'content'     => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:60px;padding-bottom:60px">
<!-- wp:heading {"textAlign":"center","level":2} -->
<h2 class="wp-block-heading has-text-align-center">Services Built Around Your Goals</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var(--bpa-muted,#6b7280)"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--bpa-muted,#6b7280)">One trusted partner for technology, business growth, visas and travel.</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"columns":4,"style":{"spacing":{"margin":{"top":"40px"}}}} -->
<div class="wp-block-columns" style="margin-top:40px">
<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"24px","bottom":"30px","left":"24px"}},"border":{"radius":"12px","style":"solid","width":"1px","color":"var(--bpa-border,#e5e7eb)"}}} -->
<div class="wp-block-column" style="border-color:var(--bpa-border,#e5e7eb);border-width:1px;border-style:solid;border-radius:12px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.25rem">IT Solutions</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Custom software, cloud setup and managed IT support that keep your business running smoothly.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"24px","bottom":"30px","left":"24px"}},"border":{"radius":"12px","style":"solid","width":"1px","color":"var(--bpa-border,#e5e7eb)"}}} -->
<div class="wp-block-column" style="border-color:var(--bpa-border,#e5e7eb);border-width:1px;border-style:solid;border-radius:12px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.25rem">Business Consulting</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Practical strategy, market research and growth planning from experienced consultants.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"24px","bottom":"30px","left":"24px"}},"border":{"radius":"12px","style":"solid","width":"1px","color":"var(--bpa-border,#e5e7eb)"}}} -->
<div class="wp-block-column" style="border-color:var(--bpa-border,#e5e7eb);border-width:1px;border-style:solid;border-radius:12px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.25rem">Visa Assistance</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Document checks, application filing and interview preparation for study, work and visit visas.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"24px","bottom":"30px","left":"24px"}},"border":{"radius":"12px","style":"solid","width":"1px","color":"var(--bpa-border,#e5e7eb)"}}} -->
<div class="wp-block-column" style="border-color:var(--bpa-border,#e5e7eb);border-width:1px;border-style:solid;border-radius:12px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.25rem">Travel Planning</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Flights, hotels and tailor-made itineraries for business trips and holidays, handled end to end.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
		)
	);

	// 3. CTA Banner Pattern
	register_block_pattern(
		'bizpro-agency/cta-banner',
		array(
			'title'       => esc_html__( 'Call to Action Banner', 'bizpro-agency' ),
			'categories'  => array( 'bizpro-agency' ),
			'description' => esc_html__( 'Full-width banner with title, description, and contact button.', 'bizpro-agency' ),
			'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"20px","right":"20px"}},"color":{"background":"var(--bpa-primary,#1d5fe0)","text":"#ffffff"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="background-color:var(--bpa-primary,#1d5fe0);color:#ffffff;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px">
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
<!-- wp:heading {"level":2,"style":{"color":{"text":"#ffffff"}}} -->
<h2 class="wp-block-heading has-text-color" style="color:#ffffff">Ready to Get Started?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem"}}} -->
<p style="font-size:1.1rem">Talk to our experts today and get a free, no-obligation consultation.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#ffffff","text":"var(--bpa-primary,#1d5fe0)"},"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#contact" style="border-radius:8px;color:var(--bpa-primary,#1d5fe0);background-color:#ffffff">Get in Touch</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
		)
	);
}
add_action( 'init', 'bizpro_agency_register_block_patterns' );
