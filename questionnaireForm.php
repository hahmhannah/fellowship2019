<?php
include('config/init.php');
echologgedInHeader("questionnaire");
$user = getUser($_SESSION['accountId']); 
$accountId = $user['accountId'];

if(isset($_REQUEST['NewQuestionnaireData'])){
   insertNewQuestionnaireData($accountId
 
); 
} 
?>

 <html>
    <h2>Questionnaire</h2>
      <form action='' method='post'>  
            
              Date:
              <input type='text' name='date' /><br />
  
              Time:
              <input type='text' name='time' /><br />

             <!-- What was your mood like today?:<br>
             <input type="radio" name="sleep" value="sleepNone" >less than 1 hour<br>
             <input type="radio" name='sleep' value="sleep13"> 1-3<br>
             <input type="radio" name="lunch" value="sleep46" > 4-6<br>
             <input type="radio" name='lunch' value="sleep79"> 7-9<br>
             <input type="radio" name='lunch' value="sleep10"> 10+ <br> -->


              
            What type of beverage did you drink today?:
                  <select name='questionnaireBeverage'>
                      <option value='coffee'>coffee</option>
                      <option value='tea'>tea</option>
                      <option value='soda'>soda</option>
                      <option value='other'>more than 1</option>
                      <option value='none'>none</option>
                  </select><br /> 
                  <br>
             If more than 1, please list them:
             <input type='text' name='questionnaireBeverageOther' /><br />
             <br>

             Please specify what kind of the above beverage you drank today (ie black coffee, green tea):
             <input type='text' name='beverageSpecific' /><br />

             <br />
             How much of the beverage chosen above did you drink today?:<br>
             <input type="radio" name="howMuchBeverage" value="beverageNone" >none<br>
             <input type="radio" name='howMuchBeverage' value="beverage12"> 1-2 cups<br>
             <input type="radio" name="howMuchBeverage" value="beverage34" > 3-4 cups<br>
             <input type="radio" name='howMuchBeverage' value="beverage56">5-6 cups<br>
             <input type="radio" name='howMuchBeverage' value="beverage7"> 7+ cups <br>


             <br>
             How much water did you drink today?:<br>
             <input type="radio" name="howMuchWater" value="waterNone" >none<br>
             <input type="radio" name='howMuchWater' value="water12"> 1-2 cups<br>
             <input type="radio" name="howMuchWater" value="water34" > 3-4 cups<br>
             <input type="radio" name='howMuchWater' value="water56">5-6 cups<br>
             <input type="radio" name='howMuchWater' value="sleep7"> 7+ cups <br>

             <br>
             How many hours of sleep did you get?<br>
             <input type="radio" name="sleep" value="sleepNone" >less than 1 hour<br>
             <input type="radio" name='sleep' value="sleep13"> 1-3<br>
             <input type="radio" name="sleep" value="sleep46" > 4-6<br>
             <input type="radio" name='sleep' value="sleep79"> 7-9<br>
             <input type="radio" name='sleep' value="sleep10"> 10+ <br>

             <br>
              How much stress did you experience today?:<br>
             <input type="radio" name="stress" value="sleepNone" >Little to no stress<br>
             <input type="radio" name='stress' value="sleep13"> some/moderate stress<br>
             <input type="radio" name="stress" value="sleep46" > high stress<br>
             
             <br>
              Did you eat breakfast today?:

            <input type="radio" name="breakfast" value="breakfastYes" > yes
            <input type="radio" name='breakfast' value="breakfastNo"> no<br>

            <br>
              Did you eat lunch today?:
              <input type="radio" name="lunch" value="lunchYes" > yes
              <input type="radio" name='lunch' value="lunchNo"> no<br>
                  
              <br>
              Did you eat dinner today?:
              <input type="radio" name="dinner" value="dinnerYes" > yes
              <input type="radio" name='dinner' value="dinnerNo"> no<br>

              <br>
              How much exercise did you do today?<br>
              <input type="radio" name="exercise" value="noExercise" >no exercise<br>
             <input type="radio" name="exercise" value="littleExercise" >low intensity  (ie can speak comfortably)<br>
             <input type="radio" name='exercise' value="someExercise"> medium intensity (ie light sweat, can talk but with some effort)<br>
             <input type="radio" name="exercise" value="highExercise" > high intensity (ie unable to say more than a few words)<br>
                   

          
            
    
  
  
              <br/><br/>
              
              <br/><br/>
              <input type='submit' name='NewQuestionnaireData' value='submit' />
  
              <br /><br />