<?php  
    include('config/init.php');
    echologgedInHeader("Profile");
    $user = getUser($_SESSION['accountId']); 
    $accountId = $user['accountId'];
    // $user = getUser($accountId); 
    //$_SESSION['accountId'] = $user; 

  
/* echo " 


hello user ".$user['email'].". More coming soon.";


*/
/*
$accountId = $_SESSION['accountId'];
$profileEdit = getProfileEdit($accountId); //returns whole line from database
echo $profileEdit;  */




if(isset($_REQUEST['happinessQuestionnaireInput'])){
    insertNewHappinessQuestionnaireInput(
        $accountId,
        $_REQUEST['happinessQuestion1'],
        $_REQUEST['happinessQuestion2'],
        $_REQUEST['happinessQuestion3'],
        $_REQUEST['happinessQuestion4']
       
     
        );
    }

?>




<html>
  <h2>Profile</h2>
  <p>This is your profile page. Please fill this out once in the beginning before going to the daily questionnaire. </p> 
    <form action='' method='post'>  
            Email:
            <input type='text' name='email' value= '<?php echo $user['email'] ?> '  /><br />

            Age:
            <input type='text' name='age' value= '<?php echo $user['age'] ?>' /><br />

            Gender:
            <input type='text' name='gender' value= '<?php echo $user['gender'] ?>'/><br />
            
            Occupation:
            <input type='text' name='occupation' value= '<?php echo $user['occupation'] ?>'/><br />

            Overall occupation stress level:
                <select name='stressLevel'>
                    <option value='low'>little to no stress</option>
                    <option value='medium'>some/moderate stress</option>
                    <option value='high'>High stress</option>
                </select> <br /> 

            What kind of caffeinated beverage do you typically drink:
                <select name='typeBeverage'>
                    <option value='<?php echo $user['typeBeverage'] ?>'>coffee</option>
                    <option value='<?php echo $user['typeBeverage'] ?>'>tea</option>
                    <option value='<?php echo $user['typeBeverage'] ?>'>soda</option>
                    <option value='<?php echo $user['typeBeverage'] ?>'>other</option>
                </select><br /> 
            
            Please specify what kind of beverage (ie black coffee, cola, green tea, etc):
                <input type='text' name='beverageOther' value= '<?php echo $user['beverageOther'] ?>'/> <br />


            Have you recently experienced or are currently experiencing a life altering event? (ie moving houses, switching jobs, etc )?<br />
            <input type="radio" name="lifeEvent" value='<?php echo $user['lifeEvent'] ?>' > yes
            <input type="radio" name='lifeEvent' value='<?php echo $user['lifeEvent'] ?>'> no<br>


            <br/><br/>
            <a href='editProfilePage.php'>edit profile page</a>
            <br/><br/><br />
           
            Go to the <a href='questionnaireForm.php'>daily questionnaire</a>
            
            <br /><br />
            <br />

            <h2>Happiness Scale</h2>
            <p> 
            Please fill out this questionnaire between 12pm to 5pm. </p>
            <br />
         
        
           


           <p>In general I consider myself  </p>
            <input type="radio" name="happinessQuestion1" value="1" >1 (not a very happy person)
           <input type="radio" name="happinessQuestion1" value="2" >2
           <input type="radio" name="happinessQuestion1" value="3" >3
           <input type="radio" name="happinessQuestion1" value="4" >4
           <input type="radio" name="happinessQuestion1" value="5" >5
           <input type="radio" name="happinessQuestion1" value="6" >6
           <input type="radio" name="happinessQuestion1" value="7" >7 (a very happy person )
           
           <br /><br />

           <p>Compared to most of my peers, I feel  </p> 
           <input type="radio" name="happinessQuestion2" value="1" >1 (less happy)
           <input type="radio" name="happinessQuestion2" value="2" >2
           <input type="radio" name="happinessQuestion2" value="3" >3
           <input type="radio" name="happinessQuestion2" value="4" >4
           <input type="radio" name="happinessQuestion2" value="5" >5
           <input type="radio" name="happinessQuestion2" value="6" >6
           <input type="radio" name="happinessQuestion2" value="7" >7 (more happy)
  


           <br /><br />

           
           <p>Some people are generally very happy.  They enjoy life regardless of what is going on, getting the most out of everything.  To what extent does this characterization describe you?</p> 
           <input type="radio" name="happinessQuestion3" value="1" >1 (not at all)
           <input type="radio" name="happinessQuestion3" value="2" >2
           <input type="radio" name="happinessQuestion3" value="3" >3
           <input type="radio" name="happinessQuestion3" value="4" >4
           <input type="radio" name="happinessQuestion3" value="5" >5
           <input type="radio" name="happinessQuestion3" value="6" >6
           <input type="radio" name="happinessQuestion3" value="7" >7 (a great deal)
           

           <br /><br />

           <p>Some people are generally not very happy.  Although they are not depressed, they never seem as happy as they might be.  To what extent does this characterization describe you?</p> 
           <input type="radio" name="happinessQuestion4" value="1" >1 (not at all)
           <input type="radio" name="happinessQuestion4" value="2" >2
           <input type="radio" name="happinessQuestion4" value="3" >3
           <input type="radio" name="happinessQuestion4" value="4" >4
           <input type="radio" name="happinessQuestion4" value="5" >5
           <input type="radio" name="happinessQuestion4" value="6" >6
           <input type="radio" name="happinessQuestion4" value="7" >7 (a great deal)
       
           <br /><br />

           <input type='submit' name='happinessQuestionnaireInput' value='Submit' />

           <br /><br /><br />
           

<p> Happiness Scale Citation: Lyubomirsky, S., & Lepper, H. (1999). A measure of subjective happiness: Preliminary reliability and construct validation. Social Indicators Research, 46, 137-155. </p>

<!--
//$accountId=getUser($_REQUEST['accountId']); //save number in url as variable
/* $accountId=$_SESSION['accountId']; */
//$user = getUser($accountId); 
//hello user ".$_SESSION['accountId']['email'].". More coming soon.";

 

//$user = getUser($_SESSION['accountId']); -->