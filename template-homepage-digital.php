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

$bpa_email = bizpro_agency_get( 'topbar_email', 'sales@bizproagency.com' );
?>

<main id="primary" class="site-main site-main--digital">

	<!-- Hero Section with Device Mockup -->
	<section class="hero hero--digital" style="background: radial-gradient(circle at 50% 0%, #1e1b4b 0%, #0f172a 70%, #090d16 100%); color: #ffffff; padding: 100px 0 80px; position: relative; overflow: hidden;">
		<div style="position: absolute; top: -100px; left: 50%; transform: translateX(-50%); width: 700px; height: 350px; background: rgba(99, 102, 241, 0.25); filter: blur(120px); border-radius: 50%; pointer-events: none;"></div>

		<div class="container" style="position: relative; z-index: 2; text-align: center;">
			<div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); border-radius: 30px; padding: 6px 18px; margin-bottom: 24px; font-size: 0.88rem;">
				<span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #10b981;"></span>
				<span style="color: #cbd5e1; font-weight: 600;"><?php esc_html_e( 'v2.4 Released — Instant Digital Delivery Included', 'bizpro-agency' ); ?></span>
			</div>

			<h1 style="font-size: clamp(2.5rem, 5.5vw, 4.2rem); font-weight: 800; line-height: 1.15; letter-spacing: -0.02em; max-width: 900px; margin: 0 auto 20px; color: #ffffff;">
				<?php esc_html_e( 'Sell Your Digital Products & Software with Ultimate Speed', 'bizpro-agency' ); ?>
			</h1>

			<p style="font-size: clamp(1.05rem, 2vw, 1.25rem); color: #94a3b8; max-width: 720px; margin: 0 auto 36px; line-height: 1.6;">
				<?php esc_html_e( 'The enterprise-grade eCommerce solution designed for creators, developers, and SaaS founders. Built with zero-bloat code, instant downloads, and automated license distribution.', 'bizpro-agency' ); ?>
			</p>

			<div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; margin-bottom: 50px;">
				<a href="#pricing" class="btn btn--primary" style="background: #6366f1; border-color: #6366f1; color: #fff; padding: 14px 32px; font-weight: 700; border-radius: 12px; font-size: 1.05rem; box-shadow: 0 10px 25px rgba(99,102,241,0.4); text-decoration: none;">
					<?php esc_html_e( 'Get All-Access Pass', 'bizpro-agency' ); ?>
				</a>
				<a href="#features" class="btn" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.2); color: #fff; padding: 14px 28px; font-weight: 600; border-radius: 12px; font-size: 1.05rem; text-decoration: none;">
					<?php esc_html_e( 'Explore Bento Features', 'bizpro-agency' ); ?>
				</a>
			</div>

			<!-- Device Mockup Card -->
			<div style="max-width: 1000px; margin: 0 auto; background: #0f172a; border: 1px solid rgba(255,255,255,0.15); border-radius: 20px; padding: 16px; box-shadow: 0 30px 80px rgba(0,0,0,0.6);">
				<div style="background: #1e293b; border-radius: 12px; padding: 30px 24px; display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; text-align: left;">
					<div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 20px;">
						<div style="font-size: 0.85rem; color: #818cf8; font-weight: 700; text-transform: uppercase; margin-bottom: 8px;">🚀 Lightning Checkout</div>
						<div style="font-size: 1.4rem; font-weight: 800; color: #ffffff; margin-bottom: 6px;">0.8s Total Latency</div>
						<p style="color: #64748b; font-size: 0.9rem; margin: 0;">Optimized for Stripe, PayPal, and Apple Pay with 1-click digital fulfillment.</p>
					</div>
					<div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 20px;">
						<div style="font-size: 0.85rem; color: #34d399; font-weight: 700; text-transform: uppercase; margin-bottom: 8px;">🛡️ License Generation</div>
						<div style="font-size: 1.4rem; font-weight: 800; color: #ffffff; margin-bottom: 6px;">Automated API Keys</div>
						<p style="color: #64748b; font-size: 0.9rem; margin: 0;">Instant cryptographically signed license keys sent directly to buyers inbox.</p>
					</div>
					<div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 20px;">
						<div style="font-size: 0.85rem; color: #fbbf24; font-weight: 700; text-transform: uppercase; margin-bottom: 8px;">📦 Smart CDN Delivery</div>
						<div style="font-size: 1.4rem; font-weight: 800; color: #ffffff; margin-bottom: 6px;">Secure Signed URLs</div>
						<p style="color: #64748b; font-size: 0.9rem; margin: 0;">Time-limited download links ensure zero piracy and prevent unauthorized hotlinking.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Continuous Infinite Logo Marquee -->
	<section class="section section--marquee" style="background: #0b0f19; padding: 36px 0; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08); overflow: hidden;">
		<div class="bpa-marquee-track" style="display: flex; gap: 60px; align-items: center; white-space: nowrap; animation: bpaMarquee 25s linear infinite;">
			<span style="font-size: 1.2rem; font-weight: 800; color: #475569; letter-spacing: 2px;">STRIPE VERIFIED</span>
			<span style="font-size: 1.2rem; font-weight: 800; color: #475569; letter-spacing: 2px;">WOOCOMMERCE OPTIMIZED</span>
			<span style="font-size: 1.2rem; font-weight: 800; color: #475569; letter-spacing: 2px;">GITHUB INTEGRATED</span>
			<span style="font-size: 1.2rem; font-weight: 800; color: #475569; letter-spacing: 2px;">AWS CLOUDFRONT CDN</span>
			<span style="font-size: 1.2rem; font-weight: 800; color: #475569; letter-spacing: 2px;">PAYPAL COMMERCE</span>
			<span style="font-size: 1.2rem; font-weight: 800; color: #475569; letter-spacing: 2px;">FREEMIUS PARTNER</span>
			<span style="font-size: 1.2rem; font-weight: 800; color: #475569; letter-spacing: 2px;">STRIPE VERIFIED</span>
			<span style="font-size: 1.2rem; font-weight: 800; color: #475569; letter-spacing: 2px;">WOOCOMMERCE OPTIMIZED</span>
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
			<div style="display: grid; grid-template-columns: repeat(12, 1fr); gap: 24px;">
				
				<!-- Large Bento Box: 8 Cols -->
				<div style="grid-column: span 8; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border: 1px solid #e2e8f0; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
					<span style="background: #e0e7ff; color: #4338ca; font-size: 0.8rem; font-weight: 700; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">eCommerce Core</span>
					<h3 style="font-size: 1.8rem; font-weight: 800; margin: 16px 0 10px; color: #0f172a;"><?php esc_html_e( 'Frictionless Flyout Cart & 1-Step Checkout', 'bizpro-agency' ); ?></h3>
					<p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; max-width: 580px;"><?php esc_html_e( 'Customers never leave their browsing position. Add items to cart with smooth slide drawers, automatic coupon calculation, and zero page reloads.', 'bizpro-agency' ); ?></p>
					<div style="margin-top: 24px; display: flex; gap: 12px;">
						<span style="background: #ffffff; border: 1px solid #cbd5e1; padding: 8px 14px; border-radius: 8px; font-weight: 600; font-size: 0.9rem;">⚡ 0% Cart Abandonment</span>
						<span style="background: #ffffff; border: 1px solid #cbd5e1; padding: 8px 14px; border-radius: 8px; font-weight: 600; font-size: 0.9rem;">🔒 PCI-DSS Compliant</span>
					</div>
				</div>

				<!-- Medium Bento Box: 4 Cols -->
				<div style="grid-column: span 4; background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); color: #ffffff; border-radius: 20px; padding: 40px; box-shadow: 0 14px 35px rgba(15,23,42,0.15);">
					<span style="background: rgba(99,102,241,0.3); color: #a5b4fc; font-size: 0.8rem; font-weight: 700; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">Speed Standard</span>
					<h3 style="font-size: 1.8rem; font-weight: 800; margin: 16px 0 10px; color: #ffffff;"><?php esc_html_e( '99+ PageSpeed Score', 'bizpro-agency' ); ?></h3>
					<p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;"><?php esc_html_e( 'Vanilla JavaScript and pure CSS styling means zero jQuery and ultra-fast mobile rendering.', 'bizpro-agency' ); ?></p>
					<div style="font-size: 3.2rem; font-weight: 900; color: #34d399; margin-top: 20px;">99/100</div>
				</div>

				<!-- Box: 4 Cols -->
				<div style="grid-column: span 4; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 32px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
					<div style="font-size: 32px; margin-bottom: 12px;">🔑</div>
					<h4 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;"><?php esc_html_e( 'License Management', 'bizpro-agency' ); ?></h4>
					<p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;"><?php esc_html_e( 'Issue license keys, manage domain activations, and control updates directly from your dashboard.', 'bizpro-agency' ); ?></p>
				</div>

				<!-- Box: 4 Cols -->
				<div style="grid-column: span 4; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 32px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
					<div style="font-size: 32px; margin-bottom: 12px;">📈</div>
					<h4 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;"><?php esc_html_e( 'Affiliate Ready Engine', 'bizpro-agency' ); ?></h4>
					<p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;"><?php esc_html_e( 'Built-in tracking for affiliate partners with automated payout tracking and link generation.', 'bizpro-agency' ); ?></p>
				</div>

				<!-- Box: 4 Cols -->
				<div style="grid-column: span 4; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 32px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
					<div style="font-size: 32px; margin-bottom: 12px;">🌓</div>
					<h4 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;"><?php esc_html_e( 'Auto Dark Mode', 'bizpro-agency' ); ?></h4>
					<p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;"><?php esc_html_e( 'System theme aware mode detection plus interactive toggle switcher for nighttime buyers.', 'bizpro-agency' ); ?></p>
				</div>

			</div>
		</div>
	</section>

	<!-- High-Converting Pricing Table (Lite vs Pro vs Lifetime) -->
	<section id="pricing" class="section" style="padding: 90px 0; background: var(--bpa-bg-alt, #f8fafc); border-top: 1px solid var(--bpa-border, #e2e8f0);">
		<div class="container">
			<div style="text-align: center; max-width: 650px; margin: 0 auto 60px;">
				<span style="font-size: 0.85rem; font-weight: 700; color: #6366f1; text-transform: uppercase; letter-spacing: 1px;"><?php esc_html_e( 'Simple, Predictable Pricing', 'bizpro-agency' ); ?></span>
				<h2 style="font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800; color: var(--bpa-text, #0f172a); margin: 12px 0;"><?php esc_html_e( 'Choose the Plan That Fits Your Vision', 'bizpro-agency' ); ?></h2>
				<p style="color: var(--bpa-text-muted, #64748b); font-size: 1.05rem;"><?php esc_html_e( 'All plans include instant downloads, verified updates, and guaranteed 30-day money-back guarantee.', 'bizpro-agency' ); ?></p>
			</div>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; align-items: stretch; max-width: 1100px; margin: 0 auto;">
				
				<!-- Tier 1: Single Product -->
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 40px 32px; display: flex; flex-direction: column; justify-content: space-between;">
					<div>
						<h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-top: 0;"><?php esc_html_e( 'Starter License', 'bizpro-agency' ); ?></h3>
						<p style="color: #64748b; font-size: 0.95rem;"><?php esc_html_e( 'Perfect for single website owners and creators starting out.', 'bizpro-agency' ); ?></p>
						<div style="font-size: 3rem; font-weight: 900; color: #0f172a; margin: 24px 0 10px;">$39 <span style="font-size: 1rem; color: #64748b; font-weight: 500;">/ year</span></div>
						<ul style="list-style: none; padding: 0; margin: 24px 0; line-height: 2; color: #334155; font-size: 0.95rem;">
							<li>✅ 1 Domain License</li>
							<li>✅ Instant File Download</li>
							<li>✅ 1 Year Regular Updates</li>
							<li>✅ Standard Email Support</li>
							<li style="color: #94a3b8;">❌ White-Label Agency Mode</li>
						</ul>
					</div>
					<a href="#buy-starter" class="btn" style="display: block; text-align: center; background: #f1f5f9; color: #0f172a; font-weight: 700; padding: 14px; border-radius: 12px; text-decoration: none; border: 1px solid #cbd5e1;"><?php esc_html_e( 'Buy Starter Pass', 'bizpro-agency' ); ?></a>
				</div>

				<!-- Tier 2: Popular Pro -->
				<div style="background: #ffffff; border: 2px solid #6366f1; border-radius: 20px; padding: 40px 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 20px 50px rgba(99,102,241,0.15); position: relative;">
					<span style="position: absolute; top: -14px; left: 50%; transform: translateX(-50%); background: #6366f1; color: #ffffff; font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; padding: 4px 16px; border-radius: 20px;"><?php esc_html_e( 'Most Popular Choice', 'bizpro-agency' ); ?></span>
					<div>
						<h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-top: 0;"><?php esc_html_e( 'Pro Developer', 'bizpro-agency' ); ?></h3>
						<p style="color: #64748b; font-size: 0.95rem;"><?php esc_html_e( 'Best for freelancers building client websites regularly.', 'bizpro-agency' ); ?></p>
						<div style="font-size: 3rem; font-weight: 900; color: #6366f1; margin: 24px 0 10px;">$79 <span style="font-size: 1rem; color: #64748b; font-weight: 500;">/ year</span></div>
						<ul style="list-style: none; padding: 0; margin: 24px 0; line-height: 2; color: #334155; font-size: 0.95rem;">
							<li>✅ Up to 5 Domain Activations</li>
							<li>✅ Instant File Download & API Sync</li>
							<li>✅ All 7 Niche Demos Included</li>
							<li>✅ Priority 24/7 Support Desk</li>
							<li>✅ WooCommerce Flyout Cart Extension</li>
						</ul>
					</div>
					<a href="#buy-pro" class="btn btn--primary" style="display: block; text-align: center; background: #6366f1; border-color: #6366f1; color: #ffffff; font-weight: 700; padding: 14px; border-radius: 12px; text-decoration: none; box-shadow: 0 10px 20px rgba(99,102,241,0.3);"><?php esc_html_e( 'Upgrade to Pro Now', 'bizpro-agency' ); ?></a>
				</div>

				<!-- Tier 3: Lifetime Agency -->
				<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 40px 32px; display: flex; flex-direction: column; justify-content: space-between;">
					<div>
						<h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-top: 0;"><?php esc_html_e( 'Agency Lifetime', 'bizpro-agency' ); ?></h3>
						<p style="color: #64748b; font-size: 0.95rem;"><?php esc_html_e( 'Unlimited sites, lifetime updates, and full white-label rights.', 'bizpro-agency' ); ?></p>
						<div style="font-size: 3rem; font-weight: 900; color: #0f172a; margin: 24px 0 10px;">$199 <span style="font-size: 1rem; color: #64748b; font-weight: 500;">one-time</span></div>
						<ul style="list-style: none; padding: 0; margin: 24px 0; line-height: 2; color: #334155; font-size: 0.95rem;">
							<li>✅ Unlimited Domain Licenses</li>
							<li>✅ Lifetime Updates Guarantee</li>
							<li>✅ Full White-Label Rebranding</li>
							<li>✅ VIP Direct Slack Support Channel</li>
							<li>✅ 1-on-1 Theme Setup Consultation</li>
						</ul>
					</div>
					<a href="#buy-lifetime" class="btn" style="display: block; text-align: center; background: #0f172a; color: #ffffff; font-weight: 700; padding: 14px; border-radius: 12px; text-decoration: none;"><?php esc_html_e( 'Get Lifetime Pass', 'bizpro-agency' ); ?></a>
				</div>

			</div>
		</div>
	</section>

</main>

<?php
get_footer();
