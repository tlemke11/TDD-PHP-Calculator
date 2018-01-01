<?php
/**
 * Created by PhpStorm.
 * User: tylerlemke
 * Date: 1/1/18
 * Time: 10:06 AM
 */

require_once "Calculator.php";


class CalculatorTest extends PHPUnit_Framework_TestCase {

	//refactored with fixtures
    //https://phpunit.de/manual/current/en/fixtures.html

	protected $calc;

	protected function setUp(){
		$this->calc = new Calculator();
	}

	public function testCanAddTwoNumbers(){
		$this->assertEquals( $this->calc->add(array(1, 2)), 3);
	}

	public function testCanAddMultipleNumbers(){
		$this->assertEquals( $this->calc->add(array(1,2,3,4)), 10);
	}

	public function testCanMultiplyTwoNumbers(){
		$this->assertEquals( $this->calc->multiply(array(12,12)), 144);
	}

	public function testCanMultiplyMultipleNumbers(){
		$this->assertEquals( $this->calc->multiply(array(12,12,12,12)), 20736);
	}

	public function testCanDivideTwoNumbers(){
		$this->assertEquals( $this->calc->divide(array(16,4)), 4);
	}
}
