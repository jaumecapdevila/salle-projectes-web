<?php
if ($argc < 4) {
    echo "Usage: php exercise_3.php [operartion] [numbers...] \n";
    exit(1);
}
$validOperations = ['suma','rest','multiplica','divideix'];
$operation = $argv[1];
$numbers = array_slice($argv, 2);

if (in_array($operation, $validOperations)) {
    echo $operation($numbers) . "\n";
    exit;
}

function suma($numbers)
{
    $acum = $numbers[0];
    foreach ($numbers as $key => $number) {
        if ($key != 0) {
            $acum += $number;
        }
    }
    return $acum;
}

function resta($numbers)
{
    $acum = $numbers[0];
    foreach ($numbers as $key => $number) {
        if ($acum < $number) {
            return 0;
        }
        if ($key != 0) {
            $acum -= $number;
        }
    }
    return $acum;
}

function multiplica($numbers)
{
    $acum = $numbers[0];
    foreach ($numbers as $key => $number) {
        if ($key != 0) {
            $acum *= $number;
        }
    }
    return $acum;
}

function divideix($numbers)
{
    $acum = $numbers[0];
    foreach ($numbers as $key => $number) {
        if ($number == 0) {
            echo "Invalid operands \n";
            exit(1);
        }
        if ($key != 0) {
            $acum /= $number;
        }
    }
    return $acum;
}
