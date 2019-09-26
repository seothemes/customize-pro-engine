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
			'background'  => __( 'Background', 'customize-pro' ),
			'overlay'     => __( 'Overlay', 'customize-pro' ),
			'links'       => __( 'Links', 'customize-pro' ),
			'links-hover' => __( 'Links Hover', 'customize-pro' ),
		],
		'default'  => [
			'background'  => _get_color( 'white' ),
			'overlay'     => _get_color( 'overlay' ),
			'links'       => _get_color( 'text' ),
			'links-hover' => _get_color( 'text' ),
		],
		'output'   => [
			[
				'choice'      => 'background',
				'element'     => '.nav-primary',
				'property'    => 'background-color',
				'media_query' => _get_media_query( 'max' ),
			],
			[
				'choice'   => 'overlay',
				'element'  => '.menu-overlay',
				'property' => 'background-color',
			],
			[
				'choice'      => 'links',
				'element'     => '.menu-primary a',
				'property'    => 'color',
				'media_query' => _get_media_query( 'max' ),
			],
			[
				'choice'      => 'links-hover',
				'element'     => [
					'.menu-primary a:hover',
					'.menu-primary a:focus',
					'.menu-primary .current-menu-item > a',
				],
				'property'    => 'color',
				'media_query' => _get_media_query( 'max' ),
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'typography',
		'settings' => 'typography',
		'label'    => __( 'Typography', 'customize-pro' ),
		'default'  => [
			'font-family'    => '',
			'font-size'      => '',
			'variant'        => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element'     => '.menu-primary a',
				'media_query' => _get_media_query( 'max' ),
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
		'settings' => 'menu-item-spacing',
		'label'    => __( 'Menu Item Vertical Spacing', 'customize-pro' ),
		'default'  => '10',
		'choices'  => [
			'min'  => 0,
			'max'  => 20,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => '.menu-primary a',
				'property'      => 'padding',
				'value_pattern' => '$px 0',
				'media_query'   => _get_media_query( 'max' ),
			],
			[
				'element'       => '.nav-primary',
				'property'      => 'padding',
				'value_pattern' => '$px 0',
				'media_query'   => _get_media_query( 'max' ),
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'            => 'radio-buttonset',
		'settings'        => 'position',
		'label'           => \esc_html__( 'Positioning', 'customize-pro' ),
		'default'         => 'absolute',
		'choices'         => [
			'absolute' => \esc_html__( 'Absolute', 'customize-pro' ),
			'relative' => \esc_html__( 'Relative', 'customize-pro' ),
		],
		'output'          => [
			[
				'element'     => '.nav-primary',
				'property'    => 'position',
				'media_query' => _get_media_query( 'max' ),
			],
		],
		'active_callback' => [
			[
				'setting'  => _get_setting( 'animation' ),
				'value'    => 'has-mobile-menu-left',
				'operator' => '!==',
			],
			[
				'setting'  => _get_setting( 'animation' ),
				'value'    => 'has-mobile-menu-right',
				'operator' => '!==',
			],
			[
				'setting'  => _get_setting( 'animation' ),
				'value'    => 'has-mobile-menu-center',
				'operator' => '!==',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'radio',
		'settings' => 'animation',
		'label'    => __( 'Animation', 'customize-pro' ),
		'default'  => 'has-mobile-menu-top',
		'choices'  => [
			'has-mobile-menu-top'    => __( 'Slide down from top', 'customize-pro' ),
			'has-mobile-menu-left'   => __( 'Slide in from left', 'customize-pro' ),
			'has-mobile-menu-right'  => __( 'Slide in from right', 'customize-pro' ),
			'has-mobile-menu-center' => __( 'Fade in from center', 'customize-pro' ),
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'width',
		'label'    => __( 'Width', 'customize-pro' ),
		'default'  => '90',
		'choices'  => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'     => [
					'.has-mobile-menu-left .nav-primary',
					'.has-mobile-menu-right .nav-primary',
				],
				'property'    => 'width',
				'units'       => 'vw',
				'media_query' => _get_media_query( 'max' ),
			],
			[
				'element'       => [
					'.has-mobile-menu-right .nav-primary.visible',
				],
				'property'      => 'transform',
				'value_pattern' => 'translateX(calc(100vw - $vw))',
				'media_query'   => _get_media_query( 'max' ),
			],
		],
		'required' => [
			[
				'setting'  => _get_setting( 'animation' ),
				'value'    => 'has-mobile-menu-top',
				'operator' => '!==',
			],
			[
				'setting'  => _get_setting( 'animation' ),
				'value'    => 'has-mobile-menu-center',
				'operator' => '!==',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'select',
		'settings' => 'alignment',
		'label'    => __( 'Menu Item Alignment', 'customize-pro' ),
		'default'  => 'space-between',
		'choices'  => [
			'flex-start'    => __( 'Left', 'customize-pro' ),
			'center'        => __( 'Center', 'customize-pro' ),
			'flex-end'      => __( 'Right', 'customize-pro' ),
			'space-between' => __( 'Full', 'customize-pro' ),
		],
	],
];
