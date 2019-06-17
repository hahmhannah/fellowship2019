<?php
    function echoLinkButton($pageTitle){
        echo "
            <html>
                <head><link href='moodtracker.css' rel='stylesheet' type='text/css'></head>    
                    <body>
                       <div class='linkButton'> <h2 class='linkButtonText'>" .$pageTitle. "</div>
                    
        ";
    }