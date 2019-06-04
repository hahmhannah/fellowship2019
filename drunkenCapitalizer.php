<?php

function drunkenCapitalizer($inputWord){
    $capitalizedWord = '';
    $wordAsArray = str_split($inputWord);
    foreach($wordAsArray as $letter){
        $letterId = rand(-20,20);
        if($letterId < 0){
            $letter = strtoupper($letter);
        }
        $capitalizedWord = $capitalizedWord.$letter;
    }
    echo $capitalizedWord;
}


drunkenCapitalizer('yeet');