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
			esc_html__( 'This is a widget area. Add or remove widgets from the  ', 'customize-pro' ),
			esc_attr( '"sidebar-widgets-above-header"' ),
			esc_html__( 'Above Header Widgets Screen', 'customize-pro' )
		),
	],
	[
		'type'     => 'radio',
		'settings' => 'enabled',
		'label'    => __( 'Enable on', 'customize-pro' ),
		'default'  => 'hide-mobile',
		'choices'  => [
			'show'         => __( 'Desktop and Mobile', 'customize-pro' ),
			'hide-mobile'  => __( 'Desktop', 'customize-pro' ),
			'hide-desktop' => __( 'Mobile', 'customize-pro' ),
			'hide'         => __( 'None', 'customize-pro' ),
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'        => 'radio-image',
		'settings'    => 'layout',
		'label'       => __( 'Layout', 'customize-pro' ),
		'default'     => 'space-between',
		'collapsible' => true,
		'choices'     => [
			'space-between' => _get_url() . 'assets/img/above-header-full.gif',
			'flex-start'    => _get_url() . 'assets/img/above-header-left.gif',
			'center'        => _get_url() . 'assets/img/above-header-center.gif',
			'flex-end'      => _get_url() . 'assets/img/above-header-right.gif',
		],
		'output'      => [
			[
				'element'  => '.above-header .wrap',
				'property' => 'justify-content',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'multicolor',
		'settings' => 'color',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background'  => __( 'Background', 'customize-pro' ),
			'text'        => __( 'Text', 'customize-pro' ),
			'links'       => __( 'Links', 'customize-pro' ),
			'links-hover' => __( 'Links Hover', 'customize-pro' ),
		],
		'default'  => [
			'background'  => _get_color( 'heading' ),
			'text'        => _get_color( 'border' ),
			'links'       => _get_color( 'border' ),
			'links-hover' => _get_color( 'white' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.above-header',
				'property' => 'background-color',
			],
			[
				'choice'   => 'text',
				'element'  => '.above-header',
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.above-header a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.above-header a:hover, .above-header a:focus',
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
			'font-family' => '',
			'font-size'   => _get_size( 'xs' ),
			'variant'     => 'bolder',
			'line-height' => '1',
		],
		'output'   => [
			[
				'element' => '.above-header',
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
		'settings' => 'menu-typography',
		'label'    => __( 'Menu Typography', 'customize-pro' ),
		'default'  => [
			'font-family' => '',
			'font-size'   => _get_size( 'xs' ),
			'variant'     => '',
			'line-height' => '1',
		],
		'output'   => [
			[
				'element' => '.above-header .menu',
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
		'settings' => 'height',
		'label'    => __( 'Height', 'customize-pro' ),
		'default'  => '40',
		'choices'  => [
			'min'  => 20,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.above-header',
				'property' => 'height',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'menu-item-horizontal-spacing',
		'label'    => __( 'Menu Item Horizontal Spacing', 'customize-pro' ),
		'default'  => _get_size( 'xxs', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.above-header .menu-item',
				'property' => 'padding-left',
				'units'    => 'px',
			],
			[
				'element'  => '.above-header .menu-item',
				'property' => 'padding-right',
				'units'    => 'px',
			],
		],
	],
];
