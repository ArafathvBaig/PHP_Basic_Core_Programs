<?php
$year = readline('Enter a Year: ');
$length = strlen((string) $year);
if ($length == 4) {
    if ($year % 100 == 0 && $year % 400 == 0) {
        echo $year . " is Leap Year.";
    } elseif ($year % 4 == 0) {
        echo $year . " is Leap Year.";
    } else {
        echo $year . " is Not Leap Year.";
    }
} else {
    print "Year cannot have less than or greater than 4 digits";
}
