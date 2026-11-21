<?php
/**
 * Template Name: Case Studies & Portfolio
 *
 * Filterable case studies with verified ROI metrics and client success stories.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--portfolio">

	<header class="page-header" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 80px 0 70px; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Proven Track Record', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2.2rem, 5vw, 3.6rem); color: #ffffff; margin-bottom: 16px;"><?php esc_html_e( 'Client Success Case Studies', 'bizpro-agency' ); ?></h1>
			<p style="max-width: 650px; margin: 0 auto; color: #94a3b8; font-size: 1.15rem; line-height: 1.6;"><?php esc_html_e( 'Real world outcomes delivered for global enterprises, tech unicorns, and private equity portfolio companies.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding: 80px 0;">
		
		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 32px;">
			
			<article style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
				<div style="background: linear-gradient(135deg, #1e3a8a 0%, #0284c7 100%); padding: 40px 30px; color: #fff;">
					<span style="background: rgba(255,255,255,0.2); font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 4px; text-transform: uppercase;">Cloud Infrastructure</span>
					<div style="font-size: 2.8rem; font-weight: 900; margin: 16px 0 4px;">-45% Cloud Spend</div>
					<div style="font-size: 0.95rem; opacity: 0.9;">FinTech Enterprise Microservices Migration</div>
				</div>
				<div style="padding: 28px;">
					<h3 style="font-size: 1.3rem; font-weight: 800; margin: 0 0 10px; color: #0f172a;">Multi-Region AWS Kubernetes Modernization</h3>
					<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Migrated 120 legacy VMs into automated Docker clusters with Terraform, achieving zero downtime and cutting monthly server costs by $180,000.</p>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none;">View Project Breakdown →</a>
				</div>
			</article>

			<article style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
				<div style="background: linear-gradient(135deg, #065f46 0%, #10b981 100%); padding: 40px 30px; color: #fff;">
					<span style="background: rgba(255,255,255,0.2); font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 4px; text-transform: uppercase;">Legal Immigration</span>
					<div style="font-size: 2.8rem; font-weight: 900; margin: 16px 0 4px;">14 Days Fast-Track</div>
					<div style="font-size: 0.95rem; opacity: 0.9;">Global Talent Visa UK Fast-Track Filings</div>
				</div>
				<div style="padding: 28px;">
					<h3 style="font-size: 1.3rem; font-weight: 800; margin: 0 0 10px; color: #0f172a;">Tech Founder UK Endorsement & Family PR</h3>
					<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Prepared comprehensive peer review portfolios for a Series-B AI company founding team, securing unconditional stage-1 endorsement within two weeks.</p>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: #10b981; font-weight: 700; text-decoration: none;">View Project Breakdown →</a>
				</div>
			</article>

			<article style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
				<div style="background: linear-gradient(135deg, #78350f 0%, #d97706 100%); padding: 40px 30px; color: #fff;">
					<span style="background: rgba(255,255,255,0.2); font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 4px; text-transform: uppercase;">Strategic Advisory</span>
					<div style="font-size: 2.8rem; font-weight: 900; margin: 16px 0 4px;">+38% EBITDA</div>
					<div style="font-size: 0.95rem; opacity: 0.9;">Post-Merger Commercial Restructuring</div>
				</div>
				<div style="padding: 28px;">
					<h3 style="font-size: 1.3rem; font-weight: 800; margin: 0 0 10px; color: #0f172a;">Supply Chain & Procurement Rationalization</h3>
					<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Redesigned cross-border supplier contracts across 7 distribution hubs, unlocking $4.2M in annual recurring operational savings.</p>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: #d97706; font-weight: 700; text-decoration: none;">View Project Breakdown →</a>
				</div>
			</article>

		</div>

	</div>

</main>

<?php
get_footer();
