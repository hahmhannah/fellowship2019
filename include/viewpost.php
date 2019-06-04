<?php
    
    function getblogPostId($blogPostId){
        $result = dbQuery('
            SELECT * 
            FROM viewpost
            WHERE blogPostId = :blogPostId
        ', 
            array(
                'blogPostId' => $blogPostId
                ))->fetch();
            return $result;
    }
    function getAllblogPostIds(){
        $result = dbQuery('
            SELECT *
            FROM viewpost
        ',
            array())->fetchAll();
            return $result;
    }
?>


<?php
  //  var_dump($_REQUEST);
?>
<!--
<h4>Comments</h4>

<form action='' method='post'>
    Name:
    <input type='text' name='name' /><br />

    Comment:
    <textarea name='comment' rows='4' cols='30'></textarea><br />

        <input type='submit' name='newComment' value='Submit Comment' />

</form> -->