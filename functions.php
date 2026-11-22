<?php
/**
 * BizPro Agency functions and definitions.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BIZPRO_AGENCY_VERSION', '2.7.0' );

/**
 * Default values for every Customizer option.
 *
 * @return array
 */
function bizpro_agency_defaults() {
	return array(
		'primary_color'        => '#2563eb',
		'topbar_enable'        => true,
		'show_demo_switcher'   => false,
		'topbar_phone'         => '+1 (555) 123-4567',
		'topbar_email'         => 'info@example.com',
		'topbar_address'       => '123 Business Avenue, New York, NY',
		'header_cta_text'      => __( 'Get a Quote', 'bizpro-agency' ),
		'header_cta_link'      => '#contact',
		'hero_title'           => __( 'Smart Solutions to Grow Your Business', 'bizpro-agency' ),
		'hero_subtitle'        => __( 'We help companies and individuals succeed with trusted IT, consultancy, visa and travel services delivered by experienced professionals.', 'bizpro-agency' ),
		'hero_cta_text'        => __( 'Book a Free Consultation', 'bizpro-agency' ),
		'hero_cta_link'        => '#contact',
		'hero_image'           => '',

		// Services Section Defaults
		'services_enable'      => true,
		'services_eyebrow'     => __( 'What We Do', 'bizpro-agency' ),
		'services_title'       => __( 'Services Built Around Your Goals', 'bizpro-agency' ),
		'services_subtitle'    => __( 'One trusted partner for technology, business growth, visas and travel.', 'bizpro-agency' ),

		'service_1_title'      => __( 'IT Solutions', 'bizpro-agency' ),
		'service_1_text'       => __( 'Custom software, cloud setup and managed IT support that keep your business running smoothly.', 'bizpro-agency' ),
		'service_1_icon'       => 'it',

		'service_2_title'      => __( 'Business Consulting', 'bizpro-agency' ),
		'service_2_text'       => __( 'Practical strategy, market research and growth planning from experienced consultants.', 'bizpro-agency' ),
		'service_2_icon'       => 'consulting',

		'service_3_title'      => __( 'Visa Assistance', 'bizpro-agency' ),
		'service_3_text'       => __( 'Document checks, application filing and interview preparation for study, work and visit visas.', 'bizpro-agency' ),
		'service_3_icon'       => 'visa',

		'service_4_title'      => __( 'Travel Planning', 'bizpro-agency' ),
		'service_4_text'       => __( 'Flights, hotels and tailor-made itineraries for business trips and holidays, handled end to end.', 'bizpro-agency' ),
		'service_4_icon'       => 'travel',

		// About Section Defaults
		'about_enable'         => true,
		'about_eyebrow'        => __( 'About Us', 'bizpro-agency' ),
		'about_title'          => __( 'A Partner You Can Rely On', 'bizpro-agency' ),
		'about_description'    => __( 'For over a decade we have helped businesses and individuals reach their goals with honest advice, fast delivery and a personal touch. Our multidisciplinary team combines technical skill with real-world experience.', 'bizpro-agency' ),
		'about_badge_number'   => '12+',
		'about_badge_label'    => __( 'Years of Trusted Service', 'bizpro-agency' ),
		'about_point_1'        => __( 'Certified and experienced professionals', 'bizpro-agency' ),
		'about_point_2'        => __( 'Transparent pricing with no hidden fees', 'bizpro-agency' ),
		'about_point_3'        => __( 'Dedicated support from start to finish', 'bizpro-agency' ),

		// Stats Counters Defaults
		'stats_enable'         => true,
		'stat_1_number'        => 12,
		'stat_1_suffix'        => '+',
		'stat_1_label'         => __( 'Years of Experience', 'bizpro-agency' ),

		'stat_2_number'        => 2500,
		'stat_2_suffix'        => '+',
		'stat_2_label'         => __( 'Happy Clients', 'bizpro-agency' ),

		'stat_3_number'        => 98,
		'stat_3_suffix'        => '%',
		'stat_3_label'         => __( 'Success Rate', 'bizpro-agency' ),

		'stat_4_number'        => 40,
		'stat_4_suffix'        => '+',
		'stat_4_label'         => __( 'Expert Team Members', 'bizpro-agency' ),

		// Testimonials Section Defaults
		'testimonials_enable'  => true,
		'testimonials_eyebrow' => __( 'Testimonials', 'bizpro-agency' ),
		'testimonials_title'   => __( 'What Our Clients Say', 'bizpro-agency' ),

		'testimonial_1_quote'  => __( 'The team handled my visa application from start to finish. Clear communication and approval in record time.', 'bizpro-agency' ),
		'testimonial_1_name'   => 'Sarah Johnson',
		'testimonial_1_role'   => __( 'Student Visa Client', 'bizpro-agency' ),

		'testimonial_2_quote'  => __( 'Their IT experts modernised our systems with zero downtime. Professional, responsive and great value.', 'bizpro-agency' ),
		'testimonial_2_name'   => 'Michael Carter',
		'testimonial_2_role'   => __( 'Operations Director', 'bizpro-agency' ),

		'testimonial_3_quote'  => __( 'The consultancy advice helped us enter two new markets within a year. I recommend them without hesitation.', 'bizpro-agency' ),
		'testimonial_3_name'   => 'Priya Sharma',
		'testimonial_3_role'   => __( 'Founder, Startup Co.', 'bizpro-agency' ),

		// Team Section Defaults
		'team_enable'          => true,
		'team_eyebrow'         => __( 'Our Experts', 'bizpro-agency' ),
		'team_title'           => __( 'Meet Our Experienced Leaders', 'bizpro-agency' ),
		'team_1_name'          => 'David Anderson',
		'team_1_role'          => __( 'Chief Executive Officer', 'bizpro-agency' ),
		'team_2_name'          => 'Amina Rahman',
		'team_2_role'          => __( 'Head of Visa & Travel', 'bizpro-agency' ),
		'team_3_name'          => 'Jason Lee',
		'team_3_role'          => __( 'IT & Cloud Architect', 'bizpro-agency' ),
		'team_4_name'          => 'Elena Rostova',
		'team_4_role'          => __( 'Senior Business Consultant', 'bizpro-agency' ),

		// Call to Action Banner Defaults
		'cta_enable'           => true,
		'cta_title'            => __( 'Ready to Get Started?', 'bizpro-agency' ),
		'cta_subtitle'         => __( 'Talk to our experts today and get a free, no-obligation consultation.', 'bizpro-agency' ),

		// Footer Defaults
		'footer_copyright'     => __( '&copy; {year} BizPro Agency. All rights reserved.', 'bizpro-agency' ),

		// Client Logos Section
		'client_logos_enable'  => true,
		'client_logos_title'   => __( 'Trusted by Leading Organizations', 'bizpro-agency' ),
		'client_logo_1'        => 'TechCorp',
		'client_logo_2'        => 'GlobalVisa',
		'client_logo_3'        => 'StartupHub',
		'client_logo_4'        => 'MediaGroup',
		'client_logo_5'        => 'FinanceOne',
		'client_logo_6'        => 'BuildCo',

		// Case Studies Section
		'cases_enable'         => true,
		'cases_eyebrow'        => __( 'Case Studies', 'bizpro-agency' ),
		'cases_title'          => __( 'Real Results for Real Clients', 'bizpro-agency' ),
		'case_1_tag'           => __( 'IT Solutions', 'bizpro-agency' ),
		'case_1_title'         => __( 'Cloud Migration for TechCorp', 'bizpro-agency' ),
		'case_1_desc'          => __( 'Migrated 50+ servers to AWS with zero downtime, cutting infrastructure costs by 40%.', 'bizpro-agency' ),
		'case_1_result'        => '40% Cost Reduction',
		'case_2_tag'           => __( 'Visa Services', 'bizpro-agency' ),
		'case_2_title'         => __( '200 Work Visas Processed in 60 Days', 'bizpro-agency' ),
		'case_2_desc'          => __( 'Managed a bulk visa program for a multinational with 98% approval rate.', 'bizpro-agency' ),
		'case_2_result'        => '98% Approval Rate',
		'case_3_tag'           => __( 'Consulting', 'bizpro-agency' ),
		'case_3_title'         => __( 'Market Expansion to 3 Countries', 'bizpro-agency' ),
		'case_3_desc'          => __( 'Developed go-to-market strategy enabling entry into UAE, UK and Canada within one year.', 'bizpro-agency' ),
		'case_3_result'        => '3 New Markets',

		// Pricing Section - Commercial Grade
		'pricing_enable'       => true,
		'pricing_eyebrow'      => __( 'Transparent Pricing', 'bizpro-agency' ),
		'pricing_title'        => __( 'Flexible Plans Built for Growth', 'bizpro-agency' ),
		'pricing_subtitle'     => __( 'Transparent investment options with zero hidden fees. Scale services seamlessly as your business expands.', 'bizpro-agency' ),
		'pricing_1_name'       => __( 'Starter Growth', 'bizpro-agency' ),
		'pricing_1_price'      => '$249',
		'pricing_1_period'     => __( '/ project kickoff', 'bizpro-agency' ),
		'pricing_1_features'   => __( "Comprehensive Case Assessment\nCustom Strategic Roadmap\nDedicated Account Specialist\nDirect Chat & Email Advisory\nStandard 5-Day Delivery", 'bizpro-agency' ),
		'pricing_1_cta_text'   => __( 'Get Started', 'bizpro-agency' ),
		'pricing_1_cta_link'   => '#contact',
		'pricing_1_popular'    => false,
		'pricing_2_name'       => __( 'Professional Scale', 'bizpro-agency' ),
		'pricing_2_price'      => '$799',
		'pricing_2_period'     => __( '/ month retainer', 'bizpro-agency' ),
		'pricing_2_features'   => __( "Full Strategic Advisory & Execution\nPriority Dedicated Project Lead\nEnd-to-End Filing & Documentation\nBi-Weekly Strategic Syncs\n24/7 SLA Priority Support\nDirect WhatsApp / Slack Access", 'bizpro-agency' ),
		'pricing_2_cta_text'   => __( 'Start 14-Day Trial', 'bizpro-agency' ),
		'pricing_2_cta_link'   => '#contact',
		'pricing_2_popular'    => true,
		'pricing_3_name'       => __( 'Enterprise Elite', 'bizpro-agency' ),
		'pricing_3_price'      => __( 'Custom', 'bizpro-agency' ),
		'pricing_3_period'     => __( '/ tailored scope', 'bizpro-agency' ),
		'pricing_3_features'   => __( "Multi-Jurisdiction Advisory Scope\nExecutive Boardroom Advisory\nBespoke Architecture / Legal Roadmap\nEmergency Escalation SLA (<1 hr)\nFull NDA & IP Confidentiality\nDedicated Senior Partner Assigned", 'bizpro-agency' ),
		'pricing_3_cta_text'   => __( 'Schedule Consultation', 'bizpro-agency' ),
		'pricing_3_cta_link'   => '#contact',
		'pricing_3_popular'    => false,

		// FAQ Section - Professional Client Agency
		'faq_enable'           => true,
		'faq_eyebrow'          => __( 'Client Inquiries', 'bizpro-agency' ),
		'faq_title'            => __( 'Frequently Asked Questions', 'bizpro-agency' ),
		'faq_1_q'              => __( 'What makes BizPro Agency different from other consulting firms?', 'bizpro-agency' ),
		'faq_1_a'              => __( 'We integrate cross-functional expertise across Business Strategy, Global Immigration & Visas, Technology Solutions, and Corporate Advisory under one roof. You get dedicated senior specialists without the overhead of juggling multiple disjointed vendors.', 'bizpro-agency' ),
		'faq_2_q'              => __( 'How quickly can we begin onboarding our project?', 'bizpro-agency' ),
		'faq_2_a'              => __( 'Once you select your plan or finalize an agreement, onboarding begins within 24 to 48 hours. You are assigned a dedicated project manager and direct channel access to start execution immediately.', 'bizpro-agency' ),
		'faq_3_q'              => __( 'Can we upgrade, downgrade, or pause our monthly retainers?', 'bizpro-agency' ),
		'faq_3_a'              => __( 'Yes, all monthly retainers are fully flexible. You can adjust your tier or pause services at any billing cycle with a 14-day notice, giving you complete financial agility.', 'bizpro-agency' ),
		'faq_4_q'              => __( 'Are my corporate data and intellectual property protected?', 'bizpro-agency' ),
		'faq_4_a'              => __( 'Absolutely. Every client engagement is bound by strict bilateral non-disclosure agreements (NDAs) and enterprise-grade data security protocols. Your IP, sensitive records, and documents remain 100% confidential.', 'bizpro-agency' ),
		'faq_5_q'              => __( 'Do you provide ongoing maintenance and post-project support?', 'bizpro-agency' ),
		'faq_5_a'              => __( 'Yes. Beyond delivery, we offer proactive ongoing monitoring, continuous performance reviews, and dedicated advisory hours to ensure sustainable long-term success.', 'bizpro-agency' ),
		'faq_6_q'              => __( 'How do you handle custom enterprise or international requirements?', 'bizpro-agency' ),
		'faq_6_a'              => __( 'Our Enterprise tier offers bespoke scopes tailored to multi-jurisdiction compliance, cross-border immigration, and large-scale digital architectures. Contact our advisory team for a customized blueprint.', 'bizpro-agency' ),
	);
}

