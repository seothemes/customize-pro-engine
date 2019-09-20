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

add_action( 'genesis_setup', __NAMESPACE__ . '\add_extra_fields', 15 );
/**
 * Add extra fields not specified in config to Customizer.
 *
 * @since 0.1.0
 *
 * @return void
 */
function add_extra_fields() {
	$handle = _get_handle();

	\Kirki::add_field(
		$handle,
		[
			'type'     => 'custom',
			'section'  => 'title_tagline',
			'settings' => 'logo_divider-1',
			'priority' => 8,
			'default'  => '<hr>',
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'      => 'slider',
			'section'   => 'title_tagline',
			'settings'  => 'logo_width',
			'label'     => __( 'Logo Width', 'customize-pro' ),
			'transport' => 'auto',
			'priority'  => 8,
			'default'   => '200',
			'choices'   => [
				'min'  => 0,
				'max'  => 600,
				'step' => 1,
			],
			'output'    => [
				[
					'element'  => '.custom-logo',
					'property' => 'width',
					'units'    => 'px',
				],
			],
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'      => 'slider',
			'section'   => 'title_tagline',
			'settings'  => 'logo_width_mobile',
			'label'     => __( 'Logo Width Mobile', 'customize-pro' ),
			'transport' => 'auto',
			'priority'  => 8,
			'default'   => '200',
			'choices'   => [
				'min'  => 0,
				'max'  => 600,
				'step' => 1,
			],
			'output'    => [
				[
					'element'     => '.custom-logo',
					'property'    => 'width',
					'units'       => 'px',
					'media_query' => _get_media_query( 'max' ),
				],
			],
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'      => 'slider',
			'section'   => 'title_tagline',
			'settings'  => 'logo_width_desktop',
			'label'     => __( 'Logo Width Desktop', 'customize-pro' ),
			'transport' => 'auto',
			'priority'  => 8,
			'default'   => '200',
			'choices'   => [
				'min'  => 0,
				'max'  => 600,
				'step' => 1,
			],
			'output'    => [
				[
					'element'     => '.custom-logo',
					'property'    => 'width',
					'units'       => 'px',
					'media_query' => _get_media_query(),
				],
			],
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'      => 'slider',
			'section'   => 'title_tagline',
			'settings'  => 'logo_spacing',
			'label'     => __( 'Logo Spacing', 'customize-pro' ),
			'transport' => 'auto',
			'priority'  => 8,
			'default'   => '16',
			'choices'   => [
				'min'  => -20,
				'max'  => 100,
				'step' => 1,
			],
			'output'    => [
				[
					'element'       => '.custom-logo',
					'property'      => 'margin',
					'value_pattern' => '$px 0',
				],
			],
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'     => 'custom',
			'section'  => 'title_tagline',
			'settings' => 'logo_divider-232972',
			'priority' => 8,
			'default'  => '<hr>',
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'     => 'checkbox',
			'section'  => 'title_tagline',
			'settings' => 'title',
			'label'    => __( 'Display site title?', 'customize-pro' ),
			'priority' => 20,
			'default'  => true,
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'     => 'checkbox',
			'section'  => 'title_tagline',
			'settings' => 'tagline',
			'label'    => __( 'Display tagline?', 'customize-pro' ),
			'priority' => 20,
			'default'  => true,
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'     => 'custom',
			'section'  => 'title_tagline',
			'settings' => 'logo_divider-2986',
			'priority' => 21,
			'default'  => '<hr>',
		]
	);

	\Kirki::add_field(
		$handle,
		[
			'type'     => 'custom',
			'section'  => 'title_tagline',
			'settings' => 'tip-38739',
			'priority' => 7,
			'default'  => sprintf(
				'<p><strong>%s</strong> %s <a href="javascript:wp.customize.control( %s ).focus();">%s</a> %s <a href="javascript:wp.customize.control( %s ).focus();">%s</a></p><hr>',
				esc_html__( 'Tip: ', 'customize-pro' ),
				esc_html__( 'Using a transparent or sticky header? Set an alternative logo from the ', 'customize-pro' ),
				esc_attr( '"customize-pro_header_transparent_different-logo"' ),
				esc_html__( 'Transparent Header Logo Setting', 'customize-pro' ),
				esc_html__( 'or the', 'customize-pro' ),
				esc_attr( '"customize-pro_header_sticky_different-logo"' ),
				esc_html__( 'Sticky Header Logo Setting', 'customize-pro' )
			),
		]
	);
}
