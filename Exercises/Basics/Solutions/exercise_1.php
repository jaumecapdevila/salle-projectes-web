<?php
if ($argc != 2) {
    echo "Usage: php exercise_1.php [number] \n";
    exit(1);
}
$number = $argv[1];
for ($i=0; $i <= 10; $i++) {
    echo $i*$number . "\n";
}
