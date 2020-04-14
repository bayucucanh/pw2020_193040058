<?php 

// Array multidimensi
// array di dalam array
$angka = [10, 5, [3, [4], 6], 80];
echo $angka[2][1][0];
echo '<hr>';

$angka2 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

foreach($angka2 as $baris){
    foreach($baris as $ang2){
        echo $ang2;
    }echo '<br>';
}

?>