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
			'background' => __( 'Background', 'customize-pro' ),
			'title'      => __( 'Title', 'customize-pro' ),
			'content'    => __( 'Content', 'customize-pro' ),
			'link'       => __( 'Link', 'customize-pro' ),
			'link-hover' => __( 'Link Hover', 'customize-pro' ),
		],
		'default'  => [
			'background' => _get_color( 'background' ),
			'title'      => '',
			'content'    => '',
			'link'       => '',
			'link-hover' => '',
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.mega-menu .wrap:before',
				'property' => 'background-color',
			],
			[
				'choice'   => 'title',
				'element'  => '.mega-menu .widget-title',
				'property' => 'color',
			],
			[
				'choice'   => 'content',
				'element'  => '.mega-menu',
				'property' => 'color',
			],
			[
				'choice'   => 'link',
				'element'  => '.site-header .mega-menu .widget a',
				'property' => 'color',
			],
			[
				'choice'   => 'link-hover',
				'element'  => [
					'.site-header .mega-menu .widget a:hover',
					'.site-header .mega-menu .widget a:focus',
					'.site-header .mega-menu .widget .current-menu-item > a',
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
		'type'     => 'slider',
		'settings' => 'spacing',
		'label'    => __( 'Spacing', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.mega-menu .wrap',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => \sprintf(
			'<hr><p><strong>%s</strong> %s <a href="javascript:wp.customize.section( %s ).focus();">%s</a></p><hr>',
			\esc_html__( 'Tip:', 'customize-pro' ),
			\esc_html__( 'Add widgets to the mega menu widget area from the', 'customize-pro' ),
			\esc_attr( '"sidebar-widgets-mega-menu"' ),
			\esc_html__( 'Mega Menu Widgets Section', 'customize-pro' )
		),
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
				'element' => '.mega-menu .wrap',
			],
		],
	],
];
