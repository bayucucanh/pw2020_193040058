<?php
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
</head>

<body>
  <h3>Detail Mahasiswa</h3>
</body>

<ul>
  <li><img src="img/<?= $mhs['gambar']; ?>" alt=""></li>
  <li><?= $mhs['nrp']; ?></li>
  <li><?= $mhs['nama']; ?></li>
  <li><?= $mhs['email']; ?></li>
  <li><?= $mhs['jurusan']; ?></li>
  <li><a href="">ubah</a> | <a href="">hapus</a></li>
  <li><a href="latihan3.php">Kembali Ke Daftar Mahasiswa</a></li>
</ul>

</html>