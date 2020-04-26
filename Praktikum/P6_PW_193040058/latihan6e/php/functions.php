<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "", "tubes_193040058") or die("Koneksi ke DB gagal");

    return $conn;
}
// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

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

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM book WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama_buku']);
    $penulis = htmlspecialchars($data['penulis']);
    $tahun = htmlspecialchars($data['tahun_terbit']);
    $penerbit = htmlspecialchars($data['penerbit']);

    mysqli_query($conn, "UPDATE book 
        SET 
        gambar = '$gambar',
        nama_buku = '$nama',
        penulis = '$penulis',
        tahun_terbit = '$tahun',
        penerbit = '$penerbit'
        WHERE id = '$id'
        ");



    return mysqli_affected_rows($conn);
}
