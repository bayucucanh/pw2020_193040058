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
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }
    if ($row['id'] == $_SESSION['hash']) {
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
</head>

<body>
  <?php if (isset($error)) : ?>
    <p style="color: red; font-style:italic;">Username atau Password Salah</p>
  <?php endif; ?>

  <form action="" method="POST">
    <table>
      <tr>
        <td><label for="username">username</label></td>
        <td>:</td>
        <td><Input type="text" name="username"></Input></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><Input type="password" name="password"></Input></td>
      </tr>
    </table>
    <input type="checkbox" name="remember">
    <label for="remember">Remember Me</label>
    <br>
    <button type="submit" name="submit">submit</button>
  </form>
</body>

</html>