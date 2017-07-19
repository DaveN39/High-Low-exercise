<?php

$min = 1;
$max = 100;

if($argc == 3) {
    $min = isset($argv[1]) ? $argv[1] : null;
    $max = isset($argv[2]) ? $argv[2] : null;
}

do {
    fwrite(STDOUT, "What is your first name?" . PHP_EOL);
    fwrite(STDOUT, "\t name: ");
    $userName = trim(fgets(STDIN));
    var_dump($userName);
} while (empty($userName));

fwrite(STDOUT, "Welcome, $userName!" . PHP_EOL);

do {
    $randomNumber = mt_rand($min, $max);

    do {
        do {
            fwrite(STDOUT, "Please guess an integer between $min and $max" . PHP_EOL);
            $guess = trim(fgets(STDIN));
        } while (!is_numeric($guess));

        if($randomNumber > $guess) {
            $message = "guess higher!" . PHP_EOL;
        } else if($randomNumber < $guess) {
            $message = "guess lower!" . PHP_EOL;
        }
        echo $message . PHP_EOL;
    } while ($randomNumber != $guess);

    fwrite(STDOUT, "You guessed it! Good job!" . PHP_EOL);

    fwrite(STDOUT, "Would you like to play again? Type 'yes' or 'no'." . PHP_EOL);
    $playAgain = trim(fgets(STDIN));

} while($playAgain != "no");