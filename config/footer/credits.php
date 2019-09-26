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
		'type'     => 'checkbox',
		'settings' => 'enabled',
		'label'    => __( 'Display Footer Credits section', 'customize-pro' ),
		'default'  => true,
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'multicolor',
		'settings' => 'color',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background'  => __( 'Background', 'customize-pro' ),
			'text'        => __( 'Text', 'customize-pro' ),
			'links'       => __( 'Links', 'customize-pro' ),
			'links-hover' => __( 'Links Hover', 'customize-pro' ),
		],
		'default'  => [
			'background'  => '',
			'text'        => '',
			'links'       => '',
			'links-hover' => '',
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.footer-credits',
				'property' => 'background-color',
			],
			[
				'choice'   => 'text',
				'element'  => '.footer-credits',
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.footer-credits a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.footer-credits a:hover, .footer-widgets a:focus',
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
			'variant'        => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element' => '.footer-credits',
			],
		],
	],
	[
		'type'     => 'dimensions',
		'settings' => 'font-size',
		'label'    => __( 'Font Size', 'customize-pro' ),
		'default'  => [
			'mobile'  => '',
			'desktop' => '',
		],
		'choices'  => [
			'labels' => [
				'mobile'  => __( 'Font Size Mobile', 'customize-pro' ),
				'desktop' => __( 'Font Size Desktop', 'customize-pro' ),
			],
		],
		'output'   => [
			[
				'choice'   => 'mobile',
				'element'  => '.footer-credits',
				'property' => 'font-size',
			],
			[
				'choice'      => 'desktop',
				'element'     => '.footer-credits',
				'property'    => 'font-size',
				'media_query' => _get_media_query(),
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
		'default'  => 'space-between',
		'choices'  => [
			'space-between' => __( 'Full Width', 'customize-pro' ),
			'center'        => __( 'Center', 'customize-pro' ),
			'flex-start'    => __( 'Left', 'customize-pro' ),
			'flex-end'      => __( 'Right', 'customize-pro' ),
		],
		'output'   => [
			[
				'element'  => '.footer-credits .wrap',
				'property' => 'justify-content',
			],
		],
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
				'element'  => '.footer-credits .wrap',
				'property' => 'text-align',
			],
		],
	],
	[
		'type'     => 'select',
		'settings' => 'type',
		'label'    => __( 'Type', 'customize-pro' ),
		'default'  => 'text',
		'choices'  => [
			'text'   => __( 'Text', 'customize-pro' ),
			'widget' => __( 'Widget Area', 'customize-pro' ),
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => \sprintf(
			'<hr><p><strong>%s</strong>%s<a href="javascript:wp.customize.section( %s ).focus();">%s</a></p>',
			\esc_html__( 'Tip: ', 'customize-pro' ),
			\esc_html__( 'The footer credits text can be changed from the ', 'customize-pro' ),
			\esc_attr( '"genesis_footer"' ),
			\esc_html__( 'Genesis Footer Section', 'customize-pro' )
		),
	],
	[
		'type'     => 'checkbox',
		'settings' => 'enabled',
		'label'    => __( 'Display Footer Credits section', 'customize-pro' ),
		'default'  => true,
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
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.footer-credits',
				'property' => 'padding-top',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing',
		'label'    => __( 'Spacing Bottom', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.footer-credits',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
];
