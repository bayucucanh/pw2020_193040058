<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$conn = new mysqli("localhost", "root", "", "tubes_193040058");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
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
      <table>
        <h1>Cart Belanja</h1>
        <table class="produk tabel table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Produk</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Sub Harga</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php $total = 0; ?>
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
              </tr>
              <?php $total += $subharga; ?>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4">Total</th>
              <th>Rp.<?= number_format($total) ?> </th>
            </tr>
          </tfoot>
        </table>

        <form method="POST">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" readonly value="<?= $_SESSION['pembeli']['nama']; ?>" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" readonly value="<?= $_SESSION['pembeli']['telp']; ?>" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <select class="form-control" id="id_ongkir" name="id_ongkir">
                  <option value="">Pilih Ongkos Kirim</option>
                  <?php
                  $ambil = $conn->query("SELECT * FROM ongkir");
                  while ($perongkir = $ambil->fetch_assoc()) : ?>
                    <option value="<?= $perongkir['id_ongkir'] ?>">
                      <?= $perongkir['nama_kota']; ?>
                      - Rp. <?= number_format($perongkir['tarif']); ?>
                    </option>
                  <?php endwhile; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>
              Masukan Alamat
              <textarea name="alamat"></textarea>
            </label>
          </div>
          <button class="btn btn-warning" name="checkout">Checkout</button>
        </form>
      </table>
    </div>
  </section>

  <!-- Php -->
  <?php

  if (isset($_POST['checkout'])) {
    $id_pembeli = $_SESSION["pembeli"]["id_user"];
    $id_ongkir = $_POST["id_ongkir"];
    $tanggal_beli = date("Y-m-d");

    // mengambil data tarif ongkir
    $ambil = $conn->query("SELECT * FROM ongkir WHERE id_ongkir = '$id_ongkir' ");
    $arrayongkir = $ambil->fetch_assoc();
    $namakota = $arrayongkir['nama_kota'];
    $tarif = $arrayongkir['tarif'];
    $alamat = $_POST['alamat'];

    // total pembelian
    $total_beli = $total + $tarif;

    // menyimpan data ke tabel pembelian
    $conn->query("INSERT INTO pembelian 
    (id_user, id_ongkir, tanggal_pembelian, total_pembelian, nama_kota, tarif, alamat) 
    VALUES ('$id_pembeli', '$id_ongkir', '$tanggal_beli', '$total_beli', '$namakota', '$tarif', '$alamat')");

    // mendapatkan id_pembelian yang baru dilakukan
    $id_pembelian_baru = $conn->insert_id;
    // pengulanan produk yang dibeli
    foreach ($_SESSION["cart"] as $id_produk => $jumlah) {

      // mendapatkan data produk berdasarkan id buku
      $ambil = $conn->query("SELECT * FROM book WHERE id = '$id_produk'");
      $perbuku = $ambil->fetch_assoc();

      $nama = $perbuku['nama_buku'];
      $harga = $perbuku['harga'];
      $subharga = $perbuku['harga'] * $jumlah;
      $conn->query("INSERT INTO pembelian_produk 
      (id_pembelian, id, jumlah, nama_buku, harga, subharga)
      VALUES ('$id_pembelian_baru', '$id_produk', '$jumlah', '$nama', '$harga', '$subharga')
      ");
    }

    // mengosongkan keranjang
    unset($_SESSION['cart']);

    // tampilan dialihkan ke halaman nota
    echo "<script>
    alert('sukses');
    location='nota.php?id=$id_pembelian_baru';
    </script>";
  }
  ?>


  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../js/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../js/js/bootstrap.bundle.js"></script>
</body>

</html>