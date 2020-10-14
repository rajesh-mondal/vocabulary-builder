<?php

function getErrorMessage($error=0){
    $errors = [
        '0' => '',
        '1' => 'Duplicate Email Address',
        '2' => 'Username or Password Empty',
    ];

    return $errors[$error];
}