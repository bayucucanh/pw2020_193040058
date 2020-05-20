<?php
require 'functions.php';
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$id = $_GET['id'];
$books = query("SELECT * FROM book WHERE id  = $id ")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
        alert('data berhasil diubah!');
        document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
      alert('data gagal diubah!');
      document.location.href = 'admin.php';
    </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Balsamiq Sans', cursive; background-color: #1a1a1d; background-image:url(../assets/img/dots.png); background-repeat:repeat;" class="text-light">
  <div class="container" style="background-color:  #950740; border :5px solid #c3073f; margin-top:100px; box-shadow:5px 5px 10px #c3073f;">
    <div class="row" style="margin-left: 250px">
      <div class="card-panel center" style="margin: 30px 0">
        <h3>Form Ubah Data Buku</h3>
        <form action="" method="POST">
          <input type="hidden" name="id" value="<?= $books['id']; ?>">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Gambar</label>
              <input name="gambar" type="text" class="form-control" value="<?= $books['gambar']; ?>">
            </div>
            <div class="form-group col-md-6">
              <label>Nama Buku</label>
              <input name="nama_buku" type="text" class="form-control" value="<?= $books['nama_buku']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Penulis</label>
            <input name="penulis" type="text" class="form-control" value="<?= $books['penulis']; ?>">
          </div>
          <div class="form-group">
            <label>Tahun Terbit</label>
            <input name="tahun_terbit" type="text" class="form-control" value="<?= $books['tahun_terbit']; ?>">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Penerbit</label>
              <input name="penerbit" type="text" class="form-control" value="<?= $books['penerbit']; ?>">
            </div>
            <div class="form-group col-md-4">
              <label>Deskripsi</label>
              <input type="text" class="form-control" name="deskripsi" value="<?= $books['deskripsi']; ?>">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Harga</label>
              <input name="harga" type="text" class="form-control" value="<?= $books['harga']; ?>">
            </div>
          </div>
          <div class="form-group">
          </div>
          <button name="ubah" type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>