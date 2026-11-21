<?php
/**
 * The template for displaying single posts.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<header class="page-header">
			<div class="container">
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
				<div class="entry-meta">
					<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
					<span class="entry-meta__sep" aria-hidden="true">&middot;</span>
					<span class="entry-meta__author">
						<?php esc_html_e( 'By', 'bizpro-agency' ); ?>
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a>
					</span>
					<?php if ( has_category() ) : ?>
						<span class="entry-meta__sep" aria-hidden="true">&middot;</span>
						<span class="entry-meta__cats"><?php the_category( ', ' ); ?></span>
					<?php endif; ?>
				</div>
			</div>
		</header>

		<div class="container section">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--single' ); ?>>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">
						<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>

				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'bizpro-agency' ) . '"><span class="page-links__label">' . esc_html__( 'Pages:', 'bizpro-agency' ) . '</span>',
							'after'  => '</nav>',
						)
					);
					?>
				</div>

				<footer class="entry-footer">
					<?php if ( has_tag() ) : ?>
						<div class="entry-tags">
							<?php the_tags( '<span class="entry-tags__label">' . esc_html__( 'Tags:', 'bizpro-agency' ) . '</span> ', ', ', '' ); ?>
						</div>
					<?php endif; ?>
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: post title. */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'bizpro-agency' ),
								array( 'span' => array( 'class' => array() ) )
							),
							wp_kses_post( get_the_title() )
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer>

			</article>

			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'bizpro-agency' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'bizpro-agency' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		</div>

	<?php endwhile; ?>

</main><!-- #primary -->

<?php
get_footer();
