<?php
include "config.php";
$idproduk = $_GET['id_produk'];

// menghapus data dari tabel
mysqli_query($koneksi,"delete from produk where id_produk='$idproduk'");
 
// mengalihkan halaman kembali ke index.php
echo '<script>alert("Berhasil Hapus Produk!");
		window.location.href="index.php"</script>';
?>