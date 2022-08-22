<?php 
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
}

include 'config.php';
$id = $_GET['id_barang'];
$barang = mysqli_query($conn, "select * from barang where id_barang='$id'");
$row = mysqli_fetch_array($barang);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>SIKAT (Sistem Informasi Kios Anang Tani)</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="berhasil_login.php">
                <img src="image/logo.png" alt="" width="36" height="30" class="d-inline-block align-text-center ">
                Kios Anang Tani
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="berhasil_login.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="barang.php">Data Barang</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg> <?php echo $_SESSION['nama']; ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        <div class="card mt-5">
            <div class="card-header">
                <h3>Update Data Barang</h3>
            </div>
            <div class="card-body">
                <form method="post" action="updatebrng.php">
                    <div class="form-group row mb-3">
                        <label for="id_barang" class="col-sm-2 col-form-label">ID Barang</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $id; ?>" name="id_barang" class="form-control"
                                id="id_barang">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['nama_barang']; ?>" name="nama_barang"
                                class="form-control" id="nama_barang">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['ukuran']; ?>" name="ukuran" class="form-control"
                                id="ukuran">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['harga']; ?>" name="harga" class="form-control"
                                id="harga">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Update">
                            <input type="reset" name="tombol_reset" class="btn btn-secondary" value="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Lukman Hakim . All Rights Reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>