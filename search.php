<?php
/**
 * The template for displaying search results pages.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--search">

	<header class="page-header" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 70px 0 60px; text-align: center;">
		<div class="container">
			<span style="display: inline-block; font-size: 0.85rem; font-weight: 700; color: #38bdf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;"><?php esc_html_e( 'Search Results', 'bizpro-agency' ); ?></span>
			<h1 class="page-title" style="font-size: clamp(2rem, 4vw, 3rem); color: #ffffff; margin-bottom: 16px;">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search for: "%s"', 'bizpro-agency' ), '<span style="color: #60a5fa;">' . esc_html( get_search_query() ) . '</span>' );
				?>
			</h1>
			<p style="color: #94a3b8; font-size: 1.05rem; margin: 0;">
				<?php
				global $wp_query;
				printf( esc_html( _n( '%d result found', '%d results found', (int) $wp_query->found_posts, 'bizpro-agency' ) ), (int) $wp_query->found_posts );
				?>
			</p>
		</div>
	</header>

	<div class="container section" style="padding: 70px 0;">
		<?php if ( have_posts() ) : ?>
			<div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?> style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 28px; box-shadow: 0 10px 25px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between;">
						<div>
							<div style="font-size: 0.82rem; color: #2563eb; font-weight: 700; text-transform: uppercase; margin-bottom: 8px;">
								<?php echo esc_html( get_post_type() ); ?>
							</div>
							<h2 style="font-size: 1.35rem; font-weight: 800; margin: 0 0 12px; line-height: 1.3;">
								<a href="<?php the_permalink(); ?>" style="color: var(--bpa-text, #0f172a); text-decoration: none;">
									<?php the_title(); ?>
								</a>
							</h2>
							<div style="color: var(--bpa-text-muted, #64748b); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">
								<?php the_excerpt(); ?>
							</div>
						</div>
						<a href="<?php the_permalink(); ?>" style="color: #2563eb; font-weight: 700; text-decoration: none; font-size: 0.95rem; display: inline-flex; align-items: center; gap: 6px;">
							<?php esc_html_e( 'Read More', 'bizpro-agency' ); ?> <span>→</span>
						</a>
					</article>
				<?php endwhile; ?>
			</div>

			<div style="margin-top: 50px; text-align: center;">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else : ?>
			<div style="text-align: center; max-width: 550px; margin: 40px auto;">
				<div style="font-size: 48px; margin-bottom: 16px;">🔍</div>
				<h2 style="font-size: 1.6rem; color: #0f172a;"><?php esc_html_e( 'Nothing Found', 'bizpro-agency' ); ?></h2>
				<p style="color: #64748b;"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bizpro-agency' ); ?></p>
			</div>
		<?php endif; ?>
	</div>

</main>

<?php
get_footer();
