<?php
$n = readline('Enter the N th Value: ');
$temp = 0;
if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        $temp += (1 / $i);
    }
    echo "The " . $n . "th Harmonic Value is: " . $temp;
} else {
    echo "Input cannot be 0 or negative";
}
