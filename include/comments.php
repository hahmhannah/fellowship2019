<?php

function insertNewComment($author, $content){
    dbQuery(
        '
            INSERT INTO comments(author, content)
            VALUES(:author, :content)
        ',
        [
            'author' => $author,
            'content' => $content
        ]
        );
}

?>

<?php

function getAllNewComments(){
   $result = dbQuery(
        '
        SELECT * 
        FROM comments 
        
        '
    ) -> fetchAll();
    return $result;

}