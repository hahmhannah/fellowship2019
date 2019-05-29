<?php

    function echoHeader($pageTitle){
        echo "
        <html>
        <head>
            <title>" .$pageTitle. "</title>
            <link href='website.css' rel='stylesheet' type='text/css'>       
        </head>
    
    <body>
    
        <div class='header'>
             <h1>Hannah Hahm</h1>
        </div>
    
        <div class=headerlinks>
           
                    <a href='http://localhost:8888/website.php'><h2>Home</h2></a>
                    <a href='http://localhost:8888/personalblogabout.php'><h2>About Me</h2></a>
                    <a href='http://localhost:8888/experiences.php'><h2>Experiences</h2></a>
                    <a href='http://localhost:8888/contact.php'><h2>Contact</h2></a>
            
            
           
        </div>
            ";
    }