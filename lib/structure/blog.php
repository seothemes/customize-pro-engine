<?php
/**
 * Customize Pro.
 *
 * WARNING: This file should never be modified under any circumstances.
 * Customizations should be made in the form of a core-functionality
 * plugin so that the theme can be updated without losing changes.
 *
 * @package   CustomizeProPro
 * @author    SEO Themes
 * @copyright 2019 SEO Themes
 * @license   GPL-2.0-or-later
 */

namespace CustomizePro;

\add_action( 'genesis_meta', __NAMESPACE__ . '\blog_setup', 15 );
/**
 * Sets up the blog layout settings.
 *
 * @since 1.0.0
 *
 * @return void
 */
function blog_setup() {
	if ( ! _is_archive() ) {
		return;
	}

	\add_action( 'genesis_after_header', __NAMESPACE__ . '\remove_entry_elements' );
	\add_action( 'genesis_entry_header', __NAMESPACE__ . '\add_entry_elements' );
	\add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\load_isotope' );
	\add_action( 'genesis_after_header', __NAMESPACE__ . '\add_masonry_wrap' );
	\add_filter( 'genesis_attr_entry', __NAMESPACE__ . '\featured_image_first' );
	\add_filter( 'genesis_attr_entry-image-link', __NAMESPACE__ . '\featured_image_spacing' );
}

/**
 * Removes entry elements.
 *
 * @since 1.0.0
 *
 * @return void
 */
function remove_entry_elements() {
	\remove_action( 'genesis_entry_header', 'genesis_do_post_format_image', 4 );
	\remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
	\remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
	\remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
	\remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
	\remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
	\remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
	\remove_action( 'genesis_entry_content', 'genesis_do_post_content_nav', 12 );
	\remove_action( 'genesis_entry_content', 'genesis_do_post_permalink', 14 );
	\remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
	\remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
	\remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
	\add_filter( 'genesis_markup_entry-content_open', '__return_false' );
	\add_filter( 'genesis_markup_entry-content_close', '__return_false' );
}

/**
 * Adds ordered entry elements.
 *
 * @since 1.0.0
 *
 * @return void
 */
function add_entry_elements() {
	$elements = _get_value( 'archive_blog-layout_order' );

	foreach ( $elements as $element ) {
		if ( 'genesis_do_post_content' === $element ) {
			\printf( '<div %s>', \esc_attr( \genesis_attr( 'entry-content' ) ) );
		}

		$element();

		if ( 'genesis_do_post_content' === $element ) {
			printf( '</div>' );
		}
	}
}

/**
 * Displays the featured image.
 *
 * @since 1.0.0
 *
 * @param array $atts Featured image attributes.
 *
 * @return mixed
 */
function featured_image_first( $atts ) {
	$order = _get_value( 'archive_blog-layout_order' );

	if ( isset( $order[0] ) && 'genesis_do_post_image' === $order[0] ) {
		$atts['class'] .= ' featured-image-first';
	}

	return $atts;
}

/**
 * Adds featured image spacing to link.
 *
 * @since 1.0.0
 *
 * @param array $atts Featured image link attributes.
 *
 * @return array
 */
function featured_image_spacing( $atts ) {
	$spacing = _get_value( 'archive_blog-layout_featured-image-spacing' );

	if ( $spacing ) {
		$atts['class'] .= ' no-spacing';
	}

	return $atts;
}

/**
 * Loads masonry script.
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_isotope() {
	if ( ! _get_value( 'archive_blog-layout_masonry' ) ) {
		return;
	}

	$handle = _get_handle() . '-isotope';

	\wp_register_script(
		$handle,
		_get_url() . 'assets/js/min/isotope.min.js',
		[ 'jquery', 'customize-pro' ],
		_get_asset_version( 'js/min/isotope.min.js' ),
		true
	);
	\wp_enqueue_script( $handle );

	\wp_localize_script(
		$handle,
		'customize_pro_isotope',
		[
			'gutter' => _get_value( 'base_global_gutter' ),
		]
	);
}

/**
 * Adds masonry blog markup.
 *
 * @since 1.0.0
 *
 * @return void
 */
function add_masonry_wrap() {
	if ( ! _get_value( 'archive_blog-layout_masonry' ) ) {
		return;
	}

	\add_action(
		'genesis_before_loop',
		function () {
			echo '<div class="masonry">';
		},
		20
	);

	\add_action(
		'genesis_after_endwhile',
		function () {
			echo '</div>';
		},
		20
	);

	\remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );
	\add_action( 'genesis_after_endwhile', 'genesis_posts_nav', 100 );

	\remove_action( 'genesis_before_loop', 'genesis_do_author_box_archive', 15 );
	\add_action( 'genesis_before_loop', 'genesis_do_author_box_archive', 5 );

	if ( ! hero_enabled( _get_value( 'hero_settings_enable' ) ) ) {
		\remove_action( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 15 );
		\add_action( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 5 );
	}
}
