<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Produk</title>
	<style type="text/css">
		a {
			text-decoration: none;
		}
	</style>
</head>
<body>
<h2>Edit Produk</h2>
<hr>
<?php
include "config.php";
$idproduk = $_GET['id_produk'];
$sql = mysqli_query($koneksi,"select * from produk where id_produk='$idproduk'");
while ($data=mysqli_fetch_array($sql)){
$kodeproduk = $data['kode_produk'];
$namaproduk = $data['nama_produk'];
$harga = $data['harga'];
$stok = $data['stok'];
}
                ?>
<form method="POST" action="edit.php">
	<p>
		<small>Kode Produk :</small><br>
		<input type="hidden" name="id_produk" value="<?=$idproduk; ?>">
		<input type="text" name="kode_produk" value="<?=$kodeproduk; ?>">
	</p>
	<p>
		<small>Nama Produk :</small><br>
		<input type="text" name="nama_produk" value="<?=$namaproduk; ?>">
	</p>
	<p>
		<small>Harga :</small><br>
		<input type="text" name="harga" value="<?=$harga; ?>">
	</p>
	<p>
		<small>Stok :</small><br>
		<input type="text" name="stok" value="<?=$stok; ?>">
		<hr>
		<input type="submit" name="edit" value="Simpan" style="background-color:green; color:white;">		
		<button style="background-color:red;"><a href="index.php" style="color:white;"> Kembali</a></button>
	</p>
	
</form>

</body>
</html>