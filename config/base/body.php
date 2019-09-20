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
			'text'               => __( 'Text', 'customize-pro' ),
			'background'         => __( 'Background', 'customize-pro' ),
			'archive-background' => __( 'Archive Background', 'customize-pro' ),
		],
		'default'  => [
			'text'               => _get_color( 'text' ),
			'background'         => _get_color( 'background' ),
			'archive-background' => _get_color( 'background' ),
		],
		'output'   => [
			[
				'choice'   => 'text',
				'element'  => 'body',
				'property' => 'color',
			],
			[
				'choice'   => 'text',
				'element'  => [
					'body .editor-styles-wrapper',
				],
				'property' => 'color',
				'context'  => [ 'editor' ],
			],
			[
				'choice'   => 'background',
				'element'  => 'body',
				'property' => 'background-color',
			],
			'output' => [
				[
					'choice'   => 'archive-background',
					'element'  => 'body.archive',
					'property' => 'background-color',
				],
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
			'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'variant'        => '400',
			'line-height'    => '1.6',
			'letter-spacing' => '',
		],
		'output'   => [
			[
				'element' => 'body',
			],
			[
				'element' => [
					'body .editor-styles-wrapper',
					'body .editor-styles-wrapper .editor-post-title__input',
				],
				'context' => [ 'editor' ],
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
		'settings' => 'font-size',
		'label'    => __( 'Font Size', 'customize-pro' ),
		'default'  => [
			'mobile'  => _get_size( 'm' ),
			'desktop' => _get_size( 'm' ),
		],
		'choices'  => [
			'labels' => [
				'mobile'  => __( 'Mobile', 'customize-pro' ),
				'desktop' => __( 'Desktop', 'customize-pro' ),
			],
		],
		'output'   => [
			[
				'choice'      => 'mobile',
				'property'    => 'font-size',
				'element'     => 'body',
				'media_query' => _get_media_query( 'max' ),
			],
			[
				'choice'      => 'desktop',
				'property'    => 'font-size',
				'element'     => 'body',
				'media_query' => _get_media_query(),
			],
			[
				'choice'   => 'desktop',
				'property' => 'font-size',
				'element'  => [
					'body .editor-styles-wrapper',
					'body .editor-styles-wrapper .editor-post-title__input',
				],
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
		'type'     => 'dimensions',
		'settings' => 'paragraph',
		'label'    => __( 'Paragraphs', 'customize-pro' ),
		'default'  => [
			'margin-top'    => '0',
			'margin-bottom' => _get_size( 'm' ),
		],
		'choices'  => [
			'labels' => [
				'margin-top'    => __( 'Margin Top', 'customize-pro' ),
				'margin-bottom' => __( 'Margin Bottom', 'customize-pro' ),
			],
		],
		'output'   => [
			[
				'choice'   => 'margin-top',
				'property' => 'margin-top',
				'element'  => 'p',
			],
			[
				'choice'   => 'margin-bottom',
				'property' => 'margin-bottom',
				'element'  => [
					'p',
					'.entry-image-link',
					'.entry pre',
					'.entry form',
					'.entry table',
				],
			],
		],
	],
];
