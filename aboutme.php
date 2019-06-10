<?php
    include('config/init.php');
    echoHeader("About Me");
        echo "
            <h2>About Me</h2>
                <p class='description'>Hi! My name is Hannah Hahm and I'm a sophomore at Washington University in St. Louis studying Neuroscience. On campus, I am a part of the Korean Student Association and Campus Y WAGS. 
                Off campus, I am a part of the Gereau Lab, a pain neurobiology lab at the Washu medical school. 
            </br></br>
                Some of my favorite things are nature, animals, Marvel, photography, reading, trying new restaurants, BTS, and writing.</p>
            </br></br>
            
        "
?>

<html>   
    <body>  <!--find better pictures later-->
        <img src='/images/pic_1.JPG' class='pic_child1'>
        <img src='/images/flame.JPG' class='pic_child2'>
        <img src='/images/pic_3.JPG' class='pic_child3'>
    </body>

</html>



<h4 class='commentTitle'>Leave a comment</h4>
        <form action='' method='post' class='commentSubmit'>
            Name:
                <input type='text' name='author' /><br />
            Comment:
                <textarea name='content' rows='4' cols='30'></textarea><br />
                 <input type='submit' name='newAboutMeComment' value='Submit Comment' />
        </form>



    