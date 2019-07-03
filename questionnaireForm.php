<?php
include('config/init.php');
echologgedInHeader("questionnaire");


if(isset($_REQUEST['newQuestionnaireData'])){
    insertnewQuestionnaireData(
        $_REQUEST['questionnaireId'],
        $_REQUEST['date'],
        $_REQUEST['time'],
        $_REQUEST['mood'],   
        $_REQUEST['stress'],
        $_REQUEST['beverage'], 
        $_REQUEST['breakfast'],  
        $_REQUEST['lunch']
    //$_REQUEST['exercise']   
); 
} 
?>

    <html>
    <h2>Questionnaire</h2>
      <form action='' method='post'>  
              Account ID:
              <input type='text' name='questionnaireId' /><br />
  
              Date:
              <input type='text' name='date' /><br />
  
              Time:
              <input type='text' name='time' /><br />

              What was your mood like today?:
                  <select name='mood'>
                      <option value='low'>little to no stress</option>
                      <option value='medium'>some/oderate stress</option>
                      <option value='high'>High stress</option>
                  </select><br /> 

              
              What type of beverage did you drink today?:
                  <select name='beverage'>
                      <option value='coffee'>coffee</option>
                      <option value='tea'>tea</option>
                      <option value='soda'>soda</option>
                      <option value='other'>more than 1</option>
                  </select><br /> 
  
              How much stress did you experience today?:
                  <select name='stress'>
                      <option value='low'>little to no stress</option>
                      <option value='medium'>some/moderate stress</option>
                      <option value='high'>High stress</option>
                  </select><br /> 
  
              Did you eat breakfast?:
                  <select name='breakfast'>
                      <option value='breakfastYes'>yes</option>
                      <option value='breakfastNo'>no</option>
                  </select><br /> 

              Did you eat lunch?:
                  <select name='lunch'>
                      <option value='lunchYes'>yes</option>
                      <option value='lunchNo'>no</option>
                  </select><br /> 

              How much exercise did you do today?
                    <select name='exercise'>
                            <option value='l'>low intensity to none</option>
                            <option value='m'>medium intensity</option>
                            <option value='h'>high intensity</option>
                        </select><br /> 

            <!--  Did you eat dinner?:
                  <select name='stress'>
                      <option value='low'>little to no stress</option>
                      <option value='medium'>some/oderate stress</option>
                      <option value='high'>High stress</option>
                  </select><br />  -->

    
  
  
              <br/><br/>
              
              <br/><br/>
              <input type='submit' name='newQuestionnaireData' value='submit' />
  
              <br /><br />