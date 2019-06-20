<?php
function echoLinkButton($link,$pageTitle){ 
        echo "
            <html>
                <head><link href='moodtracker.css' rel='stylesheet' type='text/css'></head>    
                    <body>
                      <a href='" .$link."' class='linkButton'> <h2 class='linkButtonText'>" .$pageTitle. "</h2></a>
                    
        ";
    }
