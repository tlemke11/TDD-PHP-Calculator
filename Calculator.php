<?php


class Calculator {

	public function add($numbers){
		$total = 0;
		foreach ($numbers as $num){
			$total += $num;
		}
		return $total;
	}

	public function multiply($numbers){
		$total = 1;
		foreach ($numbers as $num){
			$total *= $num;
		}
		return $total;
	}
}
