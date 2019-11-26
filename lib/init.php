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

\add_action( 'setup_theme', __NAMESPACE__ . '\load_genesis', 100 );
/**
 * Starts the engine.
 *
 * Enables the use of `genesis_*` functions in the child theme functions.php file,
 * without the need for require_once \get_template_directory() . '/lib/init.php'
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_genesis() {
	$init = \get_template_directory() . '/lib/init.php';

	if ( \is_readable( $init ) ) {
		require_once $init;
	}
}

\add_action( 'genesis_init', __NAMESPACE__ . '\remove_genesis_theme_supports', 5 );
/**
 * Removes all Genesis functions that use the \is_child_theme() function.
 *
 * Since we are loading Genesis on behalf of the child theme, functions won't
 * correctly. This little workaround fixes that issue by removing functions
 * that contain the check and adds theme support that is required early.
 *
 * @since 1.0.0
 *
 * @return void
 */
function remove_genesis_theme_supports() {
	\remove_action( 'genesis_init', 'genesis_theme_support' );
	\add_theme_support( 'genesis-breadcrumbs' );
}

\add_action( 'genesis_init', __NAMESPACE__ . '\load_files', 0 );
/**
 * Load plugin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_files() {
	if ( ! \class_exists( 'Kirki' ) ) {
		return;
	}

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
		'structure/archive',
		'structure/blog',
		'structure/comments',
		'structure/content',
		'structure/footer',
		'structure/header',
		'structure/hero',
		'structure/menus',
		'structure/search',
		'structure/sidebar',
		'structure/single',
		'structure/wrap',

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
	if ( \is_admin() ) {

		$files = \array_merge(
			[
				'admin/assets',
				'admin/metabox',
			],
			$files
		);
	}

	foreach ( $files as $filename ) {
		require_once __DIR__ . "/$filename.php";
	}
}
