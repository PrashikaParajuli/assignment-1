<?php
$a1 = array("red", "green");
$a2 = array("blue", "yellow");
$a3 = array("black");
echo "a1=$a1, a2=$a2 and a3=$a3";

$merged = array_merge($a1, $a2, $a3);
print_r($merged);
?>
