
<?php
    include "koneksi.php";
    $data = mysqli_query($cek, "select * FROM elektronika");
    while ($d=mysqli_fetch_object($data))
        echo " $d->nrp $d->nama $d->hp <br>";
            //tr = baris
            //td = kolom
?>



