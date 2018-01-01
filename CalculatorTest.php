<?php
/**
 * Created by PhpStorm.
 * User: tylerlemke
 * Date: 1/1/18
 * Time: 10:06 AM
 */

require_once "Calculator.php";


class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function testCanAddTwoNumbers(){
		//Assert 1 + 2 = 3

		//Setup
		$calc = new Calculator();

		$this->assertEquals( $calc->add(array(1, 2)), 3);
	}

	public function testCanAddMultipleNumbers(){
		$calc = new Calculator();

		$this->assertEquals ( $calc->add(array(1,2,3,4)), 10);
	}

	public function testCanMultiplyTwoNumbers(){
		$calc = new Calculator();

		$this->assertEquals( $calc->multiply(array(12,12)), 144);
	}

	public function testCanMultiplyMultipleNumbers(){
		$calc = new Calculator();

		$this->assertEquals( $calc->multiply(array(12,12,12,12)), 20736);
	}
}
