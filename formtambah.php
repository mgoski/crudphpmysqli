<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Produk</title>
</head>
<body>
<h2>Tambah Produk</h2>
<hr>
<form method="POST" action="simpan.php">
	<p>
		<small>Kode Produk :</small><br>
		<input type="text" name="kode_produk">
	</p>
	<p>
		<small>Nama Produk :</small><br>
		<input type="text" name="nama_produk">
	</p>
	<p>
		<small>Harga :</small><br>
		<input type="text" name="harga">
	</p>
	<p>
		<small>Stok :</small><br>
		<input type="text" name="stok">
		<hr>
		<input type="submit" name="save" value="Simpan" style="background-color:green; color:white;">		
		<input type="reset"  value="Clear" style="background-color:red; color:white;">
	</p>
</form>
</body>
</html>