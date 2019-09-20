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

/**
 * Returns array of default Customizer panels.
 *
 * @since 0.1.0
 *
 * @return array
 */
function _get_default_panels() {
	return [
		'general'     => __( 'General Settings', 'customize-pro' ),
		'base'        => __( 'Base Styles', 'customize-pro' ),
		'header'      => __( 'Header', 'customize-pro' ),
		'menus'       => __( 'Menus', 'customize-pro' ),
		'hero'        => __( 'Hero Section', 'customize-pro' ),
		'content'     => __( 'Content Area', 'customize-pro' ),
		'sidebars'    => __( 'Sidebars', 'customize-pro' ),
		'single'      => __( 'Single Post / Page', 'customize-pro' ),
		'archive'     => __( 'Blog / Archive', 'customize-pro' ),
		'footer'      => __( 'Footer', 'customize-pro' ),
		'code'        => __( 'Custom Code', 'customize-pro' ),
		'woocommerce' => __( 'WooCommerce', 'customize-pro' ),
		'edd'         => __( 'Easy Digital Downloads', 'customize-pro' ),
	];
}

add_action( 'genesis_setup', __NAMESPACE__ . '\add_panels' );
/**
 * Adds Kirki panels.
 *
 * @since 0.1.0
 *
 * @return void
 */
function add_panels() {
	$priority = 10;
	$handle   = _get_handle();
	$panels   = apply_filters( 'customize_pro_panels', _get_default_panels() );

	foreach ( $panels as $panel => $title ) {
		\Kirki::add_panel(
			$handle . "_{$panel}",
			[
				'title'    => $title,
				'priority' => $priority + 10,
				'panel'    => $handle,
			]
		);
	}
}
