<?php
require 'functions.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

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
  <title>Admin</title>
  <link rel="stylesheet" href="../css/admin.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Nav -->
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #950740">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <div class="search-box">
                <form action="" method="get">
                  <div class="input-group md-7">
                    <input autocomplete="off" autofocus name="keyword" type="text" class="keyword form-control">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary" name="cari" id="button-addon2">Cari</button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="tambah.php">
                <span data-feather="home"></span>
                + Tambah Data <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php">
                <span data-feather="users"></span>
                index
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                Logut
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reports
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrations
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="table-responsive data">
          <table border="0" class="table table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
                <th>Deskrispi</th>
                <th>Harga</th>
              </tr>
            </thead>

            <tbody>
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
                    <td colspan="2">
                      <a href="ubah.php?id=<?= $books['id'] ?>" class="btn btn-primary btn-sm">Ubah</a>

                      <a style="margin-top: 20px" href="hapus.php?id=<?= $books['id'] ?>" onclick="return comfirm('Hapus Data ?')" class="btn btn-primary btn-sm">Hapus</a>
                    </td>
                    <td>
                      <img src="../assets/img/<?= $books['gambar']; ?>" width="300px">
                    </td>
                    <td><?= $books['nama_buku']; ?></td>
                    <td><?= $books['penulis']; ?></td>
                    <td><?= $books['tahun_terbit']; ?></td>
                    <td><?= $books['penerbit']; ?></td>
                    <td><?= $books['deskripsi']; ?></td>
                    <td>Rp. <?= number_format($books['harga']);  ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>





  <!-- Javascript -->
  <script src="../js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../js/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../js/js/bootstrap.bundle.js"></script>
</body>

</html>