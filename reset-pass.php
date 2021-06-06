<?php 
    
    include 'koneksi.php';

    $email = mysqli_escape_string($koneksi,$_POST['email']);
    $query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email = '$email'");
    if($query->num_rows > 0) {
        $str = "1234567890qwertyuiopasdfghjklzxcvbnm";
        $str = str_shuffle($str);
        $str = substr($str, 0, 10);
        $url = "gantipass.php?token=$str&email=$email";

        echo "<script>alert('Email ditemukan! Klik OK untuk ubah password anda'); document.location='$url'</script>";
        //echo "<p>Copy token diatas, lalu masukkan kedalam url. Contoh : stemcellapplications.000webhostapp.com/<strong>(url token copy disini)</strong></p>";
        //mail($email, "Reset Password", "To Reset your password please click this link : $url ", "From: mansyahidham@gmail.com");
        $koneksi->query("UPDATE pengguna SET token='$str' WHERE email = '$email'");

        //echo "<script>alert('Please check your email'); document.location='gantipass.php'</script>";
      } else {
          echo "<script>alert('Masukkan email!'); document.location='lupa.php'</script>";
      }
?>