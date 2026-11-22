<?php
/**
 * The template for displaying pages.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * ----------------------------------------------------------------
 * STEP 1 — Elementor builder pass-through (must come first).
 * ----------------------------------------------------------------
 */
if ( bizpro_agency_is_elementor() ) {
	get_header();
	?>
	<main id="primary" class="site-main site-main--builder">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
		?>
	</main>
	<?php
	get_footer();
	return;
}

/*
 * ----------------------------------------------------------------
 * STEP 3 — Normal WordPress page output (for real content pages).
 * ----------------------------------------------------------------
 */
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
			</div>
		</header>

		<div class="container section">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--page' ); ?>>

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

				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
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
				<?php endif; ?>

			</article>

			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		</div>

	<?php endwhile; ?>

</main>

<?php
get_footer();
