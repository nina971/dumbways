<?php
  $host = "127.0.0.1"; 
  $user = "root";
  $pass = "123456";
  $nama_db = "pw_05122020"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }

  ?>

