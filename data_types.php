<?php
// Scalar Types
$int = 42;                    // Integer
$float = 3.14;                // Float
$string = "Hello PHP";        // String
$bool = true;                 // Boolean

// Compound Types
$array = ["apple", "banana"]; // Array
class Person { public $name; }
$object = new Person();       // Object

// Special Types
$null = null;                 // NULL
$resource = fopen("test.txt", "r"); // Resource (if file exists)

// Display types and values
echo "Integer: $int (type: " . gettype($int) . ")<br>";
echo "Float: $float (type: " . gettype($float) . ")<br>";
echo "String: $string (type: " . gettype($string) . ")<br>";
echo "Boolean: " . ($bool ? "true" : "false") . " (type: " . gettype($bool) . ")<br>";
echo "Array: " . print_r($array, true) . " (type: " . gettype($array) . ")<br>";
echo "Object: " . get_class($object) . " (type: " . gettype($object) . ")<br>";
echo "NULL: (type: " . gettype($null) . ")<br>";
echo "Resource: " . (is_resource($resource) ? "Yes" : "No") . " (type: " . gettype($resource) . ")<br>";

if ($resource) fclose($resource);
?>
