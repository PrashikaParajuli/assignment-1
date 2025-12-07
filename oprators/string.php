<?php
// Basic concatenation with .
$txt1 = "Hello";
$txt2 = " World";
$txt3 = " PHP!";

$result = $txt1 . $txt2 . $txt3;
echo "Concatenation (.): " . $result . "<br>";

// Concatenation assignment (.=)
$greeting = "Welcome";
$greeting .= " to ";
$greeting .= "PHP Programming";
echo "Concat Assignment (.=): " . $greeting . "<br>"; 

// In loops
$output = "";
for ($i = 1; $i <= 3; $i++) {
    $output .= "Line $i<br>";
}
echo "Loop Concatenation:<br>" . $output;  

?>
