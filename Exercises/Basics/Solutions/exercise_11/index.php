<?php
$db = new PDO('mysql:host=localhost;dbname=todolist', 'homestead', 'secret');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$statement = $db->query('SELECT * FROM tasks ORDER BY id DESC');
$tasks = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do list</title>
    <style>
        .done {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
<ul>
    <?php foreach ($tasks as $key => $task) { ?>
        <li>
            <p class="<?php if ($task['done']) {
                echo "done";
            } ?>"><?php echo $task['task']; ?></p>
            <a href="remove_task.php?id=<?php echo $task['id']; ?>">Remove</a>
            <?php if (!$task['done']) { ?>
                <a href="finish_task.php?id=<?php echo $task['id']; ?>">Finish task</a>
            <?php } ?>
        </li>
    <?php } ?>
</ul>
<a href="add_task.php">Add a new task</a>
</body>
</html>
