<?php
    include('config/init.php');
    echoTrackerHeader("Login");


if(isset($_REQUEST['attemptLogin'])){
  $accountId = attemptLogin($_REQUEST['email'], $_REQUEST['password']);
  $_SESSION['accountId'] = $accountId;
    // if(//make email and password equal to the ones in the database)
    echo "
    You are logged in as ".$accountId.".
    ";
    exit;
}

?>


<html>
    <body class='loginPageBody'>
      <form action='' method='post'>
        <div class='loginFormDiv'>
            <h2 class='signUpTitle'>Login</h2>
              Email: <input type='text' name='email' /><br />
              Password: <input type='password' name='password' /><br />
              <input type='submit' name='attemptLogin' value='Login' />
        </div>
      </form>
    </body>