<?php
include "koneksi2.php";
$data = mysqli_query($cek, "DELETE FROM elektronika WHERE `elektronika`.`nrp` = '$_GET[nrp]'");

if ($data)
        echo "Terhapus <br>" ;
?>