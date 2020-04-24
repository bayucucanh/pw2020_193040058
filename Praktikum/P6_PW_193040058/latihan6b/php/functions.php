<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040058") or die("database salah!");

    return $conn;
}
// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $books = [];
    while ($book = mysqli_fetch_assoc($result)) {
        $books[] = $book;
    }
    return $books;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama_buku']);
    $penulis = htmlspecialchars($data['penulis']);
    $tahun = htmlspecialchars($data['tahun_terbit']);
    $penerbit = htmlspecialchars($data['penerbit']);

    $query = "INSERT INTO book VALUES 
        (null, '$gambar', '$nama', '$penulis', '$tahun', '$penerbit')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
