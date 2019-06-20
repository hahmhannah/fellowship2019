<?php 
include('config/init.php');
$blogPostId = $_REQUEST['blogPostId'];
$blogPost = getBlogPost($blogPostId);
echoHeader("" .$blogPost['blogPostTitle']); 
echo "

    <h2>".$blogPost['blogPostTitle']."</h2>
    <h5 class='blog_date'>".$blogPost['datePublished']."</h5>
    <p class='description'>".$blogPost['content']."</p>

";   

if(isset($_REQUEST['newComment'])){
    dbQuery(
        '
            INSERT INTO comments(author, content)
            VALUES(:author, :content)
        ',
        [
            'author' => $_REQUEST['author'],
            'content' => $_REQUEST['content']
        ]
        );
} 
?>

<div class='commentSection'>
    <?php
        $allComments = getAllComments(); //get specific comments function
        foreach($allComments as $newComment){
            echo "
            <div class=commentYeet>"
            .$newComment['author'] . "<br>" . $newComment['content']. "</div>";
        }
    ?>
</div>

<div class='submitBox'></div>

    <h4 class='commentTitle'>Leave a comment</h4>
        <form action='' method='post' class='commentSubmit'>
            Name:
                <input type='text' name='author' /><br />
            Comment:
                <textarea name='content' rows='4' cols='30'></textarea><br />
                 <input type='submit' name='newComment' value='Submit Comment' />
        </form>
        





