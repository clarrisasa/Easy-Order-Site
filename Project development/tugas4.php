<html>
    <head>
        <title>
            cece
        </title>
    </head>
    <body>
        <form action="" method="POST">
            bil1<input type ="text" name="bil1" value=""> <br>
            bil2<input type ="text" name="bil2" value=""> 
            <input type ="submit" name="send" value="+">
            <input type ="submit" name="send" value="-">
            <input type ="submit" name="send" value="/">
            <input type ="submit" name="send" value="*">
    </form>
<?php
    if($_POST['send']=='+')
    $hasil = $_POST['bil1'] + $_POST['bil2'];
    
    if($_POST['send']=='-')
    $hasil = $_POST['bil1'] - $_POST['bil2'];
    
    if($_POST['send']=='/')
    $hasil = $_POST['bil1'] / $_POST['bil2'];
    
    if($_POST['send']=='*')
    $hasil = $_POST['bil1'] * $_POST['bil2'];
    echo "$hasil";
?>
    </body>
</html>