<?php
    function echoPersonalWebsiteHeader($title){
        echo "
            <html>
                <head>
                    <link href='personalWebsite.css' rel='stylesheet' type='text/css'>
                    <title> ".$title." </title>
                </head>
                
                <body>
                    <div class='navBar'>
                        <ul class='navBarParent'>
                            <div class='navBarChild1'>
                                <li class='navAbout'><a href='/moodtracker.php'>home</a></li>
                                <li class='navAbout'><a href='#anchor1'>about</a></li>
                                <li class='navHowItWorks'><a href='#anchor2'>how it works</a></li>
                                <li class='navResources'><a href='#anchor3'>resources</a></li>
                            </div> 
                            <div class='navBarChild2'>   
                                <li class='navLogin'><a href='/trackerLogin.php'>login</a></li>
                                <li class='navSignUp'><a href='/trackerSignUp.php'>sign up</a></li>
                            </div>
                        </ul>       
                    </div>
        ";
        }