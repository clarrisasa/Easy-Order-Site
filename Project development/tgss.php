<html>
    <head>
        <title>
       penjumlahan
        </title>
    </head>
    <body>
        <form action="" method="POST">
        angka1<input type= "text" name="angka1"> <br>
        angka2<input type= "text" name="angka2"> <br>
            <input type="submit" name="send" value="+">
            <input type="submit" name="send" value="-">
            <input type="submit" name="send" value="/">
            <input type="submit" name="send" value="*">
        </form>
        <?php
            if($_POST['send']=='+')
            $hasil = $_POST['angka1']+$_POST['angka2'];
           
            if($_POST['send']=='-')
            $hasil = $_POST['angka1']-$_POST['angka2'];
           
            if($_POST['send']=='/')
            $hasil = $_POST['angka1']/$_POST['angka2'];
            
            if($_POST['send']=='*')
            $hasil = $_POST['angka1']*$_POST['angka2'];
            echo "$hasil";
        ?>
    </body>
</html>