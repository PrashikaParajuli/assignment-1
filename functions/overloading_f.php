<?php
class Calculator {
    public function __call($name, $args) {
        if ($name == 'add') {
            return array_sum($args);
        }
        throw new Exception("Method $name not found");
    }
}

$calc = new Calculator();
echo $calc->add(5, 3) . "\n";     
echo $calc->add(1, 2, 3, 4) . "\n";
?>
