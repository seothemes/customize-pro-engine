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

// Disable kirki telemetry.
add_filter( 'kirki_telemetry', '__return_false' );

add_action( 'genesis_setup', __NAMESPACE__ . '\kirki_filters' );
/**
 * Add miscellaneous Kirki filters after setup.
 *
 * @since 0.1.0
 *
 * @return void
 */
function kirki_filters() {
	add_filter( 'kirki/dynamic_css/method', '__return_true' );
	add_filter(
		'kirki_gutenberg_' . _get_handle() . '_dynamic_css',
		function () {
			return home_url( '?action=kirki-styles' );
		}
	);

	if ( ! is_customize_preview() ) {
		add_filter( 'kirki_output_inline_styles', '__return_false' );
	}
}

add_action( 'genesis_setup', __NAMESPACE__ . '\add_kirki_config' );
/**
 * Add Kirki config.
 *
 * @since  0.1.0
 *
 * @link   https://aristath.github.io/kirki/docs/getting-started/config.html
 *
 * @return void
 */
function add_kirki_config() {
	\Kirki::add_config(
		_get_handle(),
		[
			'capability'        => 'edit_theme_options',
			'option_type'       => 'theme_mod',
			'gutenberg_support' => true,
			'disable_output'    => false,
		]
	);
}

add_filter( 'kirki_config', __NAMESPACE__ . '\disable_kirki_loader' );
/**
 * Remove Kirki loader icon.
 *
 * @param array $config The configuration array.
 *
 * @return array
 */
function disable_kirki_loader( $config ) {
	return wp_parse_args(
		[
			'disable_loader' => true,
		],
		$config
	);
}

add_filter( 'kirki_control_types', __NAMESPACE__ . '\register_controls' );
/**
 * Registers new Customizer controls with Kirki.
 *
 * @since 0.1.0
 *
 * @param array $controls An array of controls registered with the Kirki Toolkit.
 *
 * @return array
 */
function register_controls( $controls ) {
	$controls['kirki-box-shadow'] = __NAMESPACE__ . '\Box_Shadow_Control';

	return $controls;
}

add_action( 'genesis_setup', __NAMESPACE__ . '\add_proxy_panel' );
/**
 * Description of expected behavior.
 *
 * @since 0.1.0
 *
 * @return void
 */
function add_proxy_panel() {
	$title  = _get_name();
	$handle = _get_handle();

	\Kirki::add_panel(
		$handle,
		[
			'title'    => $title,
			'priority' => 10,
		]
	);

	\Kirki::add_section(
		$handle,
		[
			'title'    => $title,
			'panel'    => $handle,
			'priority' => 10,
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'     => 'hidden',
			'settings' => $title,
			'section'  => $handle,
		]
	);
}
