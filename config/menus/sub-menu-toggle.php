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
		'default'  => sprintf(
			'<p><strong>%s</strong> %s <a href="javascript:wp.customize.section( %s ).focus();">%s</a></p><hr>',
			esc_html__( 'Tip: ', 'customize-pro' ),
			esc_html__( 'Sub menu toggle buttons are displayed on mobile screen sizes only. Sub menus for desktop devices can be customized from the ', 'customize-pro' ),
			esc_attr( '"customize-pro_menus_sub-menu"' ),
			esc_html__( 'Sub Menu Section', 'customize-pro' )
		),
	],
	[
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background'        => __( 'Background', 'customize-pro' ),
			'background-active' => __( 'Background Active', 'customize-pro' ),
			'text'              => __( 'Icon', 'customize-pro' ),
			'text-active'       => __( 'Text Active', 'customize-pro' ),
			'border'            => __( 'Border', 'customize-pro' ),
			'border-active'     => __( 'Border Active', 'customize-pro' ),
		],
		'default'  => [
			'background'        => _get_color( 'transparent' ),
			'background-active' => _get_color( 'transparent' ),
			'text'              => _get_color( 'heading' ),
			'text-active'       => _get_color( 'heading' ),
			'border'            => _get_color( 'transparent' ),
			'border-active'     => _get_color( 'transparent' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => [
					'.sub-menu-toggle',
					'.sub-menu-toggle:hover',
					'.sub-menu-toggle:focus',
				],
				'property' => 'background',
			],
			[
				'choice'   => 'background-active',
				'element'  => [
					'.sub-menu-toggle.activated:hover',
					'.sub-menu-toggle.activated:focus',
					'.sub-menu-toggle.activated',
				],
				'property' => 'background',
			],
			[
				'choice'        => 'text',
				'element'       => '.sub-menu-toggle-icon:before',
				'property'      => 'border-color',
				'value_pattern' => '$ transparent transparent',
			],
			[
				'choice'   => 'text',
				'element'  => '.sub-menu-toggle-icon:before',
				'property' => 'color',
			],
			[
				'choice'        => 'text-active',
				'element'       => '.sub-menu-toggle-icon.activated:before',
				'property'      => 'border-color',
				'value_pattern' => 'transparent transparent $',
			],
			[
				'choice'   => 'text-active',
				'element'  => '.activated .sub-menu-toggle-icon:before',
				'property' => 'color',
			],
			[
				'choice'   => 'border',
				'element'  => '.sub-menu-toggle',
				'property' => 'border-color',
			],
			[
				'choice'   => 'border-active',
				'element'  => '.sub-menu-toggle.activated',
				'property' => 'border-color',
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
		'settings' => 'icon',
		'label'    => __( 'Icon', 'customize-pro' ),
		'default'  => 'arrow',
		'choices'  => [
			'arrow' => __( 'Arrow', 'customize-pro' ),
			'plus'  => __( 'Plus', 'customize-pro' ),
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'slider',
		'settings' => 'icon-size',
		'label'    => __( 'Icon Size', 'customize-pro' ),
		'default'  => '1',
		'choices'  => [
			'min'  => 0.5,
			'max'  => 3,
			'step' => 0.1,
		],
		'output'   => [
			[
				'element'       => '.sub-menu-toggle-icon:before',
				'property'      => 'transform',
				'value_pattern' => 'scale($)',
				'units'         => '',
			],
			[
				'element'       => '.sub-menu-toggle.activated .sub-menu-toggle-arrow:before',
				'property'      => 'transform',
				'value_pattern' => 'rotate(180deg) scale($)',
				'units'         => '',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'border-width',
		'label'    => __( 'Border Width', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 10,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.sub-menu-toggle',
				'property' => 'border-width',
				'units'    => 'px',
			],
			[
				'element'       => '.sub-menu-toggle',
				'property'      => 'border-style',
				'value_pattern' => 'solid',
				'exclude'       => [ '0' ],
			],
		],
	],
];
