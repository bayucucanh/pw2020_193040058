<?php


for ($i =1; $i <= 10; $i++) {
    if ($i <= 6) {
        echo "Angkot No. $i Beroprasi dengan baik. <br>";
    } else if ($i == 8) {
        echo "Angkot No. $i Sedang lembur. <br>";
    } 
     else {
        echo "Angkot No $i Sedang tidak beroprasi. <br>";
    }
}
?>