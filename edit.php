<?php
include "config.php";
if(isset($_POST['edit'])){
	$kode_produk = $_POST['kode_produk'];
	$nama_produk  = $_POST['nama_produk'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$idproduk = $_POST['id_produk'];
	$query = mysqli_query($koneksi,"update produk set kode_produk='$kode_produk',nama_produk='$nama_produk',harga='$harga',stok='$stok' where id_produk='$idproduk'");
	if($query){
		echo '<script>alert("Berhasil Edit Produk!");
		window.location.href="index.php"</script>';
	} else {
		//jika gagal tambah data
		echo '<script>alert("Gagal Tambah Barang!");
		window.location.href="form.php"</script>';
			}
}	
?>