<?php

namespace UI;

include_once __DIR__.'/../controller/CalController.php';

use Controller\CalController as CalcController;

Class MainClass {


	const OPERATIONS_CHOICE = array(
	
	    1 => "add", 
	    "sub", 
	    "div", 
	    "multiply"	
	);

	const OPERATIONS_ARGS = array(
	
	    'add' => "addition", 
	    'sub' => "substration", 
	    'div' => "Division", 
	    'multiply' => "Multiplication"	
	);
	
	static	function displayChoice() {
		echo "\n1. add";
		echo "\n2. minus";
		echo "\n3. div";
		echo "\n4. mult";

		echo "\nEnter Your Choice:";
		$input = readline();

		return $input;	
	}

	static function readArgs($argc, $argv) : array {
		if($argc > 1){
			$operation = $argv[1];	
			if(key_exists($operation, self::OPERATIONS_ARGS)){
				if($argc == 2){
                                    return array('input'=> $operation, 'numArray' => [0]);
                                }
				$numArray = preg_split('/[\+n,]/',$argv[2]);//array_splice(argv, 2);	
			
				return array('input' => $operation, 'numArray' => $numArray);
			}
			else{
				return array ("input" => 0, "message" => "Wrong operation");	
			}
			
			
		}	
 		else {
			return array ("error" => 1, "message" => "No Input to the programe");	
		}
	}

	static function bootCal($input, $numArray = array(1,2)){
		$functionName = $input;//self::OPERATIONS_ARGS[$input];
		$calc = new CalcController(); 
		return $calc->$functionName($numArray);
	}
}
