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

	public function divide($numbers){
		$dividend = $numbers[0];

		//great idea to unset array here - https://stackoverflow.com/a/5484409/2384006
		unset($numbers[0]);
		foreach ($numbers as $num){
			$dividend = $dividend / $num;
		}
		return $dividend;
	}
}

