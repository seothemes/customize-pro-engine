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
		'type'     => 'select',
		'settings' => 'button-style',
		'label'    => __( 'Button Style', 'customize-pro' ),
		'default'  => 'none',
		'choices'  => [
			'inline' => __( 'Inline', 'customize-pro' ),
			'block'  => __( 'Block', 'customize-pro' ),
			'none'   => __( 'None', 'customize-pro' ),
		],
		'output'   => [
			[
				'element'  => '.search-form-submit',
				'property' => 'display',
			],
			[
				'element'       => '.search-form',
				'property'      => 'display',
				'value_pattern' => 'flex',
				'exclude'       => [ 'block', 'none' ],
			],
		],
	],
	[
		'type'     => 'checkbox',
		'settings' => 'icon',
		'label'    => __( 'Use icon for submit button', 'customize-pro' ),
		'default'  => false,
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'text',
		'settings' => 'input-text',
		'label'    => __( 'Input Text', 'customize-pro' ),
		'default'  => __( 'Search this website', 'customize-pro' ),
	],
	[
		'type'     => 'text',
		'settings' => 'button-text',
		'label'    => __( 'Button Text', 'customize-pro' ),
		'default'  => __( 'Search', 'customize-pro' ),
		'required' => [
			[
				'setting'  => _get_setting( 'icon' ),
				'value'    => false,
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
		'type'     => 'slider',
		'settings' => 'height',
		'label'    => __( 'Button Vertical Spacing', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => 'input.search-form-submit',
				'property' => 'padding-top',
				'units'    => 'px',
			],
			[
				'element'  => 'input.search-form-submit',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'width',
		'label'    => __( 'Button Horizontal Spacing', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => 'input.search-form-submit',
				'property' => 'padding-left',
				'units'    => 'px',
			],
			[
				'element'  => 'input.search-form-submit',
				'property' => 'padding-right',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'icon-size',
		'label'    => __( 'Icon Size', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.search-form-submit',
				'property' => 'background-size',
				'units'    => 'px',
			],
		],
	],
];
