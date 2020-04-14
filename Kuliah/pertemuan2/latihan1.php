<?php
// mencetak tulisan ke layar 
echo "<h1>Hello World!</h1>";
echo "<hr>";

echo (2 + 3) * (3 - 4);
echo "<hr>";

// VARIABEL
// tempat untuk menyimpan nilai
$nama = "Bayuc";
$email = "bayucucan36@gmail.com";
echo $nama;
echo "<br>";
echo $email;
echo "<hr>";

// OPERATOR
// Operator aritmetika / matematika
//  + , - ,* , / , %
echo 10 / 3;
echo "<hr>";

// Operator assignment / penugasan
// = , += , -=, /= , .=
$x = 1;
$y = 2;
$z = $x;
echo $z;
echo "<hr>";

$a = 1;
$a += 5;
echo $a;
echo "<hr>";


// Operator increment / decrement
// ++ (tambah 1) , -- (kurang 1)
$x = 1;
$x ++; 
echo $x;
echo "<hr>";


// Operator string / concat / penggabung string
// .
$nama_depan = "Bayu";
$nama_belakang = "Cucan";
echo $nama_depan . ' ' . $nama_belakang;
echo "<hr>";

$nama = 'Bayu';
$nama .= ' ';
$nama .= "Cucan";
echo $nama;
echo "<hr>";

// Standar Output
// echo, print
// '' , ""
// escade character '\'
$salam = "assalamua'alaikum";
echo $salam;
echo "<br>";

// $percakapan = 'A : " ' . $salam . '"';
// $percakapan = 'A : "assalamua\'alikum"';
$percakapan = "A : \"Assalamu'alaikum\"";
echo $percakapan; 



?>