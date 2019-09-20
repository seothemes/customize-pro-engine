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
		'type'        => 'select',
		'settings'    => 'widgets-columns',
		'label'       => __( 'Footer Widgets Menu Columns', 'customize-pro' ),
		'description' => __( 'Changes the number of columns for menu items in Navigation Menu widgets.', 'customize-pro' ),
		'default'     => '2',
		'choices'     => [
			'1' => __( '1 Column', 'customize-pro' ),
			'2' => __( '2 Column', 'customize-pro' ),
			'3' => __( '3 Column', 'customize-pro' ),
			'4' => __( '4 Column', 'customize-pro' ),
		],
		'output'      => [
			[
				'element'  => '.footer-widgets .menu',
				'property' => 'columns',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-top',
		'label'    => __( 'Menu Spacing Top', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.footer-widgets .menu',
				'property' => 'padding-top',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-bottom',
		'label'    => __( 'Menu Spacing Bottom', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.footer-widgets .menu',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'menu-item-spacing-top',
		'label'    => __( 'Menu Item Spacing Top', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 40,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.footer-widgets a',
				'property' => 'padding-top',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'menu-item-spacing-bottom',
		'label'    => __( 'Menu Item Spacing Bottom', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 40,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.footer-widgets a',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
];
