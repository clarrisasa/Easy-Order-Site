<form action="" method="POST">
    Cari <input type=text name=cari> 
    <input type=submit value=cari name=kirim>
</form>
<?php
if (isset($_POST['cari'])){
    echo "pencarian : $_POST[cari] <br>";
    include "koneksi2.php";

    $data = mysqli_query($cek,"select * FROM elektronika where nama LIKE '%$_POST[cari]%' OR nrp LIKE '%$_POST[cari]%'");
    while ($d=mysqli_fetch_object($data))
        echo "$d->nama $d->nrp $d->hp <br>";
}
?>