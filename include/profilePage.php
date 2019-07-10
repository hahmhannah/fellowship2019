<?php /*

function insertNewProfileEdit($accountId, $age, $gender, $occupation, $occupationStressLevel, $typeBeverage, $beverageOther){
    dbQuery(
        '   
            INSERT INTO profilePage(accountId, age, gender, occupation, occupationStressLevel, typeBeverage)
            VALUES(:accountId, :age, :gender, :occupation, :occupationStressLevel, :typeBeverage)
        ',
        [
            'accountId' => $accountId,
            'age' =>  $age, 
            'gender' => $gender, 
            'occupationStressLevel'=> $occupationStressLevel, 
            'stressLevel' => $stressLevel, 
            'typeBeverage' => $typeBeverage, 
            
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


//this can go into main user */