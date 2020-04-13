<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$book = query("SELECT * FROM book")
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

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Bayuc Perpus</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<table class="produk">
        <thead>
            <th>ID</th>
            <th>Img</th>
            <th>Nama Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </thead>
        <tbody>
        <?php foreach($book as $books) : ?>
            <tr>
                <td><?= $books["id"] ?></td>
                <td><img src=assets/img/<?= $books["gambar"]?>></td>
                <td><?= $books["nama_buku"] ?></td>
                <td><?= $books["penulis"] ?></td>
                <td><?= $books["tahun_terbit"] ?></td>
                <td><?= $books["penerbit"] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>
</html>