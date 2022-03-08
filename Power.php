<?php
function power($n, $power)
{
    $output = $n;
    if ($power == 0) {
        $output = 1;
    } elseif ($power == 1) {
        $output = $n;
    } else {
        for ($i = 2; $i <= $power; $i++) {
            $output *= $n;
        }
    }
    return $output;
}
//echo power(2,2);
