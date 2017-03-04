<?php
if (isset($_GET['id'])) {
    $taskId = $_GET['id'];
    $db = new PDO('mysql:host=localhost;dbname=todolist', 'homestead', 'secret');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $statement = $db->prepare("DELETE FROM tasks WHERE id = :id");
    $statement->bindParam(':id', $taskId, PDO::PARAM_INT);
    if (!$statement) {
        print_r($db->errorInfo());
        exit;
    }
    $statement->execute();
    header('Location: index.php');
}
header('Location: index.php');
