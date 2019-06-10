<?php
    function echoHeader($pageTitle){
      echo "
      <html>
      <head>
            <link href='profilepage.css' rel='stylesheet' type='text/css'> 
      </head>
  
      <body>
            <div class='header_parent'>
                <div class='houseicon_child'>
                    <a href='/profilepage.php' class=houseiconlink>
                        <img src='/images/houseicon.png' class='houseicon'>
                    </a>
            <div class='heading'>
                <h1 class=mainpage>Hannah Hahm</h1>
                    <p class='notes'>student/blah/blah</p> 
            </div> 
            <div class='navbar_child'>
                <ul class='navbar'>
                    <li><a href='/aboutme.php'>About Me</a></li>
                    <li><a href='/morestuff.php'>Experiences</a></li>
                    <li><a href='/projects.php'>Contact</a></li>
                </ul>
            </div>
        </div>
          
        

        ";
    }
    