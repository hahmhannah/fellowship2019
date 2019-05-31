<?php
include('config/init.php');
$blogPostId = $_REQUEST['blogPostId'];
$blogPost = getBlogPost($blogPostId);
echoHeader("title of blog post"); 
echo "

    <h1>".$blogPost['title']."</h1>
    <h1>".$blogPost['datePublished']."</h1>
    <h1>".$blogPost['body']."</h1>

";