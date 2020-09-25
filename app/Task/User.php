<?php 
namespace App\Task;

class User  
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}
