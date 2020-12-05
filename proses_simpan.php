
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $name   = $_POST['name'];
  $photo = $_FILES['photo']['name'];
  $dekripsi     = $_POST['dekripsi'];
  $nutrisi    = $_POST['nutrisi'];
  $serving_size    = $_POST['serving_size'];
  $id_distributor    = $_POST['id_distributor'];
  

//cek dulu jika ada gambar produk jalankan coding ini
if($photo != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $photo); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['photo']['tmp_name'];   
  //$angka_acak     = rand(1,999);
  $nama_gambar_baru = $photo; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO product (name, photo, dekripsi, nutrisi, serving_size, id_distributor) VALUES ('$name', '$photo', '$dekripsi', '$nutrisi', '$serving_size','$id_distributor')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='form_simpan.php';</script>";
            }
} else {
   $query = "INSERT INTO product (name, photo, dekripsi, nutrisi, serving_size, id_distributor) VALUES ('$name', null, '$dekripsi', '$nutrisi', '$serving_size','$id_distributor')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}
