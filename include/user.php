<?php

function getUserCode($code){
    $userList = [
        '12345678910' =>2
    ];
    return $userList[$code];
}


function attemptLogin($email, $password){
    $accountId = dbQuery('
        SELECT * 
        FROM trackerSignUp
        WHERE accountId = :accountId');
    return $accountId;
}