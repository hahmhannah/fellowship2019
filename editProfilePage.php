<?php  /*
    include('config/init.php');
    echologgedInHeader("edit profile");
    $user = getUser($_SESSION['accountId']); 
  //because defined here, don't have to use request
if(isset($_REQUEST['newProfileEdit'])){
    insertNewProfileEdit(
        $_REQUEST['email'],
        $_REQUEST['age'],
        $_REQUEST['gender'],
        $_REQUEST['occupation'],
        $_REQUEST['occupationStressLevel'],
        $_REQUEST['typeBeverage'],
        $_REQUEST['beverageOther'],
        $_REQUEST['lifeEvent']
        );
    }

?>

<html>
  <h2>profile edit</h2>
    <form action='' method='post'>  
            Email:
            <input type='text' required name='email' value= '<?php echo $user['email'] ?> '/><br />

            Age:
            <input type='text' required name='age' /><br />

            Gender:
            <input type='text' required name='gender' /><br />
            
            Occupation:
            <input type='text' required name='occupation' /><br />

            Occupation Stress Level:
                <select name='occupationStressLevel'>
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
            
            How stressful would you rate your occupation? (1=not stressed at all, 10=extremely stressed)
            <input type="radio" name="occupationStressLevel" value='<?php echo $user['occupationStressLevel'] ?>' > 1
            <input type="radio" name='occupationStressLevel' value='<?php echo $user['occupationStressLevel'] ?>'> 2
            <input type="radio" name="occupationStressLevel" value='<?php echo $user['occupationStressLevel'] ?>' > 3
            <input type="radio" name='occupationStressLevel' value='<?php echo $user['occupationStressLevel'] ?>'> 4
            <input type="radio" name="occupationStressLevel" value='<?php echo $user['occupationStressLevel'] ?>5' > 5
            <input type="radio" name='occupationStressLevel' value='<?php echo $user['occupationStressLevel'] ?>'> 6
            <input type="radio" name="occupationStressLevel" value='<?php echo $user['occupationStressLevel'] ?>' > 7
            <input type="radio" name='occupationStressLevel' value='<?php echo $user['occupationStressLevel'] ?>'> 8
            <input type="radio" name="occupationStressLevel" value='<?php echo $user['occupationStressLevel'] ?>' > 9
            <input type="radio" name='occupationStressLevel' value='<?php echo $user['occupationStressLevel'] ?>'> 10
            <br />
            
            Please specify what kind of beverage (ie black coffee, cola, green tea, etc):
                <input type='text' required  name='beverageOther' /><br />

            Have you recently experienced or are currently experiencing a life altering event? (ie moving houses, switching jobs, etc )?<br />
            <input type="radio" required name="lifeEvent" value="yes" > yes<br>
            <input type="radio" required name='lifeEvent' value="no"> no<br>

                <br/><br/>

            <a href='userLoggedInProfile.php'>go back to profile page</a>

            <br/><br/>
            <input type='submit' name='newProfileEdit' value='edit profile' />

 </form>