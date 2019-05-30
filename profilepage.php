<?php
    include('config/init.php');
    echoHeader("Home");

    


$blogPosts = getAllBlogPosts();
echo "
  <h1></h1>
";
foreach($blogPosts as $blogPost){
    echo "<a href='/view_post.php?blogPostId=".$blogPost['blogPostId']."'>
        ".$blogPost['title']."
    </a><br />";
}

?>


    <img src="homepagepic.jpg" class="homepic">
    <div class='blogpostcontainer'>
           
        </div> 
    </div>


    </body>



</html>