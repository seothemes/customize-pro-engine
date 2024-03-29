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

\add_action( 'genesis_before', __NAMESPACE__ . '\narrow_content' );
/**
 * Remove sidebars on narrow content layout.
 *
 * @since 3.5.0
 *
 * @return void
 */
function narrow_content() {
	if ( 'narrow-content' === \genesis_site_layout() ) {
		\add_filter( 'genesis_markup_sidebar-primary_open', '__return_false' );
		\remove_all_actions( 'genesis_before_sidebar_widget_area' );
		\remove_all_actions( 'genesis_sidebar' );
		\remove_all_actions( 'genesis_after_sidebar_widget_area' );
		\add_filter( 'genesis_markup_sidebar-primary_close', '__return_false' );
		\add_filter( 'genesis_markup_sidebar-secondary_open', '__return_false' );
		\remove_all_actions( 'genesis_before_sidebar_alt_widget_area' );
		\remove_all_actions( 'genesis_sidebar_alt' );
		\remove_all_actions( 'genesis_after_sidebar_alt_widget_area' );
		\add_filter( 'genesis_markup_sidebar-secondary_close', '__return_false' );
	}
}
