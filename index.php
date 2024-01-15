<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Produk</title>
	<style type="text/css">
		a {
			text-decoration: none;
		}
	</style>
</head>
<body>
	<h2>Daftar Produk</h2>
	<a type="button" href="formtambah.php" style="color:hotpink;"> [+]Tambah Produk</a><br><br>
	<table border="1" width="100%" cellpadding="5px" cellspacing="0">
<tr>
	<th width="30px">No.</th>
	<th width="100px">Kode Produk</th>
	<th width="100px">Nama Produk</th>
	<th width="100px">Harga</th>
	<th width="100px">Stok</th>
	<th width="100px">Aksi</th>
</tr>
<?php
include "config.php";
$no=1;
$sql="select * from produk";
$result=mysqli_query($koneksi,$sql);
while($data=mysqli_fetch_array($result)){
?>
<tr>
	<td><?= $no ?>.</td>
	<td align="center"><?= $data['kode_produk']?></td>
	<td><?= $data['nama_produk']?></td>
	<td align="right"><?= $data['harga']?></td>
	<td align="right"><?= $data['stok']?></td>
	<td align="center">
		<a href="lihat.php?id_produk=<?= $data['id_produk']?>" >Lihat</a> | 
		<a href="formedit.php?id_produk=<?= $data['id_produk']?>">Edit</a> |
		<a href="hapus.php?id_produk=<?= $data['id_produk']?> " onclick="return confirm('Apakah anda yakin <?= $data['nama_produk']?> akan di hapus?')">Hapus</a>
	</td>
</tr>
<?php
$no++;
}
?>
</table>
</body>
</html>