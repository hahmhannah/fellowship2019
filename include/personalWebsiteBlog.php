<?php

function getThoughtsBlogPost($blogPostId){
    $finalResult = dbquery('
        SELECT * 
        FROM thoughts
        WHERE blogPostId = :blogPostId
    ',
        [
            'blogPostId' => $blogPostId
            
        ]   
            )->fetch();
        return $finalResult;

}

function getAllThoughtsBlogPosts(){
    $finalResult = dbQuery('
    SELECT *
    FROM thoughts
',
    array())->fetchAll();
    return $finalResult;
}