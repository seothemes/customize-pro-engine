<?php

namespace CustomizePro\Tests;

use Brain\Monkey\Functions;
use function CustomizePro\_get_media_query;

/**
 * Class Test_GetMediaQuery
 *
 * @package CustomizePro\Tests
 * @group   bootstrap
 */
class Test_GetMediaQuery extends Test_Case {

	/**
	 * Description of expected behavior.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function test_should_return_formatted_media_query() {
		Functions\expect( 'CustomizePro\_get_value' )
			->twice()
			->with( 'base_body_typography' )
			->andReturn( 600 );

		$this->assertSame( '@media (min-width:600px)', _get_media_query( 'min' ) );
		$this->assertSame( '@media (max-width:600px)', _get_media_query( 'max' ) );
	}

}
