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
		'type'     => 'radio-buttonset',
		'settings' => 'size',
		'label'    => \esc_html__( 'Screen Size', 'customize-pro' ),
		'default'  => 'all',
		'choices'  => [
			'all'     => \esc_html__( 'All', 'customize-pro' ),
			'mobile'  => \esc_html__( 'Mobile', 'customize-pro' ),
			'desktop' => \esc_html__( 'Desktop', 'customize-pro' ),
		],
	],
	[
		'type'     => 'custom',
		'settings' => 'tip',
		'default'  => \sprintf(
			'<p><strong>%s</strong> %s <a href="%s" target="_blank">%s</a> %s</p><hr>',
			\esc_html__( 'Tip: ', 'customize-pro' ),
			\esc_html__( 'The responsive breakpoint setting can be changed from the ', 'customize-pro' ),
			\admin_url( 'admin.php?page=customize-pro&tab=general' ),
			\esc_html__( 'General Settings', 'customize-pro' ),
			\esc_html__( 'page', 'customize-pro' )
		),
	],
	[
		'type'            => 'code',
		'settings'        => 'all',
		'default'         => '',
		'choices'         => [
			'language' => 'css',
		],
		'active_callback' => [
			[
				'setting'  => _get_setting( 'size' ),
				'operator' => '===',
				'value'    => 'all',
			],
		],
	],
	[
		'type'            => 'code',
		'settings'        => 'mobile',
		'default'         => '',
		'choices'         => [
			'language' => 'css',
		],
		'active_callback' => [
			[
				'setting'  => _get_setting( 'size' ),
				'operator' => '===',
				'value'    => 'mobile',
			],
		],
	],
	[
		'type'            => 'code',
		'settings'        => 'desktop',
		'default'         => '',
		'choices'         => [
			'language' => 'css',
		],
		'active_callback' => [
			[
				'setting'  => _get_setting( 'size' ),
				'operator' => '===',
				'value'    => 'desktop',
			],
		],
	],
];
