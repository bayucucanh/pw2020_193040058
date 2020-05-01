<?php
session_start();

// agar tidak bisa langsung masuk ke index
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}


require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h3>Detail Mahasiswa</h3>
    <div class="row">
      <div class="col-md-3">
        <img src="img/<?= $mhs['gambar']; ?>" alt="" width="300px">
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5 keterangan">
        <p class="arrival text-center"></p>
        <h2><?= $mhs['nrp']; ?></h2>
        <p><?= $mhs['nama']; ?></p>
        <p><?= $mhs['email']; ?></p>
        <p><?= $mhs['jurusan']; ?></p>
        <p><a href="ubah.php?id=<?= $mhs['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></p>
        <p><a href="index.php">Kembali Ke Daftar Mahasiswa</a></p>
      </div>
    </div>
  </div>

</body>

</html>