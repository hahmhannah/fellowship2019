

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



 <?php

 $employees = [
     [
      'Name' => 'Tyler',
      'PhoneNumber' => '123-456-7890'
     ],
     [
       'Name' => 'Bracken',
       'PhoneNumber' => '555-555-5555'
     ],
     [
       'Name' => 'Michael',
       'PhoneNumber' => '101-001-10001'
     ],
     
   ];
 $count = 1;
 
 foreach($employees as $individualEmployee){
     echo "
         <div style='font-size:12px; color:#999;'>Employee #".($count)."</div>
         <div style='font-size:16px; font-weight:bold;'>".$individualEmployee['Name']."</div>
         <div style='font-size:14px; margin-bottom:20px;'>".$individualEmployee['PhoneNumber']."</div>
     ";
     $count = $count + 1;
 }