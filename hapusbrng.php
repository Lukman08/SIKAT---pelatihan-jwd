<?php
include 'config.php';
// simpan data ke valiabel
$id_barang = $_GET['id_barang'];
// query SQL delete data
$query="DELETE from barang WHERE id_barang='$id_barang'";
mysqli_query($conn, $query);
//mengalihkan setelah disimpan
header("location:barang.php");
?>