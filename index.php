<?php

include_once'core/EquationInterface.php';
include_once'core/LogInterface.php';
include_once'core/LogAbstract.php';
include_once 'Alex/Linear.php';
include_once 'Alex/Square.php';
include_once 'Alex/SjedinException.php';
include_once 'Alex/Log.php';

$arr=array();

$arr[] = readline("a= ");
$arr[] = readline("b= ");
$arr[] = readline("c= ");

try {
    $solver = new Alex\Square();
	$roots = $solver->solve($arr[0], $arr[1], $arr[2]);

    Alex\Log::log("roots: " . implode(" , ", $roots));
   
}catch(Alex\SjedinException $e) {

    Alex\Log::log($e->getMessage());
}
Alex\Log::write();