<?php  /*
    include('config/init.php');
    echologgedInHeader("edit profile");
    $user = getUser($_SESSION['accountId']); 
    $accountId = $user['accountId'];
  //because defined here, don't have to use request
/* if(isset($_REQUEST['newProfileEdit'])){
    insertNewProfileEdit(
        $accountId,
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
*/
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
            
            Please specify what kind of beverage (ie black coffee, cola, green tea, etc):
                <input type='text' required  name='beverageOther' /><br />

            Have you recently experienced or are currently experiencing a life altering event? (ie moving houses, switching jobs, etc )?<br />
            <input type="radio" required name="lifeEvent" value="yes" > yes<br>
            <input type="radio" required name='lifeEvent' value="no"> no<br>

                <br/><br/>

            <a href='userLoggedInProfile.php'>go back to profile page</a>

            <br/><br/>
          

 </form>