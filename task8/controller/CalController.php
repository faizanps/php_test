<?php
namespace Controller;

class CalController {
	public $total = 1;
	function  multiply(array $numArray) : int {
		/*foreach ($numArray as $key => $value){
		    $value > 1000 ? "" : $this->total = $total*$value;
		}*/
		$this->total = array_product($numArray);

		return $this->total;
	}

