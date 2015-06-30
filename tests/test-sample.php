<?php
class SampleTest extends WP_UnitTestCase {
	function testSample() {
		$my_theme = wp_get_theme();
		$this->assertEquals( 'your-theme', $my_theme->get( 'Name' ) );
	}
}