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

// Removes the entry header markup and page title.
\remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
\remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
\remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

// Removes the breadcrumbs.
\remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Remove content sidebar wrap.
\add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

\add_filter( 'genesis_site_layout', __NAMESPACE__ . '\block_template_layout' );
/**
 * Sets the correct page layout for this template.
 *
 * @since 1.0.0
 *
 * @return string
 */
function block_template_layout() {
	$custom_field = \genesis_get_custom_field( '_genesis_layout', \get_the_ID() );
	$full_width   = __genesis_return_full_width_content();

	if ( $custom_field === $full_width ) {
		return $full_width;
	}

	return 'narrow-content';
}

// Runs the Genesis loop.
\genesis();
