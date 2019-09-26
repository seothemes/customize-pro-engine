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
			\esc_html__( 'Secondary Menu not showing? Make sure it has been assigned from the', 'customize-pro' ),
			\esc_attr( '"menu_locations"' ),
			\esc_html__( 'Menu Locations Screen', 'customize-pro' )
		),
	],
	[
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background' => __( 'Background', 'customize-pro' ),
			'border'     => __( 'Border', 'customize-pro' ),
			'link'       => __( 'Link', 'customize-pro' ),
			'link-hover' => __( 'Link Hover', 'customize-pro' ),
		],
		'default'  => [
			'background' => _get_color( 'white' ),
			'border'     => _get_color( 'border' ),
			'link'       => _get_color( 'text' ),
			'link-hover' => _get_color( 'accent' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.nav-secondary',
				'property' => 'background-color',
			],
			[
				'choice'   => 'border',
				'element'  => '.nav-secondary',
				'property' => 'border-color',
			],
			[
				'choice'   => 'link',
				'element'  => '.menu-secondary a',
				'property' => 'color',
			],
			[
				'choice'   => 'link-hover',
				'element'  => [
					'.menu-secondary a:hover',
					'.menu-secondary a:focus',
					'.menu-secondary .current-menu-item > a',
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
			'font-size'      => '',
			'variant'        => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element'     => '.menu-secondary a',
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
		'label'    => __( 'Alignment', 'customize-pro' ),
		'default'  => 'space-between',
		'choices'  => [
			'space-between' => __( 'Full Width', 'customize-pro' ),
			'flex-start'    => __( 'Left', 'customize-pro' ),
			'flex-end'      => __( 'Right', 'customize-pro' ),
			'center'        => __( 'Center', 'customize-pro' ),
		],
		'output'   => [
			[
				'element'  => '.nav-secondary .wrap',
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
		'type'     => 'slider',
		'settings' => 'width',
		'label'    => __( 'Width', 'customize-pro' ),
		'default'  => '100',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.nav-secondary',
				'property' => 'max-width',
				'units'    => '%',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'height',
		'label'    => __( 'Height', 'customize-pro' ),
		'default'  => '55',
		'choices'  => [
			'min'  => 20,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.nav-secondary',
				'property' => 'height',
				'units'    => 'px',
			],
		],
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
				'element'       => '.menu-secondary a',
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
				'element'       => '.menu-secondary .menu-item',
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
		'label'    => __( 'Border', 'customize-pro' ),
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
				'element'  => '.nav-secondary',
			],
			[
				'choice'   => 'border-bottom-width',
				'property' => 'border-bottom-width',
				'element'  => '.nav-secondary',
			],
		],
	],
];
