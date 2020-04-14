<?php

// Perhitungan Nilai Akhir
// A : min 85
// B : 70 - 85
// C : 55 - 70
// D : 40 - 55
// E : dibawah 40

$nilai = 50;

if ( $nilai >= 85) {
    echo "<h1>Nila : A</h1>";
} else if ( $nilai >= 70) {
    echo "<h1>Nilai : B</h1>";
} else if($nilai >= 55 ) {
    echo "<h1>Nilai : C</h1>";
} else if($nilai >= 40 ) {
    echo "<h1>Nilai : D</h1>";
} else {
    echo "<h1>Nilai : E</h1>";
}

?>