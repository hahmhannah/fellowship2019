<?php
    function echologgedInHeader($title){
        echo "
            <html>
                <head>
                    <link href='index.css' rel='stylesheet' type='text/css'>
                    <title> ".$title." </title>
                </head>
                
                <body>
                    <div class='navBar'>
                        <ul class='navBarParent'>
                            <div class='navBarChild1'>
                                <li class='navAbout'><a href='/index.php'>home</a></li>
                                <li class='navAbout'><a href='#anchor1'>about</a></li>
                                <li class='navHowItWorks'><a href='#anchor2'>how it works</a></li>
                                <li class='navResources'><a href='#anchor3'>resources</a></li>
                            </div> 
                            <div class='navBarChild2'>  
                                <li class='navProfile'><a href='/userLoggedInProfile.php'>profile</a></li> 
                                <li class='navLogout'><a href='/trackerLogout.php'>log out</a></li>
                            </div>
                        </ul>       
                    </div>
        ";
        }