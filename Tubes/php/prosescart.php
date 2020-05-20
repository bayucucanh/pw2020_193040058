<?php
session_start();
// mendapatkan id produk dari url
$id_produk = $_GET['id'];

// jika sudah ada produk itu dikeranjang, maka produk itu bertambah 1
if (isset($_SESSION['cart'][$id_produk])) {
  $_SESSION['cart'][$id_produk] += 1;
}
// selain itu (belum ada dikeranjang), maka dianggap dibeli 1
else {
  $_SESSION['cart'][$id_produk] = 1;
}

// ke halaman keranjang
echo "<script>alert('produk telah ditambahkan');
  location='cart.php';
</script>";
