<?php
session_start();

require 'functions.php';

if (isset($_SESSION['username'])) {
  header("Location: ../index.php");
  exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash ===  hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: ../index.php");
    exit;
  }
}

// jika tombol ditekan
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    $_SESSION["pembeli"] = $row;
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: ../index.php");
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

<body style="background-color:#c3073f;">
  <!-- Default form login -->
  <div class="container">
    <div class="row">
      <?php if (isset($error)) : ?>
        <p style="color: red; font-style:italic;">Username atau Password Salah</p>
      <?php endif; ?>
      <div class="panel-body" style="background-color:#950740; color:white; margin:auto; width:500px; margin-top:10%;">
        <form class="text-center border border-light p-5" action="" method="POST">

          <p class="h4 mb-4">Sign in</p>

          <!-- Username -->
          <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" name="username" placeholder="Masukan Username" autofocus autocomplete="off">

          <!-- Password -->
          <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">

          <div class="d-flex justify-content-around">
            <div>
              <!-- Remember me -->
              <div>
                <input name="remember" type="checkbox">
                <label for="remember">Remember me</label>
              </div>
            </div>
          </div>

          <!-- Sign in button -->
          <button style="margin-left: 5px" class="btn btn-primary btn-block my-4" type="submit" name="submit">Sign in</button>

          <!-- Register -->
          <p>Belum punya akun?
            <a href="registrasi.php">Register</a>
          </p>

          <!-- Social login -->
          <p>or sign in with:</p>

          <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
          <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
          <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
          <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

        </form>
        <!-- Default form login -->
      </div>
    </div>
  </div>
</body>

</html>