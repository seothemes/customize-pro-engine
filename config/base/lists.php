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
		'type'     => 'select',
		'settings' => 'type',
		'label'    => __( 'Default type', 'customize-pro' ),
		'default'  => 'disc',
		'choices'  => [
			'disc'   => __( 'Disc', 'customize-pro' ),
			'circle' => __( 'Circle', 'customize-pro' ),
			'square' => __( 'Square', 'customize-pro' ),
			'none'   => __( 'None', 'customize-pro' ),
		],
		'output'   => [
			[
				'element'  => '.entry-content li',
				'property' => 'list-style-type',
			],
		],
	],
	[
		'type'     => 'select',
		'settings' => 'position',
		'label'    => __( 'Default position', 'customize-pro' ),
		'default'  => 'inside',
		'choices'  => [
			'inside'  => __( 'Inside', 'customize-pro' ),
			'outside' => __( 'Outside', 'customize-pro' ),
		],
		'output'   => [
			[
				'element'  => '.entry-content li',
				'property' => 'list-style-position',
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
		'settings' => 'spacing-bottom',
		'label'    => __( 'Spacing Bottom', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.entry-content li',
				'property' => 'margin-bottom',
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
				'element' => '.entry-content li',
			],
		],
	],
];
