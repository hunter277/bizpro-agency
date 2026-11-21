<?php
/**
 * Breadcrumbs navigation with Schema.org Microdata.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output breadcrumb navigation.
 */
function bizpro_agency_breadcrumbs() {
	if ( is_front_page() ) {
		return;
	}

	echo '<nav class="bpa-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumbs', 'bizpro-agency' ) . '">';
	echo '<div class="container">';
	echo '<ol class="bpa-breadcrumbs__list" itemscope itemtype="https://schema.org/BreadcrumbList">';

	// Home
	echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
	echo '<a itemprop="item" href="' . esc_url( home_url( '/' ) ) . '"><span itemprop="name">' . esc_html__( 'Home', 'bizpro-agency' ) . '</span></a>';
	echo '<meta itemprop="position" content="1" />';
	echo '</li>';

	$position = 2;

	if ( is_singular( 'post' ) ) {
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
			$category = $categories[0];
			echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
			echo '<a itemprop="item" href="' . esc_url( get_category_link( $category->term_id ) ) . '"><span itemprop="name">' . esc_html( $category->name ) . '</span></a>';
			echo '<meta itemprop="position" content="' . esc_attr( $position ) . '" />';
			echo '</li>';
			$position++;
		}
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="is-active">';
		echo '<span itemprop="name">' . esc_html( get_the_title() ) . '</span>';
		echo '<meta itemprop="position" content="' . esc_attr( $position ) . '" />';
		echo '</li>';
	} elseif ( is_page() ) {
		global $post;
		if ( $post->post_parent ) {
			$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
			foreach ( $ancestors as $ancestor ) {
				echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
				echo '<a itemprop="item" href="' . esc_url( get_permalink( $ancestor ) ) . '"><span itemprop="name">' . esc_html( get_the_title( $ancestor ) ) . '</span></a>';
				echo '<meta itemprop="position" content="' . esc_attr( $position ) . '" />';
				echo '</li>';
				$position++;
			}
		}
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="is-active">';
		echo '<span itemprop="name">' . esc_html( get_the_title() ) . '</span>';
		echo '<meta itemprop="position" content="' . esc_attr( $position ) . '" />';
		echo '</li>';
	} elseif ( is_category() ) {
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="is-active">';
		echo '<span itemprop="name">' . esc_html( single_cat_title( '', false ) ) . '</span>';
		echo '<meta itemprop="position" content="' . esc_attr( $position ) . '" />';
		echo '</li>';
	} elseif ( is_search() ) {
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="is-active">';
		echo '<span itemprop="name">' . sprintf( esc_html__( 'Search: %s', 'bizpro-agency' ), esc_html( get_search_query() ) ) . '</span>';
		echo '<meta itemprop="position" content="' . esc_attr( $position ) . '" />';
		echo '</li>';
	} elseif ( is_404() ) {
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="is-active">';
		echo '<span itemprop="name">' . esc_html__( '404 - Not Found', 'bizpro-agency' ) . '</span>';
		echo '<meta itemprop="position" content="' . esc_attr( $position ) . '" />';
		echo '</li>';
	}

	echo '</ol>';
	echo '</div>';
	echo '</nav>';
}
