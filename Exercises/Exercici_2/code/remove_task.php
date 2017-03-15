<?php
require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/PdoTasksRepository.php";
if (isset($_GET['id'])) {
    $taskId = $_GET['id'];
    $db = Database::getInstance();
    $tasksRepository = new PdoTasksRepository($db);
    $tasksRepository->delete($taskId);
    header('Location: index.php');
}
header('Location: index.php');
