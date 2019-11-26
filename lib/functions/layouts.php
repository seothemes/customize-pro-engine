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

\add_action( 'genesis_setup', __NAMESPACE__ . '\setup_layouts', 15 );
/**
 * Register custom page layouts.
 *
 * @since 1.0.0
 *
 * @return void
 */
function setup_layouts() {
	\genesis_register_layout(
		'narrow-content',
		[
			'label' => __( 'Narrow Content', 'customize-pro' ),
			'img'   => _get_url() . 'assets/img/narrow-content.gif',
		]
	);
}

// Move Secondary Sidebar into content-sidebar-wrap.
\remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
\add_action( 'genesis_after_content', 'genesis_get_sidebar_alt' );
