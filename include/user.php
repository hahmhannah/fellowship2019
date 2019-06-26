<?php

function getUserCode($code){
    $userList = [
        '12345678910' => 2
    ];
    return $userList[$code];
}


function attemptLogin($email, $password){
    $accountId = dbQuery('
        SELECT * 
        FROM trackerSignUp
        WHERE email = :email AND password = :password', //just a string parameter
        [
            'email' => $email,
            'password' => $password
        ])->fetch();                             //where email/password matches -case insensitive email
    return $accountId;
}


/*
function attemptLogin($a, $password){
    $accountId = dbQuery('
        SELECT * 
        FROM trackerSignUp
        WHERE email = :b AND password = :password',
        [
            'b' => $a
        ]);  //where email/password matches -case insensitive email
    return $accountId;
}
*/