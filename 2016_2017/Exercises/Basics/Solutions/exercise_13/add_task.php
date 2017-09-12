<?php
require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/PdoTasksRepository.php";

if (isset($_POST['task'])) {
    $task = $_POST['task'];
    $db = Database::getInstance();
    $tasksRepository = new PdoTasksRepository($db);
    $taskId = $tasksRepository->getLastInsertedId() + 1;
    $task = new Task($taskId, $task, 0);
    $tasksRepository->save($task);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add task</title>
</head>
<body>
<form class="add" action="add_task.php" method="POST">
    <input type="text" name="task" placeholder="New task" value="">
    <button type="submit">Add</button>
</form>
</body>
</html>
