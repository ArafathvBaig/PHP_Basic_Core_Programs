<?php
$firstNumber = readline('Enter First Number: ');
$secondNumber = readline('Enter Second Number: ');
echo "Before Swap";
echo "\nFirst Number: " . $firstNumber;
echo "\nSecond Number: " . $secondNumber;
$firstNumber=$firstNumber+$secondNumber;
$secondNumber = $firstNumber - $secondNumber;
$firstNumber=$firstNumber-$secondNumber;
echo "\nAfter Swap without temp";
echo "\nFirst Number: " . $firstNumber;
echo "\nSecond Number: " . $secondNumber;