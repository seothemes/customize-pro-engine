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
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => \sprintf(
			'<p><strong>%s</strong> %s <a href="%s" target="_blank">%s</a> %s</p><hr>',
			\esc_html__( 'Tip: ', 'customize-pro' ),
			\esc_html__( 'For a list of available post shortcodes, please see the ', 'customize-pro' ),
			\esc_attr( 'https://my.studiopress.com/documentation/customization/shortcodes-reference/post-shortcode-reference/' ),
			\esc_html__( 'Post Shortcode Reference', 'customize-pro' ),
			\esc_html__( 'provided by StudioPress.', 'customize-pro' )
		),
	],
	[
		'type'     => 'generic',
		'settings' => 'post-info',
		'label'    => __( 'Post Info', 'customize-pro' ),
		'default'  => '[post_date] by [post_author_posts_link] [post_comments] [post_edit]',
		'choices'  => [
			'element' => 'textarea',
			'rows'    => '2',
		],
	],
	[
		'type'     => 'generic',
		'settings' => 'post-meta',
		'label'    => __( 'Post Meta', 'customize-pro' ),
		'default'  => '[post_categories before="Filed Under: "] [post_tags before="Tagged: "]',
		'choices'  => [
			'element' => 'textarea',
			'rows'    => '2',
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
			'text'       => __( 'Text', 'customize-pro' ),
			'link'       => __( 'Link', 'customize-pro' ),
			'link-hover' => __( 'Link Hover', 'customize-pro' ),
		],
		'default'  => [
			'text'                   => '',
			'entry-title-link'       => '',
			'entry-title-link-hover' => '',
		],
		'output'   => [
			[
				'choice'   => 'text',
				'element'  => '.archive .entry-meta',
				'property' => 'color',
			],
			[
				'choice'   => 'link',
				'element'  => '.archive .entry-meta a',
				'property' => 'color',
			],
			[
				'choice'   => 'link-hover',
				'element'  => '.archive .entry-meta a:hover, .archive .entry-meta a:focus',
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
			'font-family'    => '',
			'font-size'      => '',
			'variant'        => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element' => '.archive .entry-meta',
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
		'settings' => 'spacing-top',
		'label'    => __( 'Spacing Top', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.archive .entry-meta',
				'property' => 'margin-top',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-bottom',
		'label'    => __( 'Spacing Bottom', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.archive .entry-meta',
				'property' => 'margin-bottom',
				'units'    => 'px',
			],
		],
	],
];
