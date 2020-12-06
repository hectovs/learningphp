<?php 

// var_dump('You Typed ' .$_POST['name']);

$app['database']-> insert('users', ['name'=> $_POST['name']]);

return Header('Location: /');