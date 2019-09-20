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

add_action( 'genesis_setup', __NAMESPACE__ . '\setup_layouts', 15 );
/**
 * Register custom page layouts.
 *
 * @since 0.1.0
 *
 * @return void
 */
function setup_layouts() {
	genesis_register_layout(
		'center-content',
		[
			'label' => __( 'Center Content', 'customize-pro' ),
			'img'   => _get_url() . 'assets/img/center-content.gif',
		]
	);
}

add_action( 'genesis_before', __NAMESPACE__ . '\center_content' );
/**
 * Remove sidebars from center-content layout.
 *
 * @since 0.1.0
 *
 * @return void
 */
function center_content() {
	if ( 'center-content' === genesis_site_layout() ) {
		add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );
	}
}

// Move Secondary Sidebar into content-sidebar-wrap.
remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
add_action( 'genesis_after_content', 'genesis_get_sidebar_alt' );
