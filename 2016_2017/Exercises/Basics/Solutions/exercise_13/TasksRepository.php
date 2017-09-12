<?php
require_once __DIR__ . "/Task.php";

interface TasksRepository
{
    public function save(Task $task);

    public function delete(int $id);

    public function update(Task $task);

    public function get(int $id);
}
