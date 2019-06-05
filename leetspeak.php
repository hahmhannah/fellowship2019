<?php
    function leetspeak($inputWord){
        $leetSpokenWord = '';
        $wordAsArray = str_split($inputWord);
        foreach($wordAsArray as $letter){
            if ($letter === 'a'){
                $leetId = 4;
                $leetSpokenWord = $leetSpokenWord.$leetId;
            }
            else if($letter === 'e'){
                $leetId = 3;
                $leetSpokenWord = $leetSpokenWord.$leetId;
            }
            else if ($letter === 'g'){
                $leetId = 9;
                $leetSpokenWord = $leetSpokenWord.$leetId;
            }   
            else if ($letter === 'l'){
                $leetId = 1;
                $leetSpokenWord = $leetSpokenWord.$leetId;
            }
            else if ($letter === '0'){
                $leetId = 0;
                $leetSpokenWord = $leetSpokenWord.$leetId;
            }
            else if ($letter === 's'){
                $leetId = 5;
                $leetSpokenWord = $leetSpokenWord.$leetId;
            }
            else if ($letter === 't'){
                $leetId = 7;
                $leetSpokenWord = $leetSpokenWord.$leetId;
            }

            else{
               $leetSpokenWord = $leetSpokenWord.$letter;
            }

        
       
    }
    echo $leetSpokenWord;
}
  leetspeak('dragon');

