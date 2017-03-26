<?php

namespace ProjectesWeb\Model\Repository;

use ProjectesWeb\lib\Database\Database;
use ProjectesWeb\Model\Entity\Task;

/**
 * PdoTasksRepository
 */
class PdoTasksRepository implements TasksRepository
{
    /**
     * The database class
     * @var Database
     */
    private $db;

    /**
     * PdoTasksRepository constructor.
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    /**
     * Get the last inserted id of the tasks table
     * @return mixed
     */
    public function getLastInsertedId()
    {
        $statement = $this->db->query(
            "SELECT id from tasks ORDER BY id DESC LIMIT 1"
        );
        $result = $statement->fetch();
        return $result['id'];
    }

    /**
     * Persist the given task into the database
     * @param Task $task
     */
    public function save(Task $task)
    {
        $query = "INSERT INTO tasks(`id`, `task`, `done`) VALUES(?, ?, ?)";
        $result = $this->db->preparedQuery(
            $query,
            [
                $task->id(),
                $task->task(),
                $task->done()
            ]
        );
    }

    /**
     * Delete the given task
     * @param int $id
     */
    public function delete(int $id)
    {
        $query = "DELETE FROM tasks WHERE id = ?";
        $result = $this->db->preparedQuery(
            $query,
            [
                $id
            ]
        );
    }

    /**
     * Update the given task
     * @param Task $task
     */
    public function update(Task $task)
    {
        $query = "UPDATE tasks SET task = ?, done = ? WHERE id = ?";
        $result = $this->db->preparedQuery(
            $query,
            [
                $task->task(),
                $task->done(),
                $task->id()
            ]
        );
    }

    /**
     * Find a task by the given id
     * @param int $id
     * @return bool|Task
     */
    public function get(int $id): Task
    {
        $query = "SELECT * from tasks WHERE id = ?";
        $statement = $this->db->preparedQuery(
            $query,
            [
                $id
            ]
        );
        if (!$statement) {
            return false;
        }
        $task = $statement->fetch();
        return new Task(
            $task['id'],
            $task['task'],
            $task['done']
        );
    }

    /**
     * Return all the tasks of the database
     * @return array
     */
    public function getAll(): array
    {
        $statement = $this->db->query(
            "SELECT * from tasks ORDER BY id DESC"
        );
        return $statement->fetchAll();
    }
}
