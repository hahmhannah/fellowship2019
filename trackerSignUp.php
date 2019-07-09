<?php
    include('config/init.php');

if(isset($_REQUEST['newAccount'])){
    insertNewAccount(
        $_REQUEST['email'],
        $_REQUEST['password']
    );
}



/*
//hashing: take a string and turn it into gibberish code--can't get the original thing back 
//everytime u hash something u get the same code
    checking if hash outputs match in the database
       $hashedPassword = sha1($password); then just save this into database 
       then u have to turn inputted password into hash and u have to compare hashes 


*/

echoTrackerHeader("Sign Up");
?>

<body class='signUpPageBody'>
    <div class='signUpFormDiv'>
        <h2 class='signUpTitle'>Sign Up</h2>

            <form action='/userLoggedIn.php' method='post'> <!--post means nothing in url-->
                Email: <input type='text' name='email' /><br /><br />
                Password: <input type='password' name='password' /><br /><br />
                <input type='submit' name='newAccount' value='Sign Up' />
            </form>
            
    </div>
</body>
