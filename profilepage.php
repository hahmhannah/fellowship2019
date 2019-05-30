<?php
    include('config/init.php');
    echoHeader("Home");

    


$blogPosts = getAllBlogPosts();

foreach($blogPosts as $blogPost){
    echo "
        <img src='homepagepic.jpg' class='homepic'>
        <div class='blogpostcontainer'>
            <a class='blogkids' href='/view_post.php?blogPostId'=".$blogPost['blogPostId']."'>
        </div>   
        
        
        ".$blogPost['title']."</a><br />";
}

?>


    
   


    </body>



</html>