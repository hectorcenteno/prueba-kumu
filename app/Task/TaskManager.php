<?php
namespace App\Task;

use App\Task\Task;

class TaskManager  
{
    public $tasks = [];

    public function add(Task $task)
    {
        $this->tasks[] = $task;
    }

    public function count()
    {
        return count( $this->tasks);
    }
}
