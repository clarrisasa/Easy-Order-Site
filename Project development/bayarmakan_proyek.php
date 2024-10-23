<center><h1>PARADISE CAFE</h1></center>
<link rel="stylesheet" href="stylee.css">

<html>
    <head>
        <title>PARADISE CAFE</title>
        <meta charset="utf-8">
        <style type="text/css">
            .login {
                margin: 200px auto;
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
                <br><input type="varchar" name="pesanan" placeholder="Masukkan Pesanan Anda"><br>
                <input type="submit" name="login" value="kirim"><br>
                <li><a href="proyekkk.php">HOME</a></li>
                <li><a href="menumknan_proyek.php">MENU MAKANAN</a></li>
                <h4> Bayarkan Hasil Pesanan yang telah anda pilih di Tempat Pembayaran </h4>
            </form>
        </div>
    </body>
    <center>
    <?php
    if (isset($_POST['login'])) {
include "koneksimakan_proyek.php";
$data = mysqli_query($cek, "INSERT INTO `makan` (`nama`, `nmrmeja`, `hp`, `pesanan`) VALUES ('$_POST[nama]', '$_POST[nmrmeja]', '$_POST[hp]', '$_POST[pesanan]')");
if ($data)
    echo "<br>Pesanan anda berhasil di simpan";
else
    echo "your data is not booked"; }
?>
</center>
    </body>
</html>