<?php
require 'functions.php';


if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'admin.php';
    </script>";
  } else {
    "<script>
      alert('data gagal ditambahkan!');
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
  <title>INSERT</title>
</head>

<body>
  <form action="" method="post">
    <table>
      <td>
        <label>
          Gambar :
        </label>
      </td>
      <td>
        <input type="text" name="gambar">
      </td>
      </tr>
      <tr>
        <td>
          <label>
            Nama :
          </label>
        </td>
        <td>
          <input type="text" name="nama_buku">
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
          <input type="text" name="penulis">
        </td>
      </tr>
      <tr>
        <td>
          <label>
            Tahun Terbit :
          </label>
        </td>
        <td>
          <input type="text" name="tahun_terbit">
        </td>
      <tr>
        <td>
          <label>
            Penerbit :
          </label>
        </td>
        <td>
          <input type="text" name="penerbit">
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="tambah">Tambah Data</button>
        </td>
      </tr>
    </table>

  </form>
</body>

</html>