<?php
require 'functions.php';


$book = query("SELECT * FROM book");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <button>
    <a href="tambah.php">Tambah</a>
  </button>

  <table border="1">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama Buku</th>
      <th>Penulis</th>
      <th>Tahun Terbit</th>
      <th>Penerbit</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($book as $books) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td>
          <button><a href="ubah.php?id=<?= $books['id'] ?>">Ubah</a></button>
          <button><a href="hapus.php?id=<?= $books['id'] ?>" onclick="return comfirm('Hapus Data ?')">Hapus</a></button>
        </td>
        <td>
          <img src="../assets/img/<?= $books['gambar']; ?>" width="300px">
        </td>
        <td><?= $books['nama_buku']; ?></td>
        <td><?= $books['penulis']; ?></td>
        <td><?= $books['tahun_terbit']; ?></td>
        <td><?= $books['penerbit']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>