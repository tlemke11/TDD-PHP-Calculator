<?php


class Calculator {

	public function add($numbers){
		$total = 0;
		foreach ($numbers as $num){
			$total += $num;
		}
		return $total;
	}
}

