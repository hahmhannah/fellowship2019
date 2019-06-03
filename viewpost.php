<?php 
include('config/init.php');
$blogPostId = $_REQUEST['blogPostId'];
$blogPost = getBlogPost($blogPostId);
echoHeader("title of blog post"); 
echo "

    <h2>".$blogPost['blogPostTitle']."</h2>
    <h5 class='blog_date'>".$blogPost['datePublished']."</h5>
    <p class='descr'>".$blogPost['content']."</p>

";   
?>


<?php


   /*

    $blogPostId = 2;

    $result = getAllblogPostIds($blogPostId);

    var_dump($result);
*/
    