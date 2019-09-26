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

\add_filter( 'fl_builder_ui_bar_buttons', __NAMESPACE__ . '\beaver_builder_site_header', 10, 1 );
/**
 * Adds a hide/show site header button to Beaver Builder.
 *
 * @since 1.0.0
 *
 * @param array $buttons List of Beaver Builder header buttons.
 *
 * @return array
 */
function beaver_builder_site_header( $buttons ) {
	$buttons['toggle-header'] = [
		'label' => __( 'Toggle Header', 'customize-pro' ),
	];

	return $buttons;
}
