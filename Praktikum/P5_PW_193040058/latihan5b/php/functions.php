<?php 

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040058") or die ("database salah!");

    return $conn;
}
// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    
    $book = [];
    while ($book = mysqli_fetch_assoc($result)) {
        $books[] = $book;
    }
    return $books;
}
?>