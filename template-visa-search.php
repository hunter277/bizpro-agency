<?php
/**
 * Template Name: Visa Pathways & Country Finder
 *
 * Dedicated searchable country list and visa criteria directory.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--visa-finder">

	<header class="page-header" style="background: linear-gradient(135deg, #0a2540 0%, #0f172a 100%); color: #ffffff; padding: 80px 0 70px; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Global Mobility Directory', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2.2rem, 5vw, 3.6rem); color: #ffffff; margin-bottom: 16px;"><?php esc_html_e( 'Country Pathways & Visa Program Finder', 'bizpro-agency' ); ?></h1>
			<p style="max-width: 650px; margin: 0 auto; color: #94a3b8; font-size: 1.15rem; line-height: 1.6;"><?php esc_html_e( 'Filter verified immigration, work permit, student visa and residency programs across tier-1 destinations.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding: 70px 0;">
		
		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
			
			<!-- Canada Card -->
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
				<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
					<span style="font-size: 32px;">🇨🇦</span>
					<span style="background: #fef2f2; color: #991b1b; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 4px; text-transform: uppercase;">Express Entry & PNP</span>
				</div>
				<h3 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0 0 8px;">Canada Permanent Residency</h3>
				<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Federal Skilled Worker, Canadian Experience Class and Provincial Nominee streams with complete points audits.</p>
				<div style="border-top: 1px solid #f1f5f9; padding-top: 16px; display: flex; justify-content: space-between; align-items: center;">
					<span style="font-size: 0.85rem; color: #10b981; font-weight: 700;">⏱️ 6 - 8 Months Processing</span>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none;">Apply Now →</a>
				</div>
			</div>

			<!-- UK Card -->
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
				<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
					<span style="font-size: 32px;">🇬🇧</span>
					<span style="background: #eff6ff; color: #1e40af; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 4px; text-transform: uppercase;">Skilled Worker & Tech</span>
				</div>
				<h3 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0 0 8px;">United Kingdom Work Visa</h3>
				<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Sponsorship license matching, Global Talent endorsement and Indefinite Leave to Remain (ILR) pathways.</p>
				<div style="border-top: 1px solid #f1f5f9; padding-top: 16px; display: flex; justify-content: space-between; align-items: center;">
					<span style="font-size: 0.85rem; color: #10b981; font-weight: 700;">⏱️ 3 - 6 Weeks Processing</span>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none;">Apply Now →</a>
				</div>
			</div>

			<!-- Australia Card -->
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
				<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
					<span style="font-size: 32px;">🇦🇺</span>
					<span style="background: #ecfdf5; color: #065f46; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 4px; text-transform: uppercase;">Subclass 189 / 190</span>
				</div>
				<h3 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0 0 8px;">Australia General Skilled Migration</h3>
				<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Skills assessment verification, Expression of Interest (EOI) filing and regional nomination support.</p>
				<div style="border-top: 1px solid #f1f5f9; padding-top: 16px; display: flex; justify-content: space-between; align-items: center;">
					<span style="font-size: 0.85rem; color: #10b981; font-weight: 700;">⏱️ 7 - 9 Months Processing</span>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none;">Apply Now →</a>
				</div>
			</div>

		</div>

	</div>

</main>

<?php
get_footer();
