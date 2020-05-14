<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040058');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {

    // echo "<script>
    //   alert('pilih gambar terlebih dahulu');
    // </script>";
    return 'nophoto.png';
  }
  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  // in_array = apakah sebuah nilai ada atau tidak dalam array
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
      alert('yang anda pilih bukan gambar!');
    </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
      alert('yang anda pilih bukan gambar!');
    </script>";
    return false;
  }

  // cek ukuran file
  // maks 5mb = 5000000byte
  if ($ukuran_file > 5000000) {
    echo "<script>
      alert('Ukuran terlalu besar!');
    </script>";
    return false;
  }

  // lolos pengecekan
  // siap upload file
  // generate nama file baru
  // nama file baru diisi dengan uniqid untuk membangkitkan bilangan random
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  //  move_uploded_file() = memindahkan yang sudah diupload penimpana sementara dipindahkan ke tempat yang diinginkan
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}


function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  // $gambar = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO
  mahasiswa
  VALUES
  (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar')
  ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar difolder img
  $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");
  if ($mahasiswa['gambar'] != 'nophoto.png') {
    unlink('img/' . $mahasiswa['gambar']);
  }


  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'nophoto.png') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE mahasiswa SET
              nama = '$nama', 
              nrp = '$nrp',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar' 
              WHERE id = $id ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
              WHERE nama LIKE '%$keyword%' OR
              nrp LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);


  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      // agar tidak bisa langsung masuk ke index
      $_SESSION['login'] = true;
      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'username / password salah!'
  ];
}


function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
      alert('username terdaftar!');
      document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
      alert('username / password tidak boleh kosong!');
      document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  // konfirmasi password
  if ($password1 !== $password2) {
    echo "<script>
    alert('password tidak sesuai!');
    document.location.href = 'registrasi.php';
  </script>";
    return false;
  }

  // password terlalu pendek < 5
  if (strlen($password1) < 5) {
    echo "<script>
    alert('password Terlalu Pendek!');
    document.location.href = 'registrasi.php';
  </script>";
    return false;
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // INSERT ke tabel user
  $query = "INSERT INTO user
            VALUES
            (null, '$username', '$password_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
