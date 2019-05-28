<?php
function absoluteValue($rawInput){
    if($rawInput < 0){
        $processedInput = $rawInput * -1;
    }
    else{
        $processedInput = $rawInput;
    }

    return $processedInput;
}

echo absoluteValue(-999). "<br/>";
echo absoluteValue(-23);