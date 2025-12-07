<?php
// Original values
$int = 123;
$float = 3.14159;
$string = "42.5";
$bool = true;
$null = null;

// Integer casting
$int1 = (int)$float;     
$int2 = (int)$string;     
$int3 = (int)$bool;       

// String casting
$str1 = (string)$int;   
$str2 = (string)$float;   
$str3 = (string)$bool;   

// Float casting
$float1 = (float)$int; 
$float2 = (float)$string;

// Boolean casting
$bool1 = (bool)$int;   
$bool2 = (bool)0;        

// Array/Object casting
$arr = (array)$int;      
$obj = (object)$string;   

// Display results with types
echo "Float to Int: $int1 (" . gettype($int1) . ")<br>";
echo "String to Int: $int2 (" . gettype($int2) . ")<br>";
echo "Int to String: '$str1' (" . gettype($str1) . ")<br>";
echo "String to Float: $float2 (" . gettype($float2) . ")<br>";
echo "Int to Bool: " . ($bool1 ? 'true' : 'false') . "<br>";

var_dump($arr);
var_dump($obj);
?>
