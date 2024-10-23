<form action="" method="POST">
    Cari <input type=text name=cari> 
    <input type=submit value=cari name=kirim>
</form>
<?php
if (isset($_POST['cari'])){
    echo "$_POST[cari] <br>";
    include "koneksi.php";

    $data = mysqli_query($cek,"select * FROM mahasiswa2022 where nrp LIKE '%$_POST[cari]%' OR nama LIKE '%$_POST[cari]%'");
    while ($d=mysqli_fetch_object($data))
        echo "$d->nrp $d->nama $d->nohp <br>";
}
?>