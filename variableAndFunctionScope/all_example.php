<?php
// Global variable
$globalVar = 100;

function demoScopes($param1, $param2) {  // Function parameters
    $localVar = 50;  // Local variable
    
    echo "Parameters: $param1, $param2\n";      // 10, 20
    echo "Local: $localVar\n";                  // 50
    
    global $globalVar;  // Access global
    $globalVar += 25;
    echo "Global inside: $globalVar\n";         // 125
    
    static $staticVar = 0;  // Static variable
    $staticVar++;
    echo "Static: $staticVar\n";                // Increments: 1,2,3
}

demoScopes(10, 20);
demoScopes(10, 20);
demoScopes(10, 20);

echo "Global outside: $globalVar\n";          // 125
// echo $localVar;  // Error: undefined outside
?>
