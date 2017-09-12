<?php
namespace ProjectesWeb\Model\Entity;

/**
 *  Task
 */
class Task
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $task;
    /**
     * @var int
     */
    private $done;

    /**
     * Task constructor.
     * @param $id
     * @param $task
     * @param $done
     */
    public function __construct($id, $task, $done)
    {
        $this->id = $id;
        $this->task = $task;
        $this->done = $done;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
        $test = "test";
    }

    /**
     * @return string
     */
    public function task(): string
    {
        return $this->task;
    }

    /**
     * @return int
     */
    public function done(): int
    {
        return $this->done;
    }

    /**
     * Finishes the task
     */
    public function finishTask()
    {
        $this->done = 1;
    }
}
