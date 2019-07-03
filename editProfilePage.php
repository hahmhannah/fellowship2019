<?php  
    include('config/init.php');
    echologgedInHeader("edit profile");


if(isset($_REQUEST['newProfileEdit'])){
    insertNewProfileEdit(
        $_REQUEST['accountId'],
        $_REQUEST['age'],
        $_REQUEST['gender'],
        $_REQUEST['occupation'],
        $_REQUEST['stressLevel'],
        $_REQUEST['typeBeverage'],
        $_REQUEST['beverageOther']
        );
    }

?>

<html>
  <h2>profile edit</h2>
    <form action='' method='post'>  
            Account ID:
            <input type='text' name='accountId' /><br />

            Age:
            <input type='text' name='age' /><br />

            Gender:
            <input type='text' name='gender' /><br />
            
            Occupation:
            <input type='text' name='occupation' /><br />

            Occupation Stress Level:
                <select name='stressLevel'>
                    <option value='low'>little to no stress</option>
                    <option value='medium'>some/moderate stress</option>
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
            <a href='userLoggedInProfile.php'>go back to profile page</a>

            <br/><br/>
            <input type='submit' name='newProfileEdit' value='edit profile' />


