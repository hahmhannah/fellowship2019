<?php
    include('config/init.php');
    echoTrackerHeader("Login");
?>



<html>
    <body class='loginPageBody'>
      <form action='' method='post'>
        <div class='loginFormDiv'>
            <h2 class='signUpTitle'>Login</h2>
              Email: <input type='text' name='email' /><br />
              Password: <input type='password' name='password' /><br />
              <input type='submit' name='' value='Login' />
        </div>
      </form>
    </body>