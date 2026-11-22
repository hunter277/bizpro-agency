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

			
			<!-- Theme Hero Preview Banner -->
			<div style="margin-bottom: 30px; border-radius: 12px; overflow: hidden; border: 1px solid #ccd0d4; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/preview-main.jpg' ); ?>" alt="BizPro Agency" style="width: 100%; height: auto; display: block;">
			</div>

			<!-- Demo importer banner -->
			<div style="background: linear-gradient(135deg, #eff6ff 0%, #e0e7ff 100%); border: 1px solid #c7d2fe; border-radius: 12px; padding: 24px; margin-bottom: 30px; display: flex; align-items: center; justify-content: space-between;">
				<div>
					<h3 style="margin: 0 0 6px; color: #1e1b4b; font-size: 18px;"><?php esc_html_e( 'Start with a ready-made demo', 'bizpro-agency' ); ?></h3>
					<p style="margin: 0; color: #4338ca; font-size: 14px;"><?php esc_html_e( 'Each demo imports its own homepage, inner pages (About, Services, Pricing, FAQ, Contact, Privacy, Terms), menus and sample posts.', 'bizpro-agency' ); ?></p>
				</div>
				<a href="<?php echo esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ); ?>" class="button button-primary" style="background: #4f46e5; border-color: #4f46e5; height: 38px; line-height: 36px; padding: 0 20px;">
					<?php esc_html_e( 'Open Demo Importer', 'bizpro-agency' ); ?>
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

			
			<!-- 7 Pre-built Starter Demos Showcase in Admin -->
			<div style="background: #ffffff; border: 1px solid #ccd0d4; border-radius: 12px; padding: 32px; margin-bottom: 40px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
				<div style="border-bottom: 1px solid #eee; padding-bottom: 16px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between;">
					<div>
						<h2 style="margin: 0 0 6px; font-size: 22px; color: #1d2327;">
							<?php esc_html_e( '📊 7 Ready-Made Pre-Built Niche Demos', 'bizpro-agency' ); ?>
						</h2>
						<p style="margin: 0; color: #646970; font-size: 14px;">
							<?php esc_html_e( 'Instantly preview or import any of the 7 pre-built niche starter sites with 1 click.', 'bizpro-agency' ); ?>
						</p>
					</div>
					<a href="<?php echo esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ); ?>" class="button button-primary" style="background: #2563eb; border-color: #2563eb;">
						<?php esc_html_e( 'Open Demo Importer', 'bizpro-agency' ); ?>
					</a>
				</div>

				<?php
				$img_uri     = trailingslashit( get_template_directory_uri() ) . 'assets/images/demos/';
				$admin_demos = array(
					array(
						'title' => 'Digital Products & SaaS Store',
						'niche' => 'eCommerce',
						'badge' => 'eCom',
						'url'   => bizpro_agency_page_url( 'home', 'digital' ),
						'img'   => $img_uri . 'demo-digital.jpg',
					),
					array(
						'title' => 'Visa & Immigration Consultancy',
						'niche' => 'Immigration',
						'badge' => 'Hot',
						'url'   => bizpro_agency_page_url( 'home', 'visa' ),
						'img'   => $img_uri . 'demo-visa.jpg',
					),
					array(
						'title' => 'Travel & Tour Operator',
						'niche' => 'Tourism',
						'badge' => 'New',
						'url'   => bizpro_agency_page_url( 'home', 'travel' ),
						'img'   => $img_uri . 'demo-travel.jpg',
					),
					array(
						'title' => 'IT Solutions & Cloud Services',
						'niche' => 'Technology',
						'badge' => 'Tech',
						'url'   => bizpro_agency_page_url( 'home', 'it' ),
						'img'   => $img_uri . 'demo-it.jpg',
					),
					array(
						'title' => 'Business & Management Consulting',
						'niche' => 'Consulting',
						'badge' => 'Pro',
						'url'   => bizpro_agency_page_url( 'home', 'consulting' ),
						'img'   => $img_uri . 'demo-consulting.jpg',
					),
					array(
						'title' => 'Corporate Enterprise & Governance',
						'niche' => 'Enterprise',
						'badge' => 'Elite',
						'url'   => bizpro_agency_page_url( 'home', 'corporate' ),
						'img'   => $img_uri . 'demo-corporate.jpg',
					),
					array(
						'title' => 'Main Agency (Flagship Multi-Purpose)',
						'niche' => 'All-in-One',
						'badge' => 'Popular',
						'url'   => home_url( '/' ),
						'img'   => $img_uri . 'demo-main.jpg',
					),
				);
				?>

				<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
					<?php foreach ( $admin_demos as $ad ) : ?>
						<div style="border: 1px solid #e2e8f0; border-radius: 10px; overflow: hidden; background: #f8fafc; display: flex; flex-direction: column; justify-content: space-between;">
							<div>
								<div style="position: relative; height: 140px; overflow: hidden; background: #0f172a;">
									<img src="<?php echo esc_url( $ad['img'] ); ?>" alt="<?php echo esc_attr( $ad['title'] ); ?>" style="width: 100%; height: 100%; object-fit: cover;">
									<span style="position: absolute; top: 8px; right: 8px; background: #2563eb; color: #fff; font-size: 10px; font-weight: 800; padding: 2px 6px; border-radius: 4px; text-transform: uppercase;">
										<?php echo esc_html( $ad['badge'] ); ?>
									</span>
								</div>
								<div style="padding: 14px;">
									<strong style="display: block; font-size: 14px; color: #1e293b; margin-bottom: 4px;"><?php echo esc_html( $ad['title'] ); ?></strong>
									<span style="font-size: 12px; color: #64748b;"><?php echo esc_html( $ad['niche'] ); ?></span>
								</div>
							</div>
							<div style="padding: 0 14px 14px;">
								<a href="<?php echo esc_url( $ad['url'] ); ?>" target="_blank" class="button button-secondary" style="width: 100%; text-align: center;">
									<?php esc_html_e( 'View Live Demo ↗', 'bizpro-agency' ); ?>
								</a>
							</div>
						</div>
					<?php endforeach; ?>
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
