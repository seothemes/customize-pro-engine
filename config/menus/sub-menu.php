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
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => sprintf(
			'<p><strong>%s</strong> %s <a href="javascript:wp.customize.section( %s ).focus();">%s</a></p><hr>',
			esc_html__( 'Tip: ', 'customize-pro' ),
			esc_html__( 'These settings apply to desktop screen sizes only. To customize the sub menu toggle buttons for mobile devices, navigate to the ', 'customize-pro' ),
			esc_attr( '"customize-pro_menus_sub-menu-toggle"' ),
			esc_html__( 'Sub Menu Toggle Section', 'customize-pro' )
		),
	],
	[
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background' => __( 'Sub Menu Background', 'customize-pro' ),
			'link'       => __( 'Sub Menu Link', 'customize-pro' ),
			'link-hover' => __( 'Sub Menu Link Hover', 'customize-pro' ),
		],
		'default'  => [
			'background' => _get_color( 'white' ),
			'link'       => _get_color( 'text' ),
			'link-hover' => _get_color( 'accent' ),
		],
		'output'   => [
			[
				'choice'      => 'background',
				'element'     => '.sub-menu',
				'property'    => 'background-color',
				'media_query' => _get_media_query(),
			],
			[
				'choice'      => 'link',
				'element'     => [
					'.sub-menu',
					'.sub-menu .menu-item a',
				],
				'property'    => 'color',
				'media_query' => _get_media_query(),
			],
			[
				'choice'      => 'link-hover',
				'element'     => [
					'.sub-menu .menu-item a:hover',
					'.sub-menu .menu-item a:focus',
					'.sub-menu .current-menu-item > a',
				],
				'property'    => 'color',
				'media_query' => _get_media_query(),
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
				'element'     => '.sub-menu a',
				'media_query' => _get_media_query(),
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
		'label'    => __( 'Width', 'customize-pro' ),
		'default'  => '200',
		'choices'  => [
			'min'  => 100,
			'max'  => 300,
			'step' => 1,
		],
		'output'   => [
			[
				'element'     => '.sub-menu',
				'property'    => 'min-width',
				'units'       => 'px',
				'media_query' => _get_media_query(),
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'menu-item-spacing',
		'label'    => __( 'Menu Item Spacing', 'customize-pro' ),
		'default'  => '6',
		'choices'  => [
			'min'  => 0,
			'max'  => 20,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => '.sub-menu .menu-item a',
				'property'      => 'padding',
				'value_pattern' => '$px',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => '.sub-menu .menu-item',
				'property'      => 'padding',
				'value_pattern' => '0px',
				'media_query'   => _get_media_query(),
			],
		],
	],
];
