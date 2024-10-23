<h2> DATA MAHASISWA ELEKTRONIKA </h2>
<table width="50%" border="1">
    <th> nama </th>
    <th> nrp </th>
    <th> hp </th>
    <th> delete </th>
<?php
    include "koneksi2.php";
    $data = mysqli_query($cek, "select * FROM `elektronika` ");
    while ($d=mysqli_fetch_object($data))
        echo "<tr>
        <th> $d->nama </th>
        <th> $d->nrp </th>
        <th> $d->hp </th>
        <th> <a href=\"delete.php? nrp=$d->nrp\">delete</a></th>
    </tr>"; 
?>
</table>