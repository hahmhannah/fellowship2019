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
}  */  //NOW() is a function (not passed through)

function insertNewQuestionnaireData($accountId, $questionnaireBeverage, $questionnaireBeverageOther, $beverageSpecific, $howMuchBeverage, $howMuchWater, 
$sleep, $stress, $breakfast, $lunch, $dinner, $exercise){
    dbQuery(
        '   
            INSERT INTO questionnaire(accountId, questionnaireBeverage, questionnaireBeverageOther, beverageSpecific, howMuchBeverage, howMuchWater, sleep, stress, breakfast, lunch, dinner, exercise, c_time)
            VALUES(:accountId, :questionnaireBeverage, :questionnaireBeverageOther, :beverageSpecific, :howMuchBeverage, :howMuchWater, :sleep, :stress, :breakfast, :lunch, :dinner, :exercise, NOW())
        ',
        [
           'accountId' => $accountId, 
           'questionnaireBeverage' => $questionnaireBeverage,
           'questionnaireBeverageOther' => $questionnaireBeverageOther,
           'beverageSpecific' => $beverageSpecific,
           'howMuchBeverage' => $howMuchBeverage,
           'howMuchWater' => $howMuchWater,
           'sleep' => $sleep,
           'stress' => $stress,
           'breakfast' => $breakfast,
           'lunch' => $lunch,
           'dinner' => $dinner,
           'exercise' => $exercise
           
        ]

        );
}