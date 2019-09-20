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
		'type'     => 'multicheck',
		'settings' => 'enabled',
		'label'    => __( 'Display on', 'customize-pro' ),
		'default'  => [ 'post' ],
		'choices'  => \Kirki_Helper::get_post_types(),
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'select',
		'settings' => 'position',
		'label'    => __( 'Position', 'customize-pro' ),
		'default'  => 'genesis_entry_header',
		'choices'  => [
			'genesis_before_entry'  => __( 'Before Entry', 'customize-pro' ),
			'genesis_entry_header'  => __( 'Entry Header', 'customize-pro' ),
			'genesis_entry_content' => __( 'Entry Content', 'customize-pro' ),
			'genesis_entry_footer'  => __( 'Entry Footer', 'customize-pro' ),
		],
	],
	[
		'type'     => 'select',
		'settings' => 'size',
		'label'    => __( 'Size', 'customize-pro' ),
		'default'  => 'large',
		'choices'  => _get_image_sizes(),
	],
	[
		'type'     => 'select',
		'settings' => 'alignment',
		'label'    => __( 'Alignment', 'customize-pro' ),
		'default'  => '',
		'choices'  => [
			''     => __( 'Default', 'customize-pro' ),
			'wide' => __( 'Wide', 'customize-pro' ),
			'full' => __( 'Full', 'customize-pro' ),
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
		'default'  => _get_size( 'm', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.featured-image',
				'property' => 'padding-top',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-bottom',
		'label'    => __( 'Spacing Bottom', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.featured-image',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
];
