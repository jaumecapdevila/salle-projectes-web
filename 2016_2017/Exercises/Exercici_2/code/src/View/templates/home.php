<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do list</title>
</head>
<body>
<ul>
    <?php foreach ($tasks as $key => $task) {
        ?>
        <li>
            <p><?php echo $task['task']; ?></p>
            <a href="/task/remove/<?php echo $task['id'];?>">Remove</a>
        </li>
        <?php
    } ?>
</ul>
<a href="/task/add">Add a new task</a>
</body>
</html>