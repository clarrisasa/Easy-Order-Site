<?php
include "koneksiminum_proyek.php";

$data = mysqli_query($cek, "INSERT INTO `minum` (`nama`, `nmrmeja`, `hp`, `pesan`) VALUES ('Clarrisa Fitria Ardianti', '5', '082245672281', 'es kopyor, tiramisu coklat');");
if ($data)
    echo "<br>Data makanan anda tersimpan.";
else
    echo "Sorry you'r not booked"
?>