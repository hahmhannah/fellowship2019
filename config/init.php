<?php
date_default_timezone_set('America/Chicago');
include('config/config.php');
session_start();
include('include/db_query.php'); //this should happen right after config so other functions have access to the database
include('include/header.php');
include('include/blog.php');
include('include/viewpost.php');
include('include/comments.php');
include('include/linkButton.php');
include('include/trackerHeader.php');
include('include/trackerSignUp.php');
include('include/user.php');
include('include/loggedInHeader.php');
include('include/profilePage.php');
include('include/questionnaire.php');