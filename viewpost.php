<?php 
include('config/init.php');
$blogPostId = $_REQUEST['blogPostId'];
$blogPost = getBlogPost($blogPostId);
echoHeader("title of blog post"); 
echo "

    <h1>".$blogPost['blogPostTitle']."</h1>
    <h1>".$blogPost['datePublished']."</h1>
    <h1>".$blogPost['content']."</h1>

";   
?>


<?php


   /*

    $blogPostId = 2;

    $result = getAllblogPostIds($blogPostId);

    var_dump($result);
*/
    