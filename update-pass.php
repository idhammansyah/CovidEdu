<?php 
    
    include 'koneksi.php';

    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $query = mysqli_query($koneksi, "SELECT id_pengguna FROM pengguna WHERE email = '$email' AND pass = '$pass'");
    if($query->num_rows > 0) {
        echo "<script>alert('password gagal!'); document.location='lupa.php'</script>";        
      } else {
        $koneksi->query("UPDATE pengguna SET pass='$pass' WHERE email='$email'");
        echo "<script>alert('password berhasil di update'); document.location='login.php'</script>";
      }
?>