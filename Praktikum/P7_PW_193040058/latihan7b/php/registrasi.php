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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
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
    <button type="submit" class="btn btn-primary" name="register">Submit</button>
  </form>
</body>

</html>