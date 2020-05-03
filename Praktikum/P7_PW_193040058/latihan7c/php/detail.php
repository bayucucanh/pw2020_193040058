<?php
// Mengecek apakah ada id yang dikirmkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$book = query("SELECT * FROM book WHERE id = $id")[0];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="../assets/img/<?= $book["gambar"]; ?>" alt="" width="570px">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 keterangan">
                <p class="arrival text-center">NEW</p>
                <h2><?= $book["nama_buku"] ?></h2>
                <p><?= $book["penulis"] ?></p>
                <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                <p><b>Tahun Terbit : </b><?= $book["tahun_terbit"] ?></p>
                <p><b>Penerbit</b> : <?= $book["penerbit"] ?></p>
                <p><b>deskripsi</b> : <?= $book["deskripsi"]; ?></p>
            </div>
        </div>
    </div>

    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>

</body>

</html>