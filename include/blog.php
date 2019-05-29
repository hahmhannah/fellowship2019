<?php  /*library file-just functions-need to call functions in webpage*/
    function getBlogPost($blogPostId){
        $allBlogPosts = getAllBlogPosts();

        return $allBlogPosts[$blogPostId];
    }

    function getAllBlogPosts(){
        $allBlogPosts = [
            1 => [
                'blogPostId' => 1,
                'title' => "Post 1",
                'datePublished' => '2019-05-29',
                'body' => "<h3>yo</h3>"
            ],
       
            2 => [
                'blogPostId' => 2,
                'title' => "Post 2",
                'datePublished' => '2019-05-30',
                'body' => "<h3>yeet</h3>"
            ],
            
            3 => [
                'blogPostId' => 3,
                'title' => "Post 3",
                'datePublished' => '2019-05-30',
                'body' => "<h3>yeehaw</h3>"
            ],

            4 => [
                'blogPostId' => 4,
                'title' => "Post 4",
                'datePublished' => '2019-05-30',
                'body' => "<h3>yeethaw</h3>"
            ],

            5 => [
                'blogPostId' => 5,
                'title' => "Post 5",
                'datePublished' => '2019-05-30',
                'body' => "<h3>ayee</h3>"
            ],

            6 => [
                'blogPostId' => 6,
                'title' => "Post 6",
                'datePublished' => '2019-05-30',
                'body' => "<h3>skeet</h3>"
            ],
       
       
        ];
        return $allBlogPosts;
    }