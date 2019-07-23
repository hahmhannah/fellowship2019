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

if(isset($_REQUEST['newProfileEdit'])){
    insertNewProfileEdit(
        $accountId,
        $_REQUEST['email'],
        $_REQUEST['age'],
        $_REQUEST['gender'],
        $_REQUEST['occupation'],
        $_REQUEST['occupationStressLevel'],
        $_REQUEST['typeBeverage'],
        $_REQUEST['beverageOther'],
        $_REQUEST['lifeEvent'], 
        $_REQUEST['numberBeverage'],
        $_REQUEST['stressLevel']

        );
    }


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
  <p>This is your profile page. Please fill this out only once. The daily questionnaire is down below. </p> 
    <form action='' method='post'>  
            Email:
            <input type='text' name='email' value= '<?php echo $user['email'] ?> '  /><br />

            Age:
            <input type='text' name='age' value= '<?php echo $user['age'] ?>' /><br />

            Gender:
            <input type='text' name='gender' value= '<?php echo $user['gender'] ?>'/><br />
            
            Occupation:
            <input type='text' name='occupation' value= '<?php echo $user['occupation'] ?>'/><br />

            How stressful would you rate your occupation? (1=not stressed at all, 10=extremely stressed)
            <input type="radio" name="occupationStressLevel" value='1' > 1
            <input type="radio" name='occupationStressLevel' value='2'> 2
            <input type="radio" name="occupationStressLevel" value='3' > 3
            <input type="radio" name='occupationStressLevel' value='4'> 4
            <input type="radio" name="occupationStressLevel" value='5' > 5
            <input type="radio" name='occupationStressLevel' value='6'> 6
            <input type="radio" name="occupationStressLevel" value='7' > 7
            <input type="radio" name='occupationStressLevel' value='8'> 8
            <input type="radio" name="occupationStressLevel" value='9' > 9
            <input type="radio" name='occupationStressLevel' value='10'> 10
            <br /> 


            On average, how stressed do you feel in a day? (1=not stressed at all, 10=extremely stressed)
            <input type="radio" name="stressLevel" value='1' > 1
            <input type="radio" name='stressLevel' value='2 '> 2
            <input type="radio" name="stressLevel" value='3' > 3
            <input type="radio" name='stressLevel' value='4'> 4
            <input type="radio" name="stressLevel" value='5' > 5
            <input type="radio" name='stressLevel' value='6'> 6
            <input type="radio" name="stressLevel" value='7' > 7
            <input type="radio" name='stressLevel' value='8'> 8
            <input type="radio" name="stressLevel" value='9' > 9
            <input type="radio" name='stressLevel' value='10'> 10
            <br /> 

     

            What kind of caffeinated beverage do you typically drink:
                <select name='typeBeverage' >
                    <option value='coffee'>coffee</option>
                    <option value='tea'>tea</option>
                    <option value='soda'>soda</option>
                    <option value='other'>other</option>
                </select><br /> 
            
            Please specify what kind of beverage (ie black coffee, cola, green tea, etc):
                <input type='text' name='beverageOther' value= '<?php echo $user['beverageOther'] ?>'/> <br />


            How many cups of the specified beverage do you drink a day?
            <input type='text' name='numberBeverage' value= '<?php echo $user['numberBeverage'] ?>'/> <br />


            Have you recently experienced or are currently experiencing a life altering event? (ie moving houses, switching jobs, etc )?<br />
            <input type="radio" name="lifeEvent" value='yes' > yes
            <input type="radio" name='lifeEvent' value='no'> no<br>


            <br/><br/>
           
           
            <input type='submit' name='newProfileEdit' value='edit profile' />
            <br/><br/><br />
           
            Go to the <a href='questionnaireForm.php'>daily questionnaire</a>
            
            <br /><br />

            
            <br />


            <h2>Happiness Scale</h2>
            <p> 
            Please fill out this questionnaire after filling out the last daily questionnaire. </p>
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