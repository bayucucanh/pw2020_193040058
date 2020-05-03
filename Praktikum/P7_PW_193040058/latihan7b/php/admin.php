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
  <link rel="stylesheet" href="../css/style.css">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

  <div class="search-box">
    <form action="" method="get">
      <div class="input-group md-7">
        <input type="text" class="form-control" name="keyword" autofocus username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button type="submit" class="btn btn-primary" name="cari" id="button-addon2" action="" method="get">Cari</button>
        </div>
      </div>
      <div class="md3"></div>
    </form>
  </div>


  <a href="logut.php">
    <button type="submit">Logut</button>
  </a>
  <a href="tambah.php"><button>Tambah Data</button></a>

  <table border="0" class="produk">
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
            <a href="ubah.php?id=<?= $books['id'] ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $books['id'] ?>" onclick="return comfirm('Hapus Data ?')"><button>Hapus</button></a>
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