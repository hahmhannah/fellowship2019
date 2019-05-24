<html> 
<head>
    <style>
        .content{
            
            font-family:sans-serif;
            background-color:#738290;
            height:250px;
            width:250px;
            text-align:center;
            color:#A1B5D8;
            padding-top:10px;
       
            
        }

        body{
            

        }

    </style>

</head>

<body>


<div class=content>
    <h1>Grade Giver</h1>
   
    <?php
    $grademark = 55;

    if($grademark >= 60){
        echo "$grademark is First Division. Congrats";
    }

    else if($grademark >= 45 && $grademark <= 59){
        echo "$grademark is Second Division. Good job";
    }

    else if($grademark >= 33 && $grademark <= 44){
        echo "$grademark is Third Division. Nice ";
    }

    if($grademark < 33){
        echo "$grademark is Fail. Keep trying";
    }
?>
</div>
</body>



</html> 