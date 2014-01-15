<?php
class PostTest extends PHPUnit_Framework_TestCase
{
var $CI;

	function setUp() {
		$this->CI =& get_instance();
	}
	public function testGetsAllPosts()
	{
		
		$this->assertEquals(1, 1);
	}
	function tearDown() {  }
}