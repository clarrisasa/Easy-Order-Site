<html>
    <head>
        <title>
            form
        </title>
    </head>
    <body>
    <form action="" method="POST">
            d1<input type ="varchar" name="d1" value=""> <br>
            d2<input type ="varchar" name="d2" value=""> 
            <input type ="submit" name="send" value="+">
            <input type ="submit" name="send" value="-">
            <input type ="submit" name="send" value="/">
            <input type ="submit" name="send" value="*">
    </form>
<?php
if($_POST['send']=='+')
$hasil = $_POST['d1'] + $_POST['d2'];

if($_POST['send']=='-')
$hasil = $_POST['d1'] - $_POST['d2'];

if($_POST['send']=='/')
$hasil = $_POST['d1'] / $_POST['d2'];

if($_POST['send']=='*')
$hasil = $_POST['d1'] * $_POST['d2'];
echo "$hasil  ";

include "koneksi2.php";
$data = mysqli_query($cek, "INSERT INTO `kalkulator` (`d1`, `operasi`, `d2`, `hasil`) VALUES ('$_POST[d1]', '$_POST[send]', '$_POST[d2]', '$hasil')");
if ($data)
    echo " masuk datanya ";
else
    echo "Data gagal masuk. NRP tidak boleh sama";
?>
    </body>
</html>