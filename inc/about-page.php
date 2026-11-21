<?php
/**
 * Theme About / Welcome Page.
 *
 * Fully compliant with WordPress.org Theme Review Guidelines.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the Theme Info submenu page under Appearance.
 */
function bizpro_agency_about_menu() {
	add_theme_page(
		esc_html__( 'About BizPro Agency', 'bizpro-agency' ),
		esc_html__( 'BizPro Agency', 'bizpro-agency' ),
		'edit_theme_options',
		'bizpro-agency-welcome',
		'bizpro_agency_about_page_render'
	);
}
add_action( 'admin_menu', 'bizpro_agency_about_menu' );

/**
 * Render the welcome page content.
 */
function bizpro_agency_about_page_render() {
	?>
	<div class="wrap" style="max-width: 960px; margin: 30px auto; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
		<div style="background: #fff; border: 1px solid #ccd0d4; border-radius: 12px; padding: 40px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
			<div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #eee; padding-bottom: 24px; margin-bottom: 30px;">
				<div>
					<h1 style="margin: 0 0 8px; font-size: 28px; color: #1d2327;">
						<?php
						/* translators: %s: theme version */
						printf( esc_html__( 'Welcome to BizPro Agency %s', 'bizpro-agency' ), esc_html( BIZPRO_AGENCY_VERSION ) );
						?>
					</h1>
					<p style="margin: 0; color: #646970; font-size: 16px;">
						<?php esc_html_e( 'Thank you for choosing BizPro Agency by Kamrul Hasan! Your website is ready to shine.', 'bizpro-agency' ); ?>
					</p>
				</div>
				<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary button-hero" style="background: #1d5fe0; border-color: #1d5fe0; text-shadow: none;">
					<?php esc_html_e( 'Customize Your Site', 'bizpro-agency' ); ?>
				</a>
			</div>

			
			<!-- 1-Click AdSense Essential Pages Banner -->
			<div style="background: linear-gradient(135deg, #eff6ff 0%, #e0e7ff 100%); border: 1px solid #c7d2fe; border-radius: 12px; padding: 24px; margin-bottom: 30px; display: flex; align-items: center; justify-content: space-between;">
				<div>
					<h3 style="margin: 0 0 6px; color: #1e1b4b; font-size: 18px;"><?php esc_html_e( '⚡ 1-Click AdSense Essential Pages Generator', 'bizpro-agency' ); ?></h3>
					<p style="margin: 0; color: #4338ca; font-size: 14px;"><?php esc_html_e( 'Automatically generate Privacy Policy, Terms & Conditions, Disclaimer, Contact Us, About Us and Services pages.', 'bizpro-agency' ); ?></p>
				</div>
				<a href="<?php echo esc_url( admin_url( 'admin.php?page=bizpro-agency-welcome&bpa_generate_pages=1' ) ); ?>" class="button button-primary" style="background: #4f46e5; border-color: #4f46e5; height: 38px; line-height: 36px; padding: 0 20px;">
					<?php esc_html_e( 'Generate All Pages Now', 'bizpro-agency' ); ?>
				</a>
			</div>

			<!-- Grid 3 columns -->
			<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 40px;">
				<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 24px;">
					<h3 style="margin-top: 0; color: #1e293b;"><?php esc_html_e( '🎨 Live Customizer', 'bizpro-agency' ); ?></h3>
					<p style="color: #64748b; font-size: 14px;"><?php esc_html_e( 'Edit your logo, colors, hero banner, services, stats and testimonials in real time.', 'bizpro-agency' ); ?></p>
					<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button"><?php esc_html_e( 'Open Customizer', 'bizpro-agency' ); ?></a>
				</div>
				<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 24px;">
					<h3 style="margin-top: 0; color: #1e293b;"><?php esc_html_e( '📦 Block Patterns', 'bizpro-agency' ); ?></h3>
					<p style="color: #64748b; font-size: 14px;"><?php esc_html_e( 'Insert beautiful pre-designed Hero, Services, and CTA blocks into any post or page.', 'bizpro-agency' ); ?></p>
					<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>" class="button"><?php esc_html_e( 'Create a Page', 'bizpro-agency' ); ?></a>
				</div>
				<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 24px;">
					<h3 style="margin-top: 0; color: #1e293b;"><?php esc_html_e( '🛒 WooCommerce Ready', 'bizpro-agency' ); ?></h3>
					<p style="color: #64748b; font-size: 14px;"><?php esc_html_e( 'Fully compatible with WooCommerce. Sell physical products or digital services seamlessly.', 'bizpro-agency' ); ?></p>
					<a href="<?php echo esc_url( admin_url( 'plugin-install.php?s=woocommerce&tab=search&type=term' ) ); ?>" class="button"><?php esc_html_e( 'Install WooCommerce', 'bizpro-agency' ); ?></a>
				</div>
			</div>

			<!-- Free vs Pro feature comparison -->
			<div style="border-top: 1px solid #eee; padding-top: 30px;">
				<h2 style="font-size: 20px; color: #1e293b; margin-bottom: 16px;"><?php esc_html_e( 'Free vs Pro Comparison', 'bizpro-agency' ); ?></h2>
				<table class="widefat striped" style="border-radius: 8px; overflow: hidden;">
					<thead>
						<tr>
							<th style="padding: 12px 16px; font-weight: 700;"><?php esc_html_e( 'Feature', 'bizpro-agency' ); ?></th>
							<th style="padding: 12px 16px; font-weight: 700; text-align: center;"><?php esc_html_e( 'Free (Lite)', 'bizpro-agency' ); ?></th>
							<th style="padding: 12px 16px; font-weight: 700; text-align: center; color: #1d5fe0;"><?php esc_html_e( 'Pro (Premium)', 'bizpro-agency' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php esc_html_e( 'Fast & Lightweight Core (Pure CSS/JS)', 'bizpro-agency' ); ?></td>
							<td style="text-align: center;">✅</td>
							<td style="text-align: center;">✅</td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'Live Customizer Controls (Hero, Services, Stats)', 'bizpro-agency' ); ?></td>
							<td style="text-align: center;">✅</td>
							<td style="text-align: center;">✅</td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'RTL & Translation Ready', 'bizpro-agency' ); ?></td>
							<td style="text-align: center;">✅</td>
							<td style="text-align: center;">✅</td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'Gutenberg Block Patterns', 'bizpro-agency' ); ?></td>
							<td style="text-align: center;">✅ (Core Patterns)</td>
							<td style="text-align: center;">✅ (25+ Advanced Patterns)</td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'One-Click Multi-Niche Demos (IT, Visa, Agency, Law)', 'bizpro-agency' ); ?></td>
							<td style="text-align: center;">1 Default Demo</td>
							<td style="text-align: center; font-weight: 700; color: #1d5fe0;">5+ Pre-Built Niche Demos</td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'Multiple Header & Footer Layout Variations', 'bizpro-agency' ); ?></td>
							<td style="text-align: center;">Standard</td>
							<td style="text-align: center; font-weight: 700; color: #1d5fe0;">5 Header & 4 Footer Styles</td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'Dedicated Priority Support & Regular Updates', 'bizpro-agency' ); ?></td>
							<td style="text-align: center;">WP Community</td>
							<td style="text-align: center; font-weight: 700; color: #1d5fe0;">24/7 Priority Support</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php
}
