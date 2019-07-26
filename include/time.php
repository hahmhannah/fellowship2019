<?php 
function convertTimeStampToHumanVersion($accountId){
    $timeStampTime = dbQuery('
    SELECT c_time
    FROM questionnaire
    WHERE accountId = :accountId', 
    [
        'accountId' => $accountId
       
        
    ])->fetch();                             
    return @$timeStampTime; //this is an array
    }

