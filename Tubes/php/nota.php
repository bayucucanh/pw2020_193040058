<?php
$conn = new mysqli("localhost", "root", "", "tubes_193040058");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nota Pembelian</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
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
      <?php
      $ambil = $conn->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id_user WHERE pembelian.id_pembelian='$_GET[id]'");
      $detail = $ambil->fetch_assoc();
      ?>
      <h2 style="margin:100px 0 80px;">Detail Pembelian</h2>
      <div class="row">
        <div class="col-md-4">
          <h3>Pembelian</h3>
          <strong>No. Pembelian: <?= $detail['id_pembelian']; ?></strong>
          <p>Tanggal: <?= $detail['tanggal_pembelian']; ?>
            <br> Total: Rp. <?= number_format($detail['total_pembelian']); ?></p>
        </div>
        <div class="col-md-4">
          <h3>Pembeli</h3>
          <strong><?= $detail['nama']; ?></strong>
          <p>
            <?= $detail['telp']; ?> <br>
            <?= $detail['email']; ?>
          </p>
        </div>
        <div class="col-md-4">
          <h3>Pengiriman</h3>
          <strong><?= $detail['nama_kota']; ?></strong>
          <p>Ongkos Kirim: Rp. <?= number_format($detail['tarif']); ?> <br>
            Alamat: <?= $detail['alamat']; ?>
          </p>
        </div>
      </div>
      <table class="table table-bordered">
        <thead>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Subtotal</th>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php $ambil = $conn->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'"); ?>
          <?php while ($pecah = $ambil->fetch_assoc()) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $pecah['nama_buku']; ?></td>
              <td>Rp. <?= number_format($pecah['harga']); ?></td>
              <td><?= $pecah['jumlah']; ?></td>
              <td>Rp. <?= number_format($pecah['subharga']); ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
      <div class="row">
        <div class="col-md-7">
          <div class="alert alert-info">
            <p>Silahkan lakukan pembayaran Sebesar Rp. <?= number_format($detail['total_pembelian']); ?> ke <b>BANK JUNED</b> <br> No. Rekening 5567-009999-127 AN. Juned Company</p>
          </div>
        </div>
      </div>

    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../js/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../js/js/bootstrap.bundle.js"></script>
</body>

</html>