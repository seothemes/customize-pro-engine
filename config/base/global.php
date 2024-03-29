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

$transition_elements = \array_merge(
	_get_elements( 'button', false, true ),
	_get_elements( 'input', false, true ),
	[
		'a',
		'.above-header',
		'.site-header',
		'.title-area',
		'.primary-header',
		'.nav-primary',
		'.menu-toggle-icon:before',
		'.menu-toggle-icon:after',
		'.menu-overlay',
		'.header-search.full-screen',
		'.scroll-to-top-icon',
	]
);

return [
	[
		'type'        => 'slider',
		'settings'    => 'gutter',
		'label'       => __( 'Gutters', 'customize-pro' ),
		'description' => __( 'Controls the spacing between common page elements such as entries, breadcrumbs, widgets, comments etc.', 'customize-pro' ),
		'default'     => _get_size( 'xl', '' ),
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
		'output'      => [
			[
				'element'         => [
					'.sidebar-content .content',
					'.content-sidebar .content',
					'.narrow-content .content',
					'.page-template-blocks .content',
				],
				'property'        => 'width',
				'value_pattern'   => 'calc(100% - sidebarPrimarypx - $px)',
				'pattern_replace' => [
					'sidebarPrimary' => 'sidebars_primary_width',
				],
				'media_query'     => _get_media_query(),
			],
			[
				'element'         => [
					'.content-sidebar-sidebar .content',
					'.sidebar-sidebar-content .content',
					'.sidebar-content-sidebar .content',
					'.page-template-blocks .content',
				],
				'property'        => 'width',
				'value_pattern'   => 'calc(100% - ( sidebarPrimarypx + sidebarSecondarypx ) - ( $px * 2 ))',
				'pattern_replace' => [
					'sidebarPrimary'   => 'sidebars_primary_width',
					'sidebarSecondary' => 'sidebars_secondary_width',
				],
				'media_query'     => _get_media_query(),
			],
			[
				'element'     => [
					'.full-width-content .content',
					'.narrow-content .content',
				],
				'property'    => 'margin-bottom',
				'units'       => 'px',
				'media_query' => _get_media_query( 'max' ),
			],
			[
				'element'  => [
					'.masonry .pagination',
					'.entry-comments',
					'.single .author-box',
					'.after-entry',
					'.comment-respond',
				],
				'property' => 'margin-top',
				'units'    => 'px',
			],
			[
				'element'  => [
					'.archive-description',
					'.archive .author-box',
					'.archive .entry',
					'.sidebar .widget',
				],
				'property' => 'margin-bottom',
				'units'    => 'px',
			],
			[
				'element'  => [
					'.content.masonry',
				],
				'property' => 'column-gap',
				'units'    => 'px',
			],
			[
				'element'       => [
					'.one-half',
					'.one-third',
					'.one-fourth',
					'.one-sixth',
					'.two-thirds',
					'.two-fourths',
					'.two-sixths',
					'.three-fourths',
					'.three-sixths',
					'.four-sixths',
					'.five-sixths',
					'.archive.has-2-columns .entry',
					'.archive.has-3-columns .entry',
					'.archive.has-4-columns .entry',
				],
				'property'      => 'margin',
				'value_pattern' => '0 0 $px $px',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => [
					'.first',
					'.archive.has-2-columns .entry:nth-of-type(2n + 1)',
					'.archive.has-3-columns .entry:nth-of-type(3n + 1)',
					'.archive.has-4-columns .entry:nth-of-type(4n + 1)',
				],
				'property'      => 'margin-left',
				'value_pattern' => '0px',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => [
					'.one-half',
					'.two-fourths',
					'.three-sixths',
					'.archive.has-2-columns .entry',
				],
				'property'      => 'width',
				'value_pattern' => 'calc((100% - ($px * 1)) / 2)',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => [
					'.one-third',
					'.two-sixths',
					'.archive.has-3-columns .entry',
				],
				'property'      => 'width',
				'value_pattern' => 'calc((100% - ($px * 2)) / 3)',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => [
					'.one-fourth',
					'.archive.has-4-columns .entry',
				],
				'property'      => 'width',
				'value_pattern' => 'calc((100% - ($px * 3)) / 4)',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => [
					'.one-sixth',
				],
				'property'      => 'width',
				'value_pattern' => 'calc((100% - ($px * 5)) / 6)',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => [
					'.two-thirds',
					'.four-sixths',
				],
				'property'      => 'width',
				'value_pattern' => 'calc(((100% - ($px * 2)) / 3) * 2 + $px)',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => [
					'.three-fourths',
				],
				'property'      => 'width',
				'value_pattern' => 'calc(((100% - ($px * 3)) / 4) * 3 + $px * 2)',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => [
					'.five-sixths',
				],
				'property'      => 'width',
				'value_pattern' => 'calc(((100% - ($px * 5)) / 6) * 5 + $px * 4)',
				'media_query'   => _get_media_query(),
			],
			[
				'element'       => '.gutter',
				'property'      => 'width',
				'value_pattern' => 'calc($px - 1px)',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'        => 'slider',
		'settings'    => 'wrap-width',
		'label'       => __( 'Wrap Max Width', 'customize-pro' ),
		'description' => __( 'Controls the maximum percentage of the screen that element wrappers can span.', 'customize-pro' ),
		'default'     => '90',
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
		'output'      => [
			[
				'element'  => [
					'.wrap',
					'.content-sidebar-wrap',
				],
				'property' => 'width',
				'units'    => '%',
			],
			[
				'element'     => '.page-template-blocks .content',
				'property'    => 'width',
				'units'       => '%',
				'media_query' => _get_media_query( 'max' ),
			],
			[
				'element'       => [
					'.full-width-content .alignfull',
					'.narrow-content .alignfull',
					'.full-width-content .alignwide',
					'.narrow-content .alignwide',
				],
				'property'      => 'margin-left',
				'value_pattern' => 'calc((-100vw - -$vw) / 2)',
				'media_query'   => _get_media_query( 'max' ),
			],
			[
				'element'       => '.has-mobile-menu-top .nav-primary',
				'property'      => 'margin-left',
				'value_pattern' => 'calc((-100vw - -$vw) / 2)',
				'media_query'   => _get_media_query( 'max' ),
			],
			[
				'element'       => '.has-mobile-menu-top .nav-primary',
				'property'      => 'margin-right',
				'value_pattern' => 'calc((-100vw - -$vw) / 2)',
				'media_query'   => _get_media_query( 'max' ),
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'        => 'slider',
		'settings'    => 'border-radius',
		'label'       => __( 'Border Radius', 'customize-pro' ),
		'description' => __( 'Controls the border radius for common page elements such as entries, breadcrumbs, widgets, comments etc.', 'customize-pro' ),
		'default'     => '2',
		'choices'     => [
			'min'  => 0,
			'max'  => 20,
			'step' => 1,
		],
		'output'      => [
			[
				'element'  => [
					'.archive-description',
					'.entry',
					'.breadcrumb',
					'.author-box',
					'.after-entry',
					'.entry-comments',
					'.comment-respond',
					'.pagination',
					'.widget',
				],
				'property' => 'border-radius',
				'units'    => 'px',
			],
			[
				'element'       => '.featured-image-first .no-spacing img',
				'property'      => 'border-radius',
				'value_pattern' => '$px $px 0 0',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'        => 'kirki-box-shadow',
		'settings'    => 'box-shadow',
		'label'       => __( 'Drop Shadow', 'customize-pro' ),
		'description' => __( 'Controls the drop shadow for common page elements such as entries, breadcrumbs, widgets, comments etc.', 'customize-pro' ),
		'default'     => '0px 3px 6px 0px rgba(0,10,20,0.01)',
		'output'      => [
			[
				'element'  => [
					'.archive-description',
					'.entry',
					'.sidebar .widget',
					'.breadcrumb',
					'.author-box',
					'.after-entry',
					'.entry-comments',
					'.comment-respond',
					'.pagination',
				],
				'property' => 'box-shadow',
			],
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'        => 'slider',
		'settings'    => 'transition-duration',
		'label'       => __( 'Transitions', 'customize-pro' ),
		'description' => '<br>' . __( 'Duration', 'customize-pro' ),
		'default'     => '0.2',
		'choices'     => [
			'min'  => 0,
			'max'  => 1,
			'step' => 0.01,
		],
		'output'      => [
			[
				'element'       => \array_merge(
					_get_elements( 'button', false, true ),
					_get_elements( 'input', false, true ),
					[
						'a',
						'.title-area',
						'.primary-header',
						'.nav-primary',
						'.scroll-to-top-icon',
					]
				),
				'property'      => 'transition-property',
				'value_pattern' => 'all',
			],
			[
				'element'  => $transition_elements,
				'property' => 'transition-duration',
				'units'    => 's',
			],
		],
	],
	[
		'type'        => 'slider',
		'settings'    => 'transition-delay',
		'description' => __( 'Delay', 'customize-pro' ),
		'default'     => '0',
		'choices'     => [
			'min'  => 0,
			'max'  => 1,
			'step' => 0.01,
		],
		'output'      => [
			[
				'element'  => $transition_elements,
				'property' => 'transition-delay',
				'units'    => 's',
			],
		],
	],
	[
		'type'        => 'select',
		'settings'    => 'transition-function',
		'description' => __( 'Function', 'customize-pro' ),
		'default'     => 'ease',
		'choices'     => [
			'ease'        => __( 'Ease', 'customize-pro' ),
			'ease-in'     => __( 'Ease in', 'customize-pro' ),
			'ease-in-out' => __( 'Ease in out', 'customize-pro' ),
			'ease-out'    => __( 'Ease out', 'customize-pro' ),
			'linear'      => __( 'Linear', 'customize-pro' ),
			'step-end'    => __( 'Step end', 'customize-pro' ),
			'step-middle' => __( 'Step middle', 'customize-pro' ),
			'step-start'  => __( 'Step start', 'customize-pro' ),
		],
		'output'      => [
			[
				'element'  => $transition_elements,
				'property' => 'transition-timing-function',
			],
		],
	],
];
