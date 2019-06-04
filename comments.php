<?php 

include('config/init.php');

if(isset($_REQUEST['newComment'])){
    insertNewComment(
        $_REQUEST['author'],
        $_REQUEST['content']
    );
}
?>



<h4>Comments</h4>

<form action='' method='post'>
    Name:
    <input type='text' name='author' /><br />

    Comment:
    <textarea name='content' rows='4' cols='30'></textarea><br />

        <input type='submit' name='newComment' value='Submit Comment' />

</form>

