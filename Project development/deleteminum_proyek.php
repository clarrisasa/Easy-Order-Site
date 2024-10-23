<html>
        <body>
        <center><h1>PARADISE CAFE</h1></center>
<link rel="stylesheet" href="stylee.css">
<center>
<?php
include "koneksimakan_proyek.php";
$data = mysqli_query($cek, "DELETE FROM minum WHERE `minum`.`nmrmeja` = '$_GET[nmrmeja]'");

if ($data)
        echo '<script>alert("Data Anda Berhasil Dihapus")</script>' ;
        echo '<script>window.location="pelanggan_proyek.php"</script>';
?>
<li><a href="pelanggan_proyek.php">DATA PELANGGAN</a></li>
</center>

</body>
</html>