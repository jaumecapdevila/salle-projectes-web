<?php
if (isset($_POST['task'])) {
    $task = $_POST['task'];
    $db = new PDO('mysql:host=localhost;dbname=todolist', 'homestead', 'secret');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $statement = $db->prepare("INSERT INTO tasks (task, done) VALUES(:task, 0)");
    $statement->bindParam(':task', $task, PDO::PARAM_STR);
    if (!$statement) {
        print_r($db->errorInfo());
        exit;
    }
    $statement->execute();
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
