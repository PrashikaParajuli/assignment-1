<?php
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

foreach ($matrix as $row) {
    foreach ($row as $element) {
        printf("%4d ", $element);
    }
    echo "\n";
}
?>
