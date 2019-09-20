<?php

namespace CustomizePro\Tests;

use Brain\Monkey\Functions;
use function CustomizePro\_get_color;

/**
 * Class Test_GetColor
 *
 * @package CustomizePro\Tests
 * @group   bootstrap
 */
class Test_GetColor extends Test_Case {

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_should_return_hex_value() {
		$this->assertSame( '#ffffff', _get_color( 'white' ) );
	}

}