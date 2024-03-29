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
		'type'     => 'text',
		'settings' => 'text',
		'label'    => __( 'Text', 'customize-pro' ),
		'default'  => '',
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
		'choices'  => [
			'background'        => __( 'Background', 'customize-pro' ),
			'background-active' => __( 'Background Active', 'customize-pro' ),
			'menu-toggle-bar'   => __( 'Menu Toggle Bar', 'customize-pro' ),
			'text'              => __( 'Text and Icon', 'customize-pro' ),
			'text-active'       => __( 'Text and Icon Active', 'customize-pro' ),
			'border'            => __( 'Border', 'customize-pro' ),
			'border-active'     => __( 'Border Active', 'customize-pro' ),
		],
		'default'  => [
			'background'        => _get_color( 'transparent' ),
			'background-active' => _get_color( 'transparent' ),
			'menu-toggle-bar'   => _get_color( 'transparent' ),
			'text'              => _get_color( 'heading' ),
			'text-active'       => _get_color( 'heading' ),
			'border'            => _get_color( 'transparent' ),
			'border-active'     => _get_color( 'transparent' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => [
					'.menu-toggle',
					'.menu-toggle:hover',
					'.menu-toggle:focus',
				],
				'property' => 'background',
			],
			[
				'choice'   => 'background-active',
				'element'  => [
					'.menu-toggle.activated:hover',
					'.menu-toggle.activated:focus',
					'.menu-toggle.activated',
				],
				'property' => 'background',
			],
			[
				'choice'   => 'menu-toggle-bar',
				'element'  => [
					'.has-logo-above-mobile .menu-toggle-bar',
					'.has-logo-below-mobile .menu-toggle-bar',
				],
				'property' => 'background',
			],
			[
				'choice'   => 'text',
				'element'  => [
					'.menu-toggle-icon',
					'.menu-toggle-icon:before',
					'.menu-toggle-icon:after',
				],
				'property' => 'background-color',
			],
			[
				'choice'   => 'text',
				'element'  => '.menu-toggle-text',
				'property' => 'color',
			],
			[
				'choice'   => 'text-active',
				'element'  => [
					'.menu-toggle.activated .menu-toggle-text',
				],
				'property' => 'color',
			],
			[
				'choice'   => 'text-active',
				'element'  => [
					'.menu-toggle.activated .menu-toggle-icon:before',
					'.menu-toggle.activated .menu-toggle-icon:after',
				],
				'property' => 'background-color',
			],
			[
				'choice'        => 'text-active',
				'element'       => [
					'.menu-toggle.activated .menu-toggle-icon',
				],
				'property'      => 'background-color',
				'value_pattern' => 'transparent',
			],
			[
				'choice'   => 'border',
				'element'  => '.menu-toggle, .menu-toggle-bar',
				'property' => 'border-color',
			],
			[
				'choice'   => 'border-active',
				'element'  => '.menu-toggle.activated',
				'property' => 'border-color',
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
		'settings' => 'spacing',
		'label'    => __( 'Button Spacing', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.menu-toggle',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'menu-toggle-bar-spacing',
		'label'    => __( 'Menu Toggle Bar Spacing', 'customize-pro' ),
		'tooltip'  => __( 'This setting is only applied if the Primary Header mobile layout is set to display the logo above the menu.', 'customize-pro' ),
		'default'  => '10',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => [
					'.has-logo-above-mobile .menu-toggle-bar',
					'.has-logo-below-mobile .menu-toggle-bar',
				],
				'property' => 'padding',
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
				'element'  => '.menu-toggle',
				'property' => 'border-width',
				'units'    => 'px',
			],
			[
				'element'       => '.menu-toggle',
				'property'      => 'border-style',
				'value_pattern' => 'solid',
				'exclude'       => [ '0' ],
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'bar-border-width',
		'label'    => __( 'Menu Toggle Bar Border Width', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 10,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.menu-toggle-bar',
				'property' => 'border-width',
				'units'    => 'px',
			],
			[
				'element'       => '.menu-toggle-bar',
				'property'      => 'border-style',
				'value_pattern' => 'solid',
				'exclude'       => [ '0' ],
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
				'element'  => '.menu-toggle',
				'property' => 'border-radius',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'checkbox',
		'settings' => 'icon',
		'label'    => __( 'Display menu toggle icon', 'customize-pro' ),
		'default'  => true,
	],
	[
		'type'     => 'checkbox',
		'settings' => 'icon-corners',
		'label'    => __( 'Round icon corners', 'customize-pro' ),
		'default'  => false,
		'output'   => [
			[
				'element'       => [
					'.menu-toggle-icon',
					'.menu-toggle-icon:before',
					'.menu-toggle-icon:after',
				],
				'property'      => 'border-radius',
				'value_pattern' => '5px',
				'exclude'       => [ false ],
			],
		],
		'required' => [
			[
				'setting'  => _get_setting( 'icon' ),
				'value'    => true,
				'operator' => '===',
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
		'default'  => '24',
		'choices'  => [
			'min'  => 12,
			'max'  => 120,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => [
					'.menu-toggle-icon',
					'.menu-toggle-icon:before',
					'.menu-toggle-icon:after',
				],
				'property' => 'width',
				'units'    => 'px',
			],
			[
				'element'       => '.menu-toggle-icon',
				'property'      => 'margin',
				'value_pattern' => 'calc(($px / 3))',
			],
			[
				'element'       => '.menu-toggle-icon:before',
				'property'      => 'top',
				'value_pattern' => 'calc(-$px / 3)',
			],
			[
				'element'       => '.menu-toggle-icon:after',
				'property'      => 'bottom',
				'value_pattern' => 'calc(-$px / 3)',
			],
		],
		'required' => [
			[
				'setting'  => _get_setting( 'icon' ),
				'value'    => true,
				'operator' => '===',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'icon-line-size',
		'label'    => __( 'Icon Line Size', 'customize-pro' ),
		'default'  => '3',
		'choices'  => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => [
					'.menu-toggle-icon',
					'.menu-toggle-icon:before',
					'.menu-toggle-icon:after',
				],
				'property' => 'height',
				'units'    => 'px',
			],
		],
		'required' => [
			[
				'setting'  => _get_setting( 'icon' ),
				'value'    => true,
				'operator' => '===',
			],
		],
	],
];
