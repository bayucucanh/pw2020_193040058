<?php
require 'functions.php';


if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('Registrasi berhasil');
          document.location.href = 'login.php';
      </script>";
  } else {
    echo "<script>
        alert('Registrasi gagal');
        document.location.href = 'login.php';
      </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <!-- Bootsrtap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Balsamiq Sans', cursive; background-color: #1a1a1d; background-image:url(../assets/img/dots.png); background-repeat:repeat;" class="text-light">

  <div class="container" style="background-color:#950740; border :5px solid #c3073f; margin-top:100px; box-shadow:5px 5px 10px #c3073f;">
    <div class="row" style="margin-left: 350px">
      <div class="card-panel center" style="margin: 30px 0">
        <h3>Form Tambah Data Buku</h3>
        <form action="" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Masukan Username" autofocus autocomplete="off">
            </div>
            <div class="form-group col-md-6">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukan Password">
            </div>
          </div>
          <div class="form-group">
            <label for="email">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Masukan Email">
          </div>
          <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="text" name="telp" class="form-control" placeholder="Masukan No Telp.">
          </div>
          <div class="form-group">
          </div>
          <button type="submit" class="btn btn-primary" name="register">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>