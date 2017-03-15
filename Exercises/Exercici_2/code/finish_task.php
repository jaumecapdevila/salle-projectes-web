<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/PdoTasksRepository.php";
if (isset($_GET['id'])) {
    $taskId = $_GET['id'];
    $db = Database::getInstance();
    $tasksRepository = new PdoTasksRepository($db);
    $task = $tasksRepository->get($taskId);
    $task->finishTask();
    $tasksRepository->update($task);
    header('Location: index.php');
}
header('Location: index.php');
