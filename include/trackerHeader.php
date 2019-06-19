<?php
    function echoTrackerHeader($title){
        echo "
            <html>
                <head>
                    <link href='moodtracker.css' rel='stylesheet' type='text/css'>
                    <title> ".$title." </title>
                </head>
                
                <body>
                    <div class='navBar'>
                        <ul class='navBarParent'>
                            <div class='navBarChild1'>
                                <li class='navAbout'><a href='#anchor1'>about</a></li>
                                <li class='navHowItWorks'><a href='#anchor2'>how it works</a></li>
                                <li class='navResources'><a href='#anchor3'>resources</a></li>
                                <li class='navExtra'><a href='#anchor4'>extra</a></li>
                            </div> 
                            <div class='navBarChild2'>   
                                <li class='navLogin'><a href='#'>login</a></li>
                                <li class='navSignUp'><a href='#'>sign up</a></li>
                            </div>
                        </ul>       
                    </div>
        ";
        }