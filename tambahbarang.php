<?php 
 
session_start();
 
if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Tambah Barang</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="image/logo.png" alt="" width="36" height="30" class="d-inline-block align-text-center ">
                SIKAT (Sistem Informasi Kios Anang Tani)
            </a>
            <a class="btn btn-outline-light" href="barang.php">Data Barang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav nav-tabs justify-content-end">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php echo $_SESSION['nama']; ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3>Tambah Data Barang</h3>
            </div>
            <div class="card-body">
                <form method="post" action="savebrng.php">
                    <div class="form-group row mb-3">
                        <label for="id_barang" class="col-sm-2 col-form-label">ID Barang</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_barang" class="form-control" id="id_barang">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
                        <div class="col-sm-10">
                            <input type="text" name="ukuran" class="form-control" id="ukuran">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" name="harga" class="form-control" id="harga">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="tombol_tambah" class="btn btn-success" value="Tambah">
                            <input type="reset" name="tombol_reset" class="btn btn-secondary" value="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>