<html>
    <head>
    <title>
        www.cecewebsite
    </title>
</head>
<body>
    <?php 
    if(isset($_POST['send']))
    {
        echo "Acressing username using POST:".$_POST['username']."<br>";
        echo "Acressing password using REQUEST:".$_REQUEST['password']."<br>";

        $password=$_POST['password'];
        echo "password is $password";
    }
    ?>
    <form method= "post" action= "<?php echo $_SERVER ['PHP_SELF'];?>">
    <B><p style="text-align:center">INPUT YOUR NAME AND PASSWORD!! </p></B>
    <p style="text-align:center">Name :
    <input name="username" type = "text" id="username"> </P>
    <p style="text-align:center"> Password :
    <input name ="password" type = "password" id = "password"> </P>
    <p style="text-align:center"><input name="send"type="submit"id="send"value="send!"></P>
</form>
</body>
</html>