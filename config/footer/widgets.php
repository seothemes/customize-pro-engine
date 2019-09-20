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
		'type'     => 'radio-image',
		'settings' => 'columns',
		'label'    => __( 'Columns', 'customize-pro' ),
		'default'  => '4-4-4',
		'choices'  => [
			'0'       => _get_url() . 'assets/img/footer-widgets-0.gif',
			'12'      => _get_url() . 'assets/img/footer-widgets-12.gif',
			'6-6'     => _get_url() . 'assets/img/footer-widgets-6-6.gif',
			'8-4'     => _get_url() . 'assets/img/footer-widgets-8-4.gif',
			'4-8'     => _get_url() . 'assets/img/footer-widgets-4-8.gif',
			'4-4-4'   => _get_url() . 'assets/img/footer-widgets-4-4-4.gif',
			'6-3-3'   => _get_url() . 'assets/img/footer-widgets-6-3-3.gif',
			'3-3-6'   => _get_url() . 'assets/img/footer-widgets-3-3-6.gif',
			'3-3-3-3' => _get_url() . 'assets/img/footer-widgets-3-3-3-3.gif',
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background'  => __( 'Background', 'customize-pro' ),
			'text'        => __( 'Text', 'customize-pro' ),
			'headings'    => __( 'Headings', 'customize-pro' ),
			'links'       => __( 'Links', 'customize-pro' ),
			'links-hover' => __( 'Links Hover', 'customize-pro' ),
			'border'      => __( 'Border', 'customize-pro' ),
		],
		'default'  => [
			'background'  => '',
			'text'        => '',
			'headings'    => '',
			'links'       => '',
			'links-hover' => '',
			'border'      => '',
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.footer-widgets',
				'property' => 'background-color',
			],
			[
				'choice'   => 'text',
				'element'  => '.footer-widgets',
				'property' => 'color',
			],
			[
				'choice'   => 'headings',
				'element'  => [
					'.footer-widgets h1',
					'.footer-widgets h2',
					'.footer-widgets h3',
					'.footer-widgets h4',
					'.footer-widgets h5',
					'.footer-widgets h6',
				],
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.footer-widgets a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.footer-widgets a:hover, .footer-widgets a:focus',
				'property' => 'color',
			],
			[
				'choice'   => 'border',
				'element'  => '.footer-widgets',
				'property' => 'border-color',
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
				'element' => '.footer-widgets',
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
		'settings' => 'title-typography',
		'label'    => __( 'Title Typography', 'customize-pro' ),
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
				'element' => '.footer-widgets .widget-title',
			],
		],
	],
	[
		'type'     => 'radio-buttonset',
		'settings' => 'title-text-align',
		'label'    => __( 'Title Text Alignment', 'customize-pro' ),
		'default'  => 'left',
		'choices'  => [
			'left'   => _get_svg( 'alignleft' ),
			'center' => _get_svg( 'aligncenter' ),
			'right'  => _get_svg( 'alignright' ),
		],
		'output'   => [
			[
				'element'  => '.footer-widgets .widget-title',
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
		'type'     => 'slider',
		'settings' => 'wrap-width',
		'label'    => __( 'Container Width', 'customize-pro' ),
		'default'  => '1152',
		'choices'  => [
			'min'  => 256,
			'max'  => 1920,
			'step' => 32,
		],
		'output'   => [
			[
				'element'  => '.footer-widgets .wrap',
				'property' => 'max-width',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-top',
		'label'    => __( 'Spacing Top', 'customize-pro' ),
		'default'  => _get_size( 'xxl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 10,
		],
		'output'   => [
			[
				'element'  => '.footer-widgets',
				'property' => 'padding-top',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-bottom',
		'label'    => __( 'Spacing Bottom', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 10,
		],
		'output'   => [
			[
				'element'  => '.footer-widgets',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'widget-spacing-top',
		'label'    => __( 'Widget Spacing Top', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 10,
		],
		'output'   => [
			[
				'element'  => '.footer-widgets-area',
				'property' => 'padding-top',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'widget-spacing-bottom',
		'label'    => __( 'Widget Spacing Bottom', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 10,
		],
		'output'   => [
			[
				'element'  => '.footer-widgets-area',
				'property' => 'padding-bottom',
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
				'element'  => '.footer-widgets',
			],
			[
				'choice'   => 'border-bottom-width',
				'property' => 'border-bottom-width',
				'element'  => '.footer-widgets',
			],
		],
	],
];
