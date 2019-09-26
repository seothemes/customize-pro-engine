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

\add_action( 'genesis_init', __NAMESPACE__ . '\add_theme_supports', 5 );
/**
 * Adds theme support.
 *
 * @since 1.0.0
 *
 * @return void
 */
function add_theme_supports() {
	$theme_supports = [

		// Genesis defaults.
		'menus',
		'post-thumbnails',
		'title-tag',
		'automatic-feed-links',
		'body-open',
		'genesis-inpost-layouts',
		'genesis-archive-layouts',
		'genesis-admin-menu',
		'genesis-seo-settings-menu',
		'genesis-import-export-menu',
		'genesis-readme-menu',
		'genesis-customizer-theme-settings',
		'genesis-customizer-seo-settings',
		'genesis-auto-updates',
		'genesis-breadcrumbs',

		// Theme.
		'align-wide',
		'custom-logo'              => [
			'height'      => 100,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => '',
		],
		'dark-editor-style',
		'editor-styles',
		'genesis-accessibility'    => [
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links',
		],
		'genesis-menus'            => [
			'primary'   => __( 'Primary Menu', 'customize-pro' ),
			'secondary' => __( 'Secondary Menu', 'customize-pro' ),
			'footer'    => __( 'Footer Menu', 'customize-pro' ),
		],
		'genesis-structural-wraps' => [
			'header',
			'menu-secondary',
			'menu-footer',
			'hero-section',
			'footer-widgets',
			'footer-credits',
		],
		'html5'                    => [
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form',
		],
		'responsive-embeds',
		'woocommerce',
		'wc-product-gallery-zoom',
		'wc-product-gallery-lightbox',
		'wc-product-gallery-slider',
		'wp-block-styles',
	];

	foreach ( $theme_supports as $key => $value ) {
		\is_int( $key ) ? \add_theme_support( $value ) : \add_theme_support( $key, $value );
	}
}
