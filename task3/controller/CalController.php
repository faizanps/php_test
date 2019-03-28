<?php
namespace Controller;

class CalController {
	public $total = 0;
	function  add(array $numArray) : int {
		/*foreach ($numArray as $key => $value){
			$this->total += $value;
		}*/
		$this->total = array_sum($numArray);

		return $this->total;
	}
}
