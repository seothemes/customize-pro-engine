<?php
/**
 * Customize Pro.
 *
 * WARNING: This file should never be modified under any circumstances.
 * Customizations should be made in the form of a core-functionality
 * plugin so that the theme can be updated without losing changes.
 *
 * @package   CustomizePro
 * @author    SEO Themes
 * @copyright 2019 SEO Themes
 * @license   GPL-2.0-or-later
 */

namespace CustomizePro;

// Enable singular images.
\add_post_type_support( 'post', 'genesis-singular-images' );
\add_post_type_support( 'page', 'genesis-singular-images' );
\add_post_type_support( 'portfolio', 'genesis-singular-images' );
\add_post_type_support( 'product', 'genesis-singular-images' );

\add_action( 'genesis_before', __NAMESPACE__ . '\single_setup', 15 );
/**
 * Add hooks to single pages.
 *
 * @since 1.0.0
 *
 * @return void
 */
function single_setup() {
	if ( ! _is_single() ) {
		return;
	}

	\add_filter( 'genesis_author_box_title', __NAMESPACE__ . '\author_box_title', 10, 2 );
	\add_filter( 'genesis_post_info', __NAMESPACE__ . '\single_post_info' );
	\add_filter( 'genesis_post_meta', __NAMESPACE__ . '\single_post_meta' );

	if ( \is_singular() && \post_type_supports( \get_post_type(), 'genesis-singular-images' ) ) {
		$hook = _get_value( 'single_featured-image_position' );

		\remove_action( 'genesis_entry_content', 'genesis_do_singular_image', 8 );
		\add_action( $hook, 'genesis_do_singular_image' );
	}
}

/**
 * Modify author box title text.
 *
 * @since 1.0.0
 *
 * @param string $title   Author box title.
 * @param string $context Author box context.
 *
 * @return mixed
 */
function author_box_title( $title, $context ) {
	$author_box_title = _get_value( 'content_author-box_title' );

	if ( '' !== $author_box_title ) {
		$title = $author_box_title;
	}

	return $title;
}

/**
 * Modify the post info.
 *
 * @since 1.0.0
 *
 * @return string
 */
function single_post_info() {
	$text = _get_value( 'single_post-meta_post-info' );

	return \do_shortcode( $text );
}

/**
 * Modify the post meta.
 *
 * @since 1.0.0
 *
 * @return string
 */
function single_post_meta() {
	$text = _get_value( 'single_post-meta_post-meta' );

	return \do_shortcode( $text );
}

\add_action( 'genesis_meta', __NAMESPACE__ . '\hide_page_title' );
/**
 * Hide page title if page setting is checked.
 *
 * @since 1.0.0
 *
 * @return void
 */
function hide_page_title() {
	if ( \get_post_meta( \get_the_ID(), 'title_disabled', true ) ) {
		\remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
	}
}
