<?php 
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="CuCuKios merupakan salah satu usaha UMKM milik Ibunya Abdul yang berdomisili di Majalengka, Jawa Barat. Menyediakan berbagai macam kebutuhan seperti sembako atau sembilan bahan pokok, alat sekolah, alat kesehatan, alat kecantikan dan yang lainnya. Usaha ini di rintis pada waktu Abdul masih Sekolah Dasar sampai Abdul membuat Web Aplikasi sederhana ini. Perkembangan zaman semakin cepat dan teknologi semakin canggih, CuCuKios harus mampu bersaing dan melebarkan usaha UMKMnya agar lebih di kenal masyarakat luas sehingga CuCuKios menjadi pilihan yang tepat bagi masyarakat modern kemudian hari.">
	<meta name="keyword" content="Kios, Modern, Web, Aplikasi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>CuCuKios</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/fitheight.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
	<?php include 'admin/config.php'; ?>
	<style type="text/css">
	.kotak{	
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	</style>
</head>
<body>	

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
			}
		}
		?>
			<form action="login_act.php" method="post">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 30px;">
								<div class="col-md-6 col-md-offset-3 col-xs-12 kotak">
								<h3 class="text-center">Sudahkah login hari ini?</h3>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="text" class="form-control" placeholder="Username" name="uname">
									</div>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="password" class="form-control" placeholder="Password" name="pass">
									</div>
									<div class="input-group width100">			
										<input type="submit" class="btn btn-primary width100" value="Login">
									</div>
								</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nogap">
						<div class="fit-height" style="background-color: #dedede;overflow-y: scroll;">
							<h4 style="font-family:'light';margin-top:0 !important;margin-bottom: 20px;padding-top: 20px;padding-left: 10px" ><span class="label label-default">Silakan request jika ingin login!</span></h4>
							<div class="fb-comments" data-width="100%" data-href="http://localhost/kios/index.php" data-numposts="5" data-colorscheme="light"></div>
						</div>
					</div>
				
			</form>
</body>
</html>