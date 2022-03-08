<?php
$number = readline('Enter a Number: ');
if ($number == 0) {
    echo "Number is neither even nor odd";
} elseif ($number % 2 == 0) {
    echo $number . " is Even.";
} else {
    echo $number . " is Odd.";
}
