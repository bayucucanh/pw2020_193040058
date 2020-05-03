<?php
session_start();

require 'functions.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// jika tombol ditekan
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- My Style -->
  <link rel="stylesheet" href="../css/login.css">
  <!-- bootsrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <?php if (isset($error)) : ?>
    <p style="color: red; font-style:italic;">Username atau Password Salah</p>
  <?php endif; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="txt-left">WELCOME</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem corporis officia nihil
          autem sequi est ipsum nemo error saepe earum, cumque repudiandae optio unde placeat modi velit, nulla magnam!
          Optio, excepturi incidunt autem corporis nesciunt nisi amet harum? Labore aspernatur et assumenda, fugit
          laborum
          qui.</p>
      </div>
      <div class="col-md-5">
        <h3 class="login">Login</h3>
        <form action="" method="POST">
          <!-- Username -->
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Masukan Username" autofocus autocomplete="off">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <!-- Password -->
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukan Password">
          </div>
          <input type="checkbox" name="remember">
          <label for="remember">Remember</label>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <p>Belum mempuyai akun ? Registrasi <a href="registrasi.php">disini</a></p>
      </div>
    </div>
  </div>
</body>

</html>