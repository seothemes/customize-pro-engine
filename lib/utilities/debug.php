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
 * Checks if debug mode is enabled.
 *
 * @since 1.0.0
 *
 * @return bool
 */
function _is_debug_mode() {
	return \defined( 'WP_DEBUG' ) && WP_DEBUG;
}

/**
 * Outputs nicely formatted debugging info.
 *
 * @since 1.0.0
 *
 * @param mixed $value Value to debug.
 *
 * @return void
 */
function _debug( $value ) {
	echo '<pre style="margin:20px;padding:20px;">';
	\print_r( $value ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r
	echo '</pre>';
}

/**
 * Shorthand alias for _debug utility function.
 *
 * @since 1.0.0
 *
 * @param mixed $value Value to debug.
 *
 * @return void
 */
function _d( $value ) {
	_debug( $value );
}
