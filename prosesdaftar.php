<?php

   require_once("koneksi.php");
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $username = $_POST['username'];
   $pass = md5($_POST['pass']);
   $alamat = $_POST['alamat'];
   $tanggal_lahir= $_POST['tanggal_lahir'];
   $level = $_POST['level'];
   $token = $_POST['token'];
   $sql = "SELECT * FROM pengguna WHERE username = '$username'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<script>alert('Username atau Email Sudah Terdaftar!'); document.location='index.php#daftar'</script>";
   } else {
     if(!$nama || !$email || !$username || !$pass || !$alamat || !$tanggal_lahir || !$level || $token) {
       echo "<script>alert('Data masih ada yang kosong!'); document.location='index.php#daftar'</script>";
     } else {
       $data = "INSERT INTO pengguna VALUES (NULL, '$nama', '$email', '$username', '$pass', '$alamat', '$tanggal_lahir', '$level', '$token')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         echo "<script>alert('Pendaftaran sukses! Silahkan login'); document.location='login.php'</script>";
       } else {
         echo "<script>alert('Proses gagal!'); document.location='index.php#daftar'</script>";
       }
     }
   }
   
?>