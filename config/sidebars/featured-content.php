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
			'background'  => __( 'Entry Background', 'customize-pro' ),
			'text'        => __( 'Text', 'customize-pro' ),
			'links'       => __( 'Links', 'customize-pro' ),
			'links-hover' => __( 'Links Hover', 'customize-pro' ),
		],
		'default'  => [
			'background'  => '',
			'text'        => '',
			'links'       => _get_color( 'heading' ),
			'links-hover' => _get_color( 'accent' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.sidebar .widget .entry',
				'property' => 'background-color',
			],
			[
				'choice'   => 'text',
				'element'  => '.sidebar .entry-content',
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.sidebar .entry a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.sidebar .entry a:hover, .sidebar .entry a:focus',
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
		'settings' => 'space-between',
		'label'    => __( 'Space Between', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.sidebar .widget .entry',
				'property' => 'margin-bottom',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'entry-spacing',
		'label'    => __( 'Entry Spacing', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.sidebar .widget .entry',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'entry-title-spacing',
		'label'    => __( 'Entry Title Spacing', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => '.sidebar .entry-title',
				'property'      => 'padding-top',
				'value_pattern' => '$px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'image-width',
		'label'    => __( 'Image Width', 'customize-pro' ),
		'default'  => '100',
		'choices'  => [
			'min'  => 0,
			'max'  => 1000,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.sidebar .entry-image',
				'property' => 'width',
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
		'type'     => 'typography',
		'settings' => 'title-typography',
		'label'    => __( 'Title Typography', 'customize-pro' ),
		'default'  => [
			'font-family'    => '',
			'font-size'      => '',
			'variant'        => '',
			'line-height'    => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element' => '.featured-content .entry-title',
			],
		],
	],
];
