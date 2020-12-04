<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDB();
$tasks = fetchAllTasks($pdo);



// echo '<pre>';
// var_dump($results[0]->description);
// echo '</pre>';


require 'index.view.php'; 


?>