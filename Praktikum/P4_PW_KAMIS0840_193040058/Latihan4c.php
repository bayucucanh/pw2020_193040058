<?php 

$pemain = [
           "Cristiano Ronaldo" => "Juventus",
           "Lionel Messi" => "Barcelona",
           "Luca modric" => "Real Madrid",
           "Mohammad Salah" => "Liverpool",    
           "Neymar Jr" => "Paris saint germain",
           "Sadio Mane" => "Liverpool",
           "Zlatan Ibrahimovic" => "Ac Milan"
        ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4b</title>
</head>
<body>

<h2><b>Daftar pemain bola terkenal beserta klubnya</b></h2>
<table border="0" cellspacing="5" cellpading="5">
    <?php foreach($pemain as $pemainb => $club) : ?>
        <?= "<tr>"; ?>
            <?php echo "<td><b>$pemainb</b></td>"; ?>
            <?= "<td>:</td>" ?>
            <?php echo "<td>$club</td>";?>
    <?php endforeach; ?>
</table>


</body>
</html>