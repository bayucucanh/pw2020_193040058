<?php 
    $jawabanIsset = "Isset = Untuk memeriksa apakah sebuah objek form telah didefenisikan atau telah di-set sebelumnya";
    $jawabanEmpty = "Empty = merupakan fungsi yang digunakan untuk untuk mengecek data atau variabel yang kosong. Fungsi ini sangat bermanfaat untuk mengecek dan mencegah inputan kosong";

    $GLOBALS['isset'] = $jawabanIsset;
    $GLOBALS['empty'] = $jawabanEmpty;

    function soal($style) {
        echo "<div class='$style'> $GLOBALS[isset]</div>";
        echo "<div class='$style'> $GLOBALS[empty]</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .tulisan{
        font-family:arial;
        font-size:30px;
        color: #8c782d;
    }
    </style>
</head>
<body>

    <?= soal(".tulisan")?>

</body>
</html>