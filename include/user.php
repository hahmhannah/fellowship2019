<?php 

function getUser($accountId){
    $user = dbQuery('
    SELECT *
    FROM trackerSignUp
    WHERE accountId = :accountId', 
    [
        'accountId' => $accountId, 
        
    ])->fetch();                             
return @$user; //this is an array
}



function attemptLogin($email, $password){ 
    $result = dbQuery('
        SELECT accountId
        FROM trackerSignUp
        WHERE email = :email AND password = :password', //just a string parameter
        [
            'email' => $email,
            'password' => $password
            
        ])->fetch();                            //where email/password matches -case insensitive email
    return $result['accountId'];
}    



function insertNewProfileEdit($accountId, $email, $age, $gender, $occupation, $occupationStressLevel, $typeBeverage, $beverageOther, $lifeEvent){
dbQuery(
        '   
            UPDATE trackerSignUp
            SET  age = :age,
            email = :email,
            gender = :gender, 
            occupation = :occupation, 
            occupationStressLevel = :occupationStressLevel, 
            typeBeverage = :typeBeverage, 
            beverageOther = :beverageOther,
            lifeEvent = :lifeEvent
            WHERE accountId = :accountId
        ',
        [   'age' => $age,
            'gender' => $gender, 
            'occupation' => $occupation, 
            'occupationStressLevel' => $occupationStressLevel, 
            'typeBeverage' => $typeBeverage, 
            'beverageOther' => $beverageOther,
            'email' => $email,
            'lifeEvent' => $lifeEvent,
            'accountId' => $accountId

        ]
       
        );
}

function insertNewHappinessQuestionnaireInput($accountId, $happinessQuestion1, $happinessQuestion2, $happinessQuestion3, $happinessQuestion4){
    dbQuery(
        '   
            UPDATE trackerSignUp
            SET  
            happinessQuestion1 = :happinessQuestion1, 
            happinessQuestion2 = :happinessQuestion2, 
            happinessQuestion3 = :happinessQuestion3,
            happinessQuestion4 = :happinessQuestion4
            WHERE accountId = :accountId
        ',
        [   'happinessQuestion1' => $happinessQuestion1,
            'happinessQuestion2' => $happinessQuestion2, 
            'happinessQuestion3' => $happinessQuestion3, 
            'happinessQuestion4' => $happinessQuestion4,
            'accountId' => $accountId
        ]
       
        );
}

function getProfilePageInfo($email){
    $profilePageInfo = dbQuery('
    SELECT *
    FROM trackerSignUp
    WHERE accountId = :accountId AND email = :email', 
    [
        'accountId' => $accountId,
        'email' => $email 
        
    ])->fetch();                             
    return @$profilePageInfo; //this is an array
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


/*function insertNewProfileEdit($accountId, $age, $gender, $occupation, $occupationStressLevel, $typeBeverage, $beverageOther){
    dbQuery(
        '   
            UPDATE trackerSignUp(age, gender, occupation, occupationStressLevel, typeBeverage, beverageOther)
            VALUES( :age, :gender, :occupation, :occupationStressLevel, :typeBeverage, :beverageOther)
            WHERE account
        ',
        [
            
            'age' =>  $age, 
            'gender' => $gender, 
            'occupationStressLevel'=> $occupationStressLevel, 
            'stressLevel' => $stressLevel, 
            'typeBeverage' => $typeBeverage, 
            'beverageOther' => $beverageOther
            
        ]
        );
}

*/