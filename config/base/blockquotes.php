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
			'border'     => __( 'Border', 'customize-pro' ),
			'text'       => __( 'Text', 'customize-pro' ),
			'background' => __( 'Background', 'customize-pro' ),
			'quote'      => __( 'Quotation Mark', 'customize-pro' ),
			'cite'       => __( 'Citation', 'customize-pro' ),
		],
		'default'  => [
			'border'     => _get_color( 'text' ),
			'text'       => '',
			'background' => _get_color( 'white' ),
			'quote'      => _get_color( 'transparent' ),
			'cite'       => '',
		],
		'output'   => [
			[
				'choice'   => 'border',
				'element'  => [
					'blockquote',
					'.wp-block-quote:not(.is-large):not(.is-style-large)',
				],
				'property' => 'border-color',
			],
			[
				'choice'   => 'text',
				'element'  => 'blockquote',
				'property' => 'color',
			],
			[
				'choice'   => 'background',
				'element'  => 'blockquote',
				'property' => 'background-color',
			],
			[
				'choice'   => 'quote',
				'element'  => 'blockquote:before',
				'property' => 'color',
			],
			[
				'choice'   => 'cite',
				'element'  => 'cite',
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
			'font-family' => '',
			'font-size'   => _get_size( 'l' ),
			'variant'     => '',
			'line-height' => '',
		],
		'output'   => [
			[
				'element' => [
					'blockquote',
					'.wp-block-pullquote.is-style-solid-color blockquote p',
				],
			],
			[
				'element' => '.editor-styles-wrapper .wp-block-pullquote blockquote .editor-rich-text p',
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
		'settings' => 'border-width',
		'label'    => __( 'Border', 'customize-pro' ),
		'default'  => [
			'border-top-width'    => '',
			'border-right-width'  => '',
			'border-bottom-width' => '',
			'border-left-width'   => '1px',
		],
		'choices'  => [
			'labels' => [
				'border-top-width'    => __( 'Border Top Width', 'customize-pro' ),
				'border-right-width'  => __( 'Border Right Width', 'customize-pro' ),
				'border-bottom-width' => __( 'Border Bottom Width', 'customize-pro' ),
				'border-left-width'   => __( 'Border Left Width', 'customize-pro' ),
			],
		],
		'output'   => [
			[
				'choice'   => 'border-top-width',
				'property' => 'border-top-width',
				'element'  => [
					'blockquote',
					'.wp-block-quote:not(.is-large):not(.is-style-large), blockquote',
				],
			],
			[
				'choice'   => 'border-right-width',
				'property' => 'border-right-width',
				'element'  => [
					'blockquote',
					'.wp-block-quote:not(.is-large):not(.is-style-large), blockquote',
				],
			],
			[
				'choice'   => 'border-bottom-width',
				'property' => 'border-bottom-width',
				'element'  => [
					'blockquote',
					'.wp-block-quote:not(.is-large):not(.is-style-large), blockquote',
				],
			],
			[
				'choice'   => 'border-left-width',
				'property' => 'border-left-width',
				'element'  => [
					'blockquote',
					'.wp-block-quote:not(.is-large):not(.is-style-large), blockquote',
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
		'type'     => 'slider',
		'settings' => 'spacing',
		'label'    => __( 'Spacing', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => 'blockquote',
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
		'type'     => 'typography',
		'settings' => 'quote-typography',
		'label'    => __( 'Quotation Mark Typography', 'customize-pro' ),
		'default'  => [
			'font-family' => '',
			'font-size'   => '2em',
			'variant'     => '',
			'line-height' => '1',
		],
		'output'   => [
			[
				'element' => 'blockquote:before',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'radio-buttonset',
		'settings' => 'text-align',
		'label'    => __( 'Text Alignment', 'customize-pro' ),
		'default'  => 'left',
		'choices'  => [
			'left'   => _get_svg( 'alignleft' ),
			'center' => _get_svg( 'aligncenter' ),
			'right'  => _get_svg( 'alignright' ),
		],
		'output'   => [
			[
				'element'  => 'blockquote',
				'property' => 'text-align',
			],
			[
				'choice'        => 'center',
				'element'       => 'blockquote:before',
				'property'      => 'display',
				'value_pattern' => 'block',
				'exclude'       => [ 'left', 'right' ],
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
		'settings' => 'cite-typography',
		'label'    => __( 'Citation Typography', 'customize-pro' ),
		'default'  => [
			'font-family'    => '',
			'font-size'      => '',
			'variant'        => 'regular',
			'line-height'    => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element' => 'cite',
			],
		],
	],
];
