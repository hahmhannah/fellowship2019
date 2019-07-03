<?php

function insertnewQuestionnaireData($questionnaireId, $date, $time, $mood, $stress, $beverage, $breakfast, $lunch){
    dbQuery(
        '   
            INSERT INTO questionnaire(questionnaireId, date, mood)
            VALUES(:questionnaireId, :date,  :mood)
        ',
        [
            'questionnaireId' => $questionnaireId,
            'date' =>  $date, 
            
            'mood'=> $mood, 
            
           // 'exercise' => $exercise
        ]
        );
}