<?php
session_start();

require 'functions.php';
$conn = new mysqli("localhost", "root", "", "tubes_193040058");

if (empty($_SESSION["cart"]) or !isset($_SESSION["cart"])) {
  echo "<script>alert('Keranjang kosong, silahkan pilih produk');
location='../index.php';</script>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link rel="stylesheet" href="../css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
</head>

<body style="background-color: #1a1a1d; background-image:url(../assets/img/dots.png); background-repeat:repeat;" class="text-light">

  <!-- Navbar -->
  <nav class="navbar navbar-dark" style="background: #c3073f">
    <a class="navbar-brand" href="../index.php"><b>Bayuc</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a style="color: 1a1a1d" class="nav-link" href="../index.php"><img src="../assets/icon/home-icon.png" width="30"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a style="color: 1a1a1d" class="nav-link" href="../php/admin.php"><img src="../assets/icon/admin-icon.png" width="30"> Admin </a>
        </li>
        <li class="nav-item">
          <a style="color: 1a1a1d" class="nav-link" href="../php/login.php"><img src="../assets/icon/login-icon.png" width="30"> Login </a>
        </li>
        <li class="nav-item">
          <a style="color: 1a1a1d" class="nav-link" href="../php/logout.php"><img src="../assets/icon/logout-icon.png" width="30"> Logout </a>
        </li>
        <li class="nav-item dropdown">
          <a style="color: 1a1a1d" class="nav-link dropdown-toggle" href="../cart.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cart</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a style="color: 1a1a1d" class="dropdown-item" href="../php/cart.php"><img src="../assets/icon/cart-icon.png" width="30"> Cart </a>
            <a style="color: 1a1a1d" class="dropdown-item" href="../php/checkout.php"><img src="../assets/icon/checkout-icon.png" width="30"> Checkout </a>
            <a style="color: 1a1a1d" class="dropdown-item" href="../php/nota.php"><img src="../assets/icon/checkout-icon.png" width="30">Nota Pembelian</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Akhir Navbar -->


  <section class="content">
    <div class="container">
      <h1>Cart Belanja</h1>
      <table class="produk">
        <thead style="background-color: #c3073f">
          <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Sub Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="text-light">
          <?php $i = 1; ?>
          <?php foreach ($_SESSION['cart'] as $id_produk => $jumlah) : ?>
            <!-- menampilkan pengulangan berdasarkan id produk -->
            <?php
            $ambil = $conn->query("SELECT * FROM book WHERE id = $id_produk");
            $pecah = $ambil->fetch_assoc();
            $subharga = $pecah["harga"] * $jumlah;
            ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $pecah["nama_buku"]; ?></td>
              <td>Rp. <?= number_format($pecah['harga']); ?></td>
              <td><?= $jumlah; ?></td>
              <td>Rp. <?= number_format($subharga); ?></td>
              <td>
                <a href="hapuscart.php?id=<?= $id_produk; ?>" class="btn btn-warning btn-sm">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <div style="margin-top: 30px" class="link">
        <a href="../index.php" class="btn btn-warning btn-sm">Lanjutkan Belanja</a> || <a href="checkout.php" class="btn btn-warning btn-sm">Checkout</a>
      </div>
    </div>
  </section>

  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../js/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../js/js/bootstrap.bundle.js"></script>
</body>

</html>