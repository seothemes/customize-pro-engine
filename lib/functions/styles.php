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

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_main_styles' );
/**
 * Load main stylesheets.
 *
 * @since 0.1.0
 *
 * @return void
 */
function enqueue_main_styles() {
	$handle     = _get_handle();
	$breakpoint = _get_value( 'breakpoint', _get_breakpoint() );
	$mobile     = intval( $breakpoint );

	wp_register_style(
		$handle . '-all',
		_get_url() . 'assets/css/all.css',
		[],
		_get_asset_version( 'css/all.css' ),
		'all'
	);

	wp_register_style(
		$handle . '-mobile',
		_get_url() . 'assets/css/mobile.css',
		[],
		_get_asset_version( 'css/mobile.css' ),
		'(max-width:' . $mobile . 'px)'
	);

	wp_register_style(
		$handle . '-desktop',
		_get_url() . 'assets/css/desktop.css',
		[],
		_get_asset_version( 'css/desktop.css' ),
		'(min-width:' . $breakpoint . 'px)'
	);

	wp_register_style(
		$handle . '-fontawesome',
		'//use.fontawesome.com/releases/v5.2.0/css/all.css',
		[],
		_get_version(),
		'all'
	);

	wp_enqueue_style( $handle . '-all' );
	wp_enqueue_style( $handle . '-mobile' );
	wp_enqueue_style( $handle . '-desktop' );

	if ( _get_value( 'general_performance_fontawesome' ) ) {
		wp_enqueue_style( $handle . '-fontawesome' );
	}
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_vendor_styles' );
/**
 * Load vendor stylesheets conditionally.
 *
 * @since 0.1.0
 *
 * @return void
 */
function enqueue_vendor_styles() {
	$handle  = _get_handle();
	$plugins = apply_filters(
		'customize_pro_stylesheets',
		[
			'beaver-builder',
			'elementor',
		]
	);

	foreach ( $plugins as $plugin ) {
		if ( _is_plugin_active( $plugin ) ) {
			$style = $handle . '-' . $plugin;

			wp_register_style(
				$style,
				_get_url() . 'assets/css/' . $plugin . '.css',
				[],
				_get_asset_version( 'css/' . $plugin . '.css' ),
				'all'
			);

			wp_enqueue_style( $style );
		}
	}
}

add_action( 'genesis_setup', __NAMESPACE__ . '\load_child_theme_css', 15 );
/**
 * Loads child theme CSS.
 *
 * @since 0.1.0
 *
 * @return void
 */
function load_child_theme_css() {
	$load  = _get_value( 'general_performance_load-stylesheet', false );
	$trump = _get_value( 'general_performance_style-trump', false );

	if ( ! $load || $trump ) {
		remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
	}

	if ( $trump ) {
		add_action( 'wp_enqueue_scripts', 'genesis_enqueue_main_stylesheet', 999 );
	}
}
