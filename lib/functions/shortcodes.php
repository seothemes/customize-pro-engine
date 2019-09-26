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

// Enable shortcodes in widgets.
\add_filter( 'widget_text', 'do_shortcode' );

// Add search form shortcode.
\add_shortcode(
	'search_form',
	function () {

		// Gutenberg fix.
		if ( \is_admin() ) {
			return '';
		}

		return \get_search_form( false );
	}
);
