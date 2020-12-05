<?php



$tasks = $app['datbase']->selectAll('todos');


require 'views/index.view.php'; 


?>