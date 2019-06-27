<?php  
    include('config/init.php');
    echoTrackerHeader("Login");

 
//$accountId=getUser($_REQUEST['accountId']); //save number in url as variable
/* $accountId=$_SESSION['accountId']; */
//$user = getUser($accountId); 



echo " 

hello user ".$_SESSION['accountId']['email'].". More coming soon.";



//echo "hello user".$_SESSION['email']." More coming soon"; Ask about this line of code
//echo "hello user".$accountId['email'].". More coming soon.";


?>