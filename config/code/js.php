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
		'settings' => 'output',
		'label'    => esc_html__( 'Output', 'customize-pro' ),
		'default'  => 'inline',
		'choices'  => [
			'inline' => esc_html__( 'Inline', 'customize-pro' ),
			'file'   => esc_html__( 'File', 'customize-pro' ),
		],
	],
	[
		'type'     => 'radio-buttonset',
		'settings' => 'type',
		'label'    => esc_html__( 'Type', 'customize-pro' ),
		'default'  => 'jquery',
		'choices'  => [
			'jquery'  => esc_html__( 'jQuery', 'customize-pro' ),
			'vanilla' => esc_html__( 'Vanilla', 'customize-pro' ),
		],
	],
	[
		'type'            => 'code',
		'settings'        => 'jquery',
		'default'         => '',
		'choices'         => [
			'language' => 'javascript',
		],
		'active_callback' => [
			[
				'setting'  => _get_setting( 'type' ),
				'operator' => '===',
				'value'    => 'jquery',
			],
		],
	],
	[
		'type'            => 'code',
		'settings'        => 'vanilla',
		'default'         => '',
		'choices'         => [
			'language' => 'javascript',
		],
		'active_callback' => [
			[
				'setting'  => _get_setting( 'type' ),
				'operator' => '===',
				'value'    => 'vanilla',
			],
		],
	],
];
