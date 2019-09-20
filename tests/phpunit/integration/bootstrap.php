<?php
/**
 * Bootstraps the WordPress Integration Tests
 *
 * @package CustomizePro\Plugin
 * @since   1.0.0
 * @link    https://CustomizePro.com
 * @license GPL-2.0-or-later
 */

if ( ! file_exists( '../../../wp-content' ) ) {
	trigger_error( 'Unable to run the integration tests, as the wp-content folder does not exist.', E_USER_ERROR );  // @codingStandardsIgnoreLine.
}

// Define testing constants.
define( 'customize_pro_TESTS_DIR', __DIR__ );
define( 'customize_pro_THEME_DIR', dirname( dirname( dirname( __DIR__ ) ) ) . DIRECTORY_SEPARATOR );
define( 'WP_CONTENT_DIR', dirname( dirname( dirname( getcwd() ) ) ) . '/wp-content/' );

if ( ! defined( 'WP_PLUGIN_DIR' ) ) {
	define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . 'plugins/' ); // @codingStandardsIgnoreLine.
}

// Composer autoloader must be loaded before WP_PHPUNIT__DIR will be available
require_once customize_pro_THEME_DIR . 'vendor/autoload.php';

// Give access to tests_add_filter() function.
require_once getenv( 'WP_PHPUNIT__DIR' ) . '/includes/functions.php';

/**
 * test set up, plugin activation, etc.
 */
tests_add_filter(
	'setup_theme',
	function () {
		register_theme_directory( WP_CONTENT_DIR . 'themes' );
		switch_theme( basename( customize_pro_THEME_DIR ) );
	}
);

// Start up the WP testing environment.
require getenv( 'WP_PHPUNIT__DIR' ) . '/includes/bootstrap.php';

// Load the Integration Test Case.
// require_once customize_pro_TESTS_DIR . '/class-test-case.php';
