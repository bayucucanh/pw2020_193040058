<?php

$mhs = [
    ['Bayu Cucan Herdian', '193040058', 'bayucucan36@gmail.com', 'Teknik Informatika'], 
    ['Uyab nacuc naidreh', '195040058', 'uyabnacuc63@gmail.com', 'Teknik Mesin'],
    ['Herdian Cucan Bayu', '194040058', 'cucanbayu36@gmail.com', 'Teknik Lingkungan'],
    ['naidreh nacuc uyab', '192040058', 'naidrehnacuc@gmail.com', 'Teknik Ngarit'],
    ['Cucan Herdian Bayu', '191040058', 'cucanbayu@gmail.com', 'Teknik Ngebon'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>

<ul>
    <li>Nama : Bayu Cucan Herdian</li>
    <li>Nrp : 193040058</li>
    <li>Email : bayucucan36@gmail.com</li>
    <li>Jurusan : Teknik Informatika</li>
</ul>

<hr>
<!-- salah -->
<?php
foreach($mhs as $m){
    echo "<ul>";
    foreach($m as $h){
        echo "<li>$h</li>";
    } echo "</ul>";
}
?>
<hr>
<!-- Benar -->
<?php foreach($mhs as $m) { ?>
    <ul>
    <li>Nama : <?php echo $m[0]?></li>
    <li>Nrp : <?php echo $m[1]?></li>
    <li>Email : <?php echo $m[2]?></li>
    <li>Jurusan : <?php echo $m[3]?></li>
</ul>
<?php } ?>
</body>
</html>