<?php
include('config/init.php');
$blogPostId = $_REQUEST['blogPostId'];
$blogPost = getBlogPost($blogPostId);
echoHeader("Title of the blog post");
echo "

    <h3>".$blogPost['title']."</h3>
   
";