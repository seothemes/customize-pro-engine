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
			'link'       => __( 'Link', 'customize-pro' ),
			'link-hover' => __( 'Link Hover', 'customize-pro' ),
			'border'     => __( 'Border', 'customize-pro' ),
		],
		'default'  => [
			'link'       => _get_color( 'text' ),
			'link-hover' => _get_color( 'accent' ),
			'border'     => '',
		],
		'output'   => [
			[
				'choice'   => 'link',
				'element'  => '.menu-primary a',
				'property' => 'color',
			],
			[
				'choice'   => 'link-hover',
				'element'  => [
					'.menu-primary a:hover',
					'.menu-primary a:focus',
					'.menu-primary .current-menu-item > a',
				],
				'property' => 'color',
			],
			[
				'choice'   => 'border',
				'element'  => '.nav-primary',
				'property' => 'border-color',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => \sprintf(
			'<hr><p><strong>%s</strong> %s <a href="javascript:wp.customize.section( %s ).focus();">%s</a> %s</p><hr>',
			\esc_html__( 'Tip: ', 'customize-pro' ),
			\esc_html__( 'These settings are for the default desktop colors only and will be overridden by the ', 'customize-pro' ),
			\esc_attr( '"customize-pro_menus_mobile"' ),
			\esc_html__( 'Mobile Menu', 'customize-pro' ),
			\esc_html__( 'settings on smaller screens.', 'customize-pro' )
		),
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
		'type'     => 'select',
		'settings' => 'alignment',
		'label'    => __( 'Align Menu', 'customize-pro' ),
		'default'  => 'flex-end',
		'choices'  => [
			'flex-start' => __( 'Left', 'customize-pro' ),
			'center'     => __( 'Center', 'customize-pro' ),
			'flex-end'   => __( 'Right', 'customize-pro' ),
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'slider',
		'settings' => 'menu-item-vertical-spacing',
		'label'    => __( 'Menu Item Vertical Spacing', 'customize-pro' ),
		'default'  => '10',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => '.menu-primary a',
				'property'      => 'padding',
				'value_pattern' => '$px 0',
				'media_query'   => _get_media_query(),
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'menu-item-horizontal-spacing',
		'label'    => __( 'Menu Item Horizontal Spacing', 'customize-pro' ),
		'default'  => '10',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => '.menu-primary .menu-item',
				'property'      => 'padding',
				'value_pattern' => '0 $px',
				'media_query'   => _get_media_query(),
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
		'settings' => 'border-width',
		'label'    => __( 'Border Width', 'customize-pro' ),
		'default'  => [
			'border-top-width'    => '',
			'border-bottom-width' => '',
		],
		'choices'  => [
			'labels' => [
				'border-top-width'    => __( 'Border Top Width', 'customize-pro' ),
				'border-bottom-width' => __( 'Border Bottom Width', 'customize-pro' ),
			],
		],
		'output'   => [
			[
				'choice'   => 'border-top-width',
				'property' => 'border-top-width',
				'element'  => '.nav-primary',
			],
			[
				'choice'   => 'border-bottom-width',
				'property' => 'border-bottom-width',
				'element'  => '.nav-primary',
			],
		],
	],
];
