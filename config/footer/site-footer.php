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
		'type'      => 'multicolor',
		'settings'  => 'gradient',
		'label'     => __( 'Gradient Overlay', 'customize-pro' ),
		'transport' => 'refresh',
		'choices'   => [
			'left'  => __( 'Background Left', 'customize-pro' ),
			'right' => __( 'Background Right', 'customize-pro' ),
		],
		'default'   => [
			'left'  => _get_color( 'white' ),
			'right' => _get_color( 'white' ),
		],
	],
	[
		'type'     => 'slider',
		'settings' => 'angle',
		'label'    => __( 'Gradient Angle', 'customize-pro' ),
		'default'  => '135',
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
		'type'     => 'background',
		'settings' => 'background',
		'label'    => __( 'Background Image', 'customize-pro' ),
		'default'  => [
			'background-image'      => '',
			'background-repeat'     => '',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => '',
		],
		'output'   => [
			[
				'element' => '.site-footer',
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
				'element'  => '.site-footer .wrap',
				'property' => 'max-width',
				'units'    => 'px',
			],
		],
	],
];
