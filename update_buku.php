<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idbuku = $_POST['idbuku'];
$judulbuku = $_POST['judulbuku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];

$query=mysqli_query($db,"UPDATE tb_buku SET judulbuku='$judulbuku', kategori='$kategori' ,pengarang='$pengarang',penerbit='$penerbit' WHERE idbuku='$idbuku' ");

header("location:data_buku.php");
?>