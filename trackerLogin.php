<?php
  session_start();
    include('config/init.php');
   //form stuff always comes first-can't redirect if u echo something first 

 // $formSubmissionWorked = false;
                    //atttemptlogin here is a key/index
if(isset($_REQUEST['attemptLogin'])){  //button is called attemptlogin, if it is submitted, then form is processed 
  $accountId = attemptLogin($_REQUEST['email'], $_REQUEST['password']); //equals whatever is returned from attemptLogin function--as soon as something is returned,function stops 
  //values that were submitted into the form are parameters of function--will return account id or null

  if($accountId > 0){
    $_SESSION['accountId'] = $accountId;
    echo " 
    You are logged in as ".$accountId['email'].". Go to your <a href='/userLoggedInMainPage.php'>homepage</a>.
    ";
    exit;
  }
  else{ 
    echo "
    Error: Invalid email and password. Try again. 
    ";

  }
  

};



echoTrackerHeader("Login");
?>



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

    <!--form values from ^ inputs get inputted into REQUEWSt-->