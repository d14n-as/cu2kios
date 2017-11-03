<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	?>
	<meta charset="utf-8">
	<meta name="description" content="CuCuKios merupakan salah satu usaha UMKM milik Ibunya Abdul yang berdomisili di Majalengka, Jawa Barat. Menyediakan berbagai macam kebutuhan seperti sembako atau sembilan bahan pokok, alat sekolah, alat kesehatan, alat kecantikan dan yang lainnya. Usaha ini di rintis pada waktu Abdul masih Sekolah Dasar sampai Abdul membuat Web Aplikasi sederhana ini. Perkembangan zaman semakin cepat dan teknologi semakin canggih, CuCuKios harus mampu bersaing dan melebarkan usaha UMKMnya agar lebih di kenal masyarakat luas sehingga CuCuKios menjadi pilihan yang tepat bagi masyarakat modern kemudian hari.">
	<meta name="keyword" content="Kios, Modern, Web, Aplikasi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>CuCuKios</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>	
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand medium"><img src="../logo.png" width="100" height="35" style="margin-top: -7px;"></a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>			
					<li><a href="barang.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Barang</a></li>
					<li><a href="barang_laku.php"><span class="glyphicon glyphicon-briefcase"></span>  Entry Penjualan</a></li>  
					<li>
					<div class="dropdown">
					    <div class="dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #874f4f;color: #fff;height: 50px;padding: 15px;cursor: pointer;">Hai , <?php echo $_SESSION['uname']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user">
					    <span class="caret"></span></div>
					    <ul class="dropdown-menu">									
							<li><a href="ganti_foto.php"><span class="glyphicon glyphicon-picture"></span>  Ganti Foto</a></li>
							<li><a href="ganti_pass.php"><span class="glyphicon glyphicon-lock"></span> Ganti Password</a></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
					    </ul>
					</div>	
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #eee;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nogap">
				<?php 
				$uname=$_SESSION['uname'];
				$fo=mysql_query("select foto from admin where uname='$uname'");
				while($f=mysql_fetch_array($fo)){
					?>				
					<div class="col-xs-12 col-md-12 nogap background-size-cover">
						<a class="thumbnail nogap width100">
							<img class="img-responsive width100" width="100%" src="foto/<?php echo $f['foto']; ?>">
						</a>
					</div>
					<?php 
				}
				?>		
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fixed">