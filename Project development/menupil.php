<html>
    <head>
    <title>
        www.cecewebsite
    </title>
</head>
<body>
    <?php 
    if(isset($_POST['language']))
    {
        $language = $_POST['language'];
        $n = count ($language);
        $i = 0;

        echo "Bahasa yang kamu pilih adalah : \r\n".
            "<ol>";
        while ($i<$n)
        {
            echo"<li>{$language[$i]}</li>\r\n";
            $i++;
        }
        echo "</ol>";
    }
    ?>
    <form method= "post" action= "<?php echo $_SERVER ['PHP_SELF'];?>">
        Pilih bahasa pemograman yang kamu lihat : <br>
    <input name="language[]" type = "checkbox" id="language[]" value="c++"> 
        c++<br>
    <input name="language[]" type = "checkbox" id="language[]" value="Java"> 
        Java<br>
    <input name="language[]" type = "checkbox" id="language[]" value="PHP"> 
        PHP<br>
    <input name="language[]" type = "checkbox" id="language[]" value="ASP"> 
        ASP<br>
    <input name="language[]" type = "checkbox" id="language[]" value="Delphi"> 
        Delphi<br>
    <input name="send" type = "submit" id="send" value="send!">
</form>
</body>
</html>
 