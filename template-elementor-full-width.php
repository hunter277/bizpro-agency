<?php
/**
 * Template Name: Elementor Full Width (Page Builder)
 *
 * Full-width canvas suitable for Elementor, Beaver Builder, and block builders.
 * Leaves header and footer intact, but removes default containers and titles.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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
