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

\add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\block_editor_styles' );
/**
 * Loads editor styles in admin.
 *
 * @since 1.0.0
 *
 * @return void
 */
function block_editor_styles() {
	\wp_register_style(
		_get_handle() . '-editor-styles',
		_get_url() . 'assets/css/editor-styles.css',
		[],
		_get_version()
	);

	\wp_enqueue_style( _get_handle() . '-editor-styles' );
}
