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

function insertNewQuestionnaireData($accountId, $questionnaireBeverage, /*$questionnaireBeverageOther, */ $beverageSpecific, $howMuchBeverage, $howMuchWater, 
$sleep, $stress, $breakfast, $lunch, $exercise, $questionnaireComments, $mood){
    dbQuery(
        '   
            INSERT INTO questionnaire(accountId, questionnaireBeverage,  beverageSpecific, howMuchBeverage, howMuchWater, sleep, stress, breakfast, lunch, questionnaireComments, mood, exercise, c_time)
            VALUES(:accountId, :questionnaireBeverage,  :beverageSpecific, :howMuchBeverage, :howMuchWater, :sleep, :stress, :breakfast, :lunch, :questionnaireComments, :mood, :exercise, NOW())
        ',
        [
           'accountId' => $accountId, 
           'questionnaireBeverage' => $questionnaireBeverage,
          
           'beverageSpecific' => $beverageSpecific,
           'howMuchBeverage' => $howMuchBeverage,
           'howMuchWater' => $howMuchWater,
           'sleep' => $sleep,
           'stress' => $stress,
           'breakfast' => $breakfast,
           'lunch' => $lunch,
           'exercise' => $exercise,
           'questionnaireComments' => $questionnaireComments,
           'mood' => $mood
           
        ]

        );
}