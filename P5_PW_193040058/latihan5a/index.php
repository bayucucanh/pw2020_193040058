<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "tubes_193040058");
$result = mysqli_query($conn, "SELECT * FROM book");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="merk"><h1>Bayuc Perpus</h2></div>

    <div>
        <table cellpadding="10" cellspacing="0" border="0">
            <tr>
                <th>ID</th>
                <th>Img</th>
                <th>Nama Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
            </tr>
            <?php $i = 1 ?>
            <?php while ($book = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $book["id"] ?></td>
                <td><img src=assets/img/<?= $book["gambar"]?>></td>
                <td><?= $book["nama_buku"] ?></td>
                <td><?= $book["penulis"] ?></td>
                <td><?= $book["tahun_terbit"] ?></td>
                <td><?= $book["penerbit"] ?></td>
            </tr>

            <?php endwhile; ?>
        </table>
    </div>

</body>
</html>