<?php
session_start();
$id_produk = $_GET["id"];
unset($_SESSION["cart"][$id_produk]);
echo "<script>alert('produk telah dihapus dari keranjang belanja');
location='cart.php';</script>";
