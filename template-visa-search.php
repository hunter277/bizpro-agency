<?php
/**
 * Template Name: Visa Pathways & Country Finder
 *
 * Dedicated searchable country list and visa criteria directory.
 * Powered by bpa_visa_pathway Custom Post Type with live instant filtering.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// Query custom post type pathways
$bpa_pathways_query = new WP_Query(
	array(
		'post_type'      => 'bpa_visa_pathway',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
		'orderby'        => 'menu_order title',
		'order'          => 'ASC',
	)
);
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
		
		<!-- Search & Filter Form -->
		<form class="bpa-visa-finder" id="bpa-visa-finder" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(190px,1fr)); gap:14px; align-items:end; padding:24px; margin:0 0 30px; background:#eff6ff; border:1px solid #dbeafe; border-radius:18px;">
			<div>
				<label for="bpa-visa-country" style="display:block;font-weight:700;margin:0 0 8px;color:#0f172a;"><?php esc_html_e( 'Select Country', 'bizpro-agency' ); ?></label>
				<select id="bpa-visa-country" name="country" style="width:100%;min-height:48px;padding:10px 12px;border:1px solid #cbd5e1;border-radius:9px;background:#fff;">
					<option value="all"><?php esc_html_e( 'All Countries', 'bizpro-agency' ); ?></option>
					<option value="canada"><?php esc_html_e( 'Canada', 'bizpro-agency' ); ?></option>
					<option value="uk"><?php esc_html_e( 'United Kingdom', 'bizpro-agency' ); ?></option>
					<option value="australia"><?php esc_html_e( 'Australia', 'bizpro-agency' ); ?></option>
					<option value="usa"><?php esc_html_e( 'United States', 'bizpro-agency' ); ?></option>
					<option value="germany"><?php esc_html_e( 'Germany', 'bizpro-agency' ); ?></option>
					<option value="nz"><?php esc_html_e( 'New Zealand', 'bizpro-agency' ); ?></option>
					<option value="uae"><?php esc_html_e( 'United Arab Emirates', 'bizpro-agency' ); ?></option>
				</select>
			</div>
			<div>
				<label for="bpa-visa-type" style="display:block;font-weight:700;margin:0 0 8px;color:#0f172a;"><?php esc_html_e( 'Visa Type', 'bizpro-agency' ); ?></label>
				<select id="bpa-visa-type" name="visa_type" style="width:100%;min-height:48px;padding:10px 12px;border:1px solid #cbd5e1;border-radius:9px;background:#fff;">
					<option value="all"><?php esc_html_e( 'All Visa Types', 'bizpro-agency' ); ?></option>
					<option value="permanent"><?php esc_html_e( 'Permanent Residency', 'bizpro-agency' ); ?></option>
					<option value="work"><?php esc_html_e( 'Work & Skilled', 'bizpro-agency' ); ?></option>
					<option value="study"><?php esc_html_e( 'Study & Academic', 'bizpro-agency' ); ?></option>
					<option value="visitor"><?php esc_html_e( 'Visitor / Tourist', 'bizpro-agency' ); ?></option>
					<option value="investor"><?php esc_html_e( 'Investor & Business', 'bizpro-agency' ); ?></option>
				</select>
			</div>
			<button type="submit" class="btn btn--primary" style="min-height:48px;border:0;cursor:pointer;"><?php esc_html_e( 'Search Pathways', 'bizpro-agency' ); ?></button>
			<p id="bpa-visa-results" role="status" aria-live="polite" style="grid-column:1/-1;margin:0;color:#475569;font-size:.9rem;"><?php esc_html_e( 'Browse available destination pathways below.', 'bizpro-agency' ); ?></p>
		</form>

		<p style="margin:0 0 24px;color:#64748b;font-size:.9rem;"><?php esc_html_e( 'Visa eligibility and processing times depend on individual circumstances and current government rules. Contact our registered specialists for an assessment.', 'bizpro-agency' ); ?></p>

		<div class="bpa-visa-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">

			<?php
			if ( $bpa_pathways_query->have_posts() ) :
				while ( $bpa_pathways_query->have_posts() ) :
					$bpa_pathways_query->the_post();

					$flag      = get_post_meta( get_the_ID(), '_bpa_flag_emoji', true );
					$code      = get_post_meta( get_the_ID(), '_bpa_country_code', true );
					$badge     = get_post_meta( get_the_ID(), '_bpa_badge_text', true );
					$proc_time = get_post_meta( get_the_ID(), '_bpa_processing_time', true );
					$rate      = get_post_meta( get_the_ID(), '_bpa_success_rate', true );
					$apply_url = get_post_meta( get_the_ID(), '_bpa_apply_url', true );

					if ( ! $flag ) { $flag = '🌐'; }
					if ( ! $code ) { $code = 'other'; }
					if ( ! $apply_url ) { $apply_url = home_url( '/contact/' ); }

					// Fetch categories for filtering
					$terms = wp_get_post_terms( get_the_ID(), 'bpa_visa_category', array( 'fields' => 'slugs' ) );
					$data_types = ! empty( $terms ) && ! is_wp_error( $terms ) ? implode( ',', $terms ) : 'permanent,work';
					?>
					<div class="visa-country-card" data-country="<?php echo esc_attr( $code ); ?>" data-types="<?php echo esc_attr( $data_types ); ?>" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between;">
						<div>
							<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
								<span style="font-size: 32px;"><?php echo esc_html( $flag ); ?></span>
								<?php if ( $badge ) : ?>
									<span style="background: #eff6ff; color: #1e40af; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">
										<?php echo esc_html( $badge ); ?>
									</span>
								<?php endif; ?>
							</div>
							<h3 style="font-size: 1.3rem; font-weight: 800; color: var(--bpa-text, #0f172a); margin: 0 0 10px; line-height: 1.3;">
								<?php the_title(); ?>
							</h3>
							<div style="color: var(--bpa-text-muted, #64748b); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">
								<?php the_excerpt(); ?>
							</div>
						</div>
						<div style="border-top: 1px solid var(--bpa-border, #f1f5f9); padding-top: 16px; display: flex; justify-content: space-between; align-items: center;">
							<span style="font-size: 0.85rem; color: #0284c7; font-weight: 700;">
								⏱️ <?php echo esc_html( $proc_time ? $proc_time : __( 'Processing time varies', 'bizpro-agency' ) ); ?>
							</span>
							<a href="<?php echo esc_url( $apply_url ); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none;">
								<?php esc_html_e( 'Apply Now →', 'bizpro-agency' ); ?>
							</a>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				// Fallback starter cards if query is empty
				?>
				<div class="visa-country-card" data-country="canada" data-types="permanent,work,study" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
					<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
						<span style="font-size: 32px;">🇨🇦</span>
						<span style="background: #fef2f2; color: #991b1b; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">Express Entry & PNP</span>
					</div>
					<h3 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0 0 8px;">Canada Permanent Residency</h3>
					<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Federal Skilled Worker, Canadian Experience Class and Provincial Nominee streams with complete CRS audits.</p>
					<div style="border-top: 1px solid #f1f5f9; padding-top: 16px; display: flex; justify-content: space-between; align-items: center;">
						<span style="font-size: 0.85rem; color: #0284c7; font-weight: 700;">⏱️ 6 - 8 Months</span>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none;">Apply Now →</a>
					</div>
				</div>

				<div class="visa-country-card" data-country="uk" data-types="work,study" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
					<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
						<span style="font-size: 32px;">🇬🇧</span>
						<span style="background: #eff6ff; color: #1e40af; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">Skilled Worker & Tech</span>
					</div>
					<h3 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0 0 8px;">United Kingdom Work Visa</h3>
					<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Sponsorship license matching, Global Talent endorsement and Indefinite Leave to Remain (ILR) pathways.</p>
					<div style="border-top: 1px solid #f1f5f9; padding-top: 16px; display: flex; justify-content: space-between; align-items: center;">
						<span style="font-size: 0.85rem; color: #0284c7; font-weight: 700;">⏱️ 3 - 6 Weeks</span>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none;">Apply Now →</a>
					</div>
				</div>

				<div class="visa-country-card" data-country="australia" data-types="permanent,work" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
					<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
						<span style="font-size: 32px;">🇦🇺</span>
						<span style="background: #ecfdf5; color: #065f46; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">Subclass 189 / 190</span>
					</div>
					<h3 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0 0 8px;">Australia General Skilled Migration</h3>
					<p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Skills assessment verification, Expression of Interest (EOI) filing and regional nomination support.</p>
					<div style="border-top: 1px solid #f1f5f9; padding-top: 16px; display: flex; justify-content: space-between; align-items: center;">
						<span style="font-size: 0.85rem; color: #0284c7; font-weight: 700;">⏱️ 7 - 9 Months</span>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none;">Apply Now →</a>
					</div>
				</div>
			<?php endif; ?>

		</div>

	</div>

</main>

<?php
get_footer();
