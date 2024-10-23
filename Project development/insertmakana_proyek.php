<?php
include "koneksi_proyek.php";

$data = mysqli_query($cek, "INSERT INTO `makan` (`nama`, `nmrmeja`, `hp`, `pesanan`) VALUES ('Clarrisa Fitria Ardianti', '1', '082245672281', '1. Salad MIX (1)\r\n2. Donut MIX\r\n3. Tiramisu Cake');");
if ($data)
    echo "<br>Data makanan anda tersimpan.";
else
    echo "Sorry you'r not booked"
?>