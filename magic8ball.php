<html>

<head>
    <style>
    
    .circle{
        height:300px;
        width:325px;
        background-color:black;
        border-radius:50%; 
        text-align:center;
        padding-top:25px; 
        position:relative;
        top:150px;
        left:550px;  
                    
    }
        
    .response{
        color:pink;
        font-size:24pt;
        position:relative;
        text-align:center;
        
    }

    .yousay{
        border:3px solid green;
        font-size:32pt;
        padding-top:20px;
       
        height:80px; 
        text-align:center;
        
        position:relative;
        bottom:300px;
    }
   
    

    </style>

</head>


<body>

<div class=circle></div>


<div class=yousay>
        <?php
            $question = 'what is up?';
                echo $question; ; 
        ?>
</div>


<div class=response>
        <?php
            $answer = array('yah', 'no', 'maybe', 'sometimes', 'eh', 'nothing', 'lol no', 'lmao yeah' ); 
                echo "<br>"; echo $answer[array_rand($answer)];
        ?>
</div>


<body>
</html>