<?php
/**
 * Template Name: Homepage — Digital Products & SaaS Store
 *
 * High-converting eCommerce & digital product selling homepage demo.
 * Designed for selling software, templates, UI kits, eBooks, and digital assets.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bizpro_email = bizpro_agency_get( 'topbar_email', 'sales@bizproagency.com' );

// Dynamic WooCommerce Checkout / Cart Integration
$bizpro_has_wc = function_exists( 'wc_get_checkout_url' );
$bizpro_buy_p1 = $bizpro_has_wc ? add_query_arg( 'add-to-cart', '1', wc_get_checkout_url() ) : add_query_arg( wp_parse_args( 'product=saas-ui-kit' ), bizpro_agency_page_url( 'contact' ) );
$bizpro_buy_p2 = $bizpro_has_wc ? add_query_arg( 'add-to-cart', '2', wc_get_checkout_url() ) : add_query_arg( wp_parse_args( 'product=devops-pack' ), bizpro_agency_page_url( 'contact' ) );
$bizpro_buy_p3 = $bizpro_has_wc ? add_query_arg( 'add-to-cart', '3', wc_get_checkout_url() ) : add_query_arg( wp_parse_args( 'product=nextjs-boilerplate' ), bizpro_agency_page_url( 'contact' ) );
$bizpro_buy_p4 = $bizpro_has_wc ? add_query_arg( 'add-to-cart', '4', wc_get_checkout_url() ) : add_query_arg( wp_parse_args( 'product=lifetime-bundle' ), bizpro_agency_page_url( 'contact' ) );

$bizpro_buy_starter = $bizpro_has_wc ? add_query_arg( 'add-to-cart', 'starter', wc_get_checkout_url() ) : add_query_arg( wp_parse_args( 'plan=starter' ), bizpro_agency_page_url( 'contact' ) );
$bizpro_buy_pro     = $bizpro_has_wc ? add_query_arg( 'add-to-cart', 'pro', wc_get_checkout_url() ) : add_query_arg( wp_parse_args( 'plan=pro' ), bizpro_agency_page_url( 'contact' ) );
$bizpro_buy_agency  = $bizpro_has_wc ? add_query_arg( 'add-to-cart', 'agency', wc_get_checkout_url() ) : add_query_arg( wp_parse_args( 'plan=agency' ), bizpro_agency_page_url( 'contact' ) );
?>

<main id="primary" class="site-main site-main--digital">

	<!-- Hero Section with Device Mockup -->
	<section class="hero hero--digital bpa-bento-hero">
		<div class="bpa-bento-hero-glow"></div>

		<div class="container" style="position: relative; z-index: 2; text-align: center;">
			<div class="bpa-bento-badge">
				<span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #10b981;"></span>
				<span style="color: #cbd5e1; font-weight: 600;"><?php esc_html_e( 'BizPro Agency — Digital Products & SaaS Demo', 'bizpro-agency' ); ?></span>
			</div>

			<h1 style="font-size: clamp(2.5rem, 5.5vw, 4.2rem); font-weight: 800; line-height: 1.15; letter-spacing: -0.02em; max-width: 900px; margin: 0 auto 20px; color: #ffffff;">
				<?php esc_html_e( 'Sell Your Digital Products & Software with Ultimate Speed', 'bizpro-agency' ); ?>
			</h1>

			<p style="font-size: clamp(1.05rem, 2vw, 1.25rem); color: #94a3b8; max-width: 720px; margin: 0 auto 36px; line-height: 1.6;">
				<?php esc_html_e( 'The enterprise-grade eCommerce solution designed for creators, developers, and SaaS founders. Built with zero-bloat code, instant downloads, and automated license distribution.', 'bizpro-agency' ); ?>
			</p>

			<div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; margin-bottom: 50px;">
				<a href="#products" class="btn btn--primary" style="background: #6366f1; border-color: #6366f1; color: #fff; padding: 14px 32px; font-weight: 700; border-radius: 12px; font-size: 1.05rem; box-shadow: 0 10px 25px rgba(99,102,241,0.4); text-decoration: none;">
					<?php esc_html_e( 'Browse Digital Products', 'bizpro-agency' ); ?>
				</a>
				<a href="#features" class="btn" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.2); color: #fff; padding: 14px 28px; font-weight: 600; border-radius: 12px; font-size: 1.05rem; text-decoration: none;">
					<?php esc_html_e( 'Store Guarantee & Features', 'bizpro-agency' ); ?>
				</a>
			</div>

			<!-- Device Mockup Card -->
			<div class="bpa-bento-card-wrap">
				<div class="bpa-bento-card-inner">
					<div class="bpa-bento-mini-card">
						<div style="font-size: 0.85rem; color: #818cf8; font-weight: 700; text-transform: uppercase; margin-bottom: 8px;">🚀 <?php esc_html_e( 'Fast Fulfillment', 'bizpro-agency' ); ?></div>
						<div style="font-size: 1.4rem; font-weight: 800; color: #ffffff; margin-bottom: 6px;"><?php esc_html_e( 'Ultra-Fast Delivery', 'bizpro-agency' ); ?></div>
						<p style="color: #64748b; font-size: 0.9rem; margin: 0;"><?php esc_html_e( 'Optimized for Stripe, PayPal, and Apple Pay with 1-click digital product fulfillment.', 'bizpro-agency' ); ?></p>
					</div>
					<div class="bpa-bento-mini-card">
						<div style="font-size: 0.85rem; color: #34d399; font-weight: 700; text-transform: uppercase; margin-bottom: 8px;">🛡️ <?php esc_html_e( 'License Keys', 'bizpro-agency' ); ?></div>
						<div style="font-size: 1.4rem; font-weight: 800; color: #ffffff; margin-bottom: 6px;"><?php esc_html_e( 'Digital License Keys', 'bizpro-agency' ); ?></div>
						<p style="color: #64748b; font-size: 0.9rem; margin: 0;"><?php esc_html_e( 'Digital download links and license keys can be managed with WooCommerce or EDD.', 'bizpro-agency' ); ?></p>
					</div>
					<div class="bpa-bento-mini-card">
						<div style="font-size: 0.85rem; color: #fbbf24; font-weight: 700; text-transform: uppercase; margin-bottom: 8px;">📦 <?php esc_html_e( 'Cloud Delivery', 'bizpro-agency' ); ?></div>
						<div style="font-size: 1.4rem; font-weight: 800; color: #ffffff; margin-bottom: 6px;"><?php esc_html_e( 'Secure Download Links', 'bizpro-agency' ); ?></div>
						<p style="color: #64748b; font-size: 0.9rem; margin: 0;"><?php esc_html_e( 'Time-limited download links protect assets and prevent unauthorized sharing.', 'bizpro-agency' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Continuous Infinite Logo Marquee -->
	<section class="section section--marquee" style="background: #0b0f19; padding: 24px 0; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08); overflow: hidden;">
		<div class="bpa-marquee-track" style="display: flex; gap: 60px; align-items: center; white-space: nowrap; animation: bpaMarquee 25s linear infinite;">
			<span style="font-size: 1.1rem; font-weight: 800; color: #475569; letter-spacing: 2px;">PAYMENT READY</span>
			<span style="font-size: 1.1rem; font-weight: 800; color: #475569; letter-spacing: 2px;">WOOCOMMERCE OPTIMIZED</span>
			<span style="font-size: 1.1rem; font-weight: 800; color: #475569; letter-spacing: 2px;">VERSION CONTROL</span>
			<span style="font-size: 1.1rem; font-weight: 800; color: #475569; letter-spacing: 2px;">FAST CDN DELIVERY</span>
			<span style="font-size: 1.1rem; font-weight: 800; color: #475569; letter-spacing: 2px;">PAYPAL COMMERCE</span>
			<span style="font-size: 1.1rem; font-weight: 800; color: #475569; letter-spacing: 2px;">SECURE LICENSING</span>
			<span style="font-size: 1.1rem; font-weight: 800; color: #475569; letter-spacing: 2px;">PAYMENT READY</span>
			<span style="font-size: 1.1rem; font-weight: 800; color: #475569; letter-spacing: 2px;">WOOCOMMERCE OPTIMIZED</span>
		</div>
	</section>

	<!-- Bento Grid Feature Showcase -->
	<section id="features" class="section" style="padding: 90px 0; background: var(--bpa-bg, #ffffff);">
		<div class="container">
			<div style="text-align: center; max-width: 650px; margin: 0 auto 60px;">
				<span style="font-size: 0.85rem; font-weight: 700; color: #6366f1; text-transform: uppercase; letter-spacing: 1px;"><?php esc_html_e( 'Architected for Conversions', 'bizpro-agency' ); ?></span>
				<h2 style="font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800; color: var(--bpa-text, #0f172a); margin: 12px 0;"><?php esc_html_e( 'Everything You Need to Scale Digital Sales', 'bizpro-agency' ); ?></h2>
				<p style="color: var(--bpa-text-muted, #64748b); font-size: 1.05rem;"><?php esc_html_e( 'Say goodbye to bloated setups. Our modular digital engine provides maximum performance right out of the box.', 'bizpro-agency' ); ?></p>
			</div>

			<!-- Bento Grid Container -->
			<div class="bpa-bento-grid">
				
				<!-- Large Bento Box: 8 Cols -->
				<div class="bpa-bento-col-8">
					<span style="background: #e0e7ff; color: #4338ca; font-size: 0.8rem; font-weight: 700; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;"><?php esc_html_e( 'eCommerce Core', 'bizpro-agency' ); ?></span>
					<h3 style="font-size: 1.8rem; font-weight: 800; margin: 16px 0 10px; color: #0f172a;"><?php esc_html_e( 'Modern Cart & Checkout Layout', 'bizpro-agency' ); ?></h3>
					<p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; max-width: 580px;"><?php esc_html_e( 'Customers enjoy a frictionless checkout flow. Full WooCommerce compatibility allows automated coupon calculation, instant file fulfillment, and multiple gateway options.', 'bizpro-agency' ); ?></p>
					<div style="margin-top: 24px; display: flex; gap: 12px; flex-wrap: wrap;">
						<span style="background: #ffffff; border: 1px solid #cbd5e1; padding: 8px 14px; border-radius: 8px; font-weight: 600; font-size: 0.9rem;">⚡ <?php esc_html_e( 'Optimized Checkout Flow', 'bizpro-agency' ); ?></span>
						<span style="background: #ffffff; border: 1px solid #cbd5e1; padding: 8px 14px; border-radius: 8px; font-weight: 600; font-size: 0.9rem;">🔒 <?php esc_html_e( 'Secure Gateway Compatible', 'bizpro-agency' ); ?></span>
					</div>
				</div>

				<!-- Medium Bento Box: 4 Cols -->
				<div class="bpa-bento-col-4">
					<span style="background: rgba(99,102,241,0.3); color: #a5b4fc; font-size: 0.8rem; font-weight: 700; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;"><?php esc_html_e( 'Speed Standard', 'bizpro-agency' ); ?></span>
					<h3 style="font-size: 1.8rem; font-weight: 800; margin: 16px 0 10px; color: #ffffff;"><?php esc_html_e( 'High-Performance Core', 'bizpro-agency' ); ?></h3>
					<p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;"><?php esc_html_e( 'Vanilla JavaScript and pure CSS styling means zero jQuery and ultra-fast mobile rendering.', 'bizpro-agency' ); ?></p>
					<div style="font-size: 3rem; font-weight: 900; color: #34d399; margin-top: 20px;"><?php esc_html_e( 'Optimized', 'bizpro-agency' ); ?></div>
				</div>

				<!-- Box: 4 Cols -->
				<div class="bpa-bento-card-white">
					<div style="font-size: 32px; margin-bottom: 12px;">🔑</div>
					<h4 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;"><?php esc_html_e( 'License Management', 'bizpro-agency' ); ?></h4>
					<p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;"><?php esc_html_e( 'Issue license keys, manage domain activations, and control updates directly from your dashboard.', 'bizpro-agency' ); ?></p>
				</div>

				<!-- Box: 4 Cols -->
				<div class="bpa-bento-card-white">
					<div style="font-size: 32px; margin-bottom: 12px;">📈</div>
					<h4 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;"><?php esc_html_e( 'Affiliate Ready Engine', 'bizpro-agency' ); ?></h4>
					<p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;"><?php esc_html_e( 'Built-in tracking for affiliate partners with automated payout tracking and link generation.', 'bizpro-agency' ); ?></p>
				</div>

				<!-- Box: 4 Cols -->
				<div class="bpa-bento-card-white">
					<div style="font-size: 32px; margin-bottom: 12px;">🌓</div>
					<h4 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;"><?php esc_html_e( 'Auto Dark Mode', 'bizpro-agency' ); ?></h4>
					<p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;"><?php esc_html_e( 'System theme aware mode detection plus interactive toggle switcher for nighttime buyers.', 'bizpro-agency' ); ?></p>
				</div>

			</div>
		</div>
	</section>

	<!-- =====================================================================
		DIGITAL PRODUCT STORE (SHOP GRID) SECTION
		=================================================================== -->
	<section id="products" class="section section--digital-products" style="padding: 90px 0; background: var(--bpa-bg-alt, #f8fafc); border-top: 1px solid var(--bpa-border, #e2e8f0);">
		<div class="container">
			<div style="text-align: center; max-width: 700px; margin: 0 auto 60px;">
				<span style="font-size: 0.85rem; font-weight: 700; color: #10b981; text-transform: uppercase; letter-spacing: 1px;"><?php esc_html_e( 'Instant Delivery Store', 'bizpro-agency' ); ?></span>
				<h2 style="font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800; color: var(--bpa-text, #0f172a); margin: 12px 0;"><?php esc_html_e( 'Trending Digital Assets & Software Downloads', 'bizpro-agency' ); ?></h2>
				<p style="color: var(--bpa-text-muted, #64748b); font-size: 1.05rem;"><?php esc_html_e( 'Browse our handpicked collection of developer tools, UI templates, and production-ready starter kits.', 'bizpro-agency' ); ?></p>
			</div>

			<!-- Product Cards Grid (4 Columns) -->
			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 24px; margin-bottom: 60px;">

				<!-- Digital Product 1 -->
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; transition: transform 0.25s ease, box-shadow 0.25s ease;">
					<div style="background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%); padding: 36px 24px; text-align: center; position: relative; color: #fff;">
						<span style="position: absolute; top: 12px; right: 12px; background: #10b981; color: #fff; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 20px;"><?php esc_html_e( '⚡ Instant Download', 'bizpro-agency' ); ?></span>
						<div style="font-size: 42px; margin-bottom: 8px;">🎨</div>
						<span style="font-size: 0.8rem; font-weight: 700; color: #a5b4fc; text-transform: uppercase; letter-spacing: 0.5px;"><?php esc_html_e( 'Figma & Tailwind CSS', 'bizpro-agency' ); ?></span>
					</div>
					<div style="padding: 24px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
						<div>
							<h3 style="font-size: 1.25rem; font-weight: 800; color: var(--bpa-text, #0f172a); margin: 0 0 10px;"><?php esc_html_e( 'SaaS Dashboard UI Kit & Design System', 'bizpro-agency' ); ?></h3>
							<p style="font-size: 0.92rem; color: var(--bpa-text-muted, #64748b); line-height: 1.5; margin-bottom: 16px;"><?php esc_html_e( 'Over 300+ pixel-perfect Figma components, 40+ pre-built dashboards, and copy-paste Tailwind code snippets.', 'bizpro-agency' ); ?></p>
						</div>
						<div>
							<div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 16px; padding-top: 12px; border-top: 1px solid var(--bpa-border, #f1f5f9);">
								<div>
									<span style="font-size: 1.6rem; font-weight: 900; color: #0f172a;">$49</span>
									<span style="font-size: 0.9rem; text-decoration: line-through; color: #94a3b8; margin-left: 6px;">$89</span>
								</div>
								<span style="font-size: 0.8rem; color: #10b981; font-weight: 700;">★ 4.9 (48)</span>
							</div>
							<a href="<?php echo esc_url( $bizpro_buy_p1 ); ?>" class="btn btn--primary" style="display: block; text-align: center; padding: 12px; border-radius: 10px; font-weight: 700; text-decoration: none;">
								<?php esc_html_e( 'Get Instant Access →', 'bizpro-agency' ); ?>
							</a>
						</div>
					</div>
				</div>

				<!-- Digital Product 2 -->
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; transition: transform 0.25s ease, box-shadow 0.25s ease;">
					<div style="background: linear-gradient(135deg, #064e3b 0%, #065f46 100%); padding: 36px 24px; text-align: center; position: relative; color: #fff;">
						<span style="position: absolute; top: 12px; right: 12px; background: #10b981; color: #fff; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 20px;"><?php esc_html_e( '⚡ Instant Download', 'bizpro-agency' ); ?></span>
						<div style="font-size: 42px; margin-bottom: 8px;">☁️</div>
						<span style="font-size: 0.8rem; font-weight: 700; color: #6ee7b7; text-transform: uppercase; letter-spacing: 0.5px;"><?php esc_html_e( 'Terraform & Docker', 'bizpro-agency' ); ?></span>
					</div>
					<div style="padding: 24px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
						<div>
							<h3 style="font-size: 1.25rem; font-weight: 800; color: var(--bpa-text, #0f172a); margin: 0 0 10px;"><?php esc_html_e( 'Cloud Infrastructure & DevOps Pack', 'bizpro-agency' ); ?></h3>
							<p style="font-size: 0.92rem; color: var(--bpa-text-muted, #64748b); line-height: 1.5; margin-bottom: 16px;"><?php esc_html_e( 'Enterprise-grade AWS & Azure Terraform blueprints with automated GitHub Actions CI/CD deployment pipelines.', 'bizpro-agency' ); ?></p>
						</div>
						<div>
							<div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 16px; padding-top: 12px; border-top: 1px solid var(--bpa-border, #f1f5f9);">
								<div>
									<span style="font-size: 1.6rem; font-weight: 900; color: #0f172a;">$89</span>
									<span style="font-size: 0.9rem; text-decoration: line-through; color: #94a3b8; margin-left: 6px;">$149</span>
								</div>
								<span style="font-size: 0.8rem; color: #10b981; font-weight: 700;">★ 5.0 (32)</span>
							</div>
							<a href="<?php echo esc_url( $bizpro_buy_p2 ); ?>" class="btn btn--primary" style="display: block; text-align: center; padding: 12px; border-radius: 10px; font-weight: 700; text-decoration: none;">
								<?php esc_html_e( 'Get Instant Access →', 'bizpro-agency' ); ?>
							</a>
						</div>
					</div>
				</div>

				<!-- Digital Product 3 -->
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; transition: transform 0.25s ease, box-shadow 0.25s ease;">
					<div style="background: linear-gradient(135deg, #701a75 0%, #4a044e 100%); padding: 36px 24px; text-align: center; position: relative; color: #fff;">
						<span style="position: absolute; top: 12px; right: 12px; background: #10b981; color: #fff; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 20px;"><?php esc_html_e( '⚡ Instant Download', 'bizpro-agency' ); ?></span>
						<div style="font-size: 42px; margin-bottom: 8px;">⚡</div>
						<span style="font-size: 0.8rem; font-weight: 700; color: #f0abfc; text-transform: uppercase; letter-spacing: 0.5px;"><?php esc_html_e( 'Next.js 14 & Supabase', 'bizpro-agency' ); ?></span>
					</div>
					<div style="padding: 24px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
						<div>
							<h3 style="font-size: 1.25rem; font-weight: 800; color: var(--bpa-text, #0f172a); margin: 0 0 10px;"><?php esc_html_e( 'Full-Stack Microservice SaaS Boilerplate', 'bizpro-agency' ); ?></h3>
							<p style="font-size: 0.92rem; color: var(--bpa-text-muted, #64748b); line-height: 1.5; margin-bottom: 16px;"><?php esc_html_e( 'Complete Next.js starter kit with Stripe subscription billing, authentication, and multi-tenant database.', 'bizpro-agency' ); ?></p>
						</div>
						<div>
							<div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 16px; padding-top: 12px; border-top: 1px solid var(--bpa-border, #f1f5f9);">
								<div>
									<span style="font-size: 1.6rem; font-weight: 900; color: #0f172a;">$129</span>
									<span style="font-size: 0.9rem; text-decoration: line-through; color: #94a3b8; margin-left: 6px;">$199</span>
								</div>
								<span style="font-size: 0.8rem; color: #10b981; font-weight: 700;">★ 4.9 (61)</span>
							</div>
							<a href="<?php echo esc_url( $bizpro_buy_p3 ); ?>" class="btn btn--primary" style="display: block; text-align: center; padding: 12px; border-radius: 10px; font-weight: 700; text-decoration: none;">
								<?php esc_html_e( 'Get Instant Access →', 'bizpro-agency' ); ?>
							</a>
						</div>
					</div>
				</div>

				<!-- Digital Product 4: Lifetime Bundle -->
				<div style="background: var(--bpa-bg, #ffffff); border: 2px solid #6366f1; border-radius: 18px; overflow: hidden; box-shadow: 0 15px 35px rgba(99,102,241,0.15); display: flex; flex-direction: column; justify-content: space-between; transition: transform 0.25s ease, box-shadow 0.25s ease;">
					<div style="background: linear-gradient(135deg, #312e81 0%, #1e1b4b 100%); padding: 36px 24px; text-align: center; position: relative; color: #fff;">
						<span style="position: absolute; top: 12px; right: 12px; background: #6366f1; color: #fff; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 20px;"><?php esc_html_e( '🔥 Best Value Bundle', 'bizpro-agency' ); ?></span>
						<div style="font-size: 42px; margin-bottom: 8px;">💎</div>
						<span style="font-size: 0.8rem; font-weight: 700; color: #c7d2fe; text-transform: uppercase; letter-spacing: 0.5px;"><?php esc_html_e( 'All-Access Pass', 'bizpro-agency' ); ?></span>
					</div>
					<div style="padding: 24px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
						<div>
							<h3 style="font-size: 1.25rem; font-weight: 800; color: var(--bpa-text, #0f172a); margin: 0 0 10px;"><?php esc_html_e( 'Ultimate Digital Creator & Developer Bundle', 'bizpro-agency' ); ?></h3>
							<p style="font-size: 0.92rem; color: var(--bpa-text-muted, #64748b); line-height: 1.5; margin-bottom: 16px;"><?php esc_html_e( 'Get every current and future UI kit, starter repo, and code pack with unlimited commercial client licenses.', 'bizpro-agency' ); ?></p>
						</div>
						<div>
							<div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 16px; padding-top: 12px; border-top: 1px solid var(--bpa-border, #f1f5f9);">
								<div>
									<span style="font-size: 1.6rem; font-weight: 900; color: #6366f1;">$199</span>
									<span style="font-size: 0.9rem; text-decoration: line-through; color: #94a3b8; margin-left: 6px;">$399</span>
								</div>
								<span style="font-size: 0.8rem; color: #6366f1; font-weight: 700;">★ 5.0 (120)</span>
							</div>
							<a href="<?php echo esc_url( $bizpro_buy_p4 ); ?>" class="btn btn--primary" style="display: block; text-align: center; padding: 12px; border-radius: 10px; font-weight: 700; text-decoration: none; background: #6366f1; border-color: #6366f1;">
								<?php esc_html_e( 'Buy All-Access Bundle →', 'bizpro-agency' ); ?>
							</a>
						</div>
					</div>
				</div>

			</div>

			<!-- Trust & Security Banner -->
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 24px; display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 20px; text-align: center;">
				<div>
					<span style="font-size: 24px;">🔒</span>
					<div style="font-weight: 800; font-size: 0.95rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( '256-Bit SSL Encryption', 'bizpro-agency' ); ?></div>
					<small style="color: var(--bpa-text-muted, #64748b);"><?php esc_html_e( 'Bank-grade checkout security', 'bizpro-agency' ); ?></small>
				</div>
				<div>
					<span style="font-size: 24px;">💳</span>
					<div style="font-weight: 800; font-size: 0.95rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( 'Stripe & PayPal Verified', 'bizpro-agency' ); ?></div>
					<small style="color: var(--bpa-text-muted, #64748b);"><?php esc_html_e( 'All major debit & credit cards', 'bizpro-agency' ); ?></small>
				</div>
				<div>
					<span style="font-size: 24px;">⚡</span>
					<div style="font-weight: 800; font-size: 0.95rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( 'Instant File Download', 'bizpro-agency' ); ?></div>
					<small style="color: var(--bpa-text-muted, #64748b);"><?php esc_html_e( 'Direct download link in 5s', 'bizpro-agency' ); ?></small>
				</div>
				<div>
					<span style="font-size: 24px;">🛡️</span>
					<div style="font-weight: 800; font-size: 0.95rem; color: var(--bpa-text, #0f172a);"><?php esc_html_e( 'Commercial License Included', 'bizpro-agency' ); ?></div>
					<small style="color: var(--bpa-text-muted, #64748b);"><?php esc_html_e( 'Unlimited client project usage', 'bizpro-agency' ); ?></small>
				</div>
			</div>

		</div>
	</section>

	<!-- Customer Reviews & Testimonials for Digital Products -->
	<section id="reviews" class="section" style="padding: 90px 0; background: var(--bpa-bg, #ffffff);">
		<div class="container">
			<div style="text-align: center; max-width: 650px; margin: 0 auto 60px;">
				<span style="font-size: 0.85rem; font-weight: 700; color: #10b981; text-transform: uppercase; letter-spacing: 1px;"><?php esc_html_e( 'Verified Buyer Feedback', 'bizpro-agency' ); ?></span>
				<h2 style="font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800; color: var(--bpa-text, #0f172a); margin: 12px 0;"><?php esc_html_e( 'Loved by 2,500+ Developers & Designers', 'bizpro-agency' ); ?></h2>
				<p style="color: var(--bpa-text-muted, #64748b); font-size: 1.05rem;"><?php esc_html_e( 'See what real buyers are saying about our production-ready UI kits, starter packs, and scripts.', 'bizpro-agency' ); ?></p>
			</div>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; align-items: stretch; max-width: 1100px; margin: 0 auto;">
				
				<!-- Review 1 -->
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 36px 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
					<div>
						<div style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 16px;">★★★★★</div>
						<p style="color: var(--bpa-text, #334155); font-size: 1rem; line-height: 1.7; font-style: italic; margin-bottom: 24px;">
							"<?php esc_html_e( 'The SaaS Dashboard UI kit saved our agency over 120 hours of frontend development. Clean Figma tokens and pixel-perfect HTML/CSS out of the box!', 'bizpro-agency' ); ?>"
						</p>
					</div>
					<div style="display: flex; align-items: center; gap: 14px; border-top: 1px solid var(--bpa-border, #f1f5f9); padding-top: 20px;">
						<div style="width: 44px; height: 44px; border-radius: 50%; background: #6366f1; color: #fff; font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 1rem;">AK</div>
						<div>
							<div style="font-weight: 800; color: var(--bpa-text, #0f172a); font-size: 0.95rem;">Alex K.</div>
							<div style="font-size: 0.82rem; color: #64748b;"><?php esc_html_e( 'Lead Frontend Engineer, DevPulse', 'bizpro-agency' ); ?></div>
						</div>
					</div>
				</div>

				<!-- Review 2 -->
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 36px 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
					<div>
						<div style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 16px;">★★★★★</div>
						<p style="color: var(--bpa-text, #334155); font-size: 1rem; line-height: 1.7; font-style: italic; margin-bottom: 24px;">
							"<?php esc_html_e( 'The Cloud DevOps Pack was totally worth every penny. Terraform templates deployed cleanly to AWS on day one with zero configuration errors.', 'bizpro-agency' ); ?>"
						</p>
					</div>
					<div style="display: flex; align-items: center; gap: 14px; border-top: 1px solid var(--bpa-border, #f1f5f9); padding-top: 20px;">
						<div style="width: 44px; height: 44px; border-radius: 50%; background: #10b981; color: #fff; font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 1rem;">MR</div>
						<div>
							<div style="font-weight: 800; color: var(--bpa-text, #0f172a); font-size: 0.95rem;">Michael R.</div>
							<div style="font-size: 0.82rem; color: #64748b;"><?php esc_html_e( 'Cloud Architect, StackBridge', 'bizpro-agency' ); ?></div>
						</div>
					</div>
				</div>

				<!-- Review 3 -->
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 36px 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
					<div>
						<div style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 16px;">★★★★★</div>
						<p style="color: var(--bpa-text, #334155); font-size: 1rem; line-height: 1.7; font-style: italic; margin-bottom: 24px;">
							"<?php esc_html_e( 'Bought the Ultimate Bundle and launched our client project two weeks ahead of schedule. Instant download worked immediately after Stripe checkout.', 'bizpro-agency' ); ?>"
						</p>
					</div>
					<div style="display: flex; align-items: center; gap: 14px; border-top: 1px solid var(--bpa-border, #f1f5f9); padding-top: 20px;">
						<div style="width: 44px; height: 44px; border-radius: 50%; background: #ec4899; color: #fff; font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 1rem;">SL</div>
						<div>
							<div style="font-weight: 800; color: var(--bpa-text, #0f172a); font-size: 0.95rem;">Sarah L.</div>
							<div style="font-size: 0.82rem; color: #64748b;"><?php esc_html_e( 'Independent SaaS Creator', 'bizpro-agency' ); ?></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Customer-Oriented FAQ Section for Digital Buyers -->
	<section id="store-faq" class="section" style="padding: 90px 0; background: var(--bpa-bg-alt, #f8fafc); border-top: 1px solid var(--bpa-border, #e2e8f0);">
		<div class="container" style="max-width: 850px; margin: 0 auto;">
			<div style="text-align: center; margin-bottom: 50px;">
				<span style="font-size: 0.85rem; font-weight: 700; color: #6366f1; text-transform: uppercase; letter-spacing: 1px;"><?php esc_html_e( 'Buyer FAQ', 'bizpro-agency' ); ?></span>
				<h2 style="font-size: clamp(1.8rem, 3.5vw, 2.5rem); font-weight: 800; color: var(--bpa-text, #0f172a); margin: 10px 0;"><?php esc_html_e( 'Frequently Asked Questions by Digital Buyers', 'bizpro-agency' ); ?></h2>
			</div>

			<div class="bpa-faq-list">
				<div class="faq-item is-open bpa-faq-card">
					<button class="faq-question bpa-faq-btn" type="button" aria-expanded="true">
						<span><?php esc_html_e( 'How do I receive the software/files after purchase?', 'bizpro-agency' ); ?></span>
						<span class="bpa-faq-icon">+</span>
					</button>
					<div class="faq-answer bpa-faq-body">
						<?php esc_html_e( 'Immediately after completing your payment via Stripe or PayPal, you will see an instant download button on the receipt page. A secure, time-stamped download link will also be dispatched to your registered email address within 5 seconds.', 'bizpro-agency' ); ?>
					</div>
				</div>

				<div class="faq-item bpa-faq-card">
					<button class="faq-question bpa-faq-btn" type="button" aria-expanded="false">
						<span><?php esc_html_e( 'What commercial usage rights and licenses are included?', 'bizpro-agency' ); ?></span>
						<span class="bpa-faq-icon">+</span>
					</button>
					<div class="faq-answer bpa-faq-body" hidden>
						<?php esc_html_e( 'All individual digital products come with a Commercial License allowing you to build end products for yourself or your paying clients. You may not resell or redistribute the raw template source files directly.', 'bizpro-agency' ); ?>
					</div>
				</div>

				<div class="faq-item bpa-faq-card">
					<button class="faq-question bpa-faq-btn" type="button" aria-expanded="false">
						<span><?php esc_html_e( 'Do you offer a refund policy on digital products?', 'bizpro-agency' ); ?></span>
						<span class="bpa-faq-icon">+</span>
					</button>
					<div class="faq-answer bpa-faq-body" hidden>
						<?php esc_html_e( 'Yes. If a downloaded file is demonstrably corrupted, missing documented features, or our technical support team cannot resolve a reported issue within 48 hours, you are entitled to a full 14-day refund.', 'bizpro-agency' ); ?>
					</div>
				</div>
			</div>

			<!-- Still Have Questions Box -->
			<div style="margin-top: 50px; background: #ffffff; border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
				<h3 style="margin: 0 0 8px; color: var(--bpa-text, #0f172a); font-size: 1.3rem; font-weight: 800;"><?php esc_html_e( 'Have a question before buying?', 'bizpro-agency' ); ?></h3>
				<p style="color: var(--bpa-text-muted, #64748b); margin-bottom: 20px; font-size: 0.95rem;"><?php esc_html_e( 'Our sales and technical support team is available 24/7 to assist with compatibility inquiries.', 'bizpro-agency' ); ?></p>
				<div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
					<a href="mailto:<?php echo esc_attr( $bizpro_email ); ?>" class="btn btn--primary" style="text-decoration: none;">
						<?php esc_html_e( 'Email Sales Desk', 'bizpro-agency' ); ?>
					</a>
					<a href="<?php echo esc_url( bizpro_agency_page_url( 'contact' ) ); ?>" class="btn" style="background: #f1f5f9; color: #0f172a; border: 1px solid #cbd5e1; text-decoration: none;">
						<?php esc_html_e( 'Submit Support Ticket', 'bizpro-agency' ); ?>
					</a>
				</div>
			</div>

		</div>
	</section>

</main>

<?php
get_footer();
