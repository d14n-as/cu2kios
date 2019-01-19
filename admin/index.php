<?php 
include 'header.php';
?>

<?php

$a = mysql_query("select * from barang_laku");
$jumlah_record=mysql_query("SELECT COUNT(*) from barang");
$jum=mysql_result($jumlah_record, 0);
?>

<div class="container-fluid">
	<div class="row" style="margin-bottom: 50px;margin-top:50px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nogap">
			<h3 style="font-family: 'Medium';">Selamat datang di <img src="../logo.png" width="100" height="35" style="margin-top: -7px;">, <?php echo $_SESSION['uname']  ?><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></h3>	
			<blockquote>CuCuKios merupakan salah satu usaha UMKM milik Ibunya Abdul yang berdomisili di Majalengka, Jawa Barat. Menyediakan berbagai macam kebutuhan seperti sembako atau sembilan bahan pokok, alat sekolah, alat kesehatan, alat kecantikan dan yang lainnya. Usaha ini di rintis pada waktu Abdul masih Sekolah Dasar sampai Abdul membuat Web Aplikasi sederhana ini. Perkembangan zaman semakin cepat dan teknologi semakin canggih, CuCuKios harus mampu bersaing dan melebarkan usaha UMKMnya agar lebih di kenal masyarakat luas sehingga CuCuKios menjadi pilihan yang tepat bagi masyarakat modern kemudian hari.<br>Kritik dan saran bisa langsung kamu sampaikan di <a href="mailto:hello@dianpage.tk">hello@dianpage.tk</a></blockquote>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nogap text-center">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box nogap" style="border:1px solid #dedede;">
				<h3 style="background-color: #9393a0;height: 55px;margin-top: 0 !important;color: #fff;padding-top: 10px;text-align: center;"><span class="glyphicon glyphicon-glass" aria-hidden="true" style="padding-right: 10px;"></span>Total Barang Saat ini</h3>
				<h3 style="font-size: 3em;text-align: center;"><?php echo $jum; ?></h3>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box nogap" style="border:1px solid #dedede;">
				<h3 style="background-color: #9393a0;height: 55px;margin-top: 0 !important;color: #fff;padding-top: 10px;text-align: center;"><span class="glyphicon glyphicon-heart" aria-hidden="true" style="padding-right: 10px;"></span>Total Modal Saat ini</h3>
				<h3 style="font-size: 3em;text-align: center;">
					<?php 
					
						$x=mysql_query("select sum(modal) as total from barang");	
						$xx=mysql_fetch_array($x);			
						echo "<b> Rp.". number_format($xx['total']).",-</b>";		
					?>
				</h3>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box nogap" style="border:1px solid #dedede;">
				<h3 style="background-color: #9393a0;height: 55px;margin-top: 0 !important;color: #fff;padding-top: 10px;text-align: center;"><span class="glyphicon glyphicon-star" aria-hidden="true" style="padding-right: 10px;"></span>Total Laba Saat ini</h3>
				<h3 style="font-size: 3em;text-align: center;">
					<?php 
					
						$i=mysql_query("select sum(laba) as jml from barang_laku");	
						$ii=mysql_fetch_array($i);			
						echo "<b> Rp.". number_format($ii['jml']).",-</b>";		
					?>
				</h3>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12" style="margin-top:50px;">
<?php 
include 'footer.php';
?> 
</div>