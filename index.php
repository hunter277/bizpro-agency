<?php
/**
 * The main template file (blog, archives, search and 404 fallback).
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">

	<header class="page-header">
		<div class="container">
			<?php if ( is_search() ) : ?>
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search results for: %s', 'bizpro-agency' ), '<span>' . esc_html( get_search_query() ) . '</span>' );
					?>
				</h1>
			<?php elseif ( is_archive() ) : ?>
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				<?php the_archive_description( '<div class="page-description">', '</div>' ); ?>
			<?php elseif ( is_home() && ! is_front_page() ) : ?>
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			<?php elseif ( is_404() ) : ?>
				<h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'bizpro-agency' ); ?></h1>
			<?php else : ?>
				<h1 class="page-title"><?php esc_html_e( 'Latest News', 'bizpro-agency' ); ?></h1>
			<?php endif; ?>
		</div>
	</header>

	<div class="container section">
		<?php if ( have_posts() ) : ?>

			<div class="posts-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="post-card__thumb" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
								<?php the_post_thumbnail( 'bizpro-agency-card', array( 'loading' => 'lazy' ) ); ?>
							</a>
						<?php endif; ?>

						<div class="post-card__body">
							<div class="entry-meta">
								<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
							</div>
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<div class="entry-summary">
								<?php the_excerpt(); ?>
							</div>
							<a class="post-card__more" href="<?php the_permalink(); ?>">
								<?php esc_html_e( 'Read More', 'bizpro-agency' ); ?>
								<span class="screen-reader-text"><?php the_title(); ?></span>
							</a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<?php
			the_posts_pagination(
				array(
					'mid_size'  => 2,
					'prev_text' => esc_html__( 'Previous', 'bizpro-agency' ),
					'next_text' => esc_html__( 'Next', 'bizpro-agency' ),
				)
			);
			?>

		<?php else : ?>

			<section class="no-results">
				<p>
					<?php
					if ( is_search() ) {
						esc_html_e( 'Sorry, nothing matched your search. Please try again with different keywords.', 'bizpro-agency' );
					} else {
						esc_html_e( 'Nothing was found here. Try searching, or return to the home page.', 'bizpro-agency' );
					}
					?>
				</p>
				<?php get_search_form(); ?>
				<p><a class="btn btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'bizpro-agency' ); ?></a></p>
			</section>

		<?php endif; ?>
	</div>

</main><!-- #primary -->

<?php
get_footer();
