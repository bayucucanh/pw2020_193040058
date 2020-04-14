<?php
// Array
// yang bisa diisi banyak nilai
// pasangan antara KEY & VALUE

// Array Numerik
// Array yang KEY adalah ANGKA, disebut juga index
// index dibuat otomatis oleh php
// index dimulai dari 0
$mahasiswa = ['Abdul', 'Bimbim', 'kuncoro']; 
print_r($mahasiswa);
// Array Associative
// Array KEY nya adalah STRING
// dibuat oleh programmer

echo '<hr>';

$buku = [
    'judul'     =>'Harry Potter',
    'pengarang' => 'J.K. Rowling',
    'penerbit'  => 'Gramedia',
    'genre'     => 'SciFi'
];

print_r($buku);


?>