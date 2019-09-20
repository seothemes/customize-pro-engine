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
		],
		'default'  => [
			'background' => _get_color( 'white' ),
			'title'      => '',
			'content'    => '',
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.author-box',
				'property' => 'background-color',
			],
			[
				'choice'   => 'title',
				'element'  => '.author-box-title',
				'property' => 'color',
			],
			[
				'choice'   => 'content',
				'element'  => [
					'.author-box-content',
					'.author-box-content p',
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
		'type'     => 'text',
		'settings' => 'title',
		'label'    => __( 'Title', 'customize-pro' ),
		'default'  => '',
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
				'element'  => '.author-box',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'title-spacing',
		'label'    => __( 'Title Bottom Spacing', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.author-box-title',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
];
