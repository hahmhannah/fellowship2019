<?php
    include('config/init.php');

    echoTrackerHeader("Sign Up");
?>

<body class='signUpPageBody'>
    <div class='formDiv'>
        <form action='' method='post'> <!--post means nothing in url-->
            Email: <input type='text' name='email' /><br /><br />
            Password: <input type='password' name='password' /><br /><br />
            <input type='submit' name='login' value='Sign Up' />
        </form>
    </div>
</body>
