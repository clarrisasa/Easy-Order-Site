<?php
include "koneksi.php";

$data = mysqli_query($cek, "INSERT INTO `elektronika` (`nama`, `nrp`, `hp`) VALUES ('Clarrisa Fitria Ardianti', '2122500050', '085232931056')");
if ($data)
    echo " masuk datanya";
else
    echo "Data gagal masuk. NRP tidak boleh sama"
?>