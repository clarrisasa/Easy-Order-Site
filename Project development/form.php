<html>
    <head>
        <title>
            form
        </title>
    </head>
    <body>
  
    <form action="" method="GET">
        nama <input type ="text" name="nama" value=""> <br> <br> 
        email <input type ="text" name="email" value=""> <br> <br> 
        subjek <input type ="text" name="subjek" value=""> <br> <br>
        message <input type ="text" name="message" value=""> <br> <br>
        <input type ="submit" name="send" value="send">
    </form>
<?php
    if(isset($_GET['send']))
        echo "$_GET[nama] <br> $_GET[email] <br> $_GET[subjek] <br> $_GET[message]";
?>
    </body>
</html>