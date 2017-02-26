<?php
if ($argc != 4) {
    echo "Usage: php exercise_2.php [operartion] [number] [number] \n";
    exit(1);
}
$validOperations = ['suma','rest','multiplica','divideix'];
$operation = $argv[1];
$firstNumber = $argv[2];
$secondNumber = $argv[3];

if (in_array($operation, $validOperations)) {
    echo $operation($firstNumber, $secondNumber) . "\n";
    exit;
}
echo "Invalid operation \n";
exit(1);

function suma($firstNumber, $secondNumber)
{
    return $firstNumber + $secondNumber;
}

function resta($firstNumber, $secondNumber)
{
    if ($firstNumber > $secondNumber) {
        echo "Invalid operands \n";
        exit(1);
    }
    return $firstNumber - $secondNumber;
}

function multiplica($firstNumber, $secondNumber)
{
    return $firstNumber * $secondNumber;
}

function divideix($firstNumber, $secondNumber)
{
    if ($secondNumber == 0) {
        echo "Invalid operands \n";
        exit(1);
    }
    return $firstNumber / $secondNumber;
}