/**
 * Get a theme option with its default fallback.
 *
 * @param string $key Option key.
 * @return mixed
 */
function bizpro_agency_get( $key ) {
	$defaults = bizpro_agency_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	return get_theme_mod( $key, $default );
}

/**
 * Theme setup.
 */
function bizpro_agency_setup() {
	load_theme_textdomain( 'bizpro-agency', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// WooCommerce Theme Support
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	// Elementor Theme Support
	add_theme_support( 'elementor' );

	set_post_thumbnail_size( 1200, 675, true );
	add_image_size( 'bizpro-agency-card', 600, 400, true );

	register_nav_menus(
		array(
			'primary'         => esc_html__( 'Primary Menu (Main Agency)', 'bizpro-agency' ),
			'menu_digital'    => esc_html__( 'Digital Store & SaaS Menu', 'bizpro-agency' ),
			'menu_visa'       => esc_html__( 'Visa & Immigration Menu', 'bizpro-agency' ),
			'menu_travel'     => esc_html__( 'Travel Agency Menu', 'bizpro-agency' ),
			'menu_it'         => esc_html__( 'IT Solutions Menu', 'bizpro-agency' ),
			'menu_consulting' => esc_html__( 'Business Consulting Menu', 'bizpro-agency' ),
			'menu_corporate'  => esc_html__( 'Corporate Menu', 'bizpro-agency' ),
			'footer'          => esc_html__( 'Footer Menu', 'bizpro-agency' ),
		)
	);
}
add_action( 'after_setup_theme', 'bizpro_agency_setup' );

/**
 * Content width.
 */
function bizpro_agency_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bizpro_agency_content_width', 1140 );
}
add_action( 'after_setup_theme', 'bizpro_agency_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function bizpro_agency_scripts() {
	wp_enqueue_style( 'bizpro-agency-style', get_stylesheet_uri(), array(), BIZPRO_AGENCY_VERSION );
	wp_enqueue_style(
		'bizpro-agency-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'bizpro-agency-style' ),
		BIZPRO_AGENCY_VERSION
	);

	// Brand colour from the Customizer, output as CSS variables.
	$primary = sanitize_hex_color( bizpro_agency_get( 'primary_color' ) );
	if ( $primary ) {
		$dark = bizpro_agency_adjust_brightness( $primary, -35 );
		$css  = ':root{--bpa-primary:' . $primary . ';--bpa-primary-dark:' . $dark . ';}';
		wp_add_inline_style( 'bizpro-agency-main', $css );
	}

	wp_enqueue_script(
		'bizpro-agency-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		BIZPRO_AGENCY_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bizpro_agency_scripts' );

/**
 * Lighten or darken a hex colour.
 *
 * @param string $hex   Hex colour.
 * @param int    $steps Between -255 and 255. Negative darkens.
 * @return string
 */
function bizpro_agency_adjust_brightness( $hex, $steps ) {
	$hex = ltrim( (string) $hex, '#' );
	if ( 3 === strlen( $hex ) ) {
		$hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
	}
	if ( 6 !== strlen( $hex ) ) {
		return '#000000';
	}
	$steps = max( -255, min( 255, (int) $steps ) );
	$out   = '#';
	foreach ( str_split( $hex, 2 ) as $channel ) {
		$value = max( 0, min( 255, hexdec( $channel ) + $steps ) );
		$out  .= str_pad( dechex( $value ), 2, '0', STR_PAD_LEFT );
	}
	return $out;
}

/**
 * Register widget areas.
 */
function bizpro_agency_widgets_init() {
	for ( $i = 1; $i <= 3; $i++ ) {
		register_sidebar(
			array(
				/* translators: %d: footer column number. */
				'name'          => sprintf( esc_html__( 'Footer Column %d', 'bizpro-agency' ), $i ),
				'id'            => 'footer-' . $i,
				'description'   => esc_html__( 'Add widgets here.', 'bizpro-agency' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}
add_action( 'widgets_init', 'bizpro_agency_widgets_init' );

/**
 * Get current demo context (visa, travel, it, consulting, corporate, or default).
 *
 * @return string
 */
function bizpro_agency_get_demo_context() {
	$valid = array( 'visa', 'travel', 'it', 'consulting', 'corporate', 'digital' );

	// 1. Explicit query parameter.
	if ( isset( $_GET['demo'] ) && in_array( sanitize_key( wp_unslash( $_GET['demo'] ) ), $valid, true ) ) {
		return sanitize_key( wp_unslash( $_GET['demo'] ) );
	}

	if ( is_singular() ) {
		$id       = get_queried_object_id();
		$template = $id ? get_page_template_slug( $id ) : '';
		if ( $template && 0 === strpos( $template, 'template-homepage-' ) ) {
			$key = str_replace( array( 'template-homepage-', '.php' ), '', $template );
			if ( in_array( $key, $valid, true ) ) {
				return $key;
			}
		}
		$key = $id ? get_post_meta( $id, '_bizpro_demo', true ) : '';
		if ( $key && in_array( $key, $valid, true ) ) {
			return $key;
		}

		// Check post slug for demo prefix/suffix (e.g. travel-contact, visa-about).
		$slug = $id ? get_post_field( 'post_name', $id ) : '';
		if ( $slug ) {
			foreach ( $valid as $demo_key ) {
				if ( false !== strpos( $slug, $demo_key ) ) {
					return $demo_key;
				}
			}
		}
	}

	// 2. Site-wide niche chosen by the demo importer (inner pages, blog, archives).
	$key = get_option( 'bizpro_agency_active_demo', '' );
	if ( in_array( $key, $valid, true ) ) {
		return $key;
	}

	// 3. Fallback: check if the front page was set to a specific niche demo template.
	$front_id = get_option( 'page_on_front' );
	if ( $front_id ) {
		$front_tpl = get_page_template_slug( $front_id );
		if ( $front_tpl && 0 === strpos( $front_tpl, 'template-homepage-' ) ) {
			$key = str_replace( array( 'template-homepage-', '.php' ), '', $front_tpl );
			if ( in_array( $key, $valid, true ) ) {
				return $key;
			}
		}
		$front_meta = get_post_meta( $front_id, '_bizpro_demo', true );
		if ( $front_meta && in_array( $front_meta, $valid, true ) ) {
			return $front_meta;
		}
		$front_slug = get_post_field( 'post_name', $front_id );
		if ( $front_slug ) {
			foreach ( $valid as $demo_key ) {
				if ( false !== strpos( $front_slug, $demo_key ) ) {
					return $demo_key;
				}
			}
		}
	}

	return 'default';
}

/**
 * Get tailored services/areas of interest for a given demo context.
 *
 * @param string|null $demo Demo context key (visa, travel, it, consulting, corporate, digital, default).
 * @return array Key => Label pairs.
 */
function bizpro_agency_get_demo_services( $demo = null ) {
	if ( ! $demo ) {
		$demo = bizpro_agency_get_demo_context();
	}

	$services = array(
		'travel'     => array(
			'packages'   => __( 'Holiday & Tour Packages', 'bizpro-agency' ),
			'custom'     => __( 'Custom Private Itinerary Planning', 'bizpro-agency' ),
			'flights'    => __( 'Flights, Hotels & Resort Bookings', 'bizpro-agency' ),
			'group'      => __( 'Corporate & Group Tour Arrangements', 'bizpro-agency' ),
			'general'    => __( 'General Travel Inquiries', 'bizpro-agency' ),
		),
		'visa'       => array(
			'study'      => __( 'Student & University Study Visa', 'bizpro-agency' ),
			'work'       => __( 'Skilled Worker & Employment Permit', 'bizpro-agency' ),
			'pr'         => __( 'Permanent Residency (PR) Pathway', 'bizpro-agency' ),
			'business'   => __( 'Business, Investor & Startup Visa', 'bizpro-agency' ),
			'visitor'    => __( 'Tourist & Family Visitor Visa', 'bizpro-agency' ),
		),
		'it'         => array(
			'cloud'      => __( 'Cloud Architecture & DevOps Migration', 'bizpro-agency' ),
			'software'   => __( 'Custom Web & Mobile App Development', 'bizpro-agency' ),
			'security'   => __( 'Cybersecurity Audits & Compliance', 'bizpro-agency' ),
			'staffing'   => __( 'Dedicated Engineering Team / Staffing', 'bizpro-agency' ),
			'sla'        => __( 'Enterprise 24/7 Managed IT Support', 'bizpro-agency' ),
		),
		'digital'    => array(
			'license'    => __( 'Digital Asset & Software Licensing', 'bizpro-agency' ),
			'custom'     => __( 'Custom Template & Feature Development', 'bizpro-agency' ),
			'support'    => __( 'Technical Support & Troubleshooting', 'bizpro-agency' ),
			'commercial' => __( 'Enterprise / Commercial Multi-Seat License', 'bizpro-agency' ),
			'general'    => __( 'General Store Inquiry', 'bizpro-agency' ),
		),
		'consulting' => array(
			'strategy'   => __( 'Strategic Business Growth & Scaling', 'bizpro-agency' ),
			'operations' => __( 'Operational Restructuring & Efficiency', 'bizpro-agency' ),
			'm-and-a'    => __( 'Financial Modeling & M&A Advisory', 'bizpro-agency' ),
			'leadership' => __( 'Executive Coaching & Change Management', 'bizpro-agency' ),
			'market'     => __( 'Global Market Entry & Feasibility', 'bizpro-agency' ),
		),
		'corporate'  => array(
			'enterprise' => __( 'Enterprise Digital Transformation', 'bizpro-agency' ),
			'governance' => __( 'Corporate Governance, Risk & ESG', 'bizpro-agency' ),
			'expansion'  => __( 'Cross-Border Mergers & Joint Ventures', 'bizpro-agency' ),
			'procure'    => __( 'Supply Chain Resilience & Procurement', 'bizpro-agency' ),
			'inquiry'    => __( 'Institutional Boardroom Inquiries', 'bizpro-agency' ),
		),
		'default'    => array(
			'business'   => __( 'Strategic Business Advisory', 'bizpro-agency' ),
			'technology' => __( 'Technology & Digital Transformation', 'bizpro-agency' ),
			'branding'   => __( 'Brand Identity & Marketing Strategy', 'bizpro-agency' ),
			'retainer'   => __( 'Enterprise Advisory Retainers', 'bizpro-agency' ),
			'general'    => __( 'General Inquiries', 'bizpro-agency' ),
		),
	);

	return isset( $services[ $demo ] ) ? $services[ $demo ] : $services['default'];
}

/**
 * Get pricing matrix and hero copy for a specific demo context.
 *
 * @param string|null $demo Demo context key (digital, visa, travel, it, consulting, corporate, default).
 * @return array
 */
function bizpro_agency_get_demo_pricing( $demo = null ) {
	if ( ! $demo ) {
		$demo = bizpro_agency_get_demo_context();
	}

	$matrix = array(
		'digital'    => array(
			'eyebrow' => __( 'Digital Licensing & Memberships', 'bizpro-agency' ),
			'title'   => __( 'Simple, Transparent Software & Asset Licensing', 'bizpro-agency' ),
			'desc'    => __( 'Choose the plan that fits your development workflow. All plans include instant downloads, license keys, and regular updates.', 'bizpro-agency' ),
			'plans'   => array(
				array(
					'name'     => __( 'Starter License', 'bizpro-agency' ),
					'desc'     => __( 'Perfect for single website owners and creators starting out.', 'bizpro-agency' ),
					'price'    => '$39',
					'period'   => __( '/ year', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( '1 Domain License Activation', 'bizpro-agency' ),
						'✅ ' . __( 'Instant Digital File Download', 'bizpro-agency' ),
						'✅ ' . __( '1 Year Regular Product Updates', 'bizpro-agency' ),
						'✅ ' . __( 'Standard Email Technical Support', 'bizpro-agency' ),
						'❌ ' . __( 'White-Label Agency Mode', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Buy Starter Pass', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'home', 'digital' ) . '#products',
				),
				array(
					'name'     => __( 'Pro Developer', 'bizpro-agency' ),
					'desc'     => __( 'Best for freelancers building client websites regularly.', 'bizpro-agency' ),
					'price'    => '$79',
					'period'   => __( '/ year', 'bizpro-agency' ),
					'featured' => true,
					'badge'    => __( 'Most Popular Choice', 'bizpro-agency' ),
					'features' => array(
						'✅ ' . __( 'Up to 5 Domain Activations', 'bizpro-agency' ),
						'✅ ' . __( 'Instant File Download & API Sync', 'bizpro-agency' ),
						'✅ ' . __( 'All 7 Niche Starter Kits Included', 'bizpro-agency' ),
						'✅ ' . __( 'Priority 24/7 Developer Support', 'bizpro-agency' ),
						'✅ ' . __( 'WooCommerce Flyout Cart Extension', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Upgrade to Pro Now', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'home', 'digital' ) . '#products',
				),
				array(
					'name'     => __( 'Agency Lifetime', 'bizpro-agency' ),
					'desc'     => __( 'Unlimited sites, lifetime updates, and full white-label rights.', 'bizpro-agency' ),
					'price'    => '$199',
					'period'   => __( 'one-time', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( 'Unlimited Domain Licenses', 'bizpro-agency' ),
						'✅ ' . __( 'Lifetime Updates Guarantee', 'bizpro-agency' ),
						'✅ ' . __( 'Full White-Label Rebranding Rights', 'bizpro-agency' ),
						'✅ ' . __( 'Dedicated VIP Support Channel', 'bizpro-agency' ),
						'✅ ' . __( '1-on-1 Setup Consultation', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Get Lifetime Pass', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact', 'digital' ),
				),
			),
		),
		'visa'       => array(
			'eyebrow' => __( 'Legal Retainers & Retainer Plans', 'bizpro-agency' ),
			'title'   => __( 'Transparent Immigration & Legal Retainers', 'bizpro-agency' ),
			'desc'    => __( 'Fixed-fee immigration consultation packages with no hidden consular processing retainers.', 'bizpro-agency' ),
			'plans'   => array(
				array(
					'name'     => __( 'Initial Consultation', 'bizpro-agency' ),
					'desc'     => __( 'Comprehensive eligibility assessment and immigration pathway evaluation.', 'bizpro-agency' ),
					'price'    => '$99',
					'period'   => __( 'one-time', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( '60-Min 1-on-1 Licensed Counsel Session', 'bizpro-agency' ),
						'✅ ' . __( 'Detailed Points & Eligibility Scorecard', 'bizpro-agency' ),
						'✅ ' . __( 'Document Checklist & Strategy Roadmap', 'bizpro-agency' ),
						'✅ ' . __( '14-Day Priority Email Follow-Up', 'bizpro-agency' ),
						'❌ ' . __( 'Full Government Dossier Filing', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Book Assessment', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact', 'visa' ),
				),
				array(
					'name'     => __( 'Full Visa Mandate', 'bizpro-agency' ),
					'desc'     => __( 'End-to-end legal representation from submission to visa approval.', 'bizpro-agency' ),
					'price'    => '$1,450',
					'period'   => __( 'fixed fee', 'bizpro-agency' ),
					'featured' => true,
					'badge'    => __( 'Most Popular Choice', 'bizpro-agency' ),
					'features' => array(
						'✅ ' . __( 'Full Case Preparation & Legal Audit', 'bizpro-agency' ),
						'✅ ' . __( 'Government Portal Submission by Attorney', 'bizpro-agency' ),
						'✅ ' . __( 'Biometrics & Medical Exam Guidance', 'bizpro-agency' ),
						'✅ ' . __( 'Consular Interview Mock Prep & Coaching', 'bizpro-agency' ),
						'✅ ' . __( 'Dedicated Case Manager & Real-Time Status', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Start Visa Mandate', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact', 'visa' ),
				),
				array(
					'name'     => __( 'Investor & Business PR', 'bizpro-agency' ),
					'desc'     => __( 'High-net-worth investor, startup, and business founder immigration.', 'bizpro-agency' ),
					'price'    => '$3,800',
					'period'   => __( 'fixed fee', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( 'Comprehensive Business Plan & Validation', 'bizpro-agency' ),
						'✅ ' . __( 'Government Investor Fast-Track Filing', 'bizpro-agency' ),
						'✅ ' . __( 'Family Sponsorship & Dependent Inclusions', 'bizpro-agency' ),
						'✅ ' . __( 'Post-Landing Relocation & Banking Setup', 'bizpro-agency' ),
						'✅ ' . __( 'Direct Senior Partner Access', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Inquire Investor Stream', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact', 'visa' ),
				),
			),
		),
		'travel'     => array(
			'eyebrow' => __( 'Tour Packages & Travel Plans', 'bizpro-agency' ),
			'title'   => __( 'Curated Travel Tiers for Every Wanderlust', 'bizpro-agency' ),
			'desc'    => __( 'Transparent travel pricing with verified resort accommodations, guided excursions, and airport transfers.', 'bizpro-agency' ),
			'plans'   => array(
				array(
					'name'     => __( 'Explorer Package', 'bizpro-agency' ),
					'desc'     => __( 'Self-guided travel with pre-booked stays and essential transfers.', 'bizpro-agency' ),
					'price'    => '$499',
					'period'   => __( '/ traveler', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( '3-Star Boutique Hotel Accommodations', 'bizpro-agency' ),
						'✅ ' . __( 'Daily Breakfast & Airport Pickups', 'bizpro-agency' ),
						'✅ ' . __( 'Self-Guided City Pass & Digital Guide', 'bizpro-agency' ),
						'✅ ' . __( '24/7 Traveler Help Desk Support', 'bizpro-agency' ),
						'❌ ' . __( 'Private Chauffeur & Fine Dining', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Book Explorer', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'home', 'travel' ) . '#tours',
				),
				array(
					'name'     => __( 'Signature Tour', 'bizpro-agency' ),
					'desc'     => __( 'Our most popular guided experience with premium accommodations.', 'bizpro-agency' ),
					'price'    => '$1,199',
					'period'   => __( '/ traveler', 'bizpro-agency' ),
					'featured' => true,
					'badge'    => __( 'Most Popular Choice', 'bizpro-agency' ),
					'features' => array(
						'✅ ' . __( '4-Star Premium Resorts & Boutique Lodges', 'bizpro-agency' ),
						'✅ ' . __( 'Expert English-Speaking Local Tour Guide', 'bizpro-agency' ),
						'✅ ' . __( 'All Inter-City Trains & Domestic Transfers', 'bizpro-agency' ),
						'✅ ' . __( 'Curated Cultural Excursions & Entry Tickets', 'bizpro-agency' ),
						'✅ ' . __( '3 Dinners at Top-Rated Local Restaurants', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Book Signature', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'home', 'travel' ) . '#tours',
				),
				array(
					'name'     => __( 'Luxury Private Escape', 'bizpro-agency' ),
					'desc'     => __( 'Ultra-luxury private villas, bespoke itineraries, and 5-star concierge.', 'bizpro-agency' ),
					'price'    => '$2,499',
					'period'   => __( '/ traveler', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( '5-Star Luxury Resorts or Private Villas', 'bizpro-agency' ),
						'✅ ' . __( 'Private Luxury SUV & Dedicated Chauffeur', 'bizpro-agency' ),
						'✅ ' . __( 'VIP Airport Fast-Track & Lounge Access', 'bizpro-agency' ),
						'✅ ' . __( 'Exclusive Private Yacht / Air Charters', 'bizpro-agency' ),
						'✅ ' . __( '24/7 Dedicated Concierge & Personal Host', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Request Private Tour', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact', 'travel' ),
				),
			),
		),
		'it'         => array(
			'eyebrow' => __( 'Engineering & Cloud Retainers', 'bizpro-agency' ),
			'title'   => __( 'Predictable DevOps & Managed IT Retainers', 'bizpro-agency' ),
			'desc'    => __( 'Scalable engineering capacity with ironclad SLA guarantees and transparent monthly billing.', 'bizpro-agency' ),
			'plans'   => array(
				array(
					'name'     => __( 'Starter DevOps', 'bizpro-agency' ),
					'desc'     => __( 'Essential server management and continuous cloud monitoring.', 'bizpro-agency' ),
					'price'    => '$699',
					'period'   => __( '/ month', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( 'Up to 5 Cloud Instances / Containers', 'bizpro-agency' ),
						'✅ ' . __( '99.5% Uptime SLA Guarantee', 'bizpro-agency' ),
						'✅ ' . __( 'Weekly Automated Backups & Patching', 'bizpro-agency' ),
						'✅ ' . __( 'CI/CD Deployment Pipeline Maintenance', 'bizpro-agency' ),
						'❌ ' . __( '24/7 15-Minute Emergency Response', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Choose DevOps', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact', 'it' ),
				),
				array(
					'name'     => __( 'Cloud Scale', 'bizpro-agency' ),
					'desc'     => __( 'Dedicated cloud architecture, Kubernetes, and 24/7 incident response.', 'bizpro-agency' ),
					'price'    => '$1,850',
					'period'   => __( '/ month', 'bizpro-agency' ),
					'featured' => true,
					'badge'    => __( 'Most Popular Choice', 'bizpro-agency' ),
					'features' => array(
						'✅ ' . __( 'Unlimited Cloud Infrastructure Management', 'bizpro-agency' ),
						'✅ ' . __( '99.95% High-Availability SLA', 'bizpro-agency' ),
						'✅ ' . __( '24/7 Automated Monitoring & Rapid Response', 'bizpro-agency' ),
						'✅ ' . __( 'Dedicated DevOps Engineer & Slack Channel', 'bizpro-agency' ),
						'✅ ' . __( 'SOC2 & ISO 27001 Security Hardening', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Deploy Cloud Scale', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact', 'it' ),
				),
				array(
					'name'     => __( 'Enterprise Architecture', 'bizpro-agency' ),
					'desc'     => __( 'Full-spectrum custom software, security audits, and dedicated team.', 'bizpro-agency' ),
					'price'    => '$4,500',
					'period'   => __( '/ month', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( 'Embedded Senior Tech Lead & Team', 'bizpro-agency' ),
						'✅ ' . __( 'Custom Microservices & API Development', 'bizpro-agency' ),
						'✅ ' . __( 'Zero-Downtime Multi-Region Failover', 'bizpro-agency' ),
						'✅ ' . __( '15-Minute Critical Incident SLA', 'bizpro-agency' ),
						'✅ ' . __( 'Quarterly Penetration Testing & Audits', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Contact Engineering', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact', 'it' ),
				),
			),
		),
		'default'    => array(
			'eyebrow' => __( 'Transparent Investment', 'bizpro-agency' ),
			'title'   => __( 'Simple, Flexible Pricing Built for Growth', 'bizpro-agency' ),
			'desc'    => __( 'No hidden fees. No setup charges. Switch plans or cancel anytime with our 30-day money-back guarantee.', 'bizpro-agency' ),
			'plans'   => array(
				array(
					'name'     => __( 'Standard Advisory', 'bizpro-agency' ),
					'desc'     => __( 'Essential advisory & technical support for single startups.', 'bizpro-agency' ),
					'price'    => '$49',
					'period'   => __( '/ month', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( 'Dedicated Account Manager', 'bizpro-agency' ),
						'✅ ' . __( 'Up to 10 Monthly Strategy Hours', 'bizpro-agency' ),
						'✅ ' . __( 'Digital & Business Performance Audits', 'bizpro-agency' ),
						'✅ ' . __( 'SLA Guaranteed 24-hr Response', 'bizpro-agency' ),
						'❌ ' . __( '24/7 Emergency Hotlines', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Choose Standard', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact' ),
				),
				array(
					'name'     => __( 'Growth Partner', 'bizpro-agency' ),
					'desc'     => __( 'Comprehensive mandate for expanding international businesses.', 'bizpro-agency' ),
					'price'    => '$129',
					'period'   => __( '/ month', 'bizpro-agency' ),
					'featured' => true,
					'badge'    => __( 'Most Popular Choice', 'bizpro-agency' ),
					'features' => array(
						'✅ ' . __( 'Senior Principal Advisor', 'bizpro-agency' ),
						'✅ ' . __( 'Unlimited Strategy & Technology Calls', 'bizpro-agency' ),
						'✅ ' . __( 'Priority Executive Concierge', 'bizpro-agency' ),
						'✅ ' . __( '99.9% Uptime Engineering SLA', 'bizpro-agency' ),
						'✅ ' . __( 'Multi-Jurisdiction Advisory Review', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Get Started with Growth', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact' ),
				),
				array(
					'name'     => __( 'Executive Mandate', 'bizpro-agency' ),
					'desc'     => __( 'Full corporate governance, ESG & boardroom consulting.', 'bizpro-agency' ),
					'price'    => '$299',
					'period'   => __( '/ month', 'bizpro-agency' ),
					'featured' => false,
					'badge'    => '',
					'features' => array(
						'✅ ' . __( 'C-Suite Executive Team Mandate', 'bizpro-agency' ),
						'✅ ' . __( 'Cross-Border Strategic Support', 'bizpro-agency' ),
						'✅ ' . __( 'Global Regulatory Compliance', 'bizpro-agency' ),
						'✅ ' . __( 'Dedicated VIP Phone & Slack Channel', 'bizpro-agency' ),
						'✅ ' . __( 'On-Site Advisory Visits Included', 'bizpro-agency' ),
					),
					'btn_text' => __( 'Contact Executive Desk', 'bizpro-agency' ),
					'btn_url'  => bizpro_agency_page_url( 'contact' ),
				),
			),
		),
	);

	$matrix['consulting'] = $matrix['default'];
	$matrix['corporate']  = $matrix['default'];

	return isset( $matrix[ $demo ] ) ? $matrix[ $demo ] : $matrix['default'];
}

/**
 * Resolve the URL of a logical demo page (contact, about, services ...).
 *
 * Pages are looked up by the `_bizpro_page_key` meta written by the demo importer, so
 * every demo can own its own inner pages. Falls back to the page slug, then to the site home.
 *
 * @param string      $key  Page key, e.g. 'contact', 'services', 'home'.
 * @param string|null $demo Demo key (visa, travel ...). Defaults to the current demo context.
 * @return string
 */
function bizpro_agency_page_url( $key, $demo = null ) {
	static $map = null;

	if ( null === $map ) {
		$map   = array();
		$pages = get_posts(
			array(
				'post_type'              => 'page',
				'post_status'            => 'publish',
				'posts_per_page'         => 200, // phpcs:ignore WordPress.WP.PostsPerPage.posts_per_page_posts_per_page
				'meta_key'               => '_bizpro_page_key', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
				'no_found_rows'          => true,
				'update_post_term_cache' => false,
			)
		);
		foreach ( $pages as $page ) {
			$page_key                       = get_post_meta( $page->ID, '_bizpro_page_key', true );
			$page_demo                      = get_post_meta( $page->ID, '_bizpro_demo', true );
			$page_demo                      = $page_demo ? $page_demo : 'default';
			$map[ $page_demo ][ $page_key ] = $page->ID;
		}
	}

	$demo = $demo ? $demo : bizpro_agency_get_demo_context();
	$id   = 0;
	if ( isset( $map[ $demo ][ $key ] ) ) {
		$id = $map[ $demo ][ $key ];
	} elseif ( 'home' !== $key ) {
		foreach ( array( 'default' ) as $fallback_demo ) {
			if ( isset( $map[ $fallback_demo ][ $key ] ) ) {
				$id = $map[ $fallback_demo ][ $key ];
			}
		}
	}
	if ( $id ) {
		return get_permalink( $id );
	}

	// Home page resolution per demo niche.
	if ( 'home' === $key ) {
		if ( ! $demo || 'default' === $demo ) {
			return home_url( '/' );
		}
		$demo_slugs = array(
			'visa'       => 'visa-immigration',
			'travel'     => 'travel-agency',
			'it'         => 'it-solutions',
			'consulting' => 'business-consulting',
			'corporate'  => 'corporate',
			'digital'    => 'digital-store',
		);
		if ( isset( $demo_slugs[ $demo ] ) ) {
			$demo_page = get_page_by_path( $demo_slugs[ $demo ] );
			if ( $demo_page ) {
				return get_permalink( $demo_page );
			}
			return home_url( '/' . $demo_slugs[ $demo ] . '/' );
		}
		return home_url( '/' );
	}

	$page = get_page_by_path( $key );
	if ( $page ) {
		return get_permalink( $page );
	}
	return 'contact' === $key ? home_url( '/#contact' ) : home_url( '/' );
}

/**
 * Get menu location for current demo.
 *
 * @param string|null $context Context string.
 * @return string
 */
function bizpro_agency_get_demo_menu_location( $context = null ) {
	if ( ! $context ) {
		$context = bizpro_agency_get_demo_context();
	}
	$map = array(
		'digital'    => 'menu_digital',
		'visa'       => 'menu_visa',
		'travel'     => 'menu_travel',
		'it'         => 'menu_it',
		'consulting' => 'menu_consulting',
		'corporate'  => 'menu_corporate',
	);
	if ( isset( $map[ $context ] ) && has_nav_menu( $map[ $context ] ) ) {
		return $map[ $context ];
	}
	return 'primary';
}

/**
 * Get demo branding info (tagline, CTA text, CTA URL).
 *
 * @param string|null $context Context string.
 * @return array
 */
function bizpro_agency_get_demo_info( $context = null ) {
	if ( ! $context ) {
		$context = bizpro_agency_get_demo_context();
	}
	$demos = array(
		'digital'    => array(
			'tagline'   => __( 'Digital & SaaS', 'bizpro-agency' ),
			'cta_text'  => __( 'Browse Products', 'bizpro-agency' ),
			'cta_url'   => home_url( '/digital-store/#products' ),
			'top_badge' => __( 'Instant Digital Delivery', 'bizpro-agency' ),
		),
		'visa'       => array(
			'tagline'   => __( 'Immigration', 'bizpro-agency' ),
			'cta_text'  => __( 'Free Assessment', 'bizpro-agency' ),
			'cta_url'   => '#visa-assessment',
			'top_badge' => __( 'Licensed Immigration Specialists', 'bizpro-agency' ),
		),
		'travel'     => array(
			'tagline'   => __( 'Travel & Tours', 'bizpro-agency' ),
			'cta_text'  => __( 'Book a Tour', 'bizpro-agency' ),
			'cta_url'   => '#travel-inquiry',
			'top_badge' => __( 'Verified Global Tour Operator', 'bizpro-agency' ),
		),
		'it'         => array(
			'tagline'   => __( 'IT & Cloud', 'bizpro-agency' ),
			'cta_text'  => __( 'Free Tech Audit', 'bizpro-agency' ),
			'cta_url'   => '#contact',
			'top_badge' => __( 'Cloud & Software Engineering', 'bizpro-agency' ),
		),
		'consulting' => array(
			'tagline'   => __( 'Consulting', 'bizpro-agency' ),
			'cta_text'  => __( 'Book Advisory', 'bizpro-agency' ),
			'cta_url'   => '#contact',
			'top_badge' => __( 'Strategic Management Consultants', 'bizpro-agency' ),
		),
		'corporate'  => array(
			'tagline'   => __( 'Corporate', 'bizpro-agency' ),
			'cta_text'  => __( 'Contact Corporate', 'bizpro-agency' ),
			'cta_url'   => '#contact',
			'top_badge' => __( 'Institutional Corporate Advisory', 'bizpro-agency' ),
		),
		'default'    => array(
			'tagline'   => __( 'Agency', 'bizpro-agency' ),
			'cta_text'  => bizpro_agency_get( 'header_cta_text', __( 'Get a Quote', 'bizpro-agency' ) ),
			'cta_url'   => bizpro_agency_get( 'header_cta_link', '#contact' ),
			'top_badge' => __( 'Business, Tech & Immigration Solutions', 'bizpro-agency' ),
		),
	);
	return isset( $demos[ $context ] ) ? $demos[ $context ] : $demos['default'];
}

/**
 * Fallback menu shown per niche demo until the buyer assigns a menu in Appearance -> Menus.
 */
function bizpro_agency_fallback_menu() {
	$context = bizpro_agency_get_demo_context();
	$home    = home_url( '/' );

	// Common Demos Dropdown Items
	$demos_list = array(
		array(
			'label' => __( 'Main Agency (Multi-Purpose)', 'bizpro-agency' ),
			'url'   => $home,
			'badge' => __( 'Popular', 'bizpro-agency' ),
			'key'   => 'default',
		),
		array(
			'label' => __( 'Visa & Immigration', 'bizpro-agency' ),
			'url'   => home_url( '/visa-immigration/' ),
			'badge' => __( 'Hot', 'bizpro-agency' ),
			'key'   => 'visa',
		),
		array(
			'label' => __( 'Travel & Tour Agency', 'bizpro-agency' ),
			'url'   => home_url( '/travel-agency/' ),
			'badge' => __( 'New', 'bizpro-agency' ),
			'key'   => 'travel',
		),
		array(
			'label' => __( 'IT Solutions & Cloud', 'bizpro-agency' ),
			'url'   => home_url( '/it-solutions/' ),
			'badge' => __( 'Tech', 'bizpro-agency' ),
			'key'   => 'it',
		),
		array(
			'label' => __( 'Business Consulting', 'bizpro-agency' ),
			'url'   => home_url( '/business-consulting/' ),
			'badge' => '',
			'key'   => 'consulting',
		),
		array(
			'label' => __( 'Corporate Enterprise', 'bizpro-agency' ),
			'url'   => home_url( '/corporate/' ),
			'badge' => '',
			'key'   => 'corporate',
		),
		array(
			'label' => __( 'Digital Store & SaaS', 'bizpro-agency' ),
			'url'   => home_url( '/digital-store/' ),
			'badge' => __( 'eCom', 'bizpro-agency' ),
			'key'   => 'digital',
		),
	);

	// Context-specific navigation items
	$items = array();

	if ( 'visa' === $context ) {
		$items = array(
			array(
				'label' => __( 'Home', 'bizpro-agency' ),
				'url'   => $home,
			),
			array(
				'label' => __( 'Visa Pathways', 'bizpro-agency' ),
				'url'   => '#visa-countries',
			),
			array(
				'label' => __( 'Eligibility Check', 'bizpro-agency' ),
				'url'   => '#visa-assessment',
			),
			array(
				'label' => __( '4-Step Process', 'bizpro-agency' ),
				'url'   => '#visa-process',
			),
			array(
				'label' => __( 'Success Stories', 'bizpro-agency' ),
				'url'   => '#visa-stories',
			),
			array(
				'label' => __( 'FAQs', 'bizpro-agency' ),
				'url'   => '#visa-faq',
			),
		);
	} elseif ( 'travel' === $context ) {
		$items = array(
			array(
				'label' => __( 'Home', 'bizpro-agency' ),
				'url'   => $home,
			),
			array(
				'label' => __( 'Destinations', 'bizpro-agency' ),
				'url'   => '#travel-destinations',
			),
			array(
				'label' => __( 'Tour Packages', 'bizpro-agency' ),
				'url'   => '#travel-packages',
			),
			array(
				'label' => __( 'Why Us', 'bizpro-agency' ),
				'url'   => '#travel-why',
			),
			array(
				'label' => __( 'Hot Deals', 'bizpro-agency' ),
				'url'   => '#travel-deals',
			),
			array(
				'label' => __( 'Reviews', 'bizpro-agency' ),
				'url'   => '#travel-reviews',
			),
		);
	} elseif ( 'it' === $context ) {
		$items = array(
			array(
				'label' => __( 'Home', 'bizpro-agency' ),
				'url'   => $home,
			),
			array(
				'label' => __( 'IT Solutions', 'bizpro-agency' ),
				'url'   => '#it-services',
			),
			array(
				'label' => __( 'Tech Stack', 'bizpro-agency' ),
				'url'   => '#it-tech',
			),
			array(
				'label' => __( 'Case Studies', 'bizpro-agency' ),
				'url'   => '#it-cases',
			),
			array(
				'label' => __( 'SLA & Uptime', 'bizpro-agency' ),
				'url'   => '#it-sla',
			),
			array(
				'label' => __( 'Retainers', 'bizpro-agency' ),
				'url'   => '#it-pricing',
			),
		);
	} elseif ( 'consulting' === $context ) {
		$items = array(
			array(
				'label' => __( 'Home', 'bizpro-agency' ),
				'url'   => $home,
			),
			array(
				'label' => __( 'Advisory Practices', 'bizpro-agency' ),
				'url'   => '#consulting-pillars',
			),
			array(
				'label' => __( 'Methodology', 'bizpro-agency' ),
				'url'   => '#consulting-process',
			),
			array(
				'label' => __( 'Client Impact', 'bizpro-agency' ),
				'url'   => '#consulting-results',
			),
			array(
				'label' => __( 'Advisory Tiers', 'bizpro-agency' ),
				'url'   => '#consulting-pricing',
			),
			array(
				'label' => __( 'Executive Briefing', 'bizpro-agency' ),
				'url'   => '#contact',
			),
		);
	} elseif ( 'corporate' === $context ) {
		$items = array(
			array(
				'label' => __( 'Home', 'bizpro-agency' ),
				'url'   => $home,
			),
			array(
				'label' => __( 'Capabilities', 'bizpro-agency' ),
				'url'   => '#capabilities',
			),
			array(
				'label' => __( 'Global Reach', 'bizpro-agency' ),
				'url'   => '#corporate-global',
			),
			array(
				'label' => __( 'Leadership', 'bizpro-agency' ),
				'url'   => '#corporate-leadership',
			),
			array(
				'label' => __( 'Governance', 'bizpro-agency' ),
				'url'   => '#corporate-governance',
			),
			array(
				'label' => __( 'Contact', 'bizpro-agency' ),
				'url'   => '#contact',
			),
		);
	} elseif ( 'digital' === $context ) {
		$items = array(
			array(
				'label' => __( 'Home', 'bizpro-agency' ),
				'url'   => home_url( '/digital-store/' ),
			),
			array(
				'label' => __( 'Digital Store', 'bizpro-agency' ),
				'url'   => '#products',
			),
			array(
				'label' => __( 'Store Features', 'bizpro-agency' ),
				'url'   => '#features',
			),
			array(
				'label' => __( 'Buyer Reviews', 'bizpro-agency' ),
				'url'   => '#reviews',
			),
			array(
				'label' => __( 'Buyer FAQs', 'bizpro-agency' ),
				'url'   => '#store-faq',
			),
			array(
				'label' => __( 'Contact Us', 'bizpro-agency' ),
				'url'   => home_url( '/contact/' ),
			),
		);
	} else {
		$items = array(
			array(
				'label' => __( 'Home', 'bizpro-agency' ),
				'url'   => $home,
			),
			array(
				'label' => __( 'Services', 'bizpro-agency' ),
				'url'   => $home . '#services',
			),
			array(
				'label' => __( 'Why Us', 'bizpro-agency' ),
				'url'   => $home . '#about',
			),
			array(
				'label' => __( 'Case Studies', 'bizpro-agency' ),
				'url'   => $home . '#case-studies',
			),
			array(
				'label' => __( 'Pricing', 'bizpro-agency' ),
				'url'   => $home . '#pricing',
			),
			array(
				'label' => __( 'FAQ', 'bizpro-agency' ),
				'url'   => $home . '#faq',
			),
			array(
				'label' => __( 'Contact', 'bizpro-agency' ),
				'url'   => $home . '#contact',
			),
		);
	}

	echo '<nav class="main-navigation__nav" aria-label="' . esc_attr__( 'Primary Menu', 'bizpro-agency' ) . '">';
	echo '<ul id="primary-menu" class="menu">';

	// Output Niche items
	foreach ( $items as $it ) {
		echo '<li><a href="' . esc_url( $it['url'] ) . '">' . esc_html( $it['label'] ) . '</a></li>';
	}

	// Output Demos Dropdown (showcase sites only).
	if ( bizpro_agency_get( 'show_demo_switcher' ) ) {
		echo '<li class="menu-item-has-children bpa-demos-dropdown">';
		echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'All Demos', 'bizpro-agency' ) . ' <span class="bpa-menu-arrow" aria-hidden="true">&#9662;</span></a>';
		echo '<ul class="sub-menu">';
		foreach ( $demos_list as $dm ) {
			$is_active = ( $dm['key'] === $context );
			echo '<li><a href="' . esc_url( $dm['url'] ) . '"' . ( $is_active ? ' class="is-active-demo"' : '' ) . '>';
			echo esc_html( $dm['label'] );
			if ( ! empty( $dm['badge'] ) ) {
				echo ' <span class="bpa-menu-badge bpa-menu-badge--' . esc_attr( strtolower( $dm['badge'] ) ) . '">' . esc_html( $dm['badge'] ) . '</span>';
			}
			if ( $is_active ) {
				echo ' <span class="bpa-current-badge">&#10003;</span>';
			}
			echo '</a></li>';
		}
		echo '</ul>';
		echo '</li>';
	}

	echo '</ul>';
	echo '</nav>';
}

/**
 * Excerpt tweaks.
 */
function bizpro_agency_excerpt_length() {
	return 28;
}
add_filter( 'excerpt_length', 'bizpro_agency_excerpt_length' );

/**
 * Excerpt "more" text.
 */
function bizpro_agency_excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'bizpro_agency_excerpt_more' );

/**
 * Sanitize a checkbox.
 *
 * @param mixed $checked Value.
 * @return bool
 */
function bizpro_agency_sanitize_checkbox( $checked ) {
	return ( isset( $checked ) && true === (bool) $checked );
}

/**
 * Selective refresh callback for the site title.
 */
function bizpro_agency_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Add a no-sidebar-style helper class and a front-page class.
 *
 * @param array $classes Body classes.
 * @return array
 */
function bizpro_agency_body_classes( $classes ) {
	if ( ! bizpro_agency_get( 'topbar_enable' ) ) {
		$classes[] = 'no-topbar';
	}
	return $classes;
}
add_filter( 'body_class', 'bizpro_agency_body_classes' );

/**
 * Check if the current request is being edited or viewed with Elementor.
 *
 * @param int|null $post_id Post ID.
 * @return bool
 */
function bizpro_agency_is_elementor( $post_id = null ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}

	// Elementor editor or preview mode.
	if ( class_exists( '\Elementor\Plugin' ) ) {
		if ( isset( \Elementor\Plugin::$instance->editor ) && \Elementor\Plugin::$instance->editor->is_edit_mode() ) {
			return true;
		}
		if ( isset( \Elementor\Plugin::$instance->preview ) && \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
			return true;
		}
	}

	// Read-only detection of Elementor's editor/preview URL; no state is changed.
	// phpcs:ignore WordPress.Security.NonceVerification.Recommended
	if ( isset( $_GET['elementor-preview'] ) || ( isset( $_GET['action'] ) && 'elementor' === sanitize_key( wp_unslash( $_GET['action'] ) ) ) ) {
		return true;
	}

	if ( $post_id && 'builder' === get_post_meta( $post_id, '_elementor_edit_mode', true ) ) {
		return true;
	}

	return false;
}

/**
 * Load template helper tags (icons, etc.).
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Load Customizer controls and settings.
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Load Gutenberg Block Patterns.
 */
require_once get_template_directory() . '/inc/block-patterns.php';

/**
 * Load WooCommerce integration.
 */
require_once get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Theme Welcome / About page.
 */
require_once get_template_directory() . '/inc/about-page.php';

/**
 * Load Theme Registration & License Verification.
 */
require_once get_template_directory() . '/inc/license.php';

/**
 * Load One Click Demo Import support.
 */
require_once get_template_directory() . '/inc/demo-import.php';

/**
 * Load Breadcrumbs helper.
 */
require_once get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Load Freemius SDK wrapper (optional licensing & monetization).
 */
require_once get_template_directory() . '/inc/freemius.php';

/**
 * Whether a dedicated SEO plugin is active (it then owns meta/schema output).
 *
 * @return bool
 */
function bizpro_agency_has_seo_plugin() {
	return defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || defined( 'AIOSEO_VERSION' ) || defined( 'SEOPRESS_VERSION' ) || defined( 'THE_SEO_FRAMEWORK_VERSION' );
}

/**
 * Print a JSON-LD structured-data block (hex-encoded so it is safe inside <script>).
 *
 * @param array $data Schema.org data.
 */
function bizpro_agency_print_jsonld( $data ) {
	$json = wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT );
	if ( $json ) {
		echo '<script type="application/ld+json">' . $json . "</script>\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- hex-encoded JSON.
	}
}

/**
 * Schema.org LocalBusiness JSON-LD on the front page.
 */
function bizpro_agency_schema_org() {
	if ( ! is_front_page() || bizpro_agency_has_seo_plugin() ) {
		return;
	}
	$name    = html_entity_decode( get_bloginfo( 'name' ), ENT_QUOTES, 'UTF-8' );
	$desc    = html_entity_decode( get_bloginfo( 'description' ), ENT_QUOTES, 'UTF-8' );
	$url     = esc_url( home_url( '/' ) );
	$phone   = bizpro_agency_get( 'topbar_phone' );
	$email   = bizpro_agency_get( 'topbar_email' );
	$address = bizpro_agency_get( 'topbar_address' );
	$logo    = get_site_icon_url( 512 );

	$schema = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'ProfessionalService',
		'name'        => $name,
		'description' => $desc,
		'url'         => $url,
	);
	if ( $phone ) {
		$schema['telephone'] = $phone; }
	if ( $email ) {
		$schema['email'] = $email; }
	if ( $address ) {
		$schema['address'] = array(
			'@type'         => 'PostalAddress',
			'streetAddress' => $address,
		); }
	if ( $logo ) {
		$schema['logo'] = $logo; }

	bizpro_agency_print_jsonld( $schema );
}
add_action( 'wp_head', 'bizpro_agency_schema_org' );

/**
 * Open Graph & Twitter Card meta tags.
 */
function bizpro_agency_og_tags() {
	if ( bizpro_agency_has_seo_plugin() ) {
		return;
	}
	if ( is_feed() || is_admin() ) {
		return;
	}

	global $post;

	if ( is_singular() && $post && ! is_front_page() ) {
		$title = get_the_title( $post->ID );
		$desc  = has_excerpt( $post->ID )
			? wp_strip_all_tags( get_the_excerpt() )
			: wp_trim_words( wp_strip_all_tags( get_the_content( null, false, $post ) ), 30 );
		$url   = get_permalink( $post->ID );
		$img   = get_the_post_thumbnail_url( $post->ID, 'full' );
	} else {
		$title = html_entity_decode( get_bloginfo( 'name' ), ENT_QUOTES, 'UTF-8' );
		$desc  = html_entity_decode( get_bloginfo( 'description' ), ENT_QUOTES, 'UTF-8' );
		$url   = esc_url( home_url( '/' ) );
		$img   = get_site_icon_url( 512 );
	}

	$img = $img ? $img : '';
	?>
	<meta property="og:type"        content="<?php echo ( is_front_page() || is_home() ) ? 'website' : ( is_singular() ? 'article' : 'website' ); ?>" />
	<meta property="og:title"       content="<?php echo esc_attr( $title ); ?>" />
	<meta property="og:description" content="<?php echo esc_attr( $desc ); ?>" />
	<meta property="og:url"         content="<?php echo esc_url( $url ); ?>" />
	<meta property="og:site_name"   content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
	<?php if ( $img ) : ?>
	<meta property="og:image"       content="<?php echo esc_url( $img ); ?>" />
	<?php endif; ?>
	<meta name="twitter:card"        content="summary_large_image" />
	<meta name="twitter:title"       content="<?php echo esc_attr( $title ); ?>" />
	<meta name="twitter:description" content="<?php echo esc_attr( $desc ); ?>" />
	<?php if ( $img ) : ?>
	<meta name="twitter:image"       content="<?php echo esc_url( $img ); ?>" />
	<?php endif; ?>
	<?php
}
add_action( 'wp_head', 'bizpro_agency_og_tags' );

/**
 * Add page-template identity classes to the body for demo-specific styling.
 */
function bizpro_agency_template_body_class( $classes ) {
	$classes[] = 'bizpro-demo-' . sanitize_html_class( bizpro_agency_get_demo_context() );
	if ( is_page() ) {
		$template = get_page_template_slug( get_queried_object_id() );
		if ( ! empty( $template ) && 'default' !== $template ) {
			$classes[] = 'bizpro-template-' . sanitize_html_class( str_replace( array( '.php', 'template-homepage-', 'template-' ), '', $template ) );
		}
	}
	return $classes;
}
add_filter( 'body_class', 'bizpro_agency_template_body_class' );

/**
 * WordPress loads front-page.php for a static front page before any page template.
 * Honour the page template the user (or the demo importer) assigned to that page.
 *
 * @param string $template Path to the template determined by WordPress.
 * @return string
 */
function bizpro_agency_template_include( $template ) {
	if ( is_admin() || ! is_front_page() || ! is_page() || bizpro_agency_is_elementor( get_queried_object_id() ) ) {
		return $template;
	}

	$assigned = get_page_template_slug( get_queried_object_id() );
	if ( $assigned && 'default' !== $assigned ) {
		$file = locate_template( array( $assigned ) );
		if ( $file ) {
			return $file;
		}
	}

	return $template;
}
add_filter( 'template_include', 'bizpro_agency_template_include', 99 );

/* =====================================================================
 * GOOGLE ADSENSE & MONETIZATION SUITE
 * =================================================================== */

/**
 * Register AdSense & Advertisement Widget Areas.
 */
function bizpro_agency_register_ad_sidebars() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Ad Banner (728x90 / Responsive)', 'bizpro-agency' ),
			'id'            => 'header-ad-widget',
			'description'   => esc_html__( 'Displays an advertisement banner below the top navigation.', 'bizpro-agency' ),
			'before_widget' => '<div class="bpa-ad-container bpa-ad-container--header">',
			'after_widget'  => '</div>',
			'before_title'  => '<span class="screen-reader-text">',
			'after_title'   => '</span>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'In-Content Single Post Ad', 'bizpro-agency' ),
			'id'            => 'in-content-ad-widget',
			'description'   => esc_html__( 'Displays an advertisement inside single post articles.', 'bizpro-agency' ),
			'before_widget' => '<div class="bpa-ad-container bpa-ad-container--content">',
			'after_widget'  => '</div>',
			'before_title'  => '<span class="screen-reader-text">',
			'after_title'   => '</span>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Above Footer Ad Banner', 'bizpro-agency' ),
			'id'            => 'footer-ad-widget',
			'description'   => esc_html__( 'Displays an advertisement banner above the website footer.', 'bizpro-agency' ),
			'before_widget' => '<div class="bpa-ad-container bpa-ad-container--footer">',
			'after_widget'  => '</div>',
			'before_title'  => '<span class="screen-reader-text">',
			'after_title'   => '</span>',
		)
	);
}
add_action( 'widgets_init', 'bizpro_agency_register_ad_sidebars' );

/**
 * Inject an in-content ad widget after the 2nd paragraph on single posts.
 *
 * Ad markup is supplied by site owners through widgets (Appearance > Widgets).
 *
 * @param string $content Post content.
 * @return string
 */
function bizpro_agency_inject_content_ad( $content ) {
	if ( ! is_single() || ! is_main_query() || is_admin() || ! is_active_sidebar( 'in-content-ad-widget' ) ) {
		return $content;
	}

	$paragraphs = explode( '</p>', $content );
	if ( count( $paragraphs ) <= 2 ) {
		return $content;
	}

	ob_start();
	dynamic_sidebar( 'in-content-ad-widget' );
	$ad_code = ob_get_clean();

	$ad_html = '<div class="bpa-ad-container bpa-ad-container--inline"><span class="bpa-ad-label">' . esc_html__( 'Advertisement', 'bizpro-agency' ) . '</span>' . $ad_code . '</div>';
	array_splice( $paragraphs, 2, 0, $ad_html );
	return implode( '</p>', $paragraphs );
}
add_filter( 'the_content', 'bizpro_agency_inject_content_ad' );

/**
 * Render an ad widget area in theme templates.
 *
 * @param string $slot Slot name: 'header', 'footer'.
 */
function bizpro_agency_render_ad_slot( $slot = 'header' ) {
	$sidebar_id = sanitize_key( $slot ) . '-ad-widget';
	if ( ! is_active_sidebar( $sidebar_id ) ) {
		return;
	}

	echo '<div class="container bpa-ad-wrapper bpa-ad-wrapper--' . esc_attr( sanitize_html_class( $slot ) ) . '"><div class="bpa-ad-container"><span class="bpa-ad-label">' . esc_html__( 'Advertisement', 'bizpro-agency' ) . '</span>';
	dynamic_sidebar( $sidebar_id );
	echo '</div></div>';
}

/* =====================================================================
 * ADVANCED SEO & SCHEMA.ORG RICH SNIPPETS
 * =================================================================== */

/**
 * Output Enhanced SEO Meta Tags and JSON-LD Rich Snippets.
 */
function bizpro_agency_advanced_seo_head() {
	if ( is_feed() || is_admin() || bizpro_agency_has_seo_plugin() ) {
		return;
	}

	// 1. Meta Description
	$desc = '';
	if ( is_singular() ) {
		$post_id = get_the_ID();
		if ( has_excerpt( $post_id ) ) {
			$desc = wp_strip_all_tags( get_the_excerpt( $post_id ) );
		} else {
			$desc = wp_trim_words( wp_strip_all_tags( get_post_field( 'post_content', $post_id ) ), 28 );
		}
	} elseif ( is_front_page() || is_home() ) {
		$desc = get_bloginfo( 'description' );
	}
	if ( ! empty( $desc ) ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}

	// 3. WebSite Schema with Sitelinks Searchbox
	$website_schema = array(
		'@context'        => 'https://schema.org',
		'@type'           => 'WebSite',
		'name'            => get_bloginfo( 'name' ),
		'url'             => home_url( '/' ),
		'potentialAction' => array(
			'@type'       => 'SearchAction',
			'target'      => home_url( '/?s={search_term_string}' ),
			'query-input' => 'required name=search_term_string',
		),
	);
	bizpro_agency_print_jsonld( $website_schema );

	// 4. FAQPage Schema for Google Rich Snippets
	$context = function_exists( 'bizpro_agency_get_demo_context' ) ? bizpro_agency_get_demo_context() : 'default';
	if ( is_front_page() || 'visa' === $context ) {
		$faq_items = array();
		for ( $i = 1; $i <= 6; $i++ ) {
			$q = bizpro_agency_get( "faq_{$i}_q" );
			$a = bizpro_agency_get( "faq_{$i}_a" );
			if ( ! empty( $q ) && ! empty( $a ) ) {
				$faq_items[] = array(
					'@type'          => 'Question',
					'name'           => $q,
					'acceptedAnswer' => array(
						'@type' => 'Answer',
						'text'  => $a,
					),
				);
			}
		}
		if ( ! empty( $faq_items ) ) {
			$faq_schema = array(
				'@context'   => 'https://schema.org',
				'@type'      => 'FAQPage',
				'mainEntity' => $faq_items,
			);
			bizpro_agency_print_jsonld( $faq_schema );
		}
	}
}
add_action( 'wp_head', 'bizpro_agency_advanced_seo_head', 2 );



/**
 * Ensure the 7 Demos Dropdown is always accessible in Primary Navigation.
 */
function bizpro_agency_append_demos_to_nav( $items, $args ) {
	if ( ! bizpro_agency_get( 'show_demo_switcher' ) ) {
		return $items;
	}
	if ( ( empty( $args->theme_location ) || 'primary' === $args->theme_location ) && false === strpos( $items, 'All Demos' ) ) {
		$demos     = array(
			array(
				'label' => 'Main Agency (Multi-Purpose)',
				'url'   => home_url( '/' ),
				'badge' => 'Popular',
			),
			array(
				'label' => 'Visa & Immigration',
				'url'   => home_url( '/visa-immigration/' ),
				'badge' => 'Hot',
			),
			array(
				'label' => 'Travel & Tour Agency',
				'url'   => home_url( '/travel-agency/' ),
				'badge' => 'New',
			),
			array(
				'label' => 'IT Solutions & Cloud',
				'url'   => home_url( '/it-solutions/' ),
				'badge' => 'Tech',
			),
			array(
				'label' => 'Business Consulting',
				'url'   => home_url( '/business-consulting/' ),
				'badge' => '',
			),
			array(
				'label' => 'Corporate Enterprise',
				'url'   => home_url( '/corporate/' ),
				'badge' => '',
			),
			array(
				'label' => 'Digital Products & SaaS',
				'url'   => home_url( '/digital-store/' ),
				'badge' => 'eCom',
			),
		);
		$dropdown  = '<li class="menu-item-has-children bpa-demos-dropdown">';
		$dropdown .= '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'All Demos', 'bizpro-agency' ) . ' <span class="bpa-menu-arrow" aria-hidden="true">&#9662;</span></a>';
		$dropdown .= '<ul class="sub-menu">';
		foreach ( $demos as $d ) {
			$dropdown .= '<li><a href="' . esc_url( $d['url'] ) . '">' . esc_html( $d['label'] );
			if ( ! empty( $d['badge'] ) ) {
				$dropdown .= ' <span class="bpa-menu-badge bpa-menu-badge--' . esc_attr( strtolower( $d['badge'] ) ) . '">' . esc_html( $d['badge'] ) . '</span>';
			}
			$dropdown .= '</a></li>';
		}
		$dropdown .= '</ul></li>';
		$items    .= $dropdown;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'bizpro_agency_append_demos_to_nav', 10, 2 );

/**
 * Render Interactive Floating 7-Demo Quick Switcher on Frontend.
 */
function bizpro_agency_floating_demo_switcher() {
	if ( is_admin() || ! bizpro_agency_get( 'show_demo_switcher' ) ) {
		return;
	}
	$img_uri = trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/';
	$demos   = array(
		array(
			'title' => 'Main Agency',
			'desc'  => 'Multi-Purpose Flagship',
			'badge' => 'Popular',
			'url'   => home_url( '/' ),
			'img'   => $img_uri . 'demo-main.jpg',
		),
		array(
			'title' => 'Visa & Immigration',
			'desc'  => 'Legal Consultancy & Pathways',
			'badge' => 'Hot',
			'url'   => home_url( '/visa-immigration/' ),
			'img'   => $img_uri . 'demo-visa.jpg',
		),
		array(
			'title' => 'Travel & Tour Agency',
			'desc'  => 'Holiday Packages & Booking',
			'badge' => 'New',
			'url'   => home_url( '/travel-agency/' ),
			'img'   => $img_uri . 'demo-travel.jpg',
		),
		array(
			'title' => 'IT Solutions & Cloud',
			'desc'  => 'DevOps, Cloud & Engineering',
			'badge' => 'Tech',
			'url'   => home_url( '/it-solutions/' ),
			'img'   => $img_uri . 'demo-it.jpg',
		),
		array(
			'title' => 'Business Consulting',
			'desc'  => 'Strategic Advisory & Retainers',
			'badge' => 'Pro',
			'url'   => home_url( '/business-consulting/' ),
			'img'   => $img_uri . 'demo-consulting.jpg',
		),
		array(
			'title' => 'Corporate Enterprise',
			'desc'  => 'Governance & Global Solutions',
			'badge' => 'Elite',
			'url'   => home_url( '/corporate/' ),
			'img'   => $img_uri . 'demo-corporate.jpg',
		),
		array(
			'title' => 'Digital Store & SaaS',
			'desc'  => 'eCommerce & Software Selling',
			'badge' => 'eCom',
			'url'   => home_url( '/digital-store/' ),
			'img'   => $img_uri . 'demo-digital.jpg',
		),
	);
	?>
	<!-- Floating 7 Demos Quick Switcher -->
	<div class="bpa-floating-demo-bar" id="bpaFloatingDemoBar">
		<button type="button" class="bpa-demo-pill" id="bpaDemoPill" aria-expanded="false" title="<?php esc_attr_e( 'View All 7 Ready Demos', 'bizpro-agency' ); ?>">
			<span class="bpa-pulse-dot"></span>
			<span class="bpa-pill-icon">⚡</span>
			<span class="bpa-pill-text"><?php esc_html_e( '7 Ready Demos', 'bizpro-agency' ); ?></span>
			<span class="bpa-pill-arrow">&#9652;</span>
		</button>
		<div class="bpa-demo-drawer" id="bpaDemoDrawer">
			<div class="bpa-drawer-header">
				<div>
					<h4 style="margin: 0; font-size: 1.1rem; color: #0f172a; font-weight: 800;"><?php esc_html_e( '7 Pre-Built Starter Demos', 'bizpro-agency' ); ?></h4>
					<p style="margin: 4px 0 0; font-size: 0.82rem; color: #64748b;"><?php esc_html_e( '1-Click import ready with complete pages & layouts', 'bizpro-agency' ); ?></p>
				</div>
				<button type="button" class="bpa-drawer-close" id="bpaDrawerClose">&times;</button>
			</div>
			<div class="bpa-drawer-grid">
				<?php foreach ( $demos as $d ) : ?>
					<a href="<?php echo esc_url( $d['url'] ); ?>" class="bpa-demo-item">
						<div class="bpa-demo-item-thumb">
							<img src="<?php echo esc_url( $d['img'] ); ?>" alt="<?php echo esc_attr( $d['title'] ); ?>" loading="lazy" style="width: 100%; height: 110px; object-fit: cover; border-radius: 8px;">
							<span class="bpa-item-badge bpa-item-badge--<?php echo esc_attr( strtolower( $d['badge'] ) ); ?>"><?php echo esc_html( $d['badge'] ); ?></span>
						</div>
						<div class="bpa-demo-item-info">
							<strong><?php echo esc_html( $d['title'] ); ?></strong>
							<span><?php echo esc_html( $d['desc'] ); ?></span>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<script>
	(function(){
		var pill = document.getElementById('bpaDemoPill');
		var drawer = document.getElementById('bpaDemoDrawer');
		var close = document.getElementById('bpaDrawerClose');
		if(pill && drawer){
			pill.addEventListener('click', function(e){
				e.stopPropagation();
				var open = drawer.classList.toggle('is-open');
				pill.setAttribute('aria-expanded', open ? 'true' : 'false');
			});
			if(close){
				close.addEventListener('click', function(){
					drawer.classList.remove('is-open');
					pill.setAttribute('aria-expanded', 'false');
				});
			}
			document.addEventListener('click', function(e){
				if(!drawer.contains(e.target) && !pill.contains(e.target)){
					drawer.classList.remove('is-open');
					pill.setAttribute('aria-expanded', 'false');
				}
			});
		}
	})();
	</script>
	<?php
}
add_action( 'wp_footer', 'bizpro_agency_floating_demo_switcher' );

// Include Astra Pro Parity Modules
require_once get_template_directory() . '/inc/white-label.php';
// Note: Custom Post Types (Visa Pathways) are managed exclusively by the BizPro Agency Companion plugin per WordPress.org guidelines.
require_once get_template_directory() . '/inc/tgmpa/tgmpa-config.php';
require_once get_template_directory() . '/inc/lead-handler.php';

/**
 * Calculate post reading time (e.g. 📖 4 min read).
 */
function bizpro_agency_reading_time( $post_id = null ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}
	$content    = get_post_field( 'post_content', $post_id );
	$word_count = str_word_count( wp_strip_all_tags( $content ) );
	$minutes    = ceil( $word_count / 200 );
	return max( 1, $minutes );
}
