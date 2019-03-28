<?php
namespace Controller;

class CalController {
	public $total = 0;
	function  add(array $numArray) {
		foreach ($numArray as $key => $value){
			if($value < 0){
			    return "Error: Negative numbers not allowed.";			
			}
			$this->total += $value;
		}
		//$this->total = array_sum($numArray);

		return $this->total;
	}
}
