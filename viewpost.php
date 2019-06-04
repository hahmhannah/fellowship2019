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
?>

<h4>Comments</h4>

<form action='' method='post'>
    Name:
    <input type='text' name='author' /><br />

    Comment:
    <textarea name='content' rows='4' cols='30'></textarea><br />

        <input type='submit' name='newComment' value='Submit Comment' />

</form>
    