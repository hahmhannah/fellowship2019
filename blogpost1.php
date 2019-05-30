<?php
include('config/init.php');
echoHeader("blog post 1");
$blogPosts = getAllBlogPosts();
echo "

";
foreach($blogPosts as $blogPost){
    echo "<a href='/viewpost.php?blogPostId=".$blogPost['blogPostId']."'>
        ".$blogPost['title']."
    </a><br />";
}