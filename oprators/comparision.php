<?php
$a = 42;
$b = 20;
$c = "42";
echo"a= $a ,b= $b and c=$c";

echo "a==b: " . ($a == $b ? "equal" : "not equal") . "<br>";
echo "a > b: " . ($a > $b ? "a > b" : "no") . "<br>";
echo "a < b: " . ($a < $b ? "a < b" : "no") . "<br>";
echo "a != b: " . ($a != $b ? "not equal" : "equal") . "<br>"; 
echo "a >= b: " . ($a >= $b ? "greater/equal" : "no") . "<br>"; 
echo "a <= b" . ($a <= $b ? "less/equal" : "no") . "<br>";

echo "a == c: " . ($a === $c ? "equal" : "not equal") . "<br>";
?>
