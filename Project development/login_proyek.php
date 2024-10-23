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
                <td>KTP</td>
                <br><input type="varchar" name="ktp" placeholder="Masukkan KTP Anda"><br>
                <td>NO. HP</td>
                <br><input type="varchar" name="hp" placeholder="Masukkan Nomer HP Anda"><br>
                <td>ORANG</td>
                <br><input type="varchar" name="orang" placeholder="Masukkan Jumlah Orang Bersama Anda"><br>
                <input type="submit" name="login" value="Login"><br>
                <li><a href="proyekkk.php">HOME</a></li>
                <h4> Scroll ke bawah untuk melihat apakah anda berhasil untuk booking tempat </h4>
            </form>
        </div>
    </body>
    <center>
    <?php
    if (isset($_POST['login'])) {
include "koneksi_proyek.php";
$data = mysqli_query($cek, "INSERT INTO `paradise` (`nama`, `ktp`, `hp`, `orang`) VALUES ('$_POST[nama]', '$_POST[ktp]', '$_POST[hp]', '$_POST[orang]')");
if ($data)
    echo '<script>alert("Booking anda di terima, silahkan datang ke paradise cafe")</script>' ;
    echo '<script>window.location="proyekkk.php"</script>'; }
?>
</center>
    </body>
</html>
