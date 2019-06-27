<?php session_start();
    include('config/init.php');
    echoTrackerHeader("Login");

 
//$accountId=getUser($_REQUEST['accountId']); //save number in url as variable
/* $accountId=$_SESSION['accountId'];



echo "hello user".$accountId." More coming soon."; */



$accountId=$_SESSION['accountId'];

echo /*"hello user".$accountId['email'].". */ "More coming soon.";



//echo "hello user".$_SESSION['email']." More coming soon"; Ask about this line of code
//echo "hello user".$accountId['email'].". More coming soon.";

?>