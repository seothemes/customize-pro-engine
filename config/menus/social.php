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
		'type'     => 'select',
		'settings' => 'color-style',
		'label'    => __( 'Color Style', 'customize-pro' ),
		'default'  => 'custom',
		'choices'  => [
			'brand-icon'       => __( 'Brand Icon', 'customize-pro' ),
			'brand-background' => __( 'Brand Background', 'customize-pro' ),
			'custom'           => __( 'Custom', 'customize-pro' ),
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'required' => [
			[
				'setting'  => _get_setting( 'color-style' ),
				'operator' => '===',
				'value'    => 'custom',
			],
		],
		'choices'  => [
			'icon'             => __( 'Icon', 'customize-pro' ),
			'icon-hover'       => __( 'Icon Hover', 'customize-pro' ),
			'background'       => __( 'Background', 'customize-pro' ),
			'background-hover' => __( 'Background Hover', 'customize-pro' ),
			'border'           => __( 'Border', 'customize-pro' ),
			'border-hover'     => __( 'Border Hover', 'customize-pro' ),
		],
		'default'  => [
			'icon'             => '',
			'icon-hover'       => '',
			'background'       => '',
			'background-hover' => '',
			'border'           => '',
			'border-hover'     => '',
		],
		'output'   => [
			[
				'choice'   => 'icon',
				'element'  => '#menu-social a',
				'property' => 'color',
			],
			[
				'choice'   => 'icon-hover',
				'element'  => '#menu-social a:hover, #menu-social a:focus',
				'property' => 'color',
			],
			[
				'choice'   => 'background',
				'element'  => '#menu-social a',
				'property' => 'background-color',
			],
			[
				'choice'   => 'background-hover',
				'element'  => '#menu-social a:hover, #menu-social a:focus',
				'property' => 'background-color',
			],
			[
				'choice'   => 'border',
				'element'  => '#menu-social a',
				'property' => 'border-color',
			],
			[
				'choice'   => 'border-hover',
				'element'  => '#menu-social a:hover, #menu-social a:focus',
				'property' => 'border-color',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
		'required' => [
			[
				'setting'  => _get_setting( 'color-style' ),
				'operator' => '===',
				'value'    => 'custom',
			],
		],
	],
	[
		'type'     => 'select',
		'settings' => 'hover-effect',
		'label'    => __( 'Hover Effect', 'customize-pro' ),
		'default'  => 'lighten',
		'choices'  => [
			'scale'   => __( 'Scale', 'customize-pro' ),
			'lighten' => __( 'Lighten', 'customize-pro' ),
			'none'    => __( 'None', 'customize-pro' ),
		],
		'output'   => [
			[
				'choice'        => 'scale',
				'element'       => '#menu-social a:hover, #menu-social a:focus',
				'property'      => 'transform',
				'value_pattern' => 'scale(1.1)',
				'exclude'       => [ 'lighten', 'none' ],
			],
			[
				'choice'        => 'lighten',
				'element'       => '#menu-social a:hover, #menu-social a:focus',
				'property'      => 'box-shadow',
				'value_pattern' => 'inset 0 0 100px 100px rgba(255,255,255,0.25)',
				'exclude'       => [ 'scale', 'none' ],
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
		'settings' => 'icon-size',
		'label'    => __( 'Icon Size', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '#menu-social a',
				'property' => 'font-size',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'padding',
		'label'    => __( 'Padding', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '#menu-social a',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing',
		'label'    => __( 'Horizontal Spacing', 'customize-pro' ),
		'default'  => _get_size( 'xxs', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '#menu-social li',
				'property' => 'padding-left',
				'units'    => 'px',
			],
			[
				'element'  => '#menu-social li',
				'property' => 'padding-right',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'border-radius',
		'label'    => __( 'Border Radius', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '#menu-social a',
				'property' => 'border-radius',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'border-width',
		'label'    => __( 'Border Width', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 10,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '#menu-social a',
				'property' => 'border-width',
				'units'    => 'px',
			],
			[
				'element'       => '#menu-social a',
				'property'      => 'border-style',
				'value_pattern' => 'solid',
				'exclude'       => [ '0' ],
			],
		],
	],
];
