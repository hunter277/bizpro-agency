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
 * STEP 2 — Universal Template & Demo Routing
 *
 * 1. Honors explicit Page Template selected in WP Admin.
 * 2. If viewing a standard slug (Contact, About, Services, Privacy,
 *    Terms, Disclaimer, or any Niche Demo), loads the rich commercial template.
 * ----------------------------------------------------------------
 */
$bpa_current_tpl = get_page_template_slug();
if ( $bpa_current_tpl && 'default' !== $bpa_current_tpl && file_exists( get_template_directory() . '/' . $bpa_current_tpl ) ) {
	include get_template_directory() . '/' . $bpa_current_tpl;
	return;
}

global $post;
if ( $post ) {
	$bpa_slug    = $post->post_name;
	$bpa_content = trim( wp_strip_all_tags( $post->post_content ) );
	// If content is empty or contains standard XML placeholder demo markup
	$is_placeholder = empty( $bpa_content ) || false !== strpos( $post->post_content, 'bpa-demo-page' ) || strlen( $bpa_content ) < 180;

	// --- Privacy Policy (AdSense Critical) ---
	if ( false !== strpos( $bpa_slug, 'privacy' ) ) {
		$tpl = get_template_directory() . '/template-privacy-policy.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Terms & Conditions ---
	if ( false !== strpos( $bpa_slug, 'terms' ) || false !== strpos( $bpa_slug, 'condition' ) ) {
		$tpl = get_template_directory() . '/template-terms-conditions.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Disclaimer ---
	if ( false !== strpos( $bpa_slug, 'disclaimer' ) ) {
		$tpl = get_template_directory() . '/template-disclaimer.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

		// --- Pricing ---
	if ( false !== strpos( $bpa_slug, 'pricing' ) || false !== strpos( $bpa_slug, 'plan' ) ) {
		$tpl = get_template_directory() . '/template-pricing.php';
		if ( file_exists( $tpl ) ) { include $tpl; return; }
	}

	// --- FAQ ---
	if ( false !== strpos( $bpa_slug, 'faq' ) || false !== strpos( $bpa_slug, 'help' ) ) {
		$tpl = get_template_directory() . '/template-faq.php';
		if ( file_exists( $tpl ) ) { include $tpl; return; }
	}

	// --- Case Studies & Portfolio ---
	if ( false !== strpos( $bpa_slug, 'case' ) || false !== strpos( $bpa_slug, 'portfolio' ) || false !== strpos( $bpa_slug, 'project' ) ) {
		$tpl = get_template_directory() . '/template-case-studies.php';
		if ( file_exists( $tpl ) ) { include $tpl; return; }
	}

	// --- Team & Leadership ---
	if ( false !== strpos( $bpa_slug, 'team' ) || false !== strpos( $bpa_slug, 'leader' ) ) {
		$tpl = get_template_directory() . '/template-team.php';
		if ( file_exists( $tpl ) ) { include $tpl; return; }
	}

	// --- Coming Soon ---
	if ( false !== strpos( $bpa_slug, 'coming' ) || false !== strpos( $bpa_slug, 'maintenance' ) ) {
		$tpl = get_template_directory() . '/template-coming-soon.php';
		if ( file_exists( $tpl ) ) { include $tpl; return; }
	}

	// --- Visa Search & Directory ---
	if ( false !== strpos( $bpa_slug, 'visa-search' ) || false !== strpos( $bpa_slug, 'country' ) ) {
		$tpl = get_template_directory() . '/template-visa-search.php';
		if ( file_exists( $tpl ) ) { include $tpl; return; }
	}

	// --- Tour Packages ---
	if ( false !== strpos( $bpa_slug, 'tour-packages' ) || false !== strpos( $bpa_slug, 'package' ) ) {
		$tpl = get_template_directory() . '/template-tour-packages.php';
		if ( file_exists( $tpl ) ) { include $tpl; return; }
	}

	// --- Contact Us ---
	if ( false !== strpos( $bpa_slug, 'contact' ) ) {
		$tpl = get_template_directory() . '/template-contact.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- About Us ---
	if ( $is_placeholder && ( false !== strpos( $bpa_slug, 'about' ) || 'about-us' === $bpa_slug ) ) {
		$tpl = get_template_directory() . '/template-about.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Services ---
	if ( $is_placeholder && ( false !== strpos( $bpa_slug, 'service' ) || 'what-we-do' === $bpa_slug ) ) {
		$tpl = get_template_directory() . '/template-services.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Visa & Immigration ---
	if ( $is_placeholder && false !== strpos( $bpa_slug, 'visa' ) ) {
		$tpl = get_template_directory() . '/template-homepage-visa.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Travel Agency ---
	if ( $is_placeholder && false !== strpos( $bpa_slug, 'travel' ) ) {
		$tpl = get_template_directory() . '/template-homepage-travel.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- IT Solutions ---
	if ( $is_placeholder && ( false !== strpos( $bpa_slug, 'it-' ) || 'it' === $bpa_slug || 'it-solutions' === $bpa_slug ) ) {
		$tpl = get_template_directory() . '/template-homepage-it.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Business Consulting ---
	if ( $is_placeholder && false !== strpos( $bpa_slug, 'consulting' ) ) {
		$tpl = get_template_directory() . '/template-homepage-consulting.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

		// --- Digital Products & SaaS Store ---
	if ( $is_placeholder && ( false !== strpos( $bpa_slug, 'digital' ) || false !== strpos( $bpa_slug, 'saas' ) || false !== strpos( $bpa_slug, 'store' ) ) ) {
		$tpl = get_template_directory() . '/template-homepage-digital.php';
		if ( file_exists( $tpl ) ) {
			include $tpl;
			return;
		}
	}

	// --- Corporate ---
	if ( $is_placeholder && false !== strpos( $bpa_slug, 'corporate' ) ) {
		$tpl = get_template_directory() . '/template-homepage-corporate.php';
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
