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

namespace CustomizePro\Tests;

use Brain\Monkey\Functions;
use function CustomizePro\_get_breakpoint;
use function CustomizePro\_get_color;
use function CustomizePro\_get_data;
use function CustomizePro\_get_handle;
use function CustomizePro\_get_name;
use function CustomizePro\_get_path;
use function CustomizePro\_get_url;
use function CustomizePro\_get_value;
use function CustomizePro\_get_setting;
use function CustomizePro\_get_elements;
use function CustomizePro\_get_image_sizes;
use function CustomizePro\_get_media_query;

/**
 * Class Test_GetColor
 *
 * @package CustomizePro\Tests
 * @group   bootstrap
 */
class Test_Helpers extends Test_Case {

	/**
	 * Setup test case.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function setUp(): void {
		parent::setUp();

		Functions\when( 'get_intermediate_image_sizes' )->justReturn(
			[
				'small',
				'medium',
				'large',
			]
		);

		Functions\when( 'get_file_data' )->justReturn(
			[
				'name'        => 'Customize Pro Engine',
				'version'     => '1.0.0',
				'plugin-uri'  => 'https://wordpres.org/plugins/customize-pro-engine/',
				'text-domain' => 'customize-pro',
				'description' => 'Core functionality plugin for the Customize Pro child theme.',
				'author'      => 'SEO Themes',
				'author-uri'  => 'https://seothemes.com/',
				'domain-path' => 'assets/lang',
				'network'     => 'Network',
			]
		);
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_path_returns_the_correct_path() {
		$this->assertSame( CUSTOMIZE_PRO_THEME_DIR, _get_path() );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_path_ends_with_slash() {
		$this->assertStringEndsWith( DIRECTORY_SEPARATOR, _get_path() );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_url_ends_with_slash() {
		Functions\when( 'plugins_url' )->justReturn( 'https://example.com/wp-content/plugins' );

		$this->assertStringEndsWith( DIRECTORY_SEPARATOR, _get_url() );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_data_can_return_single_header_value() {
		$this->assertSame( 'customize-pro', _get_data( 'text-domain' ) );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_data_can_return_all_data() {
		$this->assertArrayHasKey( 'name', _get_data() );
		$this->assertArrayHasKey( 'network', _get_data() );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_name_strips_engine_string() {
		$this->assertStringNotContainsString( ' Engine', _get_name() );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_handle_returns_string() {
		$this->assertIsString( _get_handle() );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_breakpoint_returns_an_integer() {
		$this->assertIsInt( _get_breakpoint() );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_color_returns_hex_value() {
		Functions\when( CUSTOMIZE_PRO_NAMESPACE . '\_get_handle' )->justReturn( 'customize-pro' );
		Functions\when( 'get_option' )->justReturn( '#ffffff' );

		$this->assertSame( '#ffffff', _get_color( 'white' ) );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_elements_appends_hover_and_focus_state_to_element() {
		$this->assertStringEndsWith( ':focus', _get_elements( 'button', true ) );
		$this->assertStringEndsWith( ':focus', _get_elements( 'input', true ) );
		$this->assertStringEndsWith( ':focus', _get_elements( 'heading', true ) );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_image_sizes_appends_additional_image_sizes_to_array() {
		$this->assertArrayHasKey( 'custom', _get_image_sizes( [ 'custom' ] ) );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_image_sizes_formats_image_labels() {
		$this->assertSame( 'Full', _get_image_sizes()['full'] );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_media_query_returns_formatted_media_query() {
		Functions\when( CUSTOMIZE_PRO_NAMESPACE . '\_get_value' )
			->justReturn( 600 );

		Functions\when( CUSTOMIZE_PRO_NAMESPACE . '\_get_breakpoint' )
			->justReturn( 600 );

		$this->assertSame( '@media (min-width:600px)', _get_media_query( 'min' ) );
		$this->assertSame( '@media (max-width:600px)', _get_media_query( 'max' ) );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_setting_returns_formatted_string() {
		$this->assertSame( 'utilities_helpers_setting', _get_setting( 'setting' ) );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_get_value_returns_unprefixed_theme_mod_setting_name() {
		Functions\expect( 'get_theme_mod' )
			->twice()
			->andReturnFirstArg();

		$this->assertSame( 'field', _get_value( 'field', 'default' ) );

		Functions\expect( CUSTOMIZE_PRO_NAMESPACE . '\_get_default' )
			->once()
			->andReturnFirstArg();

		$this->assertSame( 'field', _get_value( 'field' ) );
	}
}
