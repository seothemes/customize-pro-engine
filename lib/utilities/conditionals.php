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
 * Check if were on any type of singular page.
 *
 * @since 1.0.0
 *
 * @return bool
 */
function _is_single() {
	return ( \is_front_page() || \is_single() || \is_page() || \is_404() || \is_attachment() || \is_singular() );
}

/**
 * Check if were on any type of archive page.
 *
 * @since 1.0.0
 *
 * @return bool
 */
function _is_archive() {
	return \is_home() || \is_post_type_archive() || \is_category() || \is_tag() || \is_tax() || \is_author() || \is_date() || \is_year() || \is_month() || \is_day() || \is_time() || \is_archive() || \is_search();
}

/**
 * Check if a given plugin is active.
 *
 * @since 1.0.0
 *
 * @param string $plugin Name of plugin to check.
 *
 * @return bool
 */
function _is_plugin_active( $plugin ) {
	$plugins = [
		'easy-digital-downloads' => 'Easy_Digital_Downloads',
		'beaver-builder'         => 'FLBuilderLoader',
		'woocommerce'            => 'WooCommerce',
		'elementor'              => 'Elementor\Plugin',
		'simple-social-icons'    => 'Simple_Social_Icons_Widget',
		'kirki'                  => 'Kirki',
		'one-click-demo-import'  => '',
	];

	if ( \class_exists( $plugins[ $plugin ] ) ) {
		return true;

	} elseif ( \function_exists( $plugins[ $plugin ] ) ) {
		return true;

	} elseif ( \defined( $plugins[ $plugin ] ) ) {
		return true;
	}

	return false;
}

/**
 * Check if sticky header is enabled.
 *
 * @since 1.0.0
 *
 * @return bool
 */
function _has_sticky_header() {
	$layout = _get_value( 'header_primary_layout' );

	if ( 'has-logo-side' === $layout ) {
		return false;
	}

	if ( \is_home() ) {
		$id = \get_option( 'page_for_posts' );
	} else {
		$id = \get_the_ID();
	}

	$disabled = \get_post_meta( $id, 'sticky_disabled', true );

	if ( $disabled ) {
		return false;
	}

	return _get_value( 'header_sticky_enabled', '' );
}

/**
 * Check if transparent header is enabled.
 *
 * @since 1.0.0
 *
 * @return bool
 */
function _has_transparent_header() {
	$layout = _get_value( 'header_primary_layout' );

	if ( 'has-logo-side' === $layout ) {
		return false;
	}

	if ( \is_home() ) {
		$id = \get_option( 'page_for_posts' );
	} else {
		$id = \get_the_ID();
	}

	$disabled = \get_post_meta( $id, 'transparent_disabled', true );

	if ( $disabled ) {
		return false;
	}

	return _get_value( 'header_transparent_enabled', '' );
}
