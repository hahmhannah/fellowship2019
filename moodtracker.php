<?php
    include('config/init.php');

    echoTrackerHeader("Home Page");
?>

        <div class='homePage'>
            <h1 class='frontPageAmbiance'>ambiance</h1>
                <p class='frontPageMiniText'></p>
        </div>

       <div class='homePageDivAbout'>
           <h2 class='homePageAboutDivTitle'><a name='anchor1'>about this website</a></h2>
                <?php // echoLinkButton("/aboutTracker.php", "about"); ?>
        </div>   

        <div class='homePageDivHowItWorks'>
            <h2 class='homePageHowItWorksDivTitle'><a name='anchor2'>how it works</a></h2>
                <?php echoLinkButton("/howItWorks.php", "how It Works"); ?>
        </div>  

        <div class='homePageDivResources'>
            <h2 class='homePageResourcesDivTitle'><a name='anchor3'>resources</a></h2>
                <?php echoLinkButton("/resources.php", "resources"); ?>
                
        </div> 

        <div class='homePageDivExtra'>
            <h2 class='homePageExtraTitle'><a name='anchor4'>Contact Us</a></h2>
                <p>maybe footer/add login button</p>
                    
        </div> 

    </body>







</html>


