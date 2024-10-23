<form action="" method="POST">
        nama   : <input type ="text" name="nama" value=""> <br> <br> 
        nrp    : <input type ="number" name="nrp" value=""> <br> <br> 
        hp      :  <input type ="number" name="hp" value=""> <br> <br>
        <input type ="submit" name="edit" value="edit">
        <input type ="reset" name="edit" value="reset">
</form>
<?php
include "koneksi2.php";
if(isset($_POST['edit']))
{
$data = mysqli_query($cek, "UPDATE `elektronika` SET `nama` = '$_POST[nama]', 
`nrp` = '$_POST[nrp]', `hp` = '$_POST[hp]' WHERE  `nrp` = '$_GET[nrp]'");
if ($data)
    echo "Data Berhasil Di Edit";
}
?>