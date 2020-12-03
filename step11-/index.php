<?php

require 'functions.php';



class Task {
    public $description; 

    public $completed = false; 

    public function __construct($description)
    {
        //automatically triggered on instantiation
        $this ->description = $description;
    }

    public function complete()
    {
        $this -> completed=true;
    }

    public function isComplete()
    {
        return $this -> completed; 
    }
}

$task = new Task('Go to store');

$tasks = [
    new Task('Go to the store'),
    new Task('finish this course'),
    new Task('Do some washing')
];



$tasks[0] -> complete();



require 'index.view.php'; 


?>