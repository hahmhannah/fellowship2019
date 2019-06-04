<?php 

include('config/init.php');

if(isset($_REQUEST['newComment'])){
    dbQuery(
        '
            INSERT INTO comments(author, dateSubmitted, content)
            VALUES(:author, :content)
        ',
        [
            'author' => $_REQUEST['author'],
            'content' => $_REQUEST['content']
        ]
        );
}
?>

<?php
    var_dump($_REQUEST);
?>

<h4>Comments</h4>

<form action='' method='post'>
    Name:
    <input type='text' name='name' /><br />

    Comment:
    <textarea name='comment' rows='4' cols='30'></textarea><br />

        <input type='submit' name='newComment' value='Submit Comment' />

</form>

