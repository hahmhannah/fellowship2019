<?php
include('config/init.php');

if(isset($_REQUEST['attemptLogin'])){
  $userId = attemptLogin($_REQUEST['email'], $_REQUEST['password']);
  $_SESSION['userId'] = $userId;
  echo "
    You are logged in as user ".$userId.".
    <a href='user_profile.php'>Go to your profile</a>
  ";
  exit;
}
?>

<form action='' method='post'>
  Email: <input type='text' name='email' /><br />
  Password: <input type='password' name='password' /><br />
  <input type='submit' name='attemptLogin' />
</form>