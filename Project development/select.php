<html>
    <head>
        <title>
            form
        </title>
    </head>
    <body>
        <h3> DATA MAHASISWA ELEKTRONIKA </h3>
    <table width="25%" border="1">
    <?php
    include "koneksi.php";
    $data = mysqli_query($cek, "select * FROM elektronika");
    while ($d=mysqli_fetch_object($data))
        echo "<tr> 
                <td> $d->nrp </td>
                <td> $d->nama </td>
                <td> $d->hp </td>
            </tr>";
            //tr = baris
            //td = kolom
?>
</table>

    </body>
</html>


