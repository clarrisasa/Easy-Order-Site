<html>
    <head>
        <title>
            form_proyek.wwww
        </title>
    </head>
    <body>
    <form action="" method="POST">
        nama   : <input type ="varchar" name="nama" value=""> <br> <br> 
        ktp   : <input type ="varchar" name="ktp" value=""> <br> <br> 
        hp      :  <input type ="varchar" name="hp" value=""> <br> <br>
        orang     :  <input type ="varchar" name="orang" value=""> <br> <br>
        <input type ="submit" name="send" value="send">
    </form>
<?php
include "koneksi_proyek.php";
$data = mysqli_query($cek, "INSERT INTO `paradise` (`nama`, `ktp`, `hp`, `orang`) VALUES ('$_POST[nama]', '$_POST[ktp]', '$_POST[hp]', '$_POST[orang]')");
if ($data)
    echo "<br>Booked Complate";
else
    echo "your data is not booked";
?>
    </body>
</html>