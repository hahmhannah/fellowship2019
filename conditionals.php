

<?php
 $input1 = 7;
 $input2 = 8;

 if( $input1 < $input2){
    $comparisonText = "less than";
 }
 else if( $input1 > $input2 ){
    $comparisonText = "greater than";
 }
 else{
    $comparisonText = "equal to";
 }

 echo "The number ".$input1." is $comparisonText the number ".$input2;



