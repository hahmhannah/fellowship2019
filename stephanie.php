<html>

  <head>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script> 
    <script type ='text/javascript'>
        function fadeInHiddenDiv(){
            $('.hiddenInfoDiv').fadeIn();
        }
    </script>
  </head>

    <body>    <!--when it's clicked, run javascript but don't do anything with the link -->
        <a href='javascript://' onclick='fadeInHiddenDiv()'>Click here</a> 
        <div class='hiddenInfoDiv' style='display:none; background-color:lightblue'>
           Yeehaw stephanie
        </div>
    </body>
</html>