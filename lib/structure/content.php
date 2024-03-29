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

\add_filter( 'genesis_attr_site-container', __NAMESPACE__ . '\site_container_id' );
/**
 * Add scroll to to anchor ID to site container.
 *
 * @since 1.0.0
 *
 * @param array $atts Site container attributes.
 *
 * @return array
 */
function site_container_id( $atts ) {
	$atts['id'] = 'top';

	return $atts;
}

\add_filter( 'genesis_breadcrumb_args', __NAMESPACE__ . '\breadcrumb_args' );
/**
 * Modify breadcrumb labels.
 *
 * @since 1.0.0
 *
 * @param array $args Breadcrumb arguments.
 *
 * @return array
 */
function breadcrumb_args( $args ) {
	$args['home']                = _get_value( 'content_breadcrumbs_label-home' );
	$args['labels']['prefix']    = _get_value( 'content_breadcrumbs_label-prefix' );
	$args['labels']['author']    = _get_value( 'content_breadcrumbs_label-author' );
	$args['labels']['category']  = _get_value( 'content_breadcrumbs_label-category' );
	$args['labels']['tag']       = _get_value( 'content_breadcrumbs_label-tag' );
	$args['labels']['date']      = _get_value( 'content_breadcrumbs_label-date' );
	$args['labels']['search']    = _get_value( 'content_breadcrumbs_label-search' );
	$args['labels']['tax']       = _get_value( 'content_breadcrumbs_label-tax' );
	$args['labels']['post_type'] = _get_value( 'content_breadcrumbs_label-post_type' );
	$args['labels']['404']       = _get_value( 'content_breadcrumbs_label-404' );

	return $args;
}

\add_filter( 'genesis_404_entry_title', __NAMESPACE__ . '\error_404_entry_title', 10, 1 );
/**
 * Set the custom 404 title.
 *
 * @since 1.0.0
 *
 * @param string $default Default 404 page title.
 *
 * @return string
 */
function error_404_entry_title( $default ) {
	$custom = \get_page_by_path( 'error-404', OBJECT );

	if ( isset( $custom ) ) {
		return $custom->post_title;
	}

	return $default;
}


\add_filter( 'genesis_404_entry_content', __NAMESPACE__ . '\error_404_entry_content', 10, 1 );
/**
 * Set custom 404 page content.
 *
 * @since 1.0.0
 *
 * @param string $default Default 404 page content.
 *
 * @return string
 */
function error_404_entry_content( $default ) {
	$custom = \get_page_by_path( 'error-404', OBJECT );

	if ( isset( $custom ) ) {
		return $custom->post_content;
	}

	return $default;
}

\add_filter( 'genesis_search_text', __NAMESPACE__ . '\search_input_text' );
/**
 * Modify the search input text.
 *
 * @since 1.0.2
 *
 * @return string
 */
function search_input_text() {
	return _get_value( 'content_search-form_input-text' );
}

\add_filter( 'genesis_search_button_text', __NAMESPACE__ . '\search_button_text' );
/**
 * Modify the search button text.
 *
 * @since 1.0.2
 *
 * @return string
 */
function search_button_text() {
	if ( true === _get_value( 'content_search-form_icon' ) ) {
		return 'icon';
	}

	return _get_value( 'content_search-form_button-text' );
}

\add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\above_content', 15 );
/**
 * Display the Above Footer widget area.
 *
 * @since 1.1.0
 *
 * @return void
 */
function above_content() {
	$enabled = _get_value( 'content_above_enabled' );

	if ( ! $enabled ) {
		return;
	}

	\genesis_widget_area(
		'above-content',
		[
			'before' => '<div class="above-content widget-area"><div class="wrap">',
			'after'  => '</div></div>',
		]
	);
}

\add_action( 'genesis_after_content_sidebar_wrap', __NAMESPACE__ . '\below_content' );
/**
 * Display the Above Footer widget area.
 *
 * @since 1.1.0
 *
 * @return void
 */
function below_content() {
	$enabled = _get_value( 'content_below_enabled' );

	if ( ! $enabled ) {
		return;
	}

	genesis_widget_area(
		'below-content',
		[
			'before' => '<div class="below-content widget-area"><div class="wrap">',
			'after'  => '</div></div>',
		]
	);
}
