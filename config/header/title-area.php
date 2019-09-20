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
			'site-title'       => __( 'Site Title', 'customize-pro' ),
			'site-title-hover' => __( 'Site Title Hover', 'customize-pro' ),
			'site-description' => __( 'Site Description', 'customize-pro' ),
		],
		'default'  => [
			'site-title'       => _get_color( 'heading' ),
			'site-title-hover' => _get_color( 'accent' ),
			'site-description' => _get_color( 'text' ),
		],
		'output'   => [
			[
				'choice'   => 'site-title',
				'element'  => '.title-area .site-title a',
				'property' => 'color',
			],
			[
				'choice'   => 'site-title-hover',
				'element'  => '.site-title a:hover, .site-title a:focus',
				'property' => 'color',
			],
			[
				'choice'   => 'site-description',
				'element'  => '.site-description',
				'property' => 'color',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => sprintf(
			'<hr><p><strong>%s</strong> %s <a href="javascript:wp.customize.section( %s ).focus();">%s</a></p><hr>',
			esc_html__( 'Tip: ', 'customize-pro' ),
			esc_html__( 'Looking for the Custom Logo settings? Change them in the ', 'customize-pro' ),
			esc_attr( '"title_tagline"' ),
			esc_html__( 'Site Identity Section', 'customize-pro' )
		),
	],
	[
		'type'     => 'typography',
		'settings' => 'typography',
		'label'    => __( 'Site Title Typography', 'customize-pro' ),
		'default'  => [
			'font-family'     => '',
			'font-size'       => '17px',
			'variant'         => '700',
			'line-height'     => '1.4',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
		],
		'output'   => [
			[
				'element' => [
					'.site-title',
					'.site-title a',
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
		'settings' => 'site-description-typography',
		'label'    => __( 'Site Description Typography', 'customize-pro' ),
		'default'  => [
			'font-family'     => '',
			'font-size'       => _get_size( 'xs' ),
			'variant'         => '600',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
		],
		'output'   => [
			[
				'element' => '.site-description',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => sprintf(
			'<hr><p><strong>%s</strong> %s <a href="javascript:wp.customize.section( %s ).focus();">%s</a></p><hr>',
			esc_html__( 'Tip: ', 'customize-pro' ),
			esc_html__( 'The site title and site description can be changed from the ', 'customize-pro' ),
			esc_attr( '"title_tagline"' ),
			esc_html__( 'Site Identity Section', 'customize-pro' )
		),
	],
	[
		'type'     => 'slider',
		'settings' => 'site-title-spacing',
		'label'    => __( 'Site Title Bottom Spacing', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => [
					'.site-title-link',
					'.menu-primary .site-title-link',
				],
				'property'      => 'padding',
				'value_pattern' => '0 0 $px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'vertical-spacing',
		'label'    => __( 'Vertical Spacing', 'customize-pro' ),
		'default'  => '20',
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.title-area',
				'property' => 'margin-top',
				'units'    => 'px',
			],
			[
				'element'  => '.title-area',
				'property' => 'margin-bottom',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-left',
		'label'    => __( 'Spacing Left', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.title-area',
				'property' => 'margin-left',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-right',
		'label'    => __( 'Spacing Right', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.title-area',
				'property' => 'margin-right',
				'units'    => 'px',
			],
		],
	],
];
