<?php

namespace CustomizePro\Tests;

use function CustomizePro\_get_setting;

/**
 * Class Test_GetSetting
 *
 * @package CustomizePro\Tests
 * @group   bootstrap
 */
class Test_GetSetting extends Test_Case {

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_should_return_formatted_string() {
		$this->assertSame( 'customize-pro_bootstrap_getSetting_setting', _get_setting( 'setting' ) );
	}

}
