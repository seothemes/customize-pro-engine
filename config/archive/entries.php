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
			'background'             => __( 'Background', 'customize-pro' ),
			'entry-title-link'       => __( 'Entry Title Link', 'customize-pro' ),
			'entry-title-link-hover' => __( 'Entry Title Link Hover', 'customize-pro' ),
		],
		'default'  => [
			'background'             => _get_color( 'white' ),
			'entry-title-link'       => _get_color( 'heading' ),
			'entry-title-link-hover' => _get_color( 'accent' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.archive .entry',
				'property' => 'background-color',
			],
			[
				'choice'   => 'entry-title-link',
				'element'  => '.entry-title-link',
				'property' => 'color',
			],
			[
				'choice'   => 'entry-title-link-hover',
				'element'  => '.entry-title-link:hover, .entry-title-link:focus',
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
		'settings' => 'entry-title-typography',
		'label'    => __( 'Entry Title Typography', 'customize-pro' ),
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
				'element' => '.entry-title-link',
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
		'settings' => 'entry-content-typography',
		'label'    => __( 'Entry Content Typography', 'customize-pro' ),
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
				'element' => '.archive .entry-content',
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
		'label'    => __( 'Entry Spacing', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.archive .entry',
				'property' => 'padding',
				'units'    => 'px',
			],
			[
				'element'  => '.featured-image-first .no-spacing',
				'property' => 'margin-top',
				'units'    => 'px',
				'prefix'   => '-',
			],
			[
				'element'  => '.entry-image-link.no-spacing',
				'property' => 'margin-left',
				'units'    => 'px',
				'prefix'   => '-',
			],
			[
				'element'  => '.entry-image-link.no-spacing',
				'property' => 'margin-right',
				'units'    => 'px',
				'prefix'   => '-',
			],
			[
				'element'       => '.entry-image-link.no-spacing',
				'property'      => 'width',
				'value_pattern' => 'calc(100% + (2 * $px))',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'entry-title-spacing-top',
		'label'    => __( 'Entry Title Spacing Top', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.archive .entry-title',
				'property' => 'margin-top',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'entry-title-spacing-bottom',
		'label'    => __( 'Entry Title Spacing Bottom', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.archive .entry-title',
				'property' => 'margin-bottom',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'border-radius',
		'label'    => __( 'Entry Border Radius', 'customize-pro' ),
		'default'  => '2',
		'choices'  => [
			'min'  => 0,
			'max'  => 20,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.archive .entry',
				'property' => 'border-radius',
				'units'    => 'px',
			],
			[
				'element'       => '.featured-image-first .no-spacing img',
				'property'      => 'border-radius',
				'value_pattern' => '$px $px 0 0',
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
		'settings' => 'box-shadow',
		'label'    => __( 'Entry Shadow', 'customize-pro' ),
		'default'  => '',
		'output'   => [
			[
				'element'  => [
					'.archive .entry',
				],
				'property' => 'box-shadow',
			],
		],
	],
];
