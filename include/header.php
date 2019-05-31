<?php
    function echoHeader($pageTitle){
      echo "
      <html>
      <head>
            <link href='profilepage.css' rel='stylesheet' type='text/css'> 
      </head>
  
  
      <body>
          
        
  
          <ul class='navbar'>
              <li><a href='http://localhost:8888/projects.php'>Projects</a></li>
              <li><a href='http://localhost:8888/morestuff.php'>More Stuff</a></li>
              <li><a href='http://localhost:8888/aboutme.php'>About Me</a></li>
              <li><a href='http://localhost:8888/profilepage.php'>Home</a></li>
          </ul>
  
  
          
          <div class='heading'>
              <h1 class=mainpage>Hannah Hahm</h1>
              <p class='notes'>student/blah/blah</p> </div>

              ";
    }