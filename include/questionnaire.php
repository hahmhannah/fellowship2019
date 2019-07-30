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

function insertNewQuestionnaireData($accountId, $date, $eat, $questionnaireBeverage, $howMuchBeverage, $howMuchWater, 
$sleep, $stress, $exercise, $mood, $personalInfoBoxReminders, $personalInfoBoxGrateful, $personalInfoBoxNotes){
    dbQuery(
        '   
            INSERT INTO questionnaire(accountId, date, eat, questionnaireBeverage, howMuchBeverage, howMuchWater, 
            sleep, stress, exercise, mood, personalInfoBoxReminders, personalInfoBoxGrateful, personalInfoBoxNotes, c_time)
            VALUES(:accountId, :date,:eat, :questionnaireBeverage, :howMuchBeverage, :howMuchWater, 
            :sleep, :stress, :exercise, :mood, :personalInfoBoxReminders, :personalInfoBoxGrateful, :personalInfoBoxNotes, NOW())
        ',
        [
           'accountId' => $accountId, 
           'date' => $date,
           'questionnaireBeverage' => $questionnaireBeverage,
           'howMuchBeverage' => $howMuchBeverage,
           'howMuchWater' => $howMuchWater,
           'sleep' => $sleep,
           'stress' => $stress,
           'eat' => $eat,
           'mood' => $mood,
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
