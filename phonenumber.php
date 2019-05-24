<?php 
    $city = ['314' => 'St.Louis', '916' => 'Elk Grove', '212' => 'NYC', '682' => 'Fort Worth', '559' => 'Fresno', '513' => 'Cinncinati', '530' => 'Redding'];

    
    $number = '2124567894';
    $areacode = substr($number, -10, 3);

    echo ($number ." is from ". $city[$areacode]); 

        

        

    