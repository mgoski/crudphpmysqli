<?php
include "config.php";
if(isset($_POST['save'])){
$kode_produk = $_POST['kode_produk'];
	$nama_produk  = $_POST['nama_produk'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$query = mysqli_query($koneksi,"insert into produk (kode_produk,nama_produk,harga,stok) values ('$kode_produk', '$nama_produk', '$harga', '$stok')");
	if($query){
		echo '<script>alert("Berhasil Tambah Produk!");
		window.location.href="index.php"</script>';
	} else {
		//jika gagal tambah data
		echo '<script>alert("Gagal Tambah Produk!");
		window.location.href="form.php"</script>';
			}
}
?>