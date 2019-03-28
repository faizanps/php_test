<?php
namespace Controller;

class CalController {
	public $total = 0;
	public $error = FALSE;
	public $negNum = 0;
	function  add(array $numArray) {
		foreach ($numArray as $key => $value){
			if($value < 0){
			    echo $value;
			    //$error = TRUE;
			    //$negNum = $value.",";			
			}
			$this->total += $value;
		}
		if($error){
			    return "Error:Negative numbers (".$negNum.") not allowed";			
			}
		//$this->total = array_sum($numArray);

		return $this->total;
	}
}
