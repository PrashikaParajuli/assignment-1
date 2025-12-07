<?php
$fruits = array("Mango", "Papaya", "Orange", "Apple");  // Numeric array creation

echo "First fruit: " . $fruits[0] . "<br>";  // Access index 0

// Loop to print all fruits
for($i = 0; $i < count($fruits); $i++) {
    echo "Fruit " . ($i + 1) . ": " . $fruits[$i] . "<br>";
}
?>
