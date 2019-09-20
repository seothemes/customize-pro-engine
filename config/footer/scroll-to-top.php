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
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'text'       => __( 'Link Text', 'customize-pro' ),
			'text-hover' => __( 'Link Text Hover', 'customize-pro' ),
			'background' => __( 'Button Background', 'customize-pro' ),
			'icon'       => __( 'Button Icon', 'customize-pro' ),
		],
		'default'  => [
			'text'       => '',
			'text-hover' => '',
			'background' => _get_color( 'heading' ),
			'icon'       => _get_color( 'white' ),
		],
		'output'   => [
			[
				'choice'   => 'text',
				'element'  => '.scroll-to-top',
				'property' => 'color',
			],
			[
				'choice'   => 'text-hover',
				'element'  => '.scroll-to-top:hover, .scroll-to-top:focus',
				'property' => 'color',
			],
			[
				'choice'   => 'background',
				'element'  => '.scroll-to-top-icon',
				'property' => 'background-color',
			],
			[
				'choice'   => 'icon',
				'element'  => '.scroll-to-top-icon svg',
				'property' => 'fill',
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
		'settings' => 'enabled',
		'label'    => __( 'Show scroll to top link', 'customize-pro' ),
		'default'  => true,
	],
	[
		'type'            => 'select',
		'settings'        => 'style',
		'label'           => __( 'Style', 'customize-pro' ),
		'default'         => [
			'text',
		],
		'choices'         => [
			'text'   => __( 'Text Link', 'customize-pro' ),
			'button' => __( 'Fixed Button', 'customize-pro' ),
			'html'   => __( 'Custom HTML', 'customize-pro' ),
		],
		'active_callback' => [],
	],
	[
		'type'            => 'text',
		'settings'        => 'text',
		'label'           => __( 'Text', 'customize-pro' ),
		'default'         => __( 'Scroll to top', 'customize-pro' ),
		'active_callback' => [
			[
				'setting'  => _get_setting( 'style' ),
				'value'    => 'text',
				'operator' => '===',
			],
		],
	],
	[
		'type'            => 'textarea',
		'settings'        => 'html',
		'label'           => __( 'Custom HTML', 'customize-pro' ),
		'default'         => '<a href="#top">' . __( 'Scroll to top', 'customize-pro' ) . '</a>',
		'active_callback' => [
			[
				'setting'  => _get_setting( 'style' ),
				'value'    => 'html',
				'operator' => '===',
			],
		],
	],
	[
		'type'            => 'slider',
		'settings'        => 'size',
		'label'           => __( 'Button Size', 'customize-pro' ),
		'default'         => '30',
		'choices'         => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'          => [
			[
				'element'  => '.scroll-to-top-icon',
				'property' => 'height',
				'units'    => 'px',
			],
			[
				'element'  => '.scroll-to-top-icon',
				'property' => 'width',
				'units'    => 'px',
			],
		],
		'active_callback' => [
			[
				'setting'  => _get_setting( 'style' ),
				'value'    => 'button',
				'operator' => '===',
			],
		],
	],
	[
		'type'            => 'slider',
		'settings'        => 'radius',
		'label'           => __( 'Border Radius', 'customize-pro' ),
		'default'         => '4',
		'choices'         => [
			'min'  => 0,
			'max'  => 300,
			'step' => 1,
		],
		'output'          => [
			[
				'element'  => '.scroll-to-top-icon',
				'property' => 'border-radius',
				'units'    => 'px',
			],
		],
		'active_callback' => [
			[
				'setting'  => _get_setting( 'style' ),
				'value'    => 'button',
				'operator' => '===',
			],
		],
	],
];
