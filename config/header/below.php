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
		'default'  => \sprintf(
			'<p><strong>%s</strong> %s <a href="javascript:wp.customize.section( %s ).focus();">%s</a></p><hr>',
			\esc_html__( 'Tip: ', 'customize-pro' ),
			\esc_html__( 'This is a widget area. Add or remove widgets from the  ', 'customize-pro' ),
			\esc_attr( '"sidebar-widgets-below-header"' ),
			\esc_html__( 'Below Header Widgets Screen', 'customize-pro' )
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
		'default'     => 'center',
		'collapsible' => true,
		'choices'     => [
			'space-between' => _get_url() . 'assets/img/above-header-full.gif',
			'flex-start'    => _get_url() . 'assets/img/above-header-left.gif',
			'center'        => _get_url() . 'assets/img/above-header-center.gif',
			'flex-end'      => _get_url() . 'assets/img/above-header-right.gif',
		],
		'output'      => [
			[
				'element'  => '.below-header .wrap',
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
		'type'     => 'radio-buttonset',
		'settings' => 'type',
		'label'    => \esc_html__( 'Text Alignment', 'customize-pro' ),
		'default'  => 'center',
		'choices'  => [
			'left'   => \esc_html__( 'Left', 'customize-pro' ),
			'center' => \esc_html__( 'Center', 'customize-pro' ),
			'right'  => \esc_html__( 'Right', 'customize-pro' ),
		],
		'output'   => [
			[
				'element'  => '.below-header',
				'property' => 'text-align',
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
			'headings'    => __( 'Headings', 'customize-pro' ),
			'text'        => __( 'Text', 'customize-pro' ),
			'links'       => __( 'Links', 'customize-pro' ),
			'links-hover' => __( 'Links Hover', 'customize-pro' ),
		],
		'default'  => [
			'background'  => _get_color( 'background' ),
			'headings'    => _get_color( 'heading' ),
			'text'        => _get_color( 'text' ),
			'links'       => _get_color( 'accent' ),
			'links-hover' => _get_color( 'accent' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.below-header:before',
				'property' => 'background-color',
			],
			[
				'choice'   => 'headings',
				'element'  => [
					'.below-header .wrap h1',
					'.below-header .wrap h2',
					'.below-header .wrap h3',
					'.below-header .wrap h4',
					'.below-header .wrap h5',
					'.below-header .wrap h6',
				],
				'property' => 'color',
			],
			[
				'choice'   => 'text',
				'element'  => '.below-header .wrap',
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.below-header .wrap a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.below-header .wrap a:hover, .below-header .wrap a:focus',
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
		'type'     => 'dimensions',
		'settings' => 'typography',
		'label'    => __( 'Typography', 'customize-pro' ),
		'default'  => [
			'mobile'  => _get_size( 's' ),
			'desktop' => '',
		],
		'choices'  => [
			'labels' => [
				'mobile'  => __( 'Font Size Mobile', 'customize-pro' ),
				'desktop' => __( 'Font Size Desktop', 'customize-pro' ),
			],
		],
		'output'   => [
			[
				'choice'   => 'mobile',
				'element'  => '.below-header, .below-header a',
				'property' => 'font-size',
			],
			[
				'choice'      => 'desktop',
				'element'     => '.below-header, .below-header a',
				'property'    => 'font-size',
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
		'settings' => 'spacing',
		'label'    => __( 'Spacing', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => '.below-header',
				'property'      => 'padding',
				'value_pattern' => '$px 0',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'background',
		'settings' => 'background-image',
		'label'    => \esc_html__( 'Background Image', 'customize-pro' ),
		'default'  => [
			'background-image'    => '',
			'background-repeat'   => 'repeat',
			'background-position' => 'center center',
			'background-size'     => 'cover',
		],
		'output'   => [
			[
				'element' => '.below-header',
			],
		],
	],
];
