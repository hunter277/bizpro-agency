<?php
/**
 * Custom Post Type: Visa Pathways & Global Mobility
 *
 * Provides turnkey backend management for countries, visa categories,
 * processing times, and eligibility criteria in WP Admin.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Visa Pathways Post Type and Taxonomies.
 */
function bizpro_agency_register_visa_cpt() {
	$labels = array(
		'name'                  => esc_html_x( 'Visa Pathways', 'Post Type General Name', 'bizpro-agency' ),
		'singular_name'         => esc_html_x( 'Visa Pathway', 'Post Type Singular Name', 'bizpro-agency' ),
		'menu_name'             => esc_html__( 'Visa Pathways', 'bizpro-agency' ),
		'name_admin_bar'        => esc_html__( 'Visa Pathway', 'bizpro-agency' ),
		'archives'              => esc_html__( 'Pathway Archives', 'bizpro-agency' ),
		'attributes'            => esc_html__( 'Pathway Attributes', 'bizpro-agency' ),
		'parent_item_colon'     => esc_html__( 'Parent Pathway:', 'bizpro-agency' ),
		'all_items'             => esc_html__( 'All Visa Pathways', 'bizpro-agency' ),
		'add_new_item'          => esc_html__( 'Add New Pathway', 'bizpro-agency' ),
		'add_new'               => esc_html__( 'Add New', 'bizpro-agency' ),
		'new_item'              => esc_html__( 'New Pathway', 'bizpro-agency' ),
		'edit_item'             => esc_html__( 'Edit Pathway', 'bizpro-agency' ),
		'update_item'           => esc_html__( 'Update Pathway', 'bizpro-agency' ),
		'view_item'             => esc_html__( 'View Pathway', 'bizpro-agency' ),
		'view_items'            => esc_html__( 'View Pathways', 'bizpro-agency' ),
		'search_items'          => esc_html__( 'Search Pathways', 'bizpro-agency' ),
		'not_found'             => esc_html__( 'No visa pathways found', 'bizpro-agency' ),
		'not_found_in_trash'    => esc_html__( 'No visa pathways found in Trash', 'bizpro-agency' ),
		'featured_image'        => esc_html__( 'Country / Program Image', 'bizpro-agency' ),
		'set_featured_image'    => esc_html__( 'Set pathway image', 'bizpro-agency' ),
		'remove_featured_image' => esc_html__( 'Remove pathway image', 'bizpro-agency' ),
		'use_featured_image'    => esc_html__( 'Use as pathway image', 'bizpro-agency' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Visa Pathway', 'bizpro-agency' ),
		'description'           => esc_html__( 'Global immigration programs and destination pathways', 'bizpro-agency' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'            => array( 'bpa_visa_category', 'bpa_destination_country' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-airplane',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'bpa_visa_pathway', $args );

	// Category Taxonomy (PR, Work, Student, Tourist, Investor)
	$cat_labels = array(
		'name'              => esc_html_x( 'Visa Types', 'taxonomy general name', 'bizpro-agency' ),
		'singular_name'     => esc_html_x( 'Visa Type', 'taxonomy singular name', 'bizpro-agency' ),
		'search_items'      => esc_html__( 'Search Visa Types', 'bizpro-agency' ),
		'all_items'         => esc_html__( 'All Visa Types', 'bizpro-agency' ),
		'edit_item'         => esc_html__( 'Edit Visa Type', 'bizpro-agency' ),
		'update_item'       => esc_html__( 'Update Visa Type', 'bizpro-agency' ),
		'add_new_item'      => esc_html__( 'Add New Visa Type', 'bizpro-agency' ),
		'new_item_name'     => esc_html__( 'New Visa Type Name', 'bizpro-agency' ),
		'menu_name'         => esc_html__( 'Visa Types', 'bizpro-agency' ),
	);
	register_taxonomy( 'bpa_visa_category', array( 'bpa_visa_pathway' ), array(
		'hierarchical'      => true,
		'labels'            => $cat_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest'      => true,
		'rewrite'           => array( 'slug' => 'visa-type' ),
	) );

	// Destination Country Taxonomy
	$country_labels = array(
		'name'              => esc_html_x( 'Countries', 'taxonomy general name', 'bizpro-agency' ),
		'singular_name'     => esc_html_x( 'Country', 'taxonomy singular name', 'bizpro-agency' ),
		'search_items'      => esc_html__( 'Search Countries', 'bizpro-agency' ),
		'all_items'         => esc_html__( 'All Countries', 'bizpro-agency' ),
		'edit_item'         => esc_html__( 'Edit Country', 'bizpro-agency' ),
		'update_item'       => esc_html__( 'Update Country', 'bizpro-agency' ),
		'add_new_item'      => esc_html__( 'Add New Country', 'bizpro-agency' ),
		'new_item_name'     => esc_html__( 'New Country Name', 'bizpro-agency' ),
		'menu_name'         => esc_html__( 'Countries', 'bizpro-agency' ),
	);
	register_taxonomy( 'bpa_destination_country', array( 'bpa_visa_pathway' ), array(
		'hierarchical'      => true,
		'labels'            => $country_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest'      => true,
		'rewrite'           => array( 'slug' => 'destination' ),
	) );
}
add_action( 'init', 'bizpro_agency_register_visa_cpt', 0 );

/**
 * Register Meta Box for Pathway Criteria and Metrics.
 */
function bizpro_agency_visa_add_meta_box() {
	add_meta_box(
		'bpa_visa_meta_details',
		esc_html__( 'Pathway Details & Requirements', 'bizpro-agency' ),
		'bizpro_agency_visa_meta_box_html',
		'bpa_visa_pathway',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'bizpro_agency_visa_add_meta_box' );

/**
 * Render Meta Box HTML in Admin.
 *
 * @param WP_Post $post Current post.
 */
function bizpro_agency_visa_meta_box_html( $post ) {
	wp_nonce_field( 'bpa_visa_save_meta', 'bpa_visa_nonce' );

	$flag_emoji      = get_post_meta( $post->ID, '_bpa_flag_emoji', true );
	$country_code    = get_post_meta( $post->ID, '_bpa_country_code', true );
	$badge_text      = get_post_meta( $post->ID, '_bpa_badge_text', true );
	$processing_time = get_post_meta( $post->ID, '_bpa_processing_time', true );
	$success_rate    = get_post_meta( $post->ID, '_bpa_success_rate', true );
	$estimated_fee   = get_post_meta( $post->ID, '_bpa_estimated_fee', true );
	$apply_url       = get_post_meta( $post->ID, '_bpa_apply_url', true );
	?>
	<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; padding: 10px 0;">
		<div>
			<label for="bpa_flag_emoji" style="display:block;font-weight:700;margin-bottom:6px;">
				<?php esc_html_e( 'Country Flag Emoji or Icon:', 'bizpro-agency' ); ?>
			</label>
			<input type="text" id="bpa_flag_emoji" name="bpa_flag_emoji" value="<?php echo esc_attr( $flag_emoji ? $flag_emoji : '🇨🇦' ); ?>" style="width:100%;max-width:200px;font-size:24px;padding:4px 8px;" />
			<p class="description"><?php esc_html_e( 'e.g. 🇨🇦, 🇬🇧, 🇦🇺, 🇺🇸, 🇩🇪, 🇦🇪, 🇳🇿', 'bizpro-agency' ); ?></p>
		</div>

		<div>
			<label for="bpa_country_code" style="display:block;font-weight:700;margin-bottom:6px;">
				<?php esc_html_e( 'Country Filter Key:', 'bizpro-agency' ); ?>
			</label>
			<select id="bpa_country_code" name="bpa_country_code" style="width:100%;max-width:260px;">
				<option value="canada" <?php selected( $country_code, 'canada' ); ?>>Canada</option>
				<option value="uk" <?php selected( $country_code, 'uk' ); ?>>United Kingdom</option>
				<option value="australia" <?php selected( $country_code, 'australia' ); ?>>Australia</option>
				<option value="usa" <?php selected( $country_code, 'usa' ); ?>>United States</option>
				<option value="germany" <?php selected( $country_code, 'germany' ); ?>>Germany</option>
				<option value="nz" <?php selected( $country_code, 'nz' ); ?>>New Zealand</option>
				<option value="uae" <?php selected( $country_code, 'uae' ); ?>>United Arab Emirates</option>
				<option value="other" <?php selected( $country_code, 'other' ); ?>>Other Destination</option>
			</select>
		</div>

		<div>
			<label for="bpa_badge_text" style="display:block;font-weight:700;margin-bottom:6px;">
				<?php esc_html_e( 'Category Badge / Stream Label:', 'bizpro-agency' ); ?>
			</label>
			<input type="text" id="bpa_badge_text" name="bpa_badge_text" value="<?php echo esc_attr( $badge_text ); ?>" style="width:100%;" placeholder="<?php esc_attr_e( 'e.g. Express Entry & PNP, Skilled Worker', 'bizpro-agency' ); ?>" />
		</div>

		<div>
			<label for="bpa_processing_time" style="display:block;font-weight:700;margin-bottom:6px;">
				<?php esc_html_e( 'Estimated Processing Window:', 'bizpro-agency' ); ?>
			</label>
			<input type="text" id="bpa_processing_time" name="bpa_processing_time" value="<?php echo esc_attr( $processing_time ); ?>" style="width:100%;" placeholder="<?php esc_attr_e( 'e.g. 6 - 8 Months, 3 - 6 Weeks', 'bizpro-agency' ); ?>" />
		</div>

		<div>
			<label for="bpa_success_rate" style="display:block;font-weight:700;margin-bottom:6px;">
				<?php esc_html_e( 'Historical Approval Rate:', 'bizpro-agency' ); ?>
			</label>
			<input type="text" id="bpa_success_rate" name="bpa_success_rate" value="<?php echo esc_attr( $success_rate ); ?>" style="width:100%;" placeholder="<?php esc_attr_e( 'e.g. 98.4% Documented', 'bizpro-agency' ); ?>" />
		</div>

		<div>
			<label for="bpa_apply_url" style="display:block;font-weight:700;margin-bottom:6px;">
				<?php esc_html_e( 'Direct Assessment / Apply URL:', 'bizpro-agency' ); ?>
			</label>
			<input type="text" id="bpa_apply_url" name="bpa_apply_url" value="<?php echo esc_attr( $apply_url ); ?>" style="width:100%;" placeholder="<?php esc_attr_e( 'e.g. /contact/ or https://...', 'bizpro-agency' ); ?>" />
		</div>
	</div>
	<?php
}

/**
 * Save Meta Box Data.
 *
 * @param int $post_id Post ID.
 */
function bizpro_agency_visa_save_meta( $post_id ) {
	if ( ! isset( $_POST['bpa_visa_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['bpa_visa_nonce'] ), 'bpa_visa_save_meta' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$fields = array(
		'_bpa_flag_emoji'      => 'bpa_flag_emoji',
		'_bpa_country_code'    => 'bpa_country_code',
		'_bpa_badge_text'      => 'bpa_badge_text',
		'_bpa_processing_time' => 'bpa_processing_time',
		'_bpa_success_rate'    => 'bpa_success_rate',
		'_bpa_apply_url'       => 'bpa_apply_url',
	);

	foreach ( $fields as $meta_key => $post_key ) {
		if ( isset( $_POST[ $post_key ] ) ) {
			update_post_meta( $post_id, $meta_key, sanitize_text_field( wp_unslash( $_POST[ $post_key ] ) ) );
		}
	}
}
add_action( 'save_post_bpa_visa_pathway', 'bizpro_agency_visa_save_meta' );

/**
 * Auto-seed 6 starter pathways if CPT is empty so buyer sees a fully populated backend immediately.
 */
function bizpro_agency_seed_starter_visa_pathways() {
	if ( '1' === get_option( 'bpa_visa_pathways_seeded' ) ) {
		return;
	}

	$existing = get_posts( array( 'post_type' => 'bpa_visa_pathway', 'posts_per_page' => 1 ) );
	if ( ! empty( $existing ) ) {
		update_option( 'bpa_visa_pathways_seeded', '1' );
		return;
	}

	$starters = array(
		array(
			'title'   => 'Canada Permanent Residency & Express Entry',
			'content' => 'Comprehensive assistance with Federal Skilled Worker (FSW), Canadian Experience Class (CEC), and Provincial Nominee Programs (PNP) with full CRS score maximization.',
			'flag'    => '🇨🇦',
			'code'    => 'canada',
			'type'    => 'permanent',
			'badge'   => 'Express Entry & PNP',
			'time'    => '6 - 8 Months',
			'rate'    => '99.2% Success',
			'url'     => home_url( '/contact/' ),
		),
		array(
			'title'   => 'United Kingdom Skilled Worker & Scale-up Visa',
			'content' => 'Employer sponsorship matching, Global Talent endorsement, and Indefinite Leave to Remain (ILR) settlement pathways for software and finance professionals.',
			'flag'    => '🇬🇧',
			'code'    => 'uk',
			'type'    => 'work',
			'badge'   => 'Skilled Worker & Tech',
			'time'    => '3 - 6 Weeks',
			'rate'    => '98.5% Success',
			'url'     => home_url( '/contact/' ),
		),
		array(
			'title'   => 'Australia General Skilled Migration (189 / 190)',
			'content' => 'Point-test assessment, ACS/VETASSESS skills verification, and State Nomination filing for direct permanent residency across Australia.',
			'flag'    => '🇦🇺',
			'code'    => 'australia',
			'type'    => 'permanent',
			'badge'   => 'Subclass 189 / 190',
			'time'    => '7 - 9 Months',
			'rate'    => '97.8% Success',
			'url'     => home_url( '/contact/' ),
		),
		array(
			'title'   => 'United States O-1 / EB-1 & EB-2 NIW',
			'content' => 'Extraordinary ability petitions and National Interest Waivers (NIW) designed for tech founders, researchers, and high-impact specialists seeking green cards.',
			'flag'    => '🇺🇸',
			'code'    => 'usa',
			'type'    => 'work',
			'badge'   => 'EB-1 & EB-2 NIW',
			'time'    => '4 - 7 Months',
			'rate'    => '96.9% Success',
			'url'     => home_url( '/contact/' ),
		),
		array(
			'title'   => 'Germany EU Blue Card & Opportunity Card',
			'content' => 'Fast-track residency under the Chancenkarte points matrix and academic Blue Card for engineering, healthcare, and IT professionals in Europe.',
			'flag'    => '🇩🇪',
			'code'    => 'germany',
			'type'    => 'work',
			'badge'   => 'Opportunity Card',
			'time'    => '4 - 8 Weeks',
			'rate'    => '98.1% Success',
			'url'     => home_url( '/contact/' ),
		),
		array(
			'title'   => 'Canada Higher Education & Study Permit',
			'content' => 'Designated Learning Institution (DLI) university admissions, study permit filing, post-graduation work permit (PGWP), and transition to permanent residency.',
			'flag'    => '🇨🇦',
			'code'    => 'canada',
			'type'    => 'study',
			'badge'   => 'Study & PGWP',
			'time'    => '5 - 8 Weeks',
			'rate'    => '99.5% Success',
			'url'     => home_url( '/contact/' ),
		),
	);

	foreach ( $starters as $s ) {
		$post_id = wp_insert_post(
			array(
				'post_title'   => $s['title'],
				'post_content' => $s['content'],
				'post_status'  => 'publish',
				'post_type'    => 'bpa_visa_pathway',
			)
		);
		if ( $post_id && ! is_wp_error( $post_id ) ) {
			update_post_meta( $post_id, '_bpa_flag_emoji', $s['flag'] );
			update_post_meta( $post_id, '_bpa_country_code', $s['code'] );
			update_post_meta( $post_id, '_bpa_badge_text', $s['badge'] );
			update_post_meta( $post_id, '_bpa_processing_time', $s['time'] );
			update_post_meta( $post_id, '_bpa_success_rate', $s['rate'] );
			update_post_meta( $post_id, '_bpa_apply_url', $s['url'] );

			// Also set taxonomy term
			wp_set_object_terms( $post_id, $s['type'], 'bpa_visa_category' );
			wp_set_object_terms( $post_id, $s['code'], 'bpa_destination_country' );
		}
	}

	update_option( 'bpa_visa_pathways_seeded', '1' );
}
add_action( 'init', 'bizpro_agency_seed_starter_visa_pathways', 20 );
