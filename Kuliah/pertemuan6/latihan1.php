<?php 
// Membuat Array
//Cara Lama
$mhs = array("Bayu", "Cucan", "Herdian", "Erik", "Santoso");

//Cara Baru
$angka = [3, 10, 200];
$myArray = ['Pemrograman', 300, false];

// Mencetak Array
// Satu elemen pada array
echo $mhs[2];
echo "<br>";

echo $myArray[1];
echo '<hr>';

// Mencetak semua isi array
// looping for
for ($i = 0; $i < count($mhs); $i++){
    echo $mhs[$i];
    echo '<br>';
}
echo '<hr>';

// foreach
//
foreach($mhs as $m) {
    echo $m;
    echo '<br>';
}
echo '<hr>';

// Mencetk Array (khusus untu debug)
// var_dump / print_r
var_dump($mhs);
echo '<br>';

print_r($myArray);


?>