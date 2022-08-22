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
    <title>Home</title>
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
                        <a class="nav-link active" aria-current="page" href="berhasil_login.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="barang.php">Data Barang</a>
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


    <?php
    include 'config.php';

    // mengambil data barang
    $data_barang = mysqli_query($conn,"SELECT * FROM barang");
    // menghitung data barang
    $jumlah_barang = mysqli_num_rows($data_barang);
    
    // mengambil data akun
    $data_akun = mysqli_query($conn,"SELECT * FROM users");
    // menghitung data barang
    $jumlah_akun = mysqli_num_rows($data_akun);
    ?>


    <div class="container mt-5">
        <h3>Selamat datang <?php echo $_SESSION['nama']; ?>,</h3>
    </div>

    <div class="row mt-5">

        <div class="col-md-1 col-sm-12 mb-3">
            <!-- <div class="card" style="width: 6cm;">
                <img src="image/barang.svg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h3 class="card-title"><?php echo $jumlah_barang?></h3>
                    <p class="card-text">Data Barang</p>
                </div>
                <a href="barang.php" class="btn btn-primary">Lihat</a>
            </div> -->
        </div>

        <div class="col-md-2 col-sm-12 mb-3">
            <div class="card" style="width: 6cm;">
                <img src="image/akun.svg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h3 class="card-title"><?php echo $jumlah_akun?></h3>
                    <p class="card-text">Data Akun</p>
                </div>
                <a href="#" class="btn btn-primary">Lihat</a>
            </div>
        </div>

        <div class="col-md-2 col-sm-12 mb-3">
            <div class="card" style="width: 6cm;">
                <img src="image/barang.svg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h3 class="card-title"><?php echo $jumlah_barang?></h3>
                    <p class="card-text">Data Barang</p>
                </div>
                <a href="barang.php" class="btn btn-primary">Lihat</a>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
</body>

</html>