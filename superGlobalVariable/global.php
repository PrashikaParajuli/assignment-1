<?php
$a = 50;
$b = 30;

function calculate() {
    $GLOBALS['result'] = $GLOBALS['a'] - $GLOBALS['b'];
}

calculate();
echo "Result: " . $GLOBALS['result'] . "<br>";
?>
