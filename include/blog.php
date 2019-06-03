<?php  /*library file-just functions-need to call functions in webpage*/
    function getBlogPost($blogPostId){
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

    function getAllBlogPosts(){
        $result = dbQuery('
        SELECT *
        FROM viewpost
    ',
        array())->fetchAll();
        return $result;
    }