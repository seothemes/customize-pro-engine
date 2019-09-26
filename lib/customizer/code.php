<?php
/**
 * Customize Pro.
 *
 * WARNING: This file should never be modified under any circumstances.
 * Customizations should be made in the form of a core-functionality
 * plugin so that the theme can be updated without losing changes.
 *
 * @package   CustomizeProPro
 * @author    SEO Themes
 * @copyright 2019 SEO Themes
 * @license   GPL-2.0-or-later
 */

namespace CustomizePro;

\add_action( 'wp_ajax_dynamic_css', __NAMESPACE__ . '\dynamic_css' );
\add_action( 'wp_ajax_nopriv_dynamic_css', __NAMESPACE__ . '\dynamic_css' );
/**
 * Load the dynamic CSS with ajax.
 *
 * @since 1.0.0
 *
 * @return void
 */
function dynamic_css() {
	if ( \is_customize_preview() ) {
		exit;
	}

	$nonce = isset( $_REQUEST['wpnonce'] ) ? \wp_verify_nonce( sanitize_key( $_REQUEST['wpnonce'] ), 'dynamic-css-nonce' ) : false;

	if ( ! $nonce ) {
		die( \esc_html__( 'Invalid nonce.', 'customize-pro' ) );

	} else {
		header( 'Content-type: text/css; charset: UTF-8' );

		echo generate_css(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	exit;
}

\add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\responsive_css_output' );
/**
 * Outputs Additional JS to site footer.
 *
 * @since  1.0.0
 *
 * @return void
 */
function responsive_css_output() {
	$handle = _get_handle() . '-responsive-css';

	if ( \is_customize_preview() ) {
		$css = generate_css();
		\wp_register_style( $handle, false, [], _get_version(), 'all' );
		\wp_enqueue_style( $handle );
		\wp_add_inline_style( $handle, $css );

	} else {
		\wp_enqueue_style(
			$handle,
			\admin_url( 'admin-ajax.php' ) . '?action=dynamic_css&wpnonce=' . \wp_create_nonce( 'dynamic-css-nonce' ),
			[],
			_get_version(),
			'all'
		);
	}
}

/**
 * Generates the CSS output.
 *
 * @since 1.0.0
 *
 * @return mixed|string
 */
function generate_css() {
	$breakpoint = _get_value( 'breakpoint', _get_breakpoint() ) . 'px';
	$all        = _get_value( 'code_css_all' );
	$mobile     = _get_value( 'code_css_mobile' );
	$desktop    = _get_value( 'code_css_desktop' );
	$css        = $all ? $all : '';
	$css       .= $mobile ? "@media (max-width:{$breakpoint}){{$mobile}}" : '';
	$css       .= $desktop ? "@media (min-width:{$breakpoint}){{$desktop}}" : '';

	return minify( $css );
}

\add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\custom_js_output' );
/**
 * Outputs Additional JS to site footer.
 *
 * @since  1.0.0
 *
 * @return void
 */
function custom_js_output() {
	$handle = _get_handle() . '-custom-js';
	$output = _get_value( 'code_js_output' );

	if ( 'inline' === $output || \is_customize_preview() ) {
		\add_action( 'wp_footer', __NAMESPACE__ . '\inline_js' );

	} else {
		\wp_enqueue_script(
			$handle,
			\admin_url( 'admin-ajax.php' ) . '?action=dynamic_js&wpnonce=' . \wp_create_nonce( 'dynamic-js-nonce' ),
			[],
			_get_version(),
			'all'
		);
	}
}

/**
 * Outputs Additional JS to site footer.
 *
 * @since  1.0.0
 *
 * @return void
 */
function inline_js() {
	$output = _get_value( 'code_js_output' );

	if ( 'inline' !== $output && ! \is_customize_preview() ) {
		return;
	}

	$jquery  = _get_value( 'code_js_jquery' );
	$vanilla = _get_value( 'code_js_vanilla' );

	if ( '' !== $jquery ) { ?>
		<script type="text/javascript">
			jQuery(function ($) {
				"use strict";
				<?php echo $jquery . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			});
		</script>
		<?php
	}

	if ( '' !== $vanilla ) {
		?>
		<script type="text/javascript">
			<?php echo $vanilla . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</script>
		<?php
	}
}

\add_action( 'wp_ajax_dynamic_js', __NAMESPACE__ . '\dynamic_js' );
\add_action( 'wp_ajax_nopriv_dynamic_js', __NAMESPACE__ . '\dynamic_js' );
/**
 * Load the dynamic CSS with ajax.
 *
 * @since 1.0.0
 *
 * @return void
 */
function dynamic_js() {
	if ( \is_customize_preview() ) {
		exit;
	}

	$nonce = isset( $_REQUEST['wpnonce'] ) ? \wp_verify_nonce( sanitize_key( $_REQUEST['wpnonce'] ), 'dynamic-js-nonce' ) : false;

	if ( ! $nonce ) {
		die( \esc_html__( 'Invalid nonce.', 'customize-pro' ) );

	} else {
		header( 'Content-type: text/javascript; charset: UTF-8' );

		$jquery  = _get_value( 'code_js_jquery' );
		$vanilla = _get_value( 'code_js_vanilla' );
		$js      = $jquery ? 'jQuery(function($){"use strict";' . $jquery . '});' : '';
		$js     .= $vanilla;

		echo $js; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	exit;
}
