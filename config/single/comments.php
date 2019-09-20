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
		'type'     => 'multicolor',
		'settings' => 'colors',
		'label'    => __( 'Colors', 'customize-pro' ),
		'choices'  => [
			'background' => __( 'Background', 'customize-pro' ),
		],
		'default'  => [
			'background' => _get_color( 'white' ),
		],
		'output'   => [
			[
				'choice'   => 'background',
				'element'  => '.entry-comments, .comment-respond',
				'property' => 'background-color',
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
				'element'  => [
					'.entry-comments',
					'.comment-respond',
				],
				'property' => 'padding',
				'units'    => 'px',
			],
			[
				'element'       => '.children',
				'property'      => 'padding',
				'value_pattern' => '0 0 $px $px',
			],
			[
				'element'  => '.children .comment',
				'property' => 'padding-top',
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
		'type'     => 'text',
		'settings' => 'says',
		'label'    => __( 'Says Label', 'customize-pro' ),
		'default'  => __( 'says', 'customize-pro' ),
	],
	[
		'type'     => 'text',
		'settings' => 'title',
		'label'    => __( 'Title', 'customize-pro' ),
		'default'  => __( 'Comments', 'customize-pro' ),
	],
	[
		'type'     => 'text',
		'settings' => 'reply',
		'label'    => __( 'Reply', 'customize-pro' ),
		'default'  => __( 'Leave a Reply', 'customize-pro' ),
	],
	[
		'type'     => 'text',
		'settings' => 'submit',
		'label'    => __( 'Submit Button', 'customize-pro' ),
		'default'  => __( 'Post Comment', 'customize-pro' ),
	],
];
