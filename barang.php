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
    <title>Data Barang</title>
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


    <div class="container mt-3">
        <h1>Data Barang</h1>
    </div>

    <div class="container mt-5">
        <a class="btn btn-outline-success" href="tambahbarang.php">Tambah <svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id Barang</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $barang = mysqli_query($conn,"SELECT * from barang");
                $nom=1;
                foreach ($barang as $row){
                    echo"<tr>
                    <td>$nom</td>
                    <td>".$row['id_barang']."</td>
                    <td>".$row['nama_barang']."</td>
                    <td>".$row['ukuran']."</td>
                    <td>".$row['harga']."</td>
                    <td>
                    <a class='btn btn-info' href='form_edit.php?id_barang=".$row['id_barang']."'>Update</a>
                    <a class='btn btn-danger' href='barang.php?id_barang=".$row['id_barang']."'>Hapus</a>
                    </td>
                    </tr>";
                    $nom++;
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>