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

<div class="container">
    <?php foreach ($book as $books) : ?> 
        <p class="nama">
            <a href="php/detail.php?id=<?= $books["id"] ?>" class="list-group-item list-group-item-action list-group-item-primary">
                <?= $books["nama_buku"] ?>
            </a>
        </p>
    <?php endforeach; ?>
</div>


</body>
</html>