<?php
include './Basic_Programs/Power.php';
$power = readline('Enter the Power: ');
if ($power <= 0 || $power >= 31) {
    echo "Power Cannot be <0 and >=31";
} else {
    echo pow(2, $power) . " ";
}
