<?php
include('config/init.php');
echologgedInHeader("questionnaire");
$user = getUser($_SESSION['accountId']); 
$accountId = $user['accountId'];
$dailyQuestionnaireLogInfo = getDailyQuestionnaireLog($_SESSION['accountId']);

//state of the page 
if(isset($_REQUEST['day'])){
  $date = $_REQUEST['day'];
}
else{
  $date = date('Y-m-d');
}

if(isset($_REQUEST['NewQuestionnaireData'])){
  
  insertNewQuestionnaireData(
      $accountId,
      $date,
      $_REQUEST['questionnaireBeverage'],
      $_REQUEST['questionnaireBeverageOther'], 
      $_REQUEST['beverageSpecific'], 
      $_REQUEST['howMuchBeverage'], 
      $_REQUEST['howMuchWater'], 
      $_REQUEST['sleep'], 
      $_REQUEST['stress'],
      $_REQUEST['breakfast'],
      $_REQUEST['lunch'],
      $_REQUEST['exercise'],
      $_REQUEST['personalInfoBoxReminders'],
      $_REQUEST['personalInfoBoxGrateful'], 
      $_REQUEST['personalInfoBoxNotes']
      
); 

} 
?>

<!--
 <html>
    <h2>Questionnaire</h2>
      <p>Please fill this out once a day between 12pm and 5pm. </p>
      <br>
      <form action='' method='post'>  
      
            
            What type of beverage did you primarily drink today?:
                  <select required name='questionnaireBeverage'>
                      <option value='coffee'>coffee</option>
                      <option value='tea'>tea</option>
                      <option value='soda'>soda</option>
                      <option value='other'>more than 1</option>
                      <option value='none'>none</option>
                  </select><br /> 
                  <br>
             If more than 1, please list them:
             <input type='text' required name='questionnaireBeverageOther' /><br />
             <br>  

             Please specify what kind of the above beverage you drank today (ie black coffee, green tea):
             <input type='text' required name='beverageSpecific' /><br />

             <br />
             How much of the beverage chosen above did you drink today?:<br>
             <input type="radio" required name="howMuchBeverage" value="none" >none<br>
             <input type="radio" name='howMuchBeverage' value="1-2 cups"> 1-2 cups<br>
             <input type="radio" name="howMuchBeverage" value="3-4 cups" > 3-4 cups<br>
             <input type="radio" name='howMuchBeverage' value="5-6 cups">5-6 cups<br>
             <input type="radio" name='howMuchBeverage' value="7+ cups"> 7+ cups <br>


             <br>
             How much water did you drink today?:<br>
             <input type="radio" required name="howMuchWater" value="no water" >none<br>
             <input type="radio" name='howMuchWater' value="1-2 cups"> 1-2 cups<br>
             <input type="radio" name="howMuchWater" value="3-4 cups" > 3-4 cups<br>
             <input type="radio" name='howMuchWater' value="5-6 cups">5-6 cups<br>
             <input type="radio" name='howMuchWater' value="7+ cupts"> 7+ cups <br>

             <br>
             How many hours of sleep did you get?<br>
             <input type="radio" required name="sleep" value="less than 1 hour" >less than 1 hour<br>
             <input type="radio" name='sleep' value="1-3 hours"> 1-3<br>
             <input type="radio" name="sleep" value="4-6 hours" > 4-6<br>
             <input type="radio" name='sleep' value="7-9 hours"> 7-9<br>
             <input type="radio" name='sleep' value="10+ hours"> 10+ <br>

             <br>
              How much stress did you experience today?:<br>
             <input type="radio" required name="stress" value="little to no stress" >Little to no stress<br>
             <input type="radio" name='stress' value="some stress"> some/moderate stress<br>
             <input type="radio" name="stress" value="high stress" > high stress<br>
             
             <br>
              Did you eat breakfast today?:

            <input type="radio" required name="breakfast" value="yes" > yes
            <input type="radio" name='breakfast' value="no"> no<br>

            <br>
              Did you eat lunch today?:
              <input type="radio" required name="lunch" value="yes" > yes
              <input type="radio"  name='lunch' value="no "> no<br>
                  
             

              <br>
              How much exercise did you do today?<br>
              <input type="radio" required name="exercise" value="no exercise" >no exercise<br>
             <input type="radio" name="exercise" value="low intensity" >low intensity  (ie can speak comfortably)<br>
             <input type="radio" name='exercise' value="medium intensity"> medium intensity (ie light sweat, can talk but with some effort)<br>
             <input type="radio" name="exercise" value="high intensity" > high intensity (ie unable to say more than a few words)<br>
             <br>  

             What word best describes how you feel today?<br>
             <input type="radio" required name="mood" value="happy" >happy<br>
             <input type="radio" name="mood" value="sad" >sad<br>
             <input type="radio" name='mood' value="tired"> tired<br>
             <input type="radio" name="mood" value="angry" > angry<br>
             <input type="radio" name="mood" value="neutral" > neutral <br>  
             <input type="radio" name="mood" value="productive"> productive<br>
             <input type="radio" name="mood" value="sick"> sick<br>

             <br/><br/>

             Comments for yourself:
             <textarea name='questionnaireComments' rows='4' cols='30'></textarea><br />
             
             <br>
  
              <br/><br/>
              
              <br/><br/>
              <input type='submit' name='NewQuestionnaireData' value='submit' />
  
              <br /><br />
            
            
            -->
            
  <html>
      <body>
        <div class='dateDiv'><h2 class='dateWords'> <?php echo "Today's Date: " .date('Y/m/d'); ?></h2> </div>
        
        <form action='' method='post' class='trackerInfoBoxForm'> 
        <div class='mainParentDiv'>
          <div class='arrowDiv'> <a href='#'><div class='arrowLeft'></div></a></div>
              <div class='trackerInfoBox'>
                
                <h3 class='dailyLogTitle'>Daily Log</h3>
                     
              
                     What type of beverage did you drink today?: 
                            <select  name='questionnaireBeverage'>
                                <option value='coffee'>coffee</option>
                                <option value='tea'>tea</option>
                                <option value='soda'>soda</option>
                                <option value='other'>more than 1</option>
                                <option value='none'>none</option>
                            </select><br /> 
                            <br>
                      If more than 1, please list them:
                      <input type='text'  name='questionnaireBeverageOther' /><br />
                      <br>

                      Please specify what kind of the above beverage you drank today (ie black coffee, green tea):
                      <input type='text'  name='beverageSpecific' /><br />

                      <br />
                      How much of the beverage chosen above did you drink today?:<br>
                      <input type='text'  name='howMuchBeverage' /><br />
                     


                      <br>
                      How much water did you drink today?:<br>
                      <input type='text'  name='howMuchWater' /><br />
                     

                      <br>
                      How many hours of sleep did you get?<br>
                      <input type='text'  name='sleep' /><br />
                     

                      <br>
                        How much stress did you experience today?:<br>
                      <input type="radio" required name="stress" value="little to no stress" >Little to no stress<br>
                      <input type="radio" name='stress' value="some stress"> some/moderate stress<br>
                      <input type="radio" name="stress" value="high stress" > high stress<br>
                      
                      <br>
                        Did you eat breakfast today?:

                      <input type="radio" required name="breakfast" value="yes" > yes
                      <input type="radio" name='breakfast' value="no"> no<br>

                      <br>
                        Did you eat lunch today?:
                        <input type="radio"  required name="lunch" value="yes" > yes
                        <input type="radio"  name='lunch' value="no "> no<br>
                            
                        <br>
                        How much exercise did you do today?<br>
                        <input type="radio" required name="exercise" value="no exercise" >no exercise<br>
                        <input type="radio" name="exercise" value="low intensity" >low intensity  (ie can speak comfortably)<br>
                        <input type="radio" name='exercise' value="medium intensity"> medium intensity (ie light sweat, can talk but with some effort)<br>
                        <input type="radio" name="exercise" value="high intensity" > high intensity (ie unable to say more than a few words)<br>
                            
                        
                        
              </div>

              <div class='personalInfoBox'>
                <div class='personalInfoReminders'>
                  Reminders:
                    <input type='text'  name='personalInfoBoxReminders' />
                      <br> 
                 
                </div>
                <div class='personalInfoGrateful'>
                  Today I'm grateful for:
                    <input type='text'  name='personalInfoBoxGrateful' />
                      <br>
                    
                </div>
                <div class='personalInfoNotes'>
                  Notes:
                    <input type='text'  name='personalInfoBoxNotes' />

                    
                    
                </div>
                <input type='submit' name='NewQuestionnaireData' value='submit' />
              </div>
              
                 
            </div>
          </form>
        </body>
    </html>

