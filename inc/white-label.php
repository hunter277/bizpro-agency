<?php
/**
 * White Label Settings for Agencies.
 *
 * Astra Pro parity: Allows agencies to rebrand the theme, replace names, and hide update notices.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register White Label settings submenu.
 */
function bizpro_agency_white_label_menu() {
	add_theme_page(
		esc_html__( 'White Label Settings', 'bizpro-agency' ),
		esc_html__( 'White Label', 'bizpro-agency' ),
		'manage_options',
		'bizpro-agency-white-label',
		'bizpro_agency_white_label_render'
	);
}
add_action( 'admin_menu', 'bizpro_agency_white_label_menu' );

/**
 * Register settings.
 */
function bizpro_agency_white_label_register() {
	register_setting( 'bpa_white_label_group', 'bpa_wl_theme_name' );
	register_setting( 'bpa_white_label_group', 'bpa_wl_theme_desc' );
	register_setting( 'bpa_white_label_group', 'bpa_wl_author_name' );
	register_setting( 'bpa_white_label_group', 'bpa_wl_author_url' );
	register_setting( 'bpa_white_label_group', 'bpa_wl_hide_branding' );
}
add_action( 'admin_init', 'bizpro_agency_white_label_register' );

/**
 * Render White Label Settings page.
 */
function bizpro_agency_white_label_render() {
	?>
	<div class="wrap" style="max-width: 800px; margin: 30px auto; background: #ffffff; border: 1px solid #ccd0d4; border-radius: 12px; padding: 40px; box-shadow: 0 4px 12px rgba(0,0,0,0.04);">
		<h1 style="margin-top: 0; font-size: 26px; color: #1d2327;">
			🛡️ <?php esc_html_e( 'Agency White Label Settings', 'bizpro-agency' ); ?>
		</h1>
		<p style="color: #64748b; font-size: 15px; line-height: 1.6; margin-bottom: 30px;">
			<?php esc_html_e( 'Rebrand BizPro Agency with your company credentials. When delivering client websites, your brand will appear as the theme developer.', 'bizpro-agency' ); ?>
		</p>

		<form method="post" action="options.php">
			<?php
			settings_fields( 'bpa_white_label_group' );
			do_settings_sections( 'bpa_white_label_group' );
			?>
			<table class="form-table" style="line-height: 2;">
				<tr>
					<th scope="row"><label for="bpa_wl_theme_name"><?php esc_html_e( 'Custom Theme Name', 'bizpro-agency' ); ?></label></th>
					<td><input type="text" id="bpa_wl_theme_name" name="bpa_wl_theme_name" value="<?php echo esc_attr( get_option( 'bpa_wl_theme_name', 'BizPro Agency' ) ); ?>" class="regular-text"></td>
				</tr>
				<tr>
					<th scope="row"><label for="bpa_wl_theme_desc"><?php esc_html_e( 'Custom Theme Description', 'bizpro-agency' ); ?></label></th>
					<td><textarea id="bpa_wl_theme_desc" name="bpa_wl_theme_desc" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'bpa_wl_theme_desc', 'Enterprise multipurpose WordPress theme crafted for high-growth businesses.' ) ); ?></textarea></td>
				</tr>
				<tr>
					<th scope="row"><label for="bpa_wl_author_name"><?php esc_html_e( 'Custom Author / Agency Name', 'bizpro-agency' ); ?></label></th>
					<td><input type="text" id="bpa_wl_author_name" name="bpa_wl_author_name" value="<?php echo esc_attr( get_option( 'bpa_wl_author_name', 'Kamrul Hasan' ) ); ?>" class="regular-text"></td>
				</tr>
				<tr>
					<th scope="row"><label for="bpa_wl_author_url"><?php esc_html_e( 'Custom Author URL', 'bizpro-agency' ); ?></label></th>
					<td><input type="url" id="bpa_wl_author_url" name="bpa_wl_author_url" value="<?php echo esc_attr( get_option( 'bpa_wl_author_url', home_url() ) ); ?>" class="regular-text"></td>
				</tr>
				<tr>
					<th scope="row"><?php esc_html_e( 'Hide Pro Upgrade Notices', 'bizpro-agency' ); ?></th>
					<td>
						<label>
							<input type="checkbox" name="bpa_wl_hide_branding" value="1" <?php checked( '1', get_option( 'bpa_wl_hide_branding' ) ); ?>>
							<?php esc_html_e( 'Hide all upgrade links and banners from WordPress admin dashboard', 'bizpro-agency' ); ?>
						</label>
					</td>
				</tr>
			</table>

			<?php submit_button( __( 'Save White Label Credentials', 'bizpro-agency' ), 'primary' ); ?>
		</form>
	</div>
	<?php
}
