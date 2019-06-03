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
