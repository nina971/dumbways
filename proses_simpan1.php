
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $nama   = $_POST['nama'];
  //$photo = $_FILES['photo']['name'];
  $address     = $_POST['address'];
  // $nutrisi    = $_POST['nutrisi'];
  // $serving_size    = $_POST['serving_size'];
  // $id_distributor    = $_POST['id_distributor'];
  

//cek dulu jika ada gambar produk jalankan coding ini
   $query = "INSERT INTO distributor (nama, address) VALUES ('$nama', '$address')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='tampil.php';</script>";
                  }

