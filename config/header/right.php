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
		'type'      => 'radio',
		'settings'  => 'enable',
		'label'     => __( 'Enable on', 'customize-pro' ),
		'default'   => 'hide-mobile',
		'transport' => 'refresh',
		'choices'   => [
			'show'         => __( 'Desktop and Mobile', 'customize-pro' ),
			'hide-mobile'  => __( 'Desktop', 'customize-pro' ),
			'hide-desktop' => __( 'Mobile', 'customize-pro' ),
			'hide'         => __( 'None', 'customize-pro' ),
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => sprintf(
			'<hr><p><strong>%s</strong> %s <a href="javascript:wp.customize.section( %s ).focus();">%s</a></p><hr>',
			esc_html__( 'Quick Link: ', 'customize-pro' ),
			esc_html__( 'Edit  ', 'customize-pro' ),
			esc_attr( '"sidebar-widgets-header-right-widget"' ),
			esc_html__( 'Header Right Widgets', 'customize-pro' )
		),
	],
	[
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'widget-title'   => __( 'Widget Title', 'customize-pro' ),
			'widget-content' => __( 'Widget Content', 'customize-pro' ),
		],
		'default'  => [
			'widget-title'   => '',
			'widget-content' => '',
		],
		'output'   => [
			[
				'choice'   => 'widget-title',
				'element'  => '.header-right .widget-title',
				'property' => 'color',
			],
			[
				'choice'   => 'widget-content',
				'element'  => '.header-right .widget',
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
		'settings' => 'vertical-spacing',
		'label'    => __( 'Vertical Spacing', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.header-right',
				'property' => 'padding-top',
				'units'    => 'px',
			],
			[
				'element'  => '.header-right',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-left',
		'label'    => __( 'Spacing Left', 'customize-pro' ),
		'default'  => '20',
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.header-right',
				'property' => 'padding-left',
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
				'element'  => '.header-right',
				'property' => 'padding-right',
				'units'    => 'px',
			],
		],
	],
];
