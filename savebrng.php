<?php
include 'config.php';
// simpan data ke valiabel
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
// query SQL insert data
$query="INSERT INTO barang SET id_barang='$id_barang', nama_barang='$nama_barang',ukuran='$ukuran',harga='$harga'";
mysqli_query($conn, $query);
//mengalihkan setelah disimpan
header("location:barang.php");
?>