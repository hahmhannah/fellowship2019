<?php

function insertNewLogInfo($accountId, $personalInfoBoxReminders, $personalInfoBoxGrateful, $personalInfoBoxNotes){
    dbQuery(
        '   
            INSERT INTO logInfo(personalInfoBoxReminders, personalInfoBoxGrateful, personalInfoBoxNotes, c_time)
            VALUES(:accountId, :personalInfoBoxReminders, :personalInfoBoxGrateful, :personalInfoBoxNotes, NOW())
        ',
        [
           'accountId' => $accountId, 
           'personalInfoBoxReminders' => $personalInfoBoxReminders,
           'personalInfoBoxGrateful' => $personalInfoBoxGrateful,
           'personalInfoBoxNotes' => $personalInfoBoxNotes
           
           
        ]

        );
}