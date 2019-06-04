<?php



function vowelCount($inputWord){
    $numberVowels = 0;
    $wordAsArray = str_split($inputWord);
    foreach($wordAsArray as $letter){
        if ($letter === 'a' || $letter ==='e' || $letter === 'i' || $letter==='o' || $letter === 'u'){
            $numberVowels = $numberVowels + 1 ;

           
        }
    }
    
    
    return $numberVowels;
}

echo vowelCount('hand sanitizer');