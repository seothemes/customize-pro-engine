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
		'default'   => 'hide',
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
		'settings' => 'divider',
		'default'  => '<hr>',
		'required' => [
			[
				'setting'  => _get_setting( 'enabled' ),
				'value'    => true,
				'operator' => '===',
			],
		],
	],
	[
		'type'     => 'multicolor',
		'settings' => 'color',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background'        => __( 'Header Search Background', 'customize-pro' ),
			'toggle-background' => __( 'Search Toggle Background', 'customize-pro' ),
			'toggle-text'       => __( 'Search Toggle Text', 'customize-pro' ),
			'close-background'  => __( 'Search Close Background', 'customize-pro' ),
			'close-text'        => __( 'Search Close Text', 'customize-pro' ),
			'input-background'  => __( 'Input Background', 'customize-pro' ),
			'input-text'        => __( 'Input Text', 'customize-pro' ),
			'input-border'      => __( 'Input Border', 'customize-pro' ),
			'submit-background' => __( 'Submit Background', 'customize-pro' ),
			'submit-text'       => __( 'Submit Text', 'customize-pro' ),
		],
		'default'  => [
			'background'        => _get_color( 'border' ),
			'toggle-background' => _get_color( 'transparent' ),
			'toggle-text'       => _get_color( 'heading' ),
			'close-background'  => _get_color( 'transparent' ),
			'close-text'        => _get_color( 'heading' ),
			'input-background'  => '',
			'input-text'        => '',
			'input-border'      => '',
			'submit-background' => '',
			'submit-text'       => '',
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.header-search',
				'property' => 'background',
			],
			[
				'choice'   => 'toggle-background',
				'element'  => 'button.header-search-toggle',
				'property' => 'background',
			],
			[
				'choice'   => 'toggle-text',
				'element'  => '.header-search-toggle svg',
				'property' => 'fill',
			],
			[
				'choice'   => 'close-background',
				'element'  => 'button.header-search-close',
				'property' => 'background',
			],
			[
				'choice'   => 'close-text',
				'element'  => '.header-search-close svg',
				'property' => 'fill',
			],
			[
				'choice'   => 'input-background',
				'element'  => '.header-search .search-form-input',
				'property' => 'background',
			],
			[
				'choice'   => 'input-text',
				'element'  => '.header-search .search-form-input',
				'property' => 'color',
			],
			[
				'choice'   => 'input-border',
				'element'  => '.header-search .search-form-input',
				'property' => 'border-color',
			],
			[
				'choice'   => 'submit-background',
				'element'  => '.header-search .search-form-submit',
				'property' => 'background-color',
			],
			[
				'choice'   => 'submit-text',
				'element'  => '.header-search .search-form-submit',
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
		'type'     => 'select',
		'settings' => 'location',
		'label'    => __( 'Search toggle location', 'customize-pro' ),
		'default'  => 'right',
		'choices'  => [
			'left'  => __( 'Left', 'customize-pro' ),
			'right' => __( 'Right', 'customize-pro' ),
		],
	],
	[
		'type'     => 'select',
		'settings' => 'style',
		'label'    => __( 'Header search style', 'customize-pro' ),
		'default'  => 'push-down',
		'choices'  => [
			'push-down'   => __( 'Push Down', 'customize-pro' ),
			'drop-down'   => __( 'Drop Down', 'customize-pro' ),
			'full-screen' => __( 'Full Screen', 'customize-pro' ),
		],
	],
	[
		'type'     => 'checkbox',
		'settings' => 'enable-button',
		'label'    => __( 'Display search form button', 'customize-pro' ),
		'default'  => false,
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'slider',
		'settings' => 'search-form-width',
		'label'    => __( 'Search Form Width', 'customize-pro' ),
		'default'  => '500',
		'choices'  => [
			'min'  => 200,
			'max'  => 1920,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.search-form',
				'property' => 'max-width',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'search-form-spacing',
		'label'    => __( 'Search Form Spacing', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 40,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => '.header-search',
				'property'      => 'padding',
				'value_pattern' => '$px 0',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'search-input-spacing',
		'label'    => __( 'Search Input Spacing', 'customize-pro' ),
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.search-form-input',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'search-toggle-padding',
		'label'    => __( 'Search Toggle Padding', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 40,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => 'button.header-search-toggle',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'search-toggle-margin',
		'label'    => __( 'Search Toggle Margin', 'customize-pro' ),
		'default'  => _get_size( 'l', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 40,
			'step' => 1,
		],
		'output'   => [
			[
				'element'     => '.header-search-toggle.left',
				'property'    => 'margin-left',
				'units'       => 'px',
				'media_query' => _get_media_query( 'max' ),
			],
			[
				'element'     => '.header-search-toggle.right',
				'property'    => 'margin-right',
				'units'       => 'px',
				'media_query' => _get_media_query( 'max' ),
			],
			[
				'element'     => '.header-search-toggle.left',
				'property'    => 'margin-right',
				'units'       => 'px',
				'media_query' => _get_media_query(),
			],
			[
				'element'     => '.header-search-toggle.right',
				'property'    => 'margin-left',
				'units'       => 'px',
				'media_query' => _get_media_query(),
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'search-toggle-size',
		'label'    => __( 'Search Toggle Size', 'customize-pro' ),
		'default'  => _get_size( 'l', '' ),
		'choices'  => [
			'min'  => 4,
			'max'  => 40,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.header-search-toggle svg',
				'property' => 'height',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'search-close-spacing',
		'label'    => __( 'Search Close Spacing', 'customize-pro' ),
		'default'  => _get_size( 'l', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 40,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => 'button.header-search-close',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'search-close-size',
		'label'    => __( 'Search Close Size', 'customize-pro' ),
		'default'  => _get_size( 'l', '' ),
		'choices'  => [
			'min'  => 4,
			'max'  => 40,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.header-search-close svg',
				'property' => 'height',
				'units'    => 'px',
			],
		],
	],
];
