<?php


require 'core/bootstrap.php';

// $router = new Router; 

// require 'routes.php'; 
 


require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

// require $router-> direct($uri);