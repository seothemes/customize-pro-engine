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
			'background' => __( 'Background', 'customize-pro' ),
		],
		'default'  => [
			'text'       => _get_color( 'white' ),
			'background' => _get_color( 'heading' ),
		],
		'output'   => [
			[
				'choice'   => 'text',
				'element'  => 'pre, code, kbd, samp',
				'property' => 'color',
			],
			[
				'choice'   => 'text',
				'element'  => '.wp-block-code, .wp-block-preformatted pre',
				'property' => 'color',
				'context'  => [ 'editor' ],
			],
			[
				'choice'   => 'background',
				'element'  => 'pre, code, kbd, samp',
				'property' => 'background-color',
			],
			[
				'choice'   => 'background',
				'element'  => '.wp-block-code, .wp-block-preformatted pre',
				'property' => 'background-color',
				'context'  => [ 'editor' ],
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
			'font-family' => '',
			'font-size'   => _get_size( 's' ),
			'variant'     => '',
			'line-height' => '',
		],
		'output'   => [
			[
				'element' => 'pre, code',
			],
		],
	],
];
