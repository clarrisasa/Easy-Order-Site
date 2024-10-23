<center><h1>PARADISE CAFE</h1></center>
<link rel="stylesheet" href="styler.css">

<html>
    <head>
        <title>PARADISE CAFE</title>
        <meta charset="utf-8">
        <style type="text/css">
            .login {
                margin: 30px auto;
                width: 300px;
                padding: 10px;
                border: 3px solid #fff;
                background: transparant;
                color: #fff;
            }
            input[type=text], input[type=password] {
                margin: 5px auto;
                width: 100%;
                padding: 10px;
            }
            input[type=submit] {
                margin: 5px auto;
                float: right;
                padding: 5px;
                width: 90px;
                border: 1px solid #fff;
                color: #fff;
                background: black; 
                cursor: pointer;
            }
        </style>
    </head>
    <body>
    <!-- <center><img src=".jpg" width="100px" height="50px"></center> -->
        <div class="login">
            <form action="" method="POST">
                <h3>Silahkan Isikan Data Diri Anda untuk Booking Tempat!</h3>
                <td>NAMA</td>
                <br><input type="varchar" name="nama" placeholder="Masukkan Nama Anda"><br>
                <td>NOMOR MEJA</td>
                <br><input type="varchar" name="nmrmeja" placeholder="Masukkan Nomer Meja Anda"><br>
                <td>NO. HP</td>
                <br><input type="varchar" name="hp" placeholder="Masukkan Nomer HP Anda"><br>
                <td>PESANAN</td>
                <br><input type="varchar" name="pesan" placeholder="Masukkan Pesanan Anda"><br>
                <input type="submit" name="login" value="kirim"><br>
                <li><a href="proyekkk.php">HOME</a></li>
                <li><a href="menuminum_proyek.php">MENU MINUMAN</a></li>
                <h4> Silahkan lakukan pembayaran di tempat pembayaran dan mohon maaf kami tidak menerima cash </h4>
            </form>
        </div>
    </body>
    <center>
    <?php
    if (isset($_POST['login'])) {
include "koneksi_proyek.php";
$data = mysqli_query($cek, "INSERT INTO `minum` (`nama`, `nmrmeja`, `hp`, `pesan`) VALUES ('$_POST[nama]', '$_POST[nmrmeja]', '$_POST[hp]', '$_POST[pesan]')");
if ($data)
    echo '<script>alert("Pesanan Anda Berhasil Disimpan")</script>' ;
    echo '<script>window.location="menuminum_proyek.php"</script>';}
?>
<table width="50%" border="1">
    <th> NAMA </th>
    <th> NOMOR MEJA </th>
    <th> HP </th>
    <th> PESANAN </th>
<?php
    include "koneksi_proyek.php";
    $data = mysqli_query($cek, "select * FROM `minum` ");
    while ($d=mysqli_fetch_object($data))
        echo "<tr>
        <th> $d->nama </th>
        <th> $d->nmrmeja </th>
        <th> $d->hp </th>
        <th> $d->pesan </th>
        </th>

    </tr>"; 
?>
</center>
    </body>
</html>