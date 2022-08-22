<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Cetak Data Barang</title>
</head>

<body>
	<h5>.</h5>
	<h1 class="text-center">DATA BARANG</h1>
	<h2 class="text-center">KIOS ANANG TANI</h2>
	<h5>.</h5>
	<?php 
	include 'config.php';
	?>

	<table class="table table-bordered table-striped">
		<tr>
			<th>#</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Ukuran</th>
			<th>Harga</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($conn,"select * from barang");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_barang'] ?></td>
			<td><?php echo $data['nama_barang'] ?></td>
			<td><?php echo $data['ukuran'] ?></td>
			<td><?php echo $data['harga'] ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - Lukman Hakim . All Rights Reserved.</small>
		</div>
	</footer>

	<script>
		window.print();
	</script>

</body>

</html>