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
			'background'            => __( 'Background', 'customize-pro' ),
			'link-background'       => __( 'Link Background', 'customize-pro' ),
			'link-background-hover' => __( 'Link Background Hover', 'customize-pro' ),
			'link-text'             => __( 'Link Text', 'customize-pro' ),
			'link-text-hover'       => __( 'Link Text Hover', 'customize-pro' ),
		],
		'default'  => [
			'background'            => _get_color( 'white' ),
			'link-background'       => '',
			'link-background-hover' => '',
			'link-text'             => '',
			'link-text-hover'       => '',
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.pagination',
				'property' => 'background-color',
			],
			[
				'choice'   => 'link-background',
				'element'  => '.pagination a',
				'property' => 'background-color',
			],
			[
				'choice'   => 'link-background-hover',
				'element'  => '.pagination a:hover, .pagination a:focus',
				'property' => 'background-color',
			],
			[
				'choice'   => 'link-text',
				'element'  => '.pagination a',
				'property' => 'color',
			],
			[
				'choice'   => 'link-text-hover',
				'element'  => '.pagination a:hover, .pagination a:focus',
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
				'element'  => '.pagination',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'link-spacing',
		'label'    => __( 'Link Spacing', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.pagination a',
				'property' => 'padding',
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
		'type'     => 'select',
		'settings' => 'alignment',
		'label'    => __( 'Alignment', 'customize-pro' ),
		'default'  => 'full',
		'choices'  => [
			'left'   => __( 'Align Left', 'customize-pro' ),
			'center' => __( 'Align Center', 'customize-pro' ),
			'right'  => __( 'Align Right', 'customize-pro' ),
			'full'   => __( 'Align Full', 'customize-pro' ),
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'text',
		'settings' => 'previous',
		'label'    => __( 'Previous Link Text', 'customize-pro' ),
		'default'  => __( '← Previous', 'customize-pro' ),
	],
	[
		'type'     => 'text',
		'settings' => 'next',
		'label'    => __( 'Next Link Text', 'customize-pro' ),
		'default'  => __( 'Next →', 'customize-pro' ),
	],
];
