<?php
/**
 * Template Name: Tour Packages & Holiday Destinations
 *
 * Curated tour packages, itineraries, and booking inquiries.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--tours">

	<header class="page-header" style="background: linear-gradient(135deg, #064e3b 0%, #065f46 60%, #047857 100%); color: #ffffff; padding: 80px 0 70px; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #a7f3d0; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Handcrafted Holiday Itineraries', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2.2rem, 5vw, 3.6rem); color: #ffffff; margin-bottom: 16px;"><?php esc_html_e( 'Featured International Tour Packages', 'bizpro-agency' ); ?></h1>
			<p style="max-width: 650px; margin: 0 auto; color: #d1fae5; font-size: 1.15rem; line-height: 1.6;"><?php esc_html_e( 'All-inclusive premium vacation packages with certified guides, 5-star hotel accommodations, and private airport transfers.', 'bizpro-agency' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding-block: 70px;">
		
		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
			
			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
				<div style="background: #047857; color: #fff; padding: 24px; text-align: center;">
					<span style="font-size: 40px;">🏝️</span>
					<h3 style="font-size: 1.4rem; font-weight: 800; margin: 8px 0 4px; color: #fff;"><?php esc_html_e( 'Bali Island Luxury Escape', 'bizpro-agency' ); ?></h3>
					<span><?php esc_html_e( '7 Days / 6 Nights All-Inclusive', 'bizpro-agency' ); ?></span>
				</div>
				<div style="padding: 24px;">
					<div style="font-size: 2rem; font-weight: 900; color: #047857; margin-bottom: 14px;">$1,299 <span style="font-size: 0.9rem; color: #64748b; font-weight: 500;"><?php esc_html_e( '/ person', 'bizpro-agency' ); ?></span></div>
					<ul style="list-style: none; padding: 0; line-height: 2; color: #334155; font-size: 0.95rem; margin-bottom: 24px;">
						<li><?php esc_html_e( '✅ 5-Star Private Pool Villa', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '✅ Daily Gourmet Breakfast & Dinners', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '✅ Nusa Penida Yacht Excursion', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '✅ VIP Airport Fast-Track Transfer', 'bizpro-agency' ); ?></li>
					</ul>
					<a href="<?php echo esc_url( add_query_arg( wp_parse_args( 'tour=bali' ), bizpro_agency_page_url( 'contact' ) ) ); ?>" class="btn" style="display: block; text-align: center; background: #047857; color: #fff; font-weight: 700; padding: 12px; border-radius: 10px; text-decoration: none;"><?php esc_html_e( 'Book Bali Tour Now', 'bizpro-agency' ); ?></a>
				</div>
			</div>

			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
				<div style="background: #0f766e; color: #fff; padding: 24px; text-align: center;">
					<span style="font-size: 40px;">🏔️</span>
					<h3 style="font-size: 1.4rem; font-weight: 800; margin: 8px 0 4px; color: #fff;"><?php esc_html_e( 'Swiss Alps Scenic Adventure', 'bizpro-agency' ); ?></h3>
					<span><?php esc_html_e( '10 Days / 9 Nights Panoramic Rail', 'bizpro-agency' ); ?></span>
				</div>
				<div style="padding: 24px;">
					<div style="font-size: 2rem; font-weight: 900; color: #0f766e; margin-bottom: 14px;">$2,450 <span style="font-size: 0.9rem; color: #64748b; font-weight: 500;"><?php esc_html_e( '/ person', 'bizpro-agency' ); ?></span></div>
					<ul style="list-style: none; padding: 0; line-height: 2; color: #334155; font-size: 0.95rem; margin-bottom: 24px;">
						<li><?php esc_html_e( '✅ Glacier Express 1st Class Pass', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '✅ Zermatt & Matterhorn Glacier Ride', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '✅ Luxury Boutique Alpine Chalets', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '✅ English Certified Mountain Guide', 'bizpro-agency' ); ?></li>
					</ul>
					<a href="<?php echo esc_url( add_query_arg( wp_parse_args( 'tour=swiss' ), bizpro_agency_page_url( 'contact' ) ) ); ?>" class="btn" style="display: block; text-align: center; background: #0f766e; color: #fff; font-weight: 700; padding: 12px; border-radius: 10px; text-decoration: none;"><?php esc_html_e( 'Book Swiss Tour Now', 'bizpro-agency' ); ?></a>
				</div>
			</div>

			<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
				<div style="background: #0369a1; color: #fff; padding: 24px; text-align: center;">
					<span style="font-size: 40px;">🌊</span>
					<h3 style="font-size: 1.4rem; font-weight: 800; margin: 8px 0 4px; color: #fff;"><?php esc_html_e( 'Maldives Ocean Overwater Villa', 'bizpro-agency' ); ?></h3>
					<span><?php esc_html_e( '6 Days / 5 Nights Honeymoon Special', 'bizpro-agency' ); ?></span>
				</div>
				<div style="padding: 24px;">
					<div style="font-size: 2rem; font-weight: 900; color: #0369a1; margin-bottom: 14px;">$3,190 <span style="font-size: 0.9rem; color: #64748b; font-weight: 500;"><?php esc_html_e( '/ couple', 'bizpro-agency' ); ?></span></div>
					<ul style="list-style: none; padding: 0; line-height: 2; color: #334155; font-size: 0.95rem; margin-bottom: 24px;">
						<li><?php esc_html_e( '✅ Sunset Water Villa with Slide', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '✅ Seaplane Roundtrip Included', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '✅ Dolphin Cruise & Coral Snorkeling', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '✅ Candlelight Beach Dining Experience', 'bizpro-agency' ); ?></li>
					</ul>
					<a href="<?php echo esc_url( add_query_arg( wp_parse_args( 'tour=maldives' ), bizpro_agency_page_url( 'contact' ) ) ); ?>" class="btn" style="display: block; text-align: center; background: #0369a1; color: #fff; font-weight: 700; padding: 12px; border-radius: 10px; text-decoration: none;"><?php esc_html_e( 'Book Maldives Tour Now', 'bizpro-agency' ); ?></a>
				</div>
			</div>

		</div>

	</div>

</main>

<?php
get_footer();
