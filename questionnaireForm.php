<?php 
include('config/init.php');
echologgedInHeader("questionnaire"); 
$user = getUser($_SESSION['accountId']); 
$accountId = $user['accountId'];

if(isset($_REQUEST['NewQuestionnaireData'])){
  
   insertNewQuestionnaireData(
       $accountId,
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
//state of the page 
if(isset($_REQUEST['day'])){
  $date = $_REQUEST['day'];
}
else{
  $date = date('Y-m-d');
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
                    <textarea  name='personalInfoBoxReminders'></textarea>
                      <br> 
                 
                </div>
                <div class='personalInfoGrateful'>
                  Today I'm grateful for:
                    <textarea  name='personalInfoBoxGrateful' ></textarea>
                      <br>
                    
                </div>
                <div class='personalInfoNotes'>
                  Notes:
                    <textarea  name='personalInfoBoxNotes' ></textarea>

                    
                    
                </div>
                <input type='submit' name='NewQuestionnaireData' value='submit' />
              </div>
              
              <div class='rightArrowDiv'><a href='/questionnaireForm.php'><div class='arrowRight'></div></a></div>
                 
            </div>
          </form>
        </body>
    </html>
      