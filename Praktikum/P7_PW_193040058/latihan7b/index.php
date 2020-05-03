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
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/indexlightslider.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- jQuery -->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <title>Hello, world!</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contack</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CASF</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" name="keyword" autofocus username placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit" name="cari" action="" method="get">Search</button>
            </form>
        </div>
    </nav>



    <div class="slider">
        <!-- slider -->
        <?php if (empty($book)) : ?>
            <h1>Data Tidak Ditemukan</h1>
        <?php else : ?>
            <ul id="autoWidth" class="cs-hidden">
                <?php foreach ($book as $books) : ?>
                    <li class="item-a">
                        <div class="box">
                            <div class="bks">
                                <p class="bk">BAYUC</p>
                                <!-- gambar -->
                                <img src="assets/img/<?= $books["gambar"] ?>" alt="" height="300px">
                                <!-- details -->
                                <div class="details">
                                    <!--details -->
                                    <p><?= $books["nama_buku"] ?></p>
                                    <a href="php/detail.php?id=<?= $books["id"] ?>" class="btn btn-outline-warning">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
    <a href="php/login.php">
        <button type="button" class="btn btn-success">
            Masuk Kehalaman Admin
        </button>
    </a>
</body>

</html>