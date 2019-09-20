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
		'settings' => 'enable',
		'label'    => __( 'Enable on', 'customize-pro' ),
		'default'  => [],
		'choices'  => [
			'archive' => __( 'Blog/Archives', 'customize-pro' ),
			'page'    => __( 'Single Pages', 'customize-pro' ),
			'post'    => __( 'Single Posts', 'customize-pro' ),
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'checkbox',
		'settings' => 'featured-image',
		'label'    => __( 'Use post/page featured image if available', 'customize-pro' ),
		'default'  => true,
	],
	[
		'type'     => 'checkbox',
		'settings' => 'breadcrumbs',
		'label'    => __( 'Move breadcrumbs inside hero section', 'customize-pro' ),
		'default'  => false,
	],
	[
		'type'     => 'checkbox',
		'settings' => 'divider',
		'label'    => __( 'Show divider line below title', 'customize-pro' ),
		'default'  => false,
		'output'   => [
			[
				'element'       => '.hero-section h1:after',
				'property'      => 'display',
				'value_pattern' => 'block',
				'exclude'       => [ false ],
			],
		],
	],
	[
		'type'     => 'checkbox',
		'settings' => 'negative',
		'label'    => __( 'Add negative spacing to content', 'customize-pro' ),
		'default'  => false,
		'output'   => [
			[
				'element'       => '.has-hero-section .content',
				'property'      => 'margin-top',
				'value_pattern' => '-3.2rem',
				'exclude'       => [ false ],
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'text'          => __( 'Text', 'customize-pro' ),
			'headings'      => __( 'Headings', 'customize-pro' ),
			'links'         => __( 'Links', 'customize-pro' ),
			'links-hover'   => __( 'Links Hover', 'customize-pro' ),
			'inner-section' => __( 'Inner Section', 'customize-pro' ),
		],
		'default'  => [
			'text'          => _get_color( 'white' ),
			'headings'      => _get_color( 'white' ),
			'links'         => _get_color( 'white' ),
			'links-hover'   => '',
			'inner-section' => '',
		],
		'output'   => [
			[
				'choice'   => 'text',
				'element'  => '.hero-section',
				'property' => 'color',
			],
			[
				'choice'   => 'headings',
				'element'  => [
					'.hero-section h1',
					'.hero-section h2',
					'.hero-section h3',
					'.hero-section h4',
					'.hero-section h5',
					'.hero-section h6',
				],
				'property' => 'color',
			],
			[
				'choice'   => 'links',
				'element'  => '.hero-section a',
				'property' => 'color',
			],
			[
				'choice'   => 'links-hover',
				'element'  => '.hero-section a:hover, .hero-section a:focus',
				'property' => 'color',
			],
			[
				'choice'   => 'inner-section',
				'element'  => '.hero-inner',
				'property' => 'background-color',
			],
		],
	],
	[
		'type'      => 'multicolor',
		'settings'  => 'gradient',
		'label'     => __( 'Gradient Overlay', 'customize-pro' ),
		'transport' => 'refresh',
		'choices'   => [
			'left'  => __( 'Background Left', 'customize-pro' ),
			'right' => __( 'Background Right', 'customize-pro' ),
		],
		'default'   => [
			'left'  => _get_color( 'overlay' ),
			'right' => _get_color( 'overlay' ),
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'angle',
		'label'    => __( 'Gradient Angle', 'customize-pro' ),
		'default'  => 135,
		'choices'  => [
			'min'  => 0,
			'max'  => 360,
			'step' => 1,
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'slider',
		'settings' => 'container-width',
		'label'    => __( 'Container Width', 'customize-pro' ),
		'default'  => '1152',
		'choices'  => [
			'min'  => 256,
			'max'  => 1920,
			'step' => 32,
		],
		'output'   => [
			[
				'element'  => '.hero-section > .wrap',
				'property' => 'max-width',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-mobile',
		'label'    => __( 'Spacing Mobile', 'customize-pro' ),
		'default'  => '60',
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 10,
		],
		'output'   => [
			[
				'element'  => '.hero-section > .wrap',
				'property' => 'padding-top',
				'units'    => 'px',
			],
			[
				'element'  => '.hero-section > .wrap',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-desktop',
		'label'    => __( 'Spacing Desktop', 'customize-pro' ),
		'default'  => '100',
		'choices'  => [
			'min'  => 0,
			'max'  => 300,
			'step' => 10,
		],
		'output'   => [
			[
				'element'     => '.hero-section > .wrap',
				'property'    => 'padding-top',
				'units'       => 'px',
				'media_query' => _get_media_query(),
			],
			[
				'element'     => '.hero-section > .wrap',
				'property'    => 'padding-bottom',
				'units'       => 'px',
				'media_query' => _get_media_query(),
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-inner-vertical',
		'label'    => __( 'Inner Section Vertical Spacing', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 500,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.hero-inner',
				'property' => 'padding-top',
				'units'    => 'px',
			],
			[
				'element'  => '.hero-inner',
				'property' => 'padding-bottom',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'spacing-inner-horizontal',
		'label'    => __( 'Inner Section Horizontal Spacing', 'customize-pro' ),
		'default'  => '0',
		'choices'  => [
			'min'  => 0,
			'max'  => 500,
			'step' => 1,
		],
		'output'   => [
			[
				'element'  => '.hero-inner',
				'property' => 'padding-left',
				'units'    => 'px',
			],
			[
				'element'  => '.hero-inner',
				'property' => 'padding-right',
				'units'    => 'px',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'     => 'radio-buttonset',
		'settings' => 'alignment',
		'label'    => __( 'Alignment', 'customize-pro' ),
		'default'  => 'center',
		'choices'  => [
			'flex-start' => _get_svg( 'alignleft' ),
			'center'     => _get_svg( 'aligncenter' ),
			'flex-end'   => _get_svg( 'alignright' ),
		],
		'output'   => [
			[
				'element'  => '.hero-section, .hero-inner',
				'property' => 'justify-content',
			],
			[
				'element'       => '.hero-section, .hero-inner',
				'property'      => 'text-align',
				'value_pattern' => 'left',
				'exclude'       => [ 'center', 'flex-end' ],
			],
			[
				'element'       => '.hero-section, .hero-inner',
				'property'      => 'text-align',
				'value_pattern' => 'center',
				'exclude'       => [ 'flex-start', 'flex-end' ],
			],
			[
				'element'       => '.hero-section, .hero-inner',
				'property'      => 'text-align',
				'value_pattern' => 'right',
				'exclude'       => [ 'flex-start', 'center' ],
			],
			[
				'element'       => '.hero-section h1:after',
				'property'      => 'margin-left',
				'value_pattern' => '0px',
				'exclude'       => [ 'center', 'flex-end' ],
			],
			[
				'element'       => '.hero-section h1:after',
				'property'      => 'margin-right',
				'value_pattern' => '0px',
				'exclude'       => [ 'flex-start', 'center' ],
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'        => 'text',
		'settings'    => 'latest-posts-title',
		'label'       => __( 'Latest Posts Title', 'customize-pro' ),
		'description' => __( 'If the home page is set to display latests posts, this setting will change the default title text.', 'customize-pro' ),
		'default'     => __( 'Latest Posts', 'customize-pro' ),
	],
	[
		'type'        => 'text',
		'settings'    => 'latest-posts-subtitle',
		'label'       => __( 'Latest Posts Subtitle', 'customize-pro' ),
		'description' => __( 'Same as above, this setting changes the latests posts subtitle.', 'customize-pro' ),
		'default'     => __( 'Showing the latest posts', 'customize-pro' ),
	],
];
