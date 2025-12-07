<?php
echo "<h3>Original Numeric Array</h3>";
$numbers = array(4, 2, 8, 1, 5);
print_r($numbers);

echo "<h3>sort() & rsort()</h3>";
sort($numbers);
echo "sort() (asc): "; print_r($numbers);
echo "Size: " . count($numbers) . "<br>";  // Still 5

rsort($numbers);
echo "rsort() (desc): "; 
print_r($numbers);

echo "<h3>Original Associative Array</h3>";
$people = array("Zoe" => 23, "Amy" => 21, "Bob" => 25);
print_r($people);

echo "<h3>ksort() & krsort()</h3>";
ksort($people);
echo "ksort() (asc key): ";
 print_r($people);
echo "Size: " . count($people) . "<br>";

krsort($people);
echo "krsort() (desc key): "; 
print_r($people);

echo "<h3>Alternative: sizeof()</h3>";
echo "sizeof(numeric): " . sizeof($numbers) . "<br>";
echo "sizeof(assoc): " . sizeof($people) . "<br>";   
?>
