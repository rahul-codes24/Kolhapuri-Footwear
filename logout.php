<html>
<head>
<script type="text/javascript"> 
   
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    
    </script> 
</head>
<body>
<?php
session_start();

unset($_SESSION["eml"]);
session_destroy();
header("Location:index.html");
?>
</body>
</html>