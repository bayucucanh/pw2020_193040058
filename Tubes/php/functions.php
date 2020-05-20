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
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $query = "INSERT INTO book VALUES 
        (null, '$gambar', '$nama', '$penulis', '$tahun', '$penerbit', '$deskripsi', '$harga')";

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
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);

    mysqli_query($conn, "UPDATE book 
        SET 
        gambar = '$gambar',
        nama_buku = '$nama',
        penulis = '$penulis',
        tahun_terbit = '$tahun',
        penerbit = '$penerbit',
        deskripsi = '$deskripsi',
        harga = '$harga'
        WHERE id = '$id'
        ");

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $telp = htmlspecialchars($data['telp']);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
          alert('Username sudah digunakan!');
          document.location.href = 'login.php';
      </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `telp`) 
    VALUES (null, '$username', '$password', '$nama', '$email', '$telp')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM book
              WHERE nama_buku LIKE '%$keyword%' OR
              id LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);


    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


// function checkout($data)
// {
//     $conn = koneksi();

//     $id_pembeli = $_SESSION["pembeli"]["id_user"];
//     $id_ongkir = $_POST["id_ongkir"];
//     $tanggal_beli = date("Y-m-d");

//     // mengambil data tarif ongkir
//     $ambil = $conn->query("SELECT * FROM ongkir WHERE id_ongkir = '$id_ongkir' ");
//     $arrayongkir = $ambil->fetch_assoc();
//     $tarif = $arrayongkir['tarif'];

//     // total pembelian
//     $total_beli = $total + $tarif;

//     // menyimpan data ke tabel pembelian
//     $query = "INSERT INTO pembelian 
//     (id_user, id_ongkir, tanggal_pembelian, total_pembelian) 
//     VALUES ('$id_pembeli', '$id_ongkir', '$tanggal_beli', '$total_beli')";
// }
