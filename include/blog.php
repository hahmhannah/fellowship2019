<?php

function getBlogPost($blogPostId){
    $allBlogPosts = [
        1 => [
            'title' => "Blog post 1",
            'datePublished' => '2019-05-28',
            'body' => "<h2>hello world</h2>"
        ],

        2 => [
            'title' => "Blog post 2",
            'datePublished' => '2019-05-28',
            'body' => "<h2>this is a different body</h2>"
        ],

    ];
    return $allBlogPosts[$blogPostId];
}