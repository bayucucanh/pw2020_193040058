<?php
require 'functions.php';

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
  <title></title>
</head>

<body>

  <h3>Form Ubah Data Buku</h3>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $books['id']; ?>">
    <table>
      <td>
        <label>
          Gambar :
        </label>
      </td>
      <td>
        <input type="text" name="gambar" value="<?= $books['gambar']; ?>">
      </td>
      </tr>
      <tr>
        <td>
          <label>
            Nama :
          </label>
        </td>
        <td>
          <input type="text" name="nama_buku" value="<?= $books['nama_buku']; ?>">
        </td>
      </tr>
      <tr>
      <tr>
        <td>
          <label>
            Penulis :
          </label>
        </td>
        <td>
          <input type="text" name="penulis" value="<?= $books['penulis']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label>
            Tahun Terbit :
          </label>
        </td>
        <td>
          <input type="text" name="tahun_terbit" value="<?= $books['tahun_terbit']; ?>">
        </td>
      <tr>
        <td>
          <label>
            Penerbit :
          </label>
        </td>
        <td>
          <input type="text" name="penerbit" value="<?= $books['penerbit']; ?>">
        </td>
      </tr>
      <tr>
        <td>

        </td>
      </tr>
    </table>
    <button type="submit" name="ubah">Ubah Data</button>
  </form>
</body>

</html>