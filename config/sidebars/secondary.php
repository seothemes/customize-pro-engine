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
			'background'        => __( 'Sidebar Background', 'customize-pro' ),
			'text'              => __( 'Text', 'customize-pro' ),
			'links'             => __( 'Links', 'customize-pro' ),
			'links-hover'       => __( 'Links Hover', 'customize-pro' ),
			'widget-background' => __( 'Widget Background', 'customize-pro' ),
			'widget-title'      => __( 'Widget Title', 'customize-pro' ),
		],
		'default'  => [
			'background'        => '',
			'text'              => '',
			'links'             => '',
			'links-hover'       => '',
			'widget-background' => _get_color( 'white' ),
			'widget-title'      => '',
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.sidebar-secondary',
				'property' => 'background-color',
			],
			[
				'choice'   => 'text',
				'element'  => '.sidebar-secondary',
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.sidebar-secondary a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.sidebar-secondary a:hover, .sidebar-secondary a:focus',
				'property' => 'color',
			],
			[
				'choice'   => 'widget-background',
				'element'  => '.sidebar-secondary .widget',
				'property' => 'background-color',
			],
			[
				'choice'   => 'widget-title',
				'element'  => [
					'.sidebar-secondary .widget-title',
					'.sidebar-secondary .widgettitle',
				],
				'property' => 'color',
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
			'font-size'      => _get_size( 's' ),
			'variant'        => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element' => '.sidebar-secondary',
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
		'settings' => 'widget-title-typography',
		'label'    => __( 'Widget Title Typography', 'customize-pro' ),
		'default'  => [
			'font-family'    => '',
			'font-size'      => _get_size( 'l' ),
			'variant'        => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element' => '.sidebar-secondary .widget-title',
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
		'settings' => 'width',
		'label'    => __( 'Sidebar Width', 'customize-pro' ),
		'default'  => '164',
		'choices'  => [
			'min'  => 200,
			'max'  => 600,
			'step' => 1,
		],
		'output'   => [
			[
				'element'     => '.sidebar-secondary',
				'property'    => 'width',
				'units'       => 'px',
				'media_query' => _get_media_query(),
			],
			[
				'element'         => [
					'.content-sidebar-sidebar .content',
					'.sidebar-sidebar-content .content',
					'.sidebar-content-sidebar .content',
					'.page-template-blocks .content',
				],
				'property'        => 'width',
				'value_pattern'   => 'calc(100% - ( sidebarPrimarypx + $px ) - ( globalSpacingpx * 2 ))',
				'pattern_replace' => [
					'sidebarPrimary' => 'sidebars_primary_width',
					'globalSpacing'  => 'base_global_gutter',
				],
				'media_query'     => _get_media_query(),
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'widget-spacing',
		'label'    => __( 'Widget Spacing', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.sidebar-secondary .widget',
				'property' => 'padding',
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
		'type'     => 'kirki-box-shadow',
		'settings' => 'widget-box-shadow',
		'label'    => __( 'Widget Shadow', 'customize-pro' ),
		'default'  => '0px 0px 0px 0px rgba(0,0,0,0)',
		'output'   => [
			[
				'element'  => '.sidebar.sidebar-secondary .widget',
				'property' => 'box-shadow',
			],
		],
	],
];
