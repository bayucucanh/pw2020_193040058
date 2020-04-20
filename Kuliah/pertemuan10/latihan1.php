<?php
// Koneksi Ke Database & pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040058');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel mahasiswa
// akan dimasukan ke dalam function
$mahasiswa = $rows;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table class="produk" border="1" cellspacing="0" cellpadding="10">
    <thead>
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
          <td><?php $mhs['nrp']; ?></td>
          <td><?= $mhs['nama'];  ?></td>
          <td><?= $mhs['email']; ?></td>
          <td><?= $mhs['jurusan']; ?></td>
          <td>
            <a href="">Ubah</a> | <a href="">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>

  </table>
</body>

</html>