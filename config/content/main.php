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
		'type'        => 'slider',
		'settings'    => 'content-sidebar-wrap-width',
		'label'       => __( 'Content Area Width', 'customize-pro' ),
		'description' => __( 'Controls the maximum width of the main content area. The main content area consists of the content and sidebars.', 'customize-pro' ),
		'default'     => '1152',
		'choices'     => [
			'min'  => 512,
			'max'  => 1920,
			'step' => 16,
		],
		'output'      => [
			[
				'element'  => [
					'.content-sidebar-wrap',
					'.full-width-content .content',
				],
				'property' => 'max-width',
				'units'    => 'px',
			],
			[
				'element'         => [
					'.narrow-content .content',
				],
				'property'        => 'max-width',
				'value_pattern'   => 'calc($px - sidebarPrimaryWidthpx - gutterWidthpx)',
				'pattern_replace' => [
					'sidebarPrimaryWidth' => 'sidebars_primary_width',
					'gutterWidth'         => 'base_global_gutter',
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
		'settings' => 'spacing-mobile',
		'label'    => __( 'Vertical Spacing Mobile', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'     => [
					'.content',
				],
				'property'    => 'margin-top',
				'units'       => 'px',
				'media_query' => _get_media_query( 'max' ),
			],
			[
				'element'     => [
					'.sidebar:last-of-type',
				],
				'property'    => 'margin-bottom',
				'units'       => 'px',
				'media_query' => _get_media_query( 'max' ),
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-desktop',
		'label'    => __( 'Vertical Spacing Desktop', 'customize-pro' ),
		'default'  => _get_size( 'xxl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'output'   => [
			[
				'element'       => [
					'.content',
					'.sidebar',
				],
				'property'      => 'margin',
				'value_pattern' => '$px 0',
				'media_query'   => _get_media_query(),
			],
		],
	],
];
