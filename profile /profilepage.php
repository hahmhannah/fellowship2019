
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
    
        ".$blogPost['blogPostTitle']."</a></div><br />";
}

?>



   