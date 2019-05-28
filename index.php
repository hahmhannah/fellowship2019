<?php
include('include/header.php');

echoHeader();

echo "
    <h1>Home page</h1>
";

function echoHeader(){
    echo "
        <div style='text-align:right;'>
            <a href='/'>Home</a>
        </div> 
    ";

}