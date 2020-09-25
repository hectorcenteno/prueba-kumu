<?php

use App\Task\Task;
use App\Task\TaskManager;
use App\Task\User;

require __DIR__.'/../vendor/autoload.php';

$manager = new TaskManager();

$hector = new User('Hector');

$task1 = new Task('Tarea 1', $hector);

$manager->add( $task1);

echo "Hay {$manager->count()} tareas en la lista.";

echo "\n";
