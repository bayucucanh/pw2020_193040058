<?php

require 'functions.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
        alert('data berhasil dihapus!');
        document.location.href = 'admin.php';
    </script>";
} else {
  "<script>
      alert('data gagal dihapus!');
      document.location.href = 'admin.php';
    </script>";
}
