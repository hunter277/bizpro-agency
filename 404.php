<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--404" style="min-height: 70vh; display: flex; align-items: center; justify-content: center; padding: 90px 0; background: radial-gradient(circle at 50% 20%, #1e1b4b 0%, #0f172a 70%, #090d16 100%); color: #ffffff; text-align: center;">
	<div class="container" style="max-width: 700px; margin: 0 auto;">
		
		<div style="font-size: clamp(6rem, 15vw, 10rem); font-weight: 900; line-height: 1; color: transparent; background: linear-gradient(135deg, #6366f1 0%, #38bdf8 100%); -webkit-background-clip: text; background-clip: text; margin-bottom: 20px; letter-spacing: -0.04em;">
			404
		</div>

		<h1 style="font-size: clamp(1.8rem, 4vw, 2.6rem); font-weight: 800; color: #ffffff; margin-bottom: 16px;">
			<?php esc_html_e( 'Oops! That Page Cannot Be Found', 'bizpro-agency' ); ?>
		</h1>

		<p style="color: #94a3b8; font-size: 1.15rem; line-height: 1.6; margin-bottom: 36px;">
			<?php esc_html_e( 'The page you are looking for might have been moved, renamed, or is temporarily unavailable. Try searching below or return to our homepage.', 'bizpro-agency' ); ?>
		</p>

		<div style="max-width: 480px; margin: 0 auto 40px;">
			<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: flex; gap: 8px;">
				<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search our entire site...', 'bizpro-agency' ); ?>" value="<?php echo get_search_query(); ?>" name="s" style="flex: 1; padding: 14px 18px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.06); color: #fff; font-size: 1rem;" required>
				<button type="submit" class="search-submit btn btn--primary" style="padding: 14px 24px; border-radius: 12px; background: #6366f1; border-color: #6366f1; color: #fff; font-weight: 700;">
					<?php esc_html_e( 'Search', 'bizpro-agency' ); ?>
				</button>
			</form>
		</div>

		<div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary" style="background: #2563eb; border-color: #2563eb; color: #ffffff; font-weight: 700; padding: 12px 28px; border-radius: 10px; text-decoration: none;">
				<?php esc_html_e( 'Back to Homepage', 'bizpro-agency' ); ?>
			</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.2); color: #ffffff; font-weight: 600; padding: 12px 24px; border-radius: 10px; text-decoration: none;">
				<?php esc_html_e( 'Contact Support', 'bizpro-agency' ); ?>
			</a>
		</div>

	</div>
</main>

<?php
get_footer();
