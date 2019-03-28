<?php

 include_once './view/main.php';

 use UI\MainClass as MainClass;

//$input = MainClass::displayChoice();
$result =  MainClass::readArgs($argc,$argv);
$input = $result['input'];
$numArray = $result['numArray']; 
 
$output = MainClass::bootCal($input, $numArray);

echo $output."\n";
