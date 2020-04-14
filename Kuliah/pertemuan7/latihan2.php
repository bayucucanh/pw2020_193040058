<?php

$mhs = [
    [
        'nama'   => 'Bayu Cucan Herdian', 
        'nrp'    => '193040058',
        'email'  => 'bayucucan36@gmail.com',
        'jurusan'=> 'Teknik Informatika'
    ], 
    [
        'nama'   =>'Uyab nacuc naidreh', 
        'nrp'    => '195040058',
        'email'  => 'uyabnacuc63@gmail.com', 
        'jurusan'=> 'Teknik Mesin'],
    [
        'nama'   =>'Herdian Cucan Bayu', 
        'nrp'    => '194040058', 
        'email'  => 'cucanbayu36@gmail.com', 
        'jurusan'=> 'Teknik Lingkungan'],
    [
        'nama'   =>'naidreh nacuc uyab', 
        'nrp'    => '192040058', 
        'email'  => 'naidrehnacuc@gmail.com', 
        'jurusan'=> 'Teknik Ngarit'
    ],
    [
        'nama'   =>'Cucan Herdian Bayu', 
        'nrp'    => '191040058', 
        'email'  => 'cucanbayu@gmail.com', 
        'jurusan'=> 'Teknik Ngebon'
    ]
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
    <?php foreach($mhs as $m) :?>
    <ul>
        <li>Nama    : <?= $m['nama']; ?></li>
        <li>nrp     :<?= $m['nrp']; ?></li>
        <li>email   :<?= $m['email']; ?></li>
        <li>jurusan :<?= $m['jurusan']; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>