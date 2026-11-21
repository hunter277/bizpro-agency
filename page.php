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
 * STEP 2 — Slug-based demo routing.
 *
 * We read $post->post_content DIRECTLY (not via get_the_content()
 * which requires the loop to be running) so the check is reliable.
 * If a page has an empty post_content we show the matching demo template.
 * ----------------------------------------------------------------
 */
global $post;

if ( $post ) {
	$bpa_slug    = $post->post_name;
	$bpa_content = trim( wp_strip_all_tags( $post->post_content ) );

	// --- Homepage / Agency Default ---
	if (
		empty( $bpa_content ) &&
		(
			'home'           === $bpa_slug ||
			'agency-default' === $bpa_slug ||
			( strlen( $bpa_slug ) > 5 && substr( $bpa_slug, 0, 5 ) === 'home-' )
		)
	) {
		$tpl = get_template_directory() . '/template-homepage-default.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Visa & Immigration ---
	if ( empty( $bpa_content ) && false !== strpos( $bpa_slug, 'visa' ) ) {
		$tpl = get_template_directory() . '/template-homepage-visa.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Travel Agency ---
	if ( empty( $bpa_content ) && false !== strpos( $bpa_slug, 'travel' ) ) {
		$tpl = get_template_directory() . '/template-homepage-travel.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- IT Solutions ---
	if (
		empty( $bpa_content ) &&
		( false !== strpos( $bpa_slug, 'it-' ) || 'it' === $bpa_slug )
	) {
		$tpl = get_template_directory() . '/template-homepage-it.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Business Consulting ---
	if ( empty( $bpa_content ) && false !== strpos( $bpa_slug, 'consulting' ) ) {
		$tpl = get_template_directory() . '/template-homepage-consulting.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Corporate ---
	if ( empty( $bpa_content ) && false !== strpos( $bpa_slug, 'corporate' ) ) {
		$tpl = get_template_directory() . '/template-homepage-corporate.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Contact Us ---
	if ( empty( $bpa_content ) && false !== strpos( $bpa_slug, 'contact' ) ) {
		$tpl = get_template_directory() . '/template-contact.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- About Us ---
	if ( empty( $bpa_content ) && ( false !== strpos( $bpa_slug, 'about' ) || 'about-us' === $bpa_slug ) ) {
		$tpl = get_template_directory() . '/template-about.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Services ---
	if ( empty( $bpa_content ) && ( false !== strpos( $bpa_slug, 'service' ) || 'what-we-do' === $bpa_slug ) ) {
		$tpl = get_template_directory() . '/template-services.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}
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
