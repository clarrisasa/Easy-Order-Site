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
        <li><a href="proyekkk.php">HOME</a></li>
        <li><a href="login_proyek.php">LOGIN</a></li>
		<li><a href="menumknan_proyek.php">MENU MAKANAN</a></li>
		<li><a href="menuminum_proyek.php">MENU MINUMAN</a></li>
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
        <form action="" method="POST">
    Cari <input type=text name=cari> 
    <input type=submit value=cari name=kirim>
</form>
<?php
if (isset($_POST['cari'])){
    echo "pencarian : $_POST[cari] <br>";
    include "koneksimakan_proyek.php";

    $data = mysqli_query($cek,"select * FROM paradise where nama LIKE '%$_POST[cari]%' OR orang LIKE '%$_POST[cari]%'");
    while ($d=mysqli_fetch_object($data)){
        echo "<br>Data Pelanggan : $d->nama $d->ktp $d->hp $d->orang<br>";
        echo "<a href=\"delete_proyek.php? orang=$d->orang\">DELETE</a>
        <a href=\"update_proyek.php? orang=$d->orang\">EDIT<a>";
    }
    $data = mysqli_query($cek,"select * FROM makan where nama LIKE '%$_POST[cari]%' OR nmrmeja LIKE '%$_POST[cari]%'");
    while ($d=mysqli_fetch_object($data)){
        echo "<br>Pesanan Makanan : $d->nama $d->nmrmeja $d->hp $d->pesanan <br>";
        echo "<a href=\"deletemakan_proyek.php? nmrmeja=$d->nmrmeja\">DELETE</a>
        <a href=\"updatemakan_proyek.php? nmrmeja=$d->nmrmeja\">EDIT<a>";
    }
    $data = mysqli_query($cek,"select * FROM minum where nama LIKE '%$_POST[cari]%' OR nmrmeja LIKE '%$_POST[cari]%'");
    while ($d=mysqli_fetch_object($data)){
    echo "<br>Pesanan Minuman : $d->nama $d->nmrmeja $d->hp $d->pesan <br>";
    echo "<a href=\"deleteminum_proyek.php? nmrmeja=$d->nmrmeja\">DELETE</a>
    <a href=\"updateminum_proyek.php? nmrmeja=$d->nmrmeja\">EDIT<a>";
    }
}
?>
</center>

