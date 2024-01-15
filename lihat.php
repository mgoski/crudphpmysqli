<html>
<head>
	<title>Lihat Produk</title>
	<style type="text/css">
		a {
			text-decoration: none;
		}
	</style>
</head>
<body>
<h2>Lihat Produk</h2>
<hr>
<?php
include "config.php";
$idproduk = $_GET['id_produk'];
$sql = mysqli_query($koneksi,"select * from produk");
while ($data=mysqli_fetch_array($sql)){
$kodeproduk = $data['kode_produk'];
$namaproduk = $data['nama_produk'];
$harga = $data['harga'];
$stok = $data['stok'];
} ?>
<form>
	<p>
		<small>Kode Produk :</small><br>
		<input type="hidden" name="id_produk" value="<?=$idproduk; ?>">
		<input type="text" name="kode_produk" value="<?=$kodeproduk; ?>" readonly>
	</p>
	<p>
		<small>Nama Produk :</small><br>
		<input type="text" name="nama_produk" value="<?=$namaproduk; ?>" readonly>
	</p>
	<p>
		<small>Harga :</small><br>
		<input type="text" name="harga" value="<?=$harga; ?>" readonly>
	</p>
	<p>
		<small>Stok :</small><br>
		<input type="text" name="stok" value="<?=$stok; ?>" readonly >
		<hr>
		<button style="background-color:red;"><a href="index.php" style="color:white;"> Kembali</a></button>
	</p>	
</form>
</body>
</html>