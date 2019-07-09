<?php
/* 
function insertNewQuestionnaireData($questionnaireId, $date, $time, $mood, $stress, $beverage, $breakfast, $lunch){
    dbQuery(
        '   
            INSERT INTO questionnaire(questionnaireId)
            VALUES(:questionnaireId)
        ',
        [
            'questionnaireId' => $questionnaireId
            
            
           // 'exercise' => $exercise
        ]
        );
}  */


function insertNewQuestionnaireData($accountId){
    dbQuery(
        '   
            INSERT INTO questionnaire(accountId)
            VALUES(:accountId)
        ',
        [
            'accountId' => $accountId
            
        ]
        );
}