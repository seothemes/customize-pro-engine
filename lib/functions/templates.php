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

\add_filter( 'theme_page_templates', __NAMESPACE__ . '\register_templates' );
/**
 * Add custom page templates to admin dropdown.
 *
 * @since 1.0.0
 *
 * @param array $templates Array of page templates.
 *
 * @return array
 */
function register_templates( $templates ) {
	$custom['blocks.php']  = 'Blocks';
	$custom['landing.php'] = 'Landing';

	// Only add Beaver Builder template if plugin is active.
	if ( _is_plugin_active( 'beaver-builder' ) ) {
		$custom['beaver-builder.php'] = 'Beaver Builder';
	}

	return \array_merge( $custom, $templates );
}

\add_filter( 'template_include', __NAMESPACE__ . '\include_templates' );
/**
 * Swap out template for custom if set.
 *
 * @since 1.0.0
 *
 * @param string $template Page template to override.
 *
 * @return string
 */
function include_templates( $template ) {
	$template_name    = \get_post_meta( \get_the_ID(), '_wp_page_template', true );
	$template_path    = _get_path() . 'assets/templates/' . $template_name;
	$custom_templates = [
		'blocks.php',
		'beaver-builder.php',
		'landing.php',
	];

	if ( ! \in_array( $template_name, $custom_templates, true ) ) {
		return $template;
	}

	if ( \is_readable( $template_path ) ) {
		$template = $template_path;
	}

	return $template;
}


