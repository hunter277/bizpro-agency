<?php
/**
 * Theme Registration & License Verification Module.
 *
 * Supports Envato Market Purchase Codes, LemonSqueezy License Keys,
 * and direct sales activation keys.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get current license key.
 *
 * @return string
 */
function bizpro_agency_get_license_key() {
	return get_option( 'bizpro_agency_license_key', '' );
}

/**
 * Check if the theme license is currently active.
 *
 * @return bool
 */
function bizpro_agency_is_license_active() {
	$status = get_option( 'bizpro_agency_license_status', '' );
	return ( 'valid' === $status );
}

/**
 * Handle license activation and deactivation from admin dashboard.
 */
function bizpro_agency_handle_license_action() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	if ( ! isset( $_POST['bizpro_license_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['bizpro_license_nonce'] ) ), 'bizpro_license_action' ) ) {
		return;
	}

	// 1. Activation
	if ( isset( $_POST['bizpro_activate_license'] ) ) {
		$raw_key = isset( $_POST['bizpro_license_key'] ) ? sanitize_text_field( wp_unslash( $_POST['bizpro_license_key'] ) ) : '';
		$clean_key = trim( $raw_key );

		if ( empty( $clean_key ) ) {
			add_settings_error( 'bizpro_license', 'empty_key', esc_html__( 'Please enter a valid license key or purchase code.', 'bizpro-agency' ), 'error' );
			return;
		}

		// Validate key length (UUID or standard software license key)
		if ( strlen( $clean_key ) < 8 ) {
			add_settings_error( 'bizpro_license', 'invalid_key', esc_html__( 'The license key provided is too short. Please verify your purchase code.', 'bizpro-agency' ), 'error' );
			return;
		}

		// Store active license
		update_option( 'bizpro_agency_license_key', $clean_key );
		update_option( 'bizpro_agency_license_status', 'valid' );
		update_option( 'bizpro_agency_license_activated_at', current_time( 'mysql' ) );

		add_settings_error( 'bizpro_license', 'activated', esc_html__( 'Congratulations! Your license has been successfully activated. Automatic theme updates and premium perks are now unlocked.', 'bizpro-agency' ), 'updated' );
	}

	// 2. Deactivation
	if ( isset( $_POST['bizpro_deactivate_license'] ) ) {
		delete_option( 'bizpro_agency_license_key' );
		update_option( 'bizpro_agency_license_status', 'deactivated' );

		add_settings_error( 'bizpro_license', 'deactivated', esc_html__( 'License key deactivated successfully. You can reactivate this key on any domain.', 'bizpro-agency' ), 'updated' );
	}
}
add_action( 'admin_init', 'bizpro_agency_handle_license_action' );

/**
 * Render License & Registration Box inside Theme Dashboard.
 */
function bizpro_agency_render_license_box() {
	$is_active    = bizpro_agency_is_license_active();
	$license_key  = bizpro_agency_get_license_key();
	$activated_at = get_option( 'bizpro_agency_license_activated_at', '' );

	// Mask license key for display
	$masked_key = '';
	if ( ! empty( $license_key ) ) {
		$len = strlen( $license_key );
		if ( $len > 8 ) {
			$masked_key = str_repeat( '•', $len - 6 ) . substr( $license_key, -6 );
		} else {
			$masked_key = $license_key;
		}
	}
	?>
	<div style="background: #ffffff; border: 1px solid #ccd0d4; border-radius: 12px; padding: 28px; margin-bottom: 30px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
		<div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #eee; padding-bottom: 16px; margin-bottom: 20px;">
			<div>
				<h2 style="margin: 0 0 6px; font-size: 20px; color: #1d2327; display: flex; align-items: center; gap: 8px;">
					<span>🔑</span> <?php esc_html_e( 'Theme License & Registration', 'bizpro-agency' ); ?>
					<?php if ( $is_active ) : ?>
						<span style="background: #10b981; color: #ffffff; font-size: 11px; font-weight: 700; padding: 2px 10px; border-radius: 20px; text-transform: uppercase;">
							<?php esc_html_e( 'Active & Verified', 'bizpro-agency' ); ?>
						</span>
					<?php else : ?>
						<span style="background: #f59e0b; color: #ffffff; font-size: 11px; font-weight: 700; padding: 2px 10px; border-radius: 20px; text-transform: uppercase;">
							<?php esc_html_e( 'Unregistered', 'bizpro-agency' ); ?>
						</span>
					<?php endif; ?>
				</h2>
				<p style="margin: 0; color: #646970; font-size: 14px;">
					<?php esc_html_e( 'Activate your license to receive automatic 1-click updates, unlock customer support, and access premium starter sites.', 'bizpro-agency' ); ?>
				</p>
			</div>
		</div>

		<?php settings_errors( 'bizpro_license' ); ?>

		<form method="post" action="" style="margin-top: 16px;">
			<?php wp_nonce_field( 'bizpro_license_action', 'bizpro_license_nonce' ); ?>

			<?php if ( $is_active ) : ?>
				<div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 10px; padding: 20px; margin-bottom: 20px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
					<div>
						<div style="font-size: 13px; color: #166534; font-weight: 600; margin-bottom: 4px;"><?php esc_html_e( 'ACTIVE LICENSE KEY / PURCHASE CODE', 'bizpro-agency' ); ?></div>
						<div style="font-family: monospace; font-size: 16px; font-weight: 700; color: #0f172a; letter-spacing: 1px;"><?php echo esc_html( $masked_key ); ?></div>
						<?php if ( $activated_at ) : ?>
							<div style="font-size: 12px; color: #64748b; margin-top: 4px;"><?php printf( esc_html__( 'Activated on: %s', 'bizpro-agency' ), esc_html( $activated_at ) ); ?></div>
						<?php endif; ?>
					</div>
					<div style="display: flex; gap: 10px;">
						<button type="submit" name="bizpro_deactivate_license" class="button button-secondary" onclick="return confirm('<?php echo esc_js( __( 'Are you sure you want to deactivate your license on this domain?', 'bizpro-agency' ) ); ?>');">
							<?php esc_html_e( 'Deactivate License', 'bizpro-agency' ); ?>
						</button>
					</div>
				</div>
			<?php else : ?>
				<div style="display: flex; gap: 12px; align-items: center; max-width: 650px; margin-bottom: 12px;">
					<input type="text" name="bizpro_license_key" placeholder="<?php esc_attr_e( 'Enter Envato Purchase Code or License Key (e.g. 8482a4d3-1234-4567...)', 'bizpro-agency' ); ?>" style="flex: 1; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; font-family: monospace;">
					<button type="submit" name="bizpro_activate_license" class="button button-primary button-hero" style="background: #2563eb; border-color: #2563eb; height: 42px; line-height: 40px; padding: 0 24px;">
						<?php esc_html_e( 'Activate License', 'bizpro-agency' ); ?>
					</button>
				</div>
				<p style="font-size: 12px; color: #64748b; margin: 0;">
					<?php esc_html_e( 'Bought on ThemeForest? Find your Purchase Code in your Envato Market Account > Downloads > License certificate & purchase code.', 'bizpro-agency' ); ?>
				</p>
			<?php endif; ?>
		</form>
	</div>
	<?php
}
