<?php
if ($argc !== 2) {
    echo "You must provide a valid task to remove\n";
    exit(1);
}
$taskToRemove = $argv[1];
$file = file_get_contents(__DIR__ . "/todolist.txt");
$tasks = explode(",", $file);
foreach ($tasks as $key => $task) {
    if ($task === $taskToRemove) {
        unset($tasks[$key]);
    }
}
$updatedTasks = implode(",", $tasks);
file_put_contents(__DIR__ . "/todolist.txt", $updatedTasks);
