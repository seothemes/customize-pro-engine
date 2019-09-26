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

$license_status = \get_option( 'customize-pro_license_key_status', 'inactive' );

return [
	[
		'type'     => 'custom',
		'settings' => 'license-key',
		'default'  => \sprintf(
			'<p>%s <b style="color:%s">%s</b>.</p><p>%s <a href="%s" target="_blank">%s</a></p>',
			\esc_html__( 'Your license key is ', 'customize-pro' ),
			( 'valid' === $license_status ? 'green' : 'red' ),
			$license_status,
			\esc_html__( 'License key settings can be managed from the admin screen.', 'customize-pro' ),
			\admin_url( 'admin.php?page=customize-pro-license' ),
			\esc_html__( 'License Settings →', 'customize-pro' )
		),
	],
];
