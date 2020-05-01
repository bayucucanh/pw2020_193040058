<?php
session_start();

// agar tidak bisa langsung masuk ke index
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}


require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}



// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");


// cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
      alert('data berhasil diubah');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "data gagal dubah";
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <ul>
      <label>
        <li>
          Nama :
          <input type=" text" name="nama" autofocus required value="<?= $mhs['nama']; ?>">
      </label>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required value="<?= $mhs['nrp']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required value="<?= $mhs['email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>">
        </label>
      </li>
      <label>
        <li>
          Gambar :
          <input type="text" name="gambar" required value="<?= $mhs['gambar']; ?>">
      </label>
      </li>
      <li>
        <button type=" submit" name="ubah">Ubah</button>
      </li>
    </ul>
  </form>

</body>

</html>