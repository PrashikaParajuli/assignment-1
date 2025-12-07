<?php
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

// Access specific values
echo "Brand: " . $car["brand"] . "<br>";
echo "Model: " . $car["model"] . "<br>";

// Loop to print 
foreach ($car as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>
