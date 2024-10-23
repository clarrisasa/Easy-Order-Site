<html>
    <head>
        <title>
            form
        </title>
    </head>
    <body>
    <form action="" method="POST">
        nrp     : <input type ="varchar" name="nrp" value=""> <br> <br> 
        nama    : <input type ="varchar" name="nama" value=""> <br> <br> 
        hp      : <input type ="varchar" name="hp" value=""> <br> <br>
        <input type ="submit" name="send" value="send">
    </form>
<?php
include "koneksi.php";
$data = mysqli_query($cek, "INSERT INTO `elektronika` (`nrp`, `nama`, `hp`) VALUES ('$_POST[nrp]', '$_POST[nama]', '$_POST[hp]')");
if ($data)
    echo " masuk datanya";
else
    echo "Data gagal masuk. NRP tidak boleh sama";
?>
    </body>
</html>