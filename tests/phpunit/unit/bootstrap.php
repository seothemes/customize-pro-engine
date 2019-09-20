<?php
/**
 * Bootstraps the Customize Pro Unit Tests.
 *
 * @package CustomizePro\Plugin
 * @since   1.0.0
 * @link    https://CustomizePro.com
 * @license GPL-2.0-or-later
 */

if ( version_compare( phpversion(), '5.6.0', '<' ) ) {
	trigger_error( 'Customize Pro Unit Tests require PHP 5.6 or higher.', E_USER_ERROR ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error -- Valid use case for our testing suite.
}

define( 'customize_pro_TESTS_DIR', __DIR__ );
define( 'customize_pro_THEME_DIR', dirname( dirname( dirname( __DIR__ ) ) ) . DIRECTORY_SEPARATOR );
define( 'customize_pro_TESTS_LIB_DIR', customize_pro_THEME_DIR . 'lib' . DIRECTORY_SEPARATOR );

// Let's define ABSPATH as it is in WordPress, i.e. relative to the filesystem's WordPress root path.
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( dirname( dirname( customize_pro_THEME_DIR ) ) ) . '/' ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedConstantFound -- Valid use case for our testing suite.
}

// Time to load Composer's autoloader.
$customize_pro_autoload_path = customize_pro_THEME_DIR . 'vendor/';

if ( ! file_exists( $customize_pro_autoload_path . 'autoload.php' ) ) {
	trigger_error( 'Whoops, we need Composer before we start running tests.  Please type: `composer install`.  When done, try running `phpunit` again.', E_USER_ERROR ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error -- Valid use case for our testing suite.
}
require_once $customize_pro_autoload_path . 'autoload.php';
unset( $customize_pro_autoload_path );

require_once customize_pro_TESTS_DIR . '/class-test-case.php';
