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

add_action( 'genesis_init', __NAMESPACE__ . '\add_theme_supports', 5 );
/**
 * Adds theme support.
 *
 * @since 0.1.0
 *
 * @return void
 */
function add_theme_supports() {

	// Genesis defaults.
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'body-open' );
	add_theme_support( 'genesis-inpost-layouts' );
	add_theme_support( 'genesis-archive-layouts' );
	add_theme_support( 'genesis-admin-menu' );
	add_theme_support( 'genesis-seo-settings-menu' );
	add_theme_support( 'genesis-import-export-menu' );
	add_theme_support( 'genesis-readme-menu' );
	add_theme_support( 'genesis-customizer-theme-settings' );
	add_theme_support( 'genesis-customizer-seo-settings' );
	add_theme_support( 'genesis-auto-updates' );
	add_theme_support( 'genesis-breadcrumbs' );

	// Theme.
	add_theme_support( 'align-wide' );
	add_theme_support( 'dark-editor-style' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'genesis-accessibility' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support(
		'custom-logo',
		[
			'height'      => 100,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => '',
		]
	);
	add_theme_support(
		'genesis-accessibility',
		[
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links',
		]
	);
	add_theme_support(
		'genesis-menus',
		[
			'primary'   => __( 'Primary Menu', 'customize-pro' ),
			'secondary' => __( 'Secondary Menu', 'customize-pro' ),
			'footer'    => __( 'Footer Menu', 'customize-pro' ),
		]
	);
	add_theme_support(
		'genesis-structural-wraps',
		[
			'header',
			'menu-secondary',
			'menu-footer',
			'hero-section',
			'footer-widgets',
			'footer-credits',
		]
	);
	add_theme_support(
		'html5',
		[
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form',
		]
	);
}
