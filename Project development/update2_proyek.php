<?php
    include "koneksimakan_proyek.php" ;

    $data = mysqli_query($cek, "select * FROM makan where nmrmeja LIKE '%$_GET[nmrmeja]%'");
    while ($d=mysqli_fetch_object($data)){
        $nama=$d->nama;
        $meja=$d->nmrmeja;
        $hp=$d->hp;
        $pesanan=$d->pesanan;
    }
?>
<form action="" method="POST">
    <h4>Edit Data Booking</h4>
    <td>Nama</td><br>
    <input type="text" name="nama" value="<?php echo $nama;?>"><br><br>
    <td>Nomor Meja</td><br>
    <input type="text" name="nmrmeja" value="<?php echo $meja;?>"><br><br>
    <td>Nomor HP</td><br>
    <input type="text" name="hp" value="<?php echo $hp;?>"> <br><br>
    <td>Pesanan</td><br>
    <input type="text" name="pesanan" value="<?php echo $pesanan;?>"><br><br>
    <input type="submit" name="submit" value="Edit Data Booking"><br>
</form>
<?php
include "koneksimakan_proyek.php";
    if(isset($_POST['submit'])) {
        $data = mysqli_query($cek, "UPDATE `makan` SET `nama` = '$_POST[nama]', `nmrmeja` = '$_POST[nmrmeja]', `hp` = '$_POST[hp]', `pesanan` = '$_POST[pesanan]' WHERE `makan`.`nmrmeja` = '$_GET[nmrmeja]'");
        echo "Data Berhasil Di Edit";
    }
?>