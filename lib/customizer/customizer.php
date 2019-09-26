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

\add_action( 'customize_register', __NAMESPACE__ . '\modify_customizer_defaults', 100 );
/**
 * Modify default Customizer controls and sections.
 *
 * @since 1.0.0
 *
 * @param \WP_Customize_Manager $wp_customize WordPress Customizer object.
 *
 * @return void
 */
function modify_customizer_defaults( $wp_customize ) {

	// Register custom control and make it eligible for JS templating.
	$wp_customize->register_control_type( __NAMESPACE__ . '\Box_Shadow_Control' );

	// Remove some default controls.
	$wp_customize->remove_control( 'background_color' );
	$wp_customize->remove_control( 'header_textcolor' );
	$wp_customize->remove_control( 'header_text' );

	// Modify some default sections.
	$wp_customize->get_section( 'header_image' )->panel    = _get_handle() . '_hero';
	$wp_customize->get_section( 'header_image' )->title    = __( 'Default Background', 'customize-pro' );
	$wp_customize->get_section( 'header_image' )->priority = 15;
}

\add_action( 'customize_controls_print_styles', __NAMESPACE__ . '\customizer_styles', 99 );
/**
 * Adds custom styles to Customizer screen.
 *
 * @since  1.0.0
 *
 * @return void
 */
function customizer_styles() {
	\wp_register_style(
		_get_handle() . '-customizer',
		_get_url() . 'assets/css/customizer.css',
		[ 'dashicons' ],
		_get_asset_version( 'css/customizer.css' ),
		'all'
	);

	\wp_enqueue_style( _get_handle() . '-customizer' );
}

\add_action( 'customize_controls_print_scripts', __NAMESPACE__ . '\customizer_scripts', 999 );
/**
 * Adds custom inline scripts to Customizer screen.
 *
 * @since 1.0.0
 *
 * @return void
 */
function customizer_scripts() {
	\wp_register_script(
		_get_handle() . '-customizer',
		_get_url() . 'assets/js/customizer.js',
		null,
		_get_asset_version( 'js/customizer.js' ),
		'all'
	);

	\wp_enqueue_script( _get_handle() . '-customizer' );
}

\add_filter( 'customize_pro_field', __NAMESPACE__ . '\add_font_choices', 10, 2 );
/**
 * Allows custom fonts to be added to typography controls.
 *
 * @since 1.0.0
 *
 * @param array $field Field settings.
 *
 * @return mixed
 */
function add_font_choices( $field ) {
	if ( 'typography' === $field['type'] ) {
		$field['choices'] = [
			'fonts' => \apply_filters( 'customize_pro_font_choices', [] ),
		];
	}

	return $field;
}

\add_filter( 'customize_pro_font_choices', __NAMESPACE__ . '\add_font_group', 20 );
/**
 * Adds system fonts to typography controls.
 *
 * @since 1.0.0
 *
 * @param array $custom Array of custom fonts.
 *
 * @return mixed
 */
function add_font_group( $custom ) {
	$fonts = [
		'Helvetica, Arial, sans-serif',
		'Verdana, sans-serif',
		'Arial, Helvetica, sans-serif',
		'Times, Georgia, serif',
		'Georgia, Times, serif',
		'Courier, monospace',
	];

	$custom['families']['system']['text'] = \esc_attr__( 'System', 'customize-pro' );

	foreach ( $fonts as $font ) {
		$text = \explode( ', ', $font );

		$custom['families']['system']['children'][] = [
			'id'   => $font,
			'text' => $text[0],
		];

		$custom['variants'][ $font ] = [ '200', '300', '400', '600', '700' ];
	}

	return $custom;
}
