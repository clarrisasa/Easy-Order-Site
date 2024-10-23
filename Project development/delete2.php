<?php
     include "koneksi.php";
     $data = mysqli_query($cek, "DELETE FROM mahasiswa2022 WHERE `mahasiswa2022`.`nrp` = '$_GET[nrp]'");
    if ($data)
        echo "Alhamdulillah delete <br>" ;
?>       

