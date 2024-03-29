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
 * Build a background-gradient style for CSS
 *
 * @since 1.0.0
 *
 * @param string $angle   Gradient angle.
 * @param string $color_1 Hex color value.
 * @param string $color_2 Hex color value.
 *
 * @return string CSS definition
 */
function build_gradients( $angle, $color_1, $color_2 ) {
	$styles  = 'background:' . $color_1 . ';';
	$styles .= 'background:-moz-linear-gradient(' . $angle . 'deg,' . $color_1 . ' 0%,' . $color_2 . ' 100%);';
	$styles .= 'background:-webkit-linear-gradient(' . $angle . 'deg,' . $color_1 . ' 0%,' . $color_2 . ' 100%);';
	$styles .= 'background:linear-gradient(' . $angle . 'deg,' . $color_1 . ' 0%,' . $color_2 . ' 100%);';
	$styles .= "filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='" . $color_1 . "', endColorstr='" . $color_2 . "',GradientType=0);";

	return $styles;
}

/**
 * Build & enqueue the complete CSS for headers.
 *
 * @since 1.0.0
 *
 * @return string
 */
function generate_gradient_css() {
	$css = '';

	// Site Footer.
	$site_footer_colors = _get_value( 'footer_site-footer_gradient' );
	$site_footer_angle  = _get_value( 'footer_site-footer_angle' );

	if ( isset( $site_footer_colors['left'], $site_footer_colors['right'] ) ) {
		$css .= '.site-footer:before{' . build_gradients( $site_footer_angle, $site_footer_colors['left'], $site_footer_colors['right'] ) . '}';
	}

	// Hero.
	$hero_colors = _get_value( 'hero_settings_gradient' );
	$hero_angle  = _get_value( 'hero_settings_angle' );

	if ( isset( $hero_colors['left'], $hero_colors['right'] ) ) {
		$css .= '.hero-section:before{' . build_gradients( $hero_angle, $hero_colors['left'], $hero_colors['right'] ) . '}';
	}

	// Above Footer.
	$above_footer_colors = _get_value( 'footer_above_gradient' );
	$above_footer_angle  = _get_value( 'footer_above_angle' );

	if ( isset( $above_footer_colors['left'], $above_footer_colors['right'] ) ) {
		$css .= '.above-footer:before{' . build_gradients( $above_footer_angle, $above_footer_colors['left'], $above_footer_colors['right'] ) . '}';
	}

	return $css;
}

\add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\gradient_css_output' );
/**
 * Outputs Additional JS to site footer.
 *
 * @since  1.0.0
 *
 * @return void
 */
function gradient_css_output() {
	$css    = generate_gradient_css();
	$handle = _get_handle() . '-gradient';

	if ( \is_customize_preview() ) {
		\wp_register_style( $handle, false, [], _get_version(), 'all' );
		\wp_enqueue_style( $handle );
		\wp_add_inline_style( $handle, $css );

	} else {
		\wp_enqueue_style(
			$handle,
			\admin_url( 'admin-ajax.php' ) . '?action=gradient_css&wpnonce=' . \wp_create_nonce( 'gradient-css-nonce' ),
			[],
			_get_version(),
			'all'
		);
	}
}

\add_action( 'wp_ajax_gradient_css', __NAMESPACE__ . '\gradient_css' );
\add_action( 'wp_ajax_nopriv_gradient_css', __NAMESPACE__ . '\gradient_css' );
/**
 * Load the gradient CSS with ajax.
 *
 * @since 1.0.0
 *
 * @return void
 */
function gradient_css() {
	$nonce = isset( $_REQUEST['wpnonce'] ) ? \wp_verify_nonce( \sanitize_key( $_REQUEST['wpnonce'] ), 'gradient-css-nonce' ) : false;

	if ( ! $nonce ) {
		die( \esc_html__( 'Invalid nonce.', 'customize-pro' ) );

	} else {
		\header( 'Content-type: text/css; charset: UTF-8' );

		echo generate_gradient_css(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	exit;
}
