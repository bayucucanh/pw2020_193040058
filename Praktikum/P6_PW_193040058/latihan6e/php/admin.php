<?php
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $book = query("SELECT * FROM book WHERE
    nama_buku LIKE '%$keyword%' OR
    gambar LIKE '%$keyword%' OR
    penulis LIKE '$keyword' OR
    tahun_terbit LIKE '$keyword' OR
    penulis LIKE '$keyword'
  ");
} else {
  $book = query("SELECT * FROM book");
}
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

  <form action="" method="get">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari</button>
  </form>

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

    <?php if (empty($book)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>

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
    <?php endif; ?>
  </table>
</body>

</html>