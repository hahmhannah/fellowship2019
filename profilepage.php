<!-- <h3 class='recentposts'>Recent Posts</h3> -->
<?php
    include('config/init.php');
    echoHeader("Home");

  
     ?> 


<html>
    <head>
    </head>

    <body>
       <img src='dosomethinggreat.jpg' class='homepagepic'> 
    </body> 
    
</html>

   

<?php
$blogPosts = getAllBlogPosts();

foreach($blogPosts as $blogPost){
    echo "
        
           
       <div class='link_child'><a class='kidlinks' href='/viewpost.php?blogPostId=".$blogPost['blogPostId']."'>
    
        ".$blogPost['title']."</a></div><br />";
}

?>



   