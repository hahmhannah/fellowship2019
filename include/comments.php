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