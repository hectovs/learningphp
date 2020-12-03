<?php

function dumpdie($data) {
    
    echo '<pre>';

    die(var_dump($data));

    echo '<pre>';
}

function allowedin( $age) {
    if ($age >= 21) {
        echo('You are allowed in');
    }
    else {
        echo('You are not allowed in');
    }
}

?>