<?php
    include('config/init.php');

    echoTrackerHeader("Sign Up");


if(isset($_REQUEST['newAccount'])){
    insertNewAccount(
        $_REQUEST['email'],
        $_REQUEST['password']
    );
}

?>

<body class='signUpPageBody'>
    <div class='formDiv'>
        <h2 class='signUpTitle'>Sign Up</h2>
            <form action='' method='post'> <!--post means nothing in url-->
                Email: <input type='text' name='email' /><br /><br />
                Password: <input type='password' name='password' /><br /><br />
                <input type='submit' name='newAccount' value='Sign Up' />
            </form>
    </div>
</body>
