<?php 

// $angka = 100;
// if($angka < 10 && $angka >= 1) {
//     echo "Anda Benar!";
// }else if ($angka == 25) {
//     echo "$angka adalah angka favorit saya!";
// } else {
//     echo "Anda Salah <br>";
// } 

for ($angka =1; $angka <= 10; $angka++) {
    if ($angka % 2 == 0) {
        echo "$angka adalah bilangan GENAP! <br>";
    } else {
        echo "$angka adalah bilangan GANJIL! <br>";
    }
}

?>