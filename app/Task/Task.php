<?php
namespace App\Task;

use App\Task\User;

class Task
{
    protected $name;

    protected $user;

    function __construct( $name, User $user)
    {
        
        $this->name = $name;
        $this->user = $user;
    }
}
