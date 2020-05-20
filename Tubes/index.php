<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
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
    <title>Bayuc Store</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/indexlightslider.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <title>Bayu Store</title>
</head>

<body style="font-family: 'Balsamiq Sans', cursive; background-color: #1a1a1d; background-image:url(assets/img/dots.png); background-repeat:repeat;" class="text-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark" style="background: #c3073f">
        <a class="navbar-brand" href="#"><b>Bayuc</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a style="color: 1a1a1d" class="nav-link" href="index.php"><img src="assets/icon/home-icon.png" width="30"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a style="color: 1a1a1d" class="nav-link" href="php/admin.php"><img src="assets/icon/admin-icon.png" width="30"> Admin </a>
                </li>
                <li class="nav-item">
                    <a style="color: 1a1a1d" class="nav-link" href="php/login.php"><img src="assets/icon/login-icon.png" width="30"> Login </a>
                </li>
                <li class="nav-item">
                    <a style="color: 1a1a1d" class="nav-link" href="php/logout.php"><img src="assets/icon/logout-icon.png" width="30"> Logout </a>
                </li>
                <li class="nav-item">
                    <a style="color: 1a1a1d" class="nav-link" href="php/cart.php"><img src="assets/icon/cart-icon.png" width="30"> Cart </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" name="keyword" autofocus username placeholder="Search" aria-label="Search">
                <button class="btn btn-warning" type="submit" name="cari" action="" method="get" href="#produk">Search</button>
            </form>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section>
        <div class="jumbotron position-relative p-3 p-md-5 m-md-3 text-center text-light" style="background-color: #c3073f; background-image:url(assets/img/dots.png), url(assets/img/blob.png); background-size:cover;">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 font-weight-normal">Welcome</h1>
                <p class="lead font-weight-normal">Selamat datang di Bayuc Store, Toko Buku Anak IT komplit (ceritanya). Silahkan Lakukan Pencarian Buku Yang Ingin anda Beli dibawah ini.</p>
                <form class="form-inline my-2 my-lg-0" style="margin-left: 100px;">
                    <input class="form-control mr-sm-2" type="text" name="keyword" autofocus username placeholder="Search" aria-label="Search">
                    <button class="btn btn-warning" type="submit" name="cari" action="" method="get" href="#produk">Search</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- produk -->
    <section id="produk">
        <h3 style="text-align: center" style="margin: 90px;">ᔕ Produk ᔕ</h3>
        <div class="row">
            <?php if (empty($book)) : ?>
                <h1>Data Tidak Ditemukan</h1>
            <?php else : ?>
                <?php foreach ($book as $books) : ?>
                    <div class="col-md-6">
                        <div class="card row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative center" style="height: 300px; width:700px; margin:auto;background-color: #950740;">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2">Bayuc</strong>
                                <h3 class="mb-0"><?= $books['nama_buku']; ?></h3>
                                <p class="card-text mb-auto">Harga <br> Rp. <?= number_format($books['harga']); ?></p>
                                <a href="php/detail.php?id=<?= $books["id"] ?>" class="btn btn-warning" style="border-radius:30px;">Lihat detail</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="assets/img/<?= $books["gambar"] ?>" alt="" width="250px" style="max-height: 250px;">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="js/js/bootstrap.bundle.js"></script>
</body>

</html>