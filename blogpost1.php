<?php
include('config/init.php');
echoHeader("blog post 1");
$blogPosts = getAllBlogPosts();
echo "
  <p>Check out all my blog posts</p>
";
foreach($blogPosts as $blogPost){
    echo "<a href='/viewpost.php?blogPostId=".$blogPost['blogPostId']."'>
        ".$blogPost['title']."
    </a><br />";
}