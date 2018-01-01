<?php
/**
 * Created by PhpStorm.
 * User: tylerlemke
 * Date: 1/1/18
 * Time: 10:06 AM
 */

require_once "Calculator.php";


class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function testCanAddTwoNumbersTogether(){
		//Assert 1 + 2 = 3

		//Setup
		$calc = new Calculator();

		$this->assertEquals( $calc->add(1, 2), 3);
	}

}
