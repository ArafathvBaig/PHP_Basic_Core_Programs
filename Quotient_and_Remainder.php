<?php
$dividend = readline('Enter value for Dividend: ');
$divisor = readline('Enter value for Divisor: ');
if ($divisor == 0) {
    echo "Divisor Shouldn't be 0";
} else {
    $quotient = $dividend / $divisor;
    $remainder = $dividend % $divisor;
    echo "Quotient: " . $quotient;
    echo "\nRemainder: " . $remainder;
}
