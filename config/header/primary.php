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
		'type'     => 'radio-image',
		'settings' => 'layout',
		'label'    => __( 'Desktop Layout', 'customize-pro' ),
		'default'  => 'has-logo-left',
		'choices'  => [
			'has-logo-left'   => _get_url() . 'assets/img/logo-left.gif',
			'has-logo-above'  => _get_url() . 'assets/img/logo-above.gif',
			'has-logo-right'  => _get_url() . 'assets/img/logo-right.gif',
			'has-logo-center' => _get_url() . 'assets/img/logo-center.gif',
			'has-logo-side'   => _get_url() . 'assets/img/logo-side.gif',
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'radio-image',
		'settings' => 'mobile-layout',
		'label'    => __( 'Mobile Layout', 'customize-pro' ),
		'default'  => 'has-logo-left-mobile',
		'choices'  => [
			'has-logo-left-mobile'  => _get_url() . 'assets/img/mobile-layout-1.gif',
			'has-logo-right-mobile' => _get_url() . 'assets/img/mobile-layout-3.gif',
			'has-logo-above-mobile' => _get_url() . 'assets/img/mobile-layout-2.gif',
			'has-logo-below-mobile' => _get_url() . 'assets/img/mobile-layout-4.gif',
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => sprintf(
			'<hr><p><strong>%s</strong> %s <strong>%s</strong> %s <a href="javascript:wp.customize.control( %s ).focus();">%s</a> %s <a href="javascript:wp.customize.control( %s ).focus();">%s</a></p><hr>',
			esc_html__( 'Tip:', 'customize-pro' ),
			esc_html__( 'Menu not aligning correctly? Try adjusting the', 'customize-pro' ),
			esc_html__( 'Alignment', 'customize-pro' ),
			esc_html__( 'in the', 'customize-pro' ),
			esc_attr( '"menus_primary_alignment"' ),
			esc_html__( 'Primary Menu Section', 'customize-pro' ),
			esc_html__( 'or the', 'customize-pro' ),
			esc_attr( '"menus_secondary_alignment"' ),
			esc_html__( 'Secondary Menu Section', 'customize-pro' )
		),
	],
	[
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background'    => __( 'Background', 'customize-pro' ),
			'border-top'    => __( 'Border Top', 'customize-pro' ),
			'border-bottom' => __( 'Border Bottom', 'customize-pro' ),
		],
		'default'  => [
			'background'    => _get_color( 'white' ),
			'border-top'    => _get_color( 'transparent' ),
			'border-bottom' => _get_color( 'transparent' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.primary-header, .has-logo-side .site-header',
				'property' => 'background-color',
			],
			[
				'choice'   => 'border-top',
				'element'  => '.primary-header',
				'property' => 'border-top-color',
			],
			[
				'choice'   => 'border-bottom',
				'element'  => '.primary-header',
				'property' => 'border-bottom-color',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => sprintf(
			'<hr><p><strong>%s</strong>%s<a href="javascript:wp.customize.section( %s ).focus();">%s</a></p><hr>',
			esc_html__( 'Tip: ', 'customize-pro' ),
			esc_html__( 'Transparent header colors override the Primary Header defaults. They can be customized from the ', 'customize-pro' ),
			esc_attr( '"customize-pro_header_transparent"' ),
			esc_html__( 'Transparent Header Section', 'customize-pro' )
		),
	],
	[
		'type'     => 'slider',
		'settings' => 'wrap-width',
		'label'    => __( 'Container Width', 'customize-pro' ),
		'default'  => '1152',
		'choices'  => [
			'min'  => 256,
			'max'  => 1920,
			'step' => 32,
		],
		'output'   => [
			[
				'element'  => '.site-header .wrap',
				'property' => 'max-width',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'width',
		'label'    => __( 'Header Width', 'customize-pro' ),
		'default'  => '300',
		'choices'  => [
			'min'  => 100,
			'max'  => 600,
			'step' => 1,
		],
		'output'   => [
			[
				'element'     => '.has-logo-side .site-header',
				'property'    => 'width',
				'units'       => 'px',
				'media_query' => _get_media_query(),
			],
			[
				'element'     => '.has-logo-side .site-container',
				'property'    => 'padding-left',
				'units'       => 'px',
				'media_query' => _get_media_query(),
			],
		],
		'required' => [
			[
				'setting'  => _get_setting( 'layout' ),
				'value'    => 'has-logo-side',
				'operator' => '===',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'vertical-spacing',
		'label'    => __( 'Vertical Spacing', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => '.has-logo-side .primary-header',
				'property'      => 'padding',
				'value_pattern' => '$px 0',
				'media_query'   => _get_media_query(),
			],
		],
		'required' => [
			[
				'setting'  => _get_setting( 'layout' ),
				'value'    => 'has-logo-side',
				'operator' => '===',
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
			'border-top-width'    => '1px',
			'border-bottom-width' => '1px',
		],
		'choices'  => [
			'labels' => [
				'border-top-width'    => __( 'Border Top Width', 'customize-pro' ),
				'border-bottom-width' => __( 'Border Bottom Width', 'customize-pro' ),
			],
		],
		'output'   => [
			[
				'choice'   => 'border-top-width',
				'property' => 'border-top-width',
				'element'  => '.primary-header',
			],
			[
				'choice'   => 'border-bottom-width',
				'property' => 'border-bottom-width',
				'element'  => '.primary-header',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'kirki-box-shadow',
		'settings' => 'box-shadow',
		'label'    => __( 'Drop Shadow', 'customize-pro' ),
		'default'  => '0px 3px 6px 0px rgba(0,10,20,0.01)',
		'output'   => [
			[
				'element'  => '.primary-header',
				'property' => 'box-shadow',
			],
		],
	],
];
