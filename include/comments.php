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

    function getAllComments(){
    $result = dbQuery(
            '
            SELECT * 
            FROM comments 
            '
        ) -> fetchAll();
        return $result;

    }