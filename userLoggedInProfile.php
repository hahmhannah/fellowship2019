<?php  
    include('config/init.php');
    echologgedInHeader("Profile");
    $user = getUser($_SESSION['accountId']); 
    // $user = getUser($accountId); 
    //$_SESSION['accountId'] = $user; 

  
/* echo " 


hello user ".$user['email'].". More coming soon.";


*/
/*
$accountId = $_SESSION['accountId'];
$profileEdit = getProfileEdit($accountId); //returns whole line from database
echo $profileEdit;  */

?>




<html>
  <h2>profile page</h2>
    <form action='' method='post'>  
            Email:
            <input type='text' name='email' value= '<?php echo $user['email'] ?> '  /><br />

            Age:
            <input type='text' name='age' /><br />

            Gender:
            <input type='text' name='gender' /><br />
            
            Occupation:
            <input type='text' name='occupation' /><br />

            Occupation Stress Level:
                <select name='stressLevel'>
                    <option value='low'>little to no stress</option>
                    <option value='medium'>some/oderate stress</option>
                    <option value='high'>High stress</option>
                </select><br /> 

            What kind of caffeinated beverage do you typically drink:
                <select name='typeBeverage'>
                    <option value='coffee'>coffee</option>
                    <option value='tea'>tea</option>
                    <option value='soda'>soda</option>
                    <option value='other'>other</option>
                </select><br /> 
            
            If other, please specify below:
                <input type='text' name='beverageOther' /><br />


            <br/><br/>
            <a href='editProfilePage.php'>edit profile page</a>
            <br/><br/>
            <input type='submit' name='newProfileEdit' value='submit' />

            <br /><br />
Go to <a href='questionnaireForm.php'>questionnaire</a>


<!--
//$accountId=getUser($_REQUEST['accountId']); //save number in url as variable
/* $accountId=$_SESSION['accountId']; */
//$user = getUser($accountId); 
//hello user ".$_SESSION['accountId']['email'].". More coming soon.";

 

//$user = getUser($_SESSION['accountId']); -->