<?php
$character = readline('Enter a Character: ');
if ($character == 'a' || $character == 'e' || $character == 'i' || $character == 'o' || $character == 'u' ||
    $character == 'A' || $character == 'E' || $character == 'I' || $character == 'O' || $character == 'U') {
    echo $character . " is a Vowel.";
} else {
    echo $character . " is a Consonent.";
}
