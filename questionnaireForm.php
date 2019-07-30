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

    <html>
      <body>
        <div class='dateDiv'><h2 class='dateWords'> <?php echo "Today's Date: " .date('l F jS, Y', strtotime($date)); ?></h2> </div>
        
        <form action='' method='post' class='trackerInfoBoxForm'> 
        <div class='mainParentDiv'>
          <div class='arrowDiv'> <a href='/questionnaireForm.php?day=<?php echo date('Y-m-d', strtotime('-1 day', strtotime($date))) ?>'><div class='arrowLeft'></div></a></div>
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
                    
                      How many cups of the above beverage did you drink?:
                      <input type='text'  name='questionnaireBeverageOther' value='<?php echo $dailyQuestionnaireLogInfo['questionnaireBeverageOther'] ?>' /><br />
                      
                    <!--
                      Please specify what kind of the above beverage you drank today (ie black coffee, green tea):
                      <input type='text'  name='beverageSpecific' /><br />

                      <br />
                      How much of the beverage chosen above did you drink today?:<br>
                      <input type='text'  name='howMuchBeverage' /><br />
                     
                      -->

                      <br>
                      How many cups of water did you drink today?:<br>
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
                      What did you eat today?:<br>
                      <input type="checkbox"  name="breakfast" value="yes" > breakfast<br>
                      <input type="checkbox" name='breakfast' value="no"> lunch<br>
                      <input type="checkbox"   name="lunch" value="yes" > dinner
                      <br>
                        <!-- Did you eat lunch today?:
                        <input type="radio"  required name="lunch" value="yes" > yes
                        <input type="radio"  name='lunch' value="no "> no<br> -->
                            
                        <br>
                        How much exercise did you do today?<br>
                        <input type="radio" required name="exercise" value="no exercise" >no exercise<br>
                        <input type="radio" name="exercise" value="low intensity" >low intensity  (ie can speak comfortably)<br>
                        <input type="radio" name='exercise' value="medium intensity"> medium intensity (ie light sweat, can talk but with some effort)<br>
                        <input type="radio" name="exercise" value="high intensity" > high intensity (ie unable to say more than a few words)<br>
                            
                        <br>
                      How are you feeling today?<br>
                      <input type="checkbox"  name="mood" value="yes" > content
                      <input type="checkbox" name='mood' value="no"> happy<br>
                      <input type="checkbox"   name="mood" value="yes" > sad 
                      <input type="checkbox"   name="mood" value="yes" > tired <br>
                      <input type="checkbox"   name="lunch" value="yes" > angry 
                      <input type="checkbox"   name="lunch" value="yes" > calm <br>
                      <input type="checkbox"   name="lunch" value="yes" > anxious 
                      <input type="checkbox"   name="lunch" value="yes" > restless <br>
                      <input type="checkbox"   name="lunch" value="yes" > frustrated 
                      <br>
                        
              </div>

              <div class='personalInfoBox'>
                <div class='personalInfoReminders'>
                  Reminders:     
                    <textarea  name='personalInfoBoxReminders' cols='109' rows='6'></textarea>
                      <br> 
                 
                </div>
                <div class='personalInfoGrateful'>
                  Today I'm grateful for:
                    <textarea  name='personalInfoBoxGrateful' cols='99' rows='11' ></textarea>
                      <br>
                    
                </div>
                <div class='personalInfoNotes'>
                  Notes:
                    <textarea  name='personalInfoBoxNotes' cols='114' rows='20'></textarea>

                    
                    
                </div>
                <input type='submit' name='NewQuestionnaireData' value='submit' />
              </div>
              
              <div class='rightArrowDiv'><a href='/questionnaireForm.php?day=<?php echo date('Y-m-d', strtotime('+1 day', strtotime($date))) ?>'><div class='arrowRight'></div></a></div>
                 
            </div>
          </form>
        </body>
    </html>
      