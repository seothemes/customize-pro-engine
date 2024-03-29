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
		'type'     => 'checkbox',
		'settings' => 'enabled',
		'label'    => __( 'Display Above Content section', 'customize-pro' ),
		'default'  => true,
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
				'element'  => '.above-content .wrap',
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
			'border'      => _get_color( 'border' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.above-content',
				'property' => 'background-color',
			],
			[
				'choice'   => 'text',
				'element'  => '.above-content',
				'property' => 'color',
			],
			[
				'choice'   => 'headings',
				'element'  => [
					'.above-content h1',
					'.above-content h2',
					'.above-content h3',
					'.above-content h4',
					'.above-content h5',
					'.above-content h6',
				],
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.above-content a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.above-content a:hover, .above-content a:focus',
				'property' => 'color',
			],
			[
				'choice'   => 'border',
				'element'  => '.above-content',
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
		'type'     => 'slider',
		'settings' => 'spacing',
		'label'    => __( 'Spacing', 'customize-pro' ),
		'default'  => '60',
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 10,
		],
		'output'   => [
			[
				'element'  => '.above-content',
				'property' => 'padding-top',
				'units'    => 'px',
			],
			[
				'element'  => '.above-content',
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
				'element'  => '.above-content',
				'property' => 'border-top-width',
			],
			[
				'choice'   => 'border-bottom-width',
				'element'  => '.above-content',
				'property' => 'border-bottom-width',
			],
		],
	],
];
