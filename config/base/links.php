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
			'text'       => __( 'Text', 'customize-pro' ),
			'text-hover' => __( 'Text Hover', 'customize-pro' ),
		],
		'default'  => [
			'text'       => _get_color( 'accent' ),
			'background' => '',
		],
		'output'   => [
			[
				'choice'   => 'text',
				'element'  => 'a',
				'property' => 'color',
			],
			[
				'choice'   => 'text-hover',
				'element'  => 'a:hover, a:focus',
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
			'text-decoration' => 'none',
		],
		'output'   => [
			[
				'element' => 'a',
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
		'settings' => 'typography-hover',
		'label'    => __( 'Typography Hover', 'customize-pro' ),
		'default'  => [
			'text-decoration' => 'underline',
		],
		'output'   => [
			[
				'element' => 'a:hover,a:focus',
			],
		],
	],
];
