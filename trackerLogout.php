<?php
    include('config/init.php');

    echoTrackerHeader("Home Page");
    
    session_destroy();

    echo "You are logged out. Click <a href='/trackerLogin.php'> here </a> to log back in. ";
?>