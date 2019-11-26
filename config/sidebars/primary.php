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
				'element'  => '.sidebar-primary',
				'property' => 'background-color',
			],
			[
				'choice'   => 'text',
				'element'  => '.sidebar-primary',
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.sidebar-primary a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.sidebar-primary a:hover, .sidebar-primary a:focus',
				'property' => 'color',
			],
			[
				'choice'   => 'widget-background',
				'element'  => '.sidebar-primary .widget',
				'property' => 'background-color',
			],
			[
				'choice'   => 'widget-title',
				'element'  => [
					'.sidebar-primary .widget-title',
					'.sidebar-primary .widgettitle',
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
				'element' => '.sidebar-primary',
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
				'element' => '.sidebar-primary .widget-title',
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
		'default'  => '264',
		'choices'  => [
			'min'  => 200,
			'max'  => 600,
			'step' => 1,
		],
		'output'   => [
			[
				'element'     => '.sidebar-primary',
				'property'    => 'width',
				'units'       => 'px',
				'media_query' => _get_media_query(),
			],
			[
				'element'         => [
					'.sidebar-content .content',
					'.content-sidebar .content',
					'.narrow-content .content',
					'.page-template-blocks .content',
				],
				'property'        => 'width',
				'value_pattern'   => 'calc(100% - $px - globalSpacingpx)',
				'pattern_replace' => [
					'globalSpacing' => 'base_global_gutter',
				],
				'media_query'     => _get_media_query(),
			],
			[
				'element'         => [
					'.content-sidebar-sidebar .content',
					'.sidebar-sidebar-content .content',
					'.sidebar-content-sidebar .content',
					'.page-template-blocks .content',
				],
				'property'        => 'width',
				'value_pattern'   => 'calc(100% - ( $px + sidebarSecondarypx ) - ( globalSpacingpx * 2 ))',
				'pattern_replace' => [
					'sidebarSecondary' => 'sidebars_secondary_width',
					'globalSpacing'    => 'base_global_gutter',
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
				'element'  => '.sidebar-primary .widget',
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
				'element'  => '.sidebar.sidebar-primary .widget',
				'property' => 'box-shadow',
			],
		],
	],
];
