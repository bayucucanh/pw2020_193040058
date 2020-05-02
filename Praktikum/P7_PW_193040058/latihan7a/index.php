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
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Tampilan -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Bayuc Perpus</h1>
            <div class="search-box">
                <form action="" method="get">
                    <div class="input-group md-3">
                        <input type="text" class="form-control" name="keyword" autofocus username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary" name="cari" id="button-addon2" action="" method="get">Cari</button>
                        </div>
                    </div>
                    <div class="md3"></div>
                </form>
            </div>
        </div>
    </div>

    <!-- pencarian -->

    <?php if (empty($book)) : ?>
        <h1>Data Tidak Ditemukan</h1>
    <?php else : ?>
        <div class="container">
            <?php foreach ($book as $books) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $books["id"] ?>" class="list-group-item list-group-item-action list-group-item-primary">
                        <?= $books["nama_buku"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>

        <a href="php/login.php">
            <button type="button" class="btn btn-success">
                Masuk Kehalaman Admin
            </button>
        </a>
</body>

</html>