<?php

function insertNewAccount($email, $password){
    dbQuery(
        '   
            INSERT INTO trackerSignUp(email, password)
            VALUES(:email, :password)
        ',
        [
            'email' => $email,
            'password' => $password
        ]
        );

        
}

?>