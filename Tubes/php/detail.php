<?php
// Mengecek apakah ada id yang dikirmkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

session_start();
require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$book = query("SELECT * FROM book WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
    <link rel="stylesheet" href="../css/detail.css">
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


    <div class="container" style="font-family: 'Balsamiq Sans', cursive; margin-bottom:100px;">
        <div class="row" style="background-color: #c3073f;">
            <div class="col-md-5">
                <img src="../assets/img/<?= $book["gambar"]; ?>" alt="" width="570px">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 keterangan">
                <?php
                ?>
                <p class="arrival text-center">NEW</p>
                <form action="" method="POST">
                    <input type="hidden" name="<?php $book['code']; ?>">
                    <h2 class="name" style="color: aliceblue"><?= $book["nama_buku"] ?></h2>
                    <p class="penulis"><?= $book["penulis"] ?></p>
                    <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                    <p class="tahun-terbit"><b>Tahun Terbit : </b><?= $book["tahun_terbit"] ?></p>
                    <p class="penerbit"><b>Penerbit</b> : <?= $book["penerbit"] ?></p>
                    <p class="deskripsi"><b>deskripsi</b> : <?= $book["deskripsi"]; ?></p>
                    <p class="price"><b>Harga</b> : Rp. <?= number_format($book["harga"]); ?></p>
                    <a href="prosescart.php?id=<?= $book['id']; ?>" class="btn btn-warning">buy now</a> || <a href="../index.php" class="btn btn-warning"> Kembali Ke Halaman Utama</a>
                </form>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../js/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="../js/js/bootstrap.bundle.js"></script>
</body>

</html>