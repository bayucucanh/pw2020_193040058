<?php 

$pemain = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4b</title>
</head>
<body>
<h2>Daftar Pemain bola Terkenal</h2>
<ol>
    <?php foreach($pemain as $pemainb) : ?>
            <?= "<li>$pemainb</li>"; ?>
    <?php endforeach; ?>
</ol>

<?php 
      $pemain[] = "Luca modric"; 
      $pemain[]= "Sadio Mane"; 
      sort($pemain); 
?>

<h2><b>Daftar pemain bola baru terkenal</b></h2>
<ol>
    <?php foreach($pemain as $pemainb) : ?>
        <?php echo "<li>$pemainb</li>"; ?>
    <?php endforeach; ?>
</ol>
</body>
</html>