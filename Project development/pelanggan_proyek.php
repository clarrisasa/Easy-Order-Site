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
        <img src="cff1.jpg" width="1000px" height="540px"align="center">
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
        <center>
        <form action="cb_proyek.php" method="POST">
    Cari : <input type=text name=cari placeholder="Masukkan Nama Anda"> 
    <input type=submit value=cari name=kirim>
</form>
<center><h4>DATA PELANGGAN PARADISE CAFE</h4></center>
<center><p>Silahkan Klik Pencarian Untuk Menghapus atau Mengedit Pesanan Anda</p></center>

<h4>DAFTAR PELANGGAN BOOKING TEMPAT<h4>
<table width="100%" border="2">
    <th> NAMA </th>
    <th> KTP </th>
    <th> HP </th>
    <th> ORANG </th>
<?php
    include "koneksimakan_proyek.php";
    $data = mysqli_query($cek, "select * FROM `paradise` ");
    while ($d=mysqli_fetch_object($data))
        echo "<tr>
        <th> $d->nama </th>
        <th> $d->ktp </th>
        <th> $d->hp </th>
        <th> $d->orang </th>
    </tr>"; 
?>
</table>
<br>

<h4>DAFTAR PESANAN MAKANAN<h4>
<table width="100%" border="2">
    <th> NAMA </th>
    <th> NOMOR MEJA </th>
    <th> HP </th>
    <th> PESANAN </th>
<?php
    include "koneksimakan_proyek.php";
    $data = mysqli_query($cek, "select * FROM `makan` ");
    while ($d=mysqli_fetch_object($data))
        echo "<tr>
        <th> $d->nama </th>
        <th> $d->nmrmeja </th>
        <th> $d->hp </th>
        <th> $d->pesanan </th>
    </tr>"; 
?>
</table>
<br>

<h4>DAFTAR PESANAN MINUMAN<h4>
<table width="100%" border="2">
    <th> NAMA </th>
    <th> NOMOR MEJA </th>
    <th> HP </th>
    <th> PESANAN </th>
<?php
    include "koneksimakan_proyek.php";
    $data = mysqli_query($cek, "select * FROM `minum` ");
    while ($d=mysqli_fetch_object($data))
        echo "<tr>
        <th> $d->nama </th>
        <th> $d->nmrmeja </th>
        <th> $d->hp </th>
        <th> $d->pesan </th>
    </tr>"; 
?>
</table>

