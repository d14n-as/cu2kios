<?php 
include 'config.php';
$id=$_POST['id'];
$tanggal=$_POST['tgl'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

mysql_query("update barang_laku set tanggal='$tanggal', nama='$nama', jumlah='$jumlah', harga='$harga' 	where id='$id'");
header("location:barang_laku.php");

?>