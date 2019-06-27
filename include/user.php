<?php 

function getUser($accountId){
    $user = dbQuery('
    SELECT *
    FROM trackerSignUp
    WHERE accountId = :accountId', 
    [
        'accountId' => $accountId
    ])->fetch();                             
return @$user['accountId'];
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