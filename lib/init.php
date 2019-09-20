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

add_action( 'setup_theme', __NAMESPACE__ . '\load_genesis', 100 );
/**
 * Starts the engine.
 *
 * Enables the use of `genesis_*` functions in the child theme functions.php file,
 * without the need for require_once get_template_directory() . '/lib/init.php'
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_genesis() {

	if ( ! class_exists( 'Kirki' ) ) {
		return;
	}

	$init = \get_template_directory() . '/lib/init.php';

	if ( is_readable( $init ) ) {
		require_once $init;
	}
}

add_action( 'genesis_init', __NAMESPACE__ . '\remove_is_child_theme', 0 );
/**
 * Removes all Genesis functions that use the is_child_theme() function.
 *
 * Workaround to enable the use of Genesis functions in the child theme functions.php
 * file without needing require_once get_template_directory() . '/lib/init.php'.
 *
 * @since 1.0.0
 *
 * @return void
 */
function remove_is_child_theme() {
	remove_action( 'admin_notices', 'genesis_use_child_theme_notice' );
	remove_shortcode( 'footer_childtheme_link' );
	remove_action( 'genesis_init', 'genesis_theme_support' );
	remove_filter( 'debug_information', 'genesis_child_theme_recommendations' );
}

add_action( 'genesis_init', __NAMESPACE__ . '\load_files', 0 );
/**
 * Load plugin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_files() {

	$files = [

		// Utilities.
		'utilities/debug',
		'utilities/helpers',
		'utilities/conditionals',
		'utilities/optimization',
		'utilities/image',

		// Functions.
		'functions/autoload',
		'functions/setup',
		'functions/theme-support',
		'functions/styles',
		'functions/scripts',
		'functions/widget-areas',
		'functions/layouts',
		'functions/templates',
		'functions/shortcodes',
		'functions/defaults',
		'functions/custom-header',

		// Structure.
		'structure/header',
		'structure/wrap',
		'structure/menus',
		'structure/hero',
		'structure/content',
		'structure/search',
		'structure/single',
		'structure/archive',
		'structure/blog',
		'structure/comments',
		'structure/footer',

		// Plugins.
		'plugins/gutenberg',
		'plugins/simple-social-icons',
		'plugins/beaver-builder',

		// Customizer.
		'customizer/customizer',
		'customizer/kirki',
		'customizer/panels',
		'customizer/sections',
		'customizer/fields',
		'customizer/site-identity',
		'customizer/gradients',
		'customizer/typekit',
		'customizer/code',
	];

	// Load admin.
	if ( is_admin() ) {

		$files = array_merge( [
			'admin/assets',
			'admin/metabox',
		], $files );
	}

	foreach ( $files as $filename ) {
		require_once __DIR__ . "/$filename.php";
	}
}
