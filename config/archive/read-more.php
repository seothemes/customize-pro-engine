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
		'settings' => 'display',
		'label'    => __( 'Display', 'customize-pro' ),
		'default'  => 'inline',
		'choices'  => [
			'inline' => __( 'Inline', 'customize-pro' ),
			'block'  => __( 'Block', 'customize-pro' ),
			'none'   => __( 'None', 'customize-pro' ),
		],
	],
	[
		'type'     => 'select',
		'settings' => 'style',
		'label'    => __( 'Style', 'customize-pro' ),
		'default'  => 'link',
		'choices'  => [
			'link'   => __( 'Link', 'customize-pro' ),
			'button' => __( 'Button', 'customize-pro' ),
		],
	],
	[
		'type'     => 'text',
		'settings' => 'text',
		'label'    => __( 'Text', 'customize-pro' ),
		'default'  => __( 'Read more', 'customize-pro' ),
		'required' => [
			[
				'setting'  => _get_setting( 'display' ),
				'value'    => 'hide',
				'operator' => '!==',
			],
		],
	],
	[
		'type'     => 'checkbox',
		'settings' => 'ellipses',
		'label'    => __( 'Show ellipses', 'customize-pro' ),
		'default'  => true,
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
			'font-size'      => '',
			'variant'        => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element' => '.more-link',
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
			'link'       => __( 'Link', 'customize-pro' ),
			'link-hover' => __( 'Link Hover', 'customize-pro' ),
		],
		'default'  => [
			'link'       => '',
			'link-hover' => '',
		],
		'output'   => [
			[
				'choice'   => 'link',
				'element'  => '.more-link',
				'property' => 'color',
			],
			[
				'choice'   => 'link-hover',
				'element'  => '.more-link:hover,.more-link:focus',
				'property' => 'color',
			],
		],
	],
];
