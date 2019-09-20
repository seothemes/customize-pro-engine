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


/**
 * Autoload classes.
 *
 * @noinspection PhpUnhandledExceptionInspection
 */
\spl_autoload_register(
	function ( $class ) {

		if ( strpos( $class, __NAMESPACE__ ) === false ) {
			return;
		}

		$class_dir  = _get_path() . 'lib/classes/';
		$class_name = str_replace( __NAMESPACE__, '', $class );
		$class_file = strtolower( str_replace( [ '\\', '_' ], '-', $class_name ) );

		/* @noinspection PhpIncludeInspection */
		require_once "{$class_dir}class{$class_file}.php";
	}
);
