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
    <li><a href="proyekkk.php">HOME</a></li>
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
		<center><h2>EDIT DATA BOOKING</h2></center><br>
<center>
<?php
    include "koneksimakan_proyek.php" ;

    $data = mysqli_query($cek, "select * FROM paradise where orang LIKE '%$_GET[orang]%'");
    while ($d=mysqli_fetch_object($data)){
        $nama=$d->nama;
        $ktp=$d->ktp;
        $hp=$d->hp;
        $orang=$d->orang;
    }
?>
<form action="" method="POST">
    <h4>Silahkan Isi Data Anda</h4>
    <td>Nama</td><br>
    <input type="text" name="nama" value="<?php echo $nama;?>"><br><br>
    <td>Ktp</td><br>
    <input type="text" name="ktp" value="<?php echo $ktp;?>"><br><br>
    <td>Nomor HP</td><br>
    <input type="text" name="hp" value="<?php echo $hp;?>"> <br><br>
    <td>Orang</td><br>
    <input type="text" name="orang" value="<?php echo $orang;?>"><br><br>
    <input type="submit" name="submit" value="Edit Data Booking"><br>
</form>
<?php
include "koneksimakan_proyek.php";
    if(isset($_POST['submit'])) {
        $data = mysqli_query($cek, "UPDATE `paradise` SET `nama` = '$_POST[nama]', `ktp` = '$_POST[ktp]', `hp` = '$_POST[hp]', `orang` = '$_POST[orang]' WHERE `paradise`.`orang` = '$_GET[orang]'");
        echo "Data Berhasil Di Edit";
    }
?>
</center>