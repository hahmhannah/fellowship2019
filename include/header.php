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
                <a href='http://localhost:8888/profilepage.php' class=houseiconlink>
                    <img src='houseicon.png' class='houseicon'>
                </a>
            <div class='heading'>
                <h1 class=mainpage>Hannah Hahm</h1>
                    <p class='notes'>student/blah/blah</p> 
            </div> 
            <div class='navbar_child'>
                <ul class='navbar'>
                    <li><a href='http://localhost:8888/aboutme.php'>About Me</a></li>
                    <li><a href='http://localhost:8888/morestuff.php'>Experiences</a></li>
                    <li><a href='http://localhost:8888/projects.php'>Contact</a></li>
                </ul>
            </div>
        </div>
          
        

              ";
    }
    