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

$fields = [
	[
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background'  => __( 'Background', 'customize-pro' ),
			'text'        => __( 'Text', 'customize-pro' ),
			'links'       => __( 'Links', 'customize-pro' ),
			'links-hover' => __( 'Links Hover', 'customize-pro' ),
		],
		'default'  => [
			'background'  => _get_color( 'white' ),
			'text'        => '',
			'links'       => '',
			'links-hover' => '',
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.breadcrumb',
				'property' => 'background-color',
			],
			[
				'choice'   => 'text',
				'element'  => '.breadcrumb',
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.breadcrumb a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.breadcrumb a:hover, .breadcrumb a:focus',
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
				'element' => '.breadcrumb',
			],
		],
	],
	[
		'type'     => 'dimensions',
		'settings' => 'font-size',
		'label'    => __( 'Font Size', 'customize-pro' ),
		'default'  => [
			'mobile'  => _get_size( 's' ),
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
				'element'  => '.breadcrumb',
				'property' => 'font-size',
			],
			[
				'choice'      => 'desktop',
				'element'     => '.breadcrumb',
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
		'type'     => 'slider',
		'settings' => 'spacing',
		'label'    => __( 'Spacing', 'customize-pro' ),
		'default'  => _get_size( 'xl', '' ),
		'choices'  => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.breadcrumb',
				'property' => 'padding',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
];

$labels = [
	'home'      => __( 'Home', 'customize-pro' ),
	'prefix'    => __( 'You are here: ', 'customize-pro' ),
	'author'    => __( 'Archives for ', 'customize-pro' ),
	'category'  => __( 'Archives for ', 'customize-pro' ),
	'tag'       => __( 'Archives for ', 'customize-pro' ),
	'date'      => __( 'Archives for ', 'customize-pro' ),
	'search'    => __( 'Search for ', 'customize-pro' ),
	'tax'       => __( 'Archives for ', 'customize-pro' ),
	'post_type' => __( 'Archives for ', 'customize-pro' ),
	'404'       => __( 'Not found: ', 'customize-pro' ),
];

foreach ( $labels as $label => $default ) {
	$breadcrumb_title = ucwords( str_replace( '_', ' ', $label ) );

	$tooltip = \sprintf(
		/* translators: 1 is the breadcrumb title, 2 is the default value. */
		__( 'Changes the %1$s label. Default value is "%2$s".', 'customize-pro' ),
		$breadcrumb_title,
		$default
	);

	$fields[] = [
		'type'     => 'text',
		'settings' => 'label-' . $label,
		'label'    => $breadcrumb_title . __( ' Label', 'customize-pro' ),
		'default'  => $default,
		'tooltip'  => $tooltip,
	];
}

return $fields;
