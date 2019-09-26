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
		'type'        => 'toggle',
		'settings'    => 'load-stylesheet',
		'label'       => \esc_html__( 'Load child theme CSS', 'customize-pro' ),
		'description' => \esc_html__( 'Load the child theme style.css file on the front end of the site.', 'customize-pro' ),
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'        => 'toggle',
		'settings'    => 'style-trump',
		'label'       => \esc_html__( 'Genesis style trump', 'customize-pro' ),
		'description' => \esc_html__( 'Load the child theme stylesheet at a later priority to override plugin styles.', 'customize-pro' ),
	],
	[
		'type'     => 'custom',
		'settings' => 'divider',
		'default'  => '<hr>',
	],
	[
		'type'        => 'toggle',
		'settings'    => 'fontawesome',
		'label'       => \esc_html__( 'Load FontAwesome', 'customize-pro' ),
		'description' => \sprintf(
			'%s <a href="%s" target="_blank">%s</a> %s',
			\esc_html__( 'Load FontAwesome CSS for use throughout your site. Visit', 'customize-pro' ),
			esc_url( 'https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use' ),
			\esc_html__( 'FontAwesome', 'customize-pro' ),
			\esc_html__( 'for basic usage instructions.', 'customize-pro' )
		),
	],

];
