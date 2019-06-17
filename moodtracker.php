<?php
    include('config/init.php');
?>

<html>
    <head><link href="moodtracker.css" rel="stylesheet" type="text/css"></head>
    
    <body>
        <div class='navBar'>
            <ul class='navBarParent'>
                <div class='navBarChild1'>
                    <li class='navAbout'><a href='#anchor1'>about</a></li>
                    <li class='navHowItWorks'><a href='#anchor2'>how it works</a></li>
                    <li class='navResources'><a href='#anchor3'>resources</a></li>
                    <li class='navExtra'><a href='#anchor4'>extra</a></li>
                </div> 
                <div class='navBarChild2'>   
                    <li class='navLogin'><a href='#'>login</a></li>
                    <li class='navSignUp'><a href='#'>sign up</a></li>
                </div>
            </ul>       
        </div>

        <div class='homePage'>
            <h1 class='frontPageAmbiance'>ambiance</h1>
                <p class='frontPageMiniText'>a mood tracker</p>
        </div>

       <div class='homePageDivAbout'>
           <h2 class='homePageAboutDivTitle'><a name='anchor1'>about this website</a></h2>
                <?php echoLinkButton("About"); ?>
        </div>   

        <div class='homePageDivHowItWorks'>
            <h2 class='homePageHowItWorksDivTitle'><a name='anchor2'>how it works</a></h2>
                <?php echoLinkButton("How It Works"); ?>
        </div>  

        <div class='homePageDivResources'>
            <h2 class='homePageResourcesDivTitle'><a name='anchor3'>resources</a></h2>
                <?php echoLinkButton("Resources"); ?>
        </div> 

        <div class='homePageDivExtra'>
            <h2 class='homePageExtraTitle'><a name='anchor4'>extra space</a></h2>
                <p>maybe footer/add login button</p>
                    
        </div> 

    </body>







</html>


