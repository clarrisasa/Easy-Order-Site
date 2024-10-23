<table width="80%" border="1">
    <th> Nrp  </th>
    <th> Nama </th>
    <th> Nohp </th>
    <th> Delete </th>
<?php
    include "koneksi.php";
    $data = mysqli_query($cek, "select * FROM `mahasiswa2022` ");
    while ($d=mysqli_fetch_object($data))
        echo "<tr>
        <th> $d->nrp  </th>
        <th> $d->nama </th>
        <th> $d->nohp </th>
        <th> <a href=\"delete.php? nrp=$d->nrp\">delete</a></th>
    </tr>"; 
?>
</table>