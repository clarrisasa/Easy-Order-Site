<?php
include "koneksi_proyek.php";

$data = mysqli_query($cek, "INSERT INTO `paradise` (`nama`, `ktp`, `hp`, `orang`) VALUES ('Clarrisa Fitria Ardianti', '2122567895667', '085232931056', '1');");
if ($data)
    echo "<br>Data anda tersimpan. Silahkan datang ke Paradise Cafe dan tunjukkan hasil booked anda serta untuk mengambil nomer pesanan.";
else
    echo "Sorry you'r not booked"
?>