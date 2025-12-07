<?php
$age = 25;
$isMember = true;
$hasCoupon = false;

if ($age > 18 && $isMember) {
    echo "Eligible for discount!<br>";
} else {
    echo "Not eligible.<br>";
}

if ($age < 18 || !$isMember) {
    echo "Need age 18+ or membership.<br>";
} else {
    echo "Access granted.<br>";
}

if ($isMember && $hasCoupon) {
    echo "Extra savings apply!<br>";
} else {
    echo "Standard rate.<br>";
}
?>
