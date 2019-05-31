<h3 class='recentposts'>Recent Posts</h3>

<?php
    include('config/init.php');
    echoHeader("Home");

    
    

$blogPosts = getAllBlogPosts();

foreach($blogPosts as $blogPost){
    echo "
        <img src='homepagepic.jpg' class='homepic'>
           
        <div><a class=kidlinks href='/viewpost.php?blogPostId=".$blogPost['blogPostId']."'></div>
    
        ".$blogPost['title']."</a><br />";
}

?>


    
   


    </body>



</html>