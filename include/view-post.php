<?php 

include('config/init.php');

$blogPostId = 1;
$blogPost = getBlogPost($blogPostId);

echoHeader('View blog post'); //tab title and title of the page

echo "
    <h1>".$blogPost['title']. "</h1>
";