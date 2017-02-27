<?php
if ($argc !== 2) {
    echo "You must provide a task\n";
    exit(1);
}
$taskToAdd = $argv[1];
$file = file_get_contents(__DIR__ . "/todolist.txt");
if (empty($file)) {
    $modifiedFile = $file . $taskToAdd;
} else {
    $modifiedFile = $file . "," . $taskToAdd;
}
file_put_contents(__DIR__ . "/todolist.txt", $modifiedFile);
