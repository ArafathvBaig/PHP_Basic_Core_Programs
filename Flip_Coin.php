<?php
$numberOfFlips = readline('Enter Number of Flips: ');
$heads = 0;
$tails = 0;
if ($numberOfFlips <= 0) {
    echo "Input Should be +ve Integer i.e > 0 (ex: 1, 10, 25, .....)";
} else {
    for ($i = 1; $i <= $numberOfFlips; $i++) {
        $flip = rand(0, 1);
        if ($flip < 0.5) {
            $tails += 1;
        } else {
            $heads += 1;
        }
    }
    $percentOfHeads = (($heads * 100) / $numberOfFlips);
    $percentOfTails = (($tails * 100) / $numberOfFlips);
    echo "Number of Heads: " . $heads;
    echo "\nNumber of Tails: " . $tails;
    echo "\nPercentage of Heads: " . round($percentOfHeads, 2);
    echo "\nPercentage of Tails: " . round($percentOfTails, 2);
}
