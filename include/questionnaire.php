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

function insertNewQuestionnaireData($accountId, $date, $questionnaireBeverage, $questionnaireBeverageOther, $beverageSpecific, $howMuchBeverage, $howMuchWater, 
$sleep, $stress, $breakfast, $lunch, $exercise, $personalInfoBoxReminders, $personalInfoBoxGrateful, $personalInfoBoxNotes){
    dbQuery(
        '   
            INSERT INTO questionnaire(accountId, date, questionnaireBeverage, questionnaireBeverageOther, beverageSpecific, howMuchBeverage, howMuchWater, sleep, stress, breakfast, lunch,  exercise, personalInfoBoxReminders, personalInfoBoxGrateful, personalInfoBoxNotes, c_time )
            VALUES(:accountId, :date, :questionnaireBeverage, :questionnaireBeverageOther, :beverageSpecific, :howMuchBeverage, :howMuchWater, :sleep, :stress, :breakfast, :lunch, :exercise, :personalInfoBoxReminders, :personalInfoBoxGrateful, :personalInfoBoxNotes, NOW())
        ',
        [
           'accountId' => $accountId, 
           'date' => $date,
           'questionnaireBeverage' => $questionnaireBeverage,
           'questionnaireBeverageOther' => $questionnaireBeverageOther,
           'beverageSpecific' => $beverageSpecific,
           'howMuchBeverage' => $howMuchBeverage,
           'howMuchWater' => $howMuchWater,
           'sleep' => $sleep,
           'stress' => $stress,
           'breakfast' => $breakfast,
           'lunch' => $lunch,
           'exercise' => $exercise,
           'personalInfoBoxReminders' => $personalInfoBoxReminders,
           'personalInfoBoxGrateful' => $personalInfoBoxGrateful,
           'personalInfoBoxNotes' => $personalInfoBoxNotes
           
        ]

        );
}

function getDailyQuestionnaireLog($accountId){
    $dailyQuestionnaireLogInfo = dbQuery('
    SELECT *
    FROM questionnaire
    WHERE accountId = :accountId', 
    [
        'accountId' => $accountId, 
        
    ])->fetch();                             
return @$dailyQuestionnaireLogInfo; //this is an array
}
