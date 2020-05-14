const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');


// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  //  ajax
  // Baru
  // fetch()
  // (alamat folder kirim keyword)
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    // kalo datanya dikembalikan, respon yang didapatkan kita jalankan ke dalam sebuah function response.text
    .then((response) => response.text())
    // jika sudah dapat respon nya maka,
    .then((response) => (container.innerHTML = response))


  // Lama
  // bagaimana cara kita untuk melakukan request terhadap sebuah sumber tanpa melakukan refresh
  // const xhr = new XMLHttpRequest();

  // xhr.onreadystatechange = function () {
  //   // readyState
  //   // artinya sumber dari halaman ajaxnya sudah siap
  //   // status
  //   // artinya halaman tujuannya sudah OK
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     container.innerHTML = this.responseText;
  //   }
  // };

  // // menyiapkan ajax
  // // parameter ('method', 'request folder')
  // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  // // jalankan ajax
  // xhr.send();


});


// Preview Image untuk Tambah dan ubah
function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}