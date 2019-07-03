<?php

function insertNewProfileEdit($accountId, $age, $gender, $occupation, $stressLevel, $typeBeverage, $beverageOther){
    dbQuery(
        '   
            INSERT INTO profilePage(accountId, age, gender, occupation, stressLevel, typeBeverage, beverageOther)
            VALUES(:accountId, :age, :gender, :occupation, :stressLevel, :typeBeverage, :beverageOther)
        ',
        [
            'accountId' => $accountId,
            'age' =>  $age, 
            'gender' => $gender, 
            'occupation'=> $occupation, 
            'stressLevel' => $stressLevel, 
            'typeBeverage' => $typeBeverage, 
            'beverageOther' => $beverageOther
        ]
        );
}

function getProfileEdit($accountId){
    $profileEdit = dbQuery('
    SELECT * 
    FROM profilePage
    WHERE accountId = :accountId'
    ,
    [ 'accountId' => $accountId]
    )->fetch();
    return $profileEdit;
}


