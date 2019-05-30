<?php
include('config/init.php');
$blogPostId = $_REQUEST['blogPostId'];
$blogPost = getBlogPost($blogPostId);
echoHeader('Summer Experiences');
echo "

    <h1>".$blogPost['title']."</h1>
   
";