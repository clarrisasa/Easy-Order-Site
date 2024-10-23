<html>
  <head>
    <title>PARADISE CAFE</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/style.css" rel="stylesheet">
  </head>
  <body>

  <!--happy code-->

  <!-- jQuery lokal -->
  <script src="assets/jquery/jquery.min.js"></script>
 
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
 <!-- Custom JS -->
 <script src="assets/custom.js"></script>
 <div class="container">

 <html>
  <head>
    <title>PARADISE CAFE</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/stylenn.css" rel="stylesheet">
  </head>
  <body>

  <!--happy code-->

  <!-- jQuery lokal -->
  <script src="assets/jquery/jquery.min.js"></script>
 
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
 <!-- Custom JS -->
 <script src="assets/custom.js"></script>
 <div class="container">

 <!-- Bagian Header -->
 <div class="row">
        <div class="col-md-12 header" id="site-header">
            <!-- isi header -->
			<header align="center">
			<p> </p>
        <img src="cafee.jpg" width="1000px" height="500px"align="center">
            <header align="center">
    <nav class="menus">
    <ul align="center">
        <li><a href="login_proyek.php">LOGIN</a></li>
		<li><a href="pelanggan_proyek.php">DATA PELANGGAN</a></li>
    </ul>
</nav>
    </header>
    </div>
    </div>   
	</header>
    <!-- End Bagian Header -->

    <!-- Bagian Wrapper 2 kolom -->
    <div class="row">
	 <div class="col-md-12 articeles" id="site-content">
           <!-- isi content -->
		<aside class="widgets">
		<p> </p>
		<center><h4>EDIT DATA MAKANAN</h4></center><br>
<center>
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
    <h4>Silahkan Isi Data Anda</h4>
    <td>Nama</td><br>
    <input type="text" name="nama" value="<?php echo $nama;?>"><br><br>
    <td>Nomor Meja</td><br>
    <input type="text" name="nmrmeja" value="<?php echo $meja;?>"><br><br>
    <td>Nomor HP</td><br>
    <input type="text" name="hp" value="<?php echo $hp;?>"> <br><br>
    <td>Pesanan</td><br>
    <input type="text" name="pesanan" value="<?php echo $pesanan;?>"><br><br>
    <input type="submit" name="submit" value="Edit Data Makanan"><br>
</form>
<?php
include "koneksimakan_proyek.php";
    if(isset($_POST['submit'])) {
        $data = mysqli_query($cek, "UPDATE `makan` SET `nama` = '$_POST[nama]', `nmrmeja` = '$_POST[nmrmeja]', `hp` = '$_POST[hp]', `pesanan` = '$_POST[pesanan]' WHERE `makan`.`nmrmeja` = '$_GET[nmrmeja]'");
        echo "Data Berhasil Di Edit";
    }
?>
</center>