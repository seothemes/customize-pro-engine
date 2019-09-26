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

return [
	[
		'type'     => 'number',
		'settings' => 'breakpoint',
		'label'    => \esc_html__( 'Global Breakpoint', 'kirki' ),
		'default'  => _get_breakpoint(),
		'choices'  => [
			'min'  => 0,
			'max'  => 2560,
			'step' => 128,
		],
	],
];
