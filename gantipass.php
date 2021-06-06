<?php
   include 'koneksi.php';
   if (isset($_GET["email"]) && isset($_GET["token"])) {
      $email = mysqli_escape_string($koneksi, $_GET["email"]);
      $token = mysqli_escape_string($koneksi, $_GET["token"]);

      $data = mysqli_query($koneksi, "SELECT id_pengguna FROM pengguna WHERE email='$email' AND token='$token' ");
      if ($data->num_rows > 0) {
         $str = "1234567890qwertyuiopasdfghjklzxcvbnm";
         $str = str_shuffle($str);
         $str = substr($str, 0, 10);

         $pass = $str;
         $sql=mysqli_query($koneksi,"UPDATE pengguna SET pass = '$pass', token='' WHERE email='$email'");
         echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                  <strong> PASSWORD ANDA SAAT INI ADALAH $pass. Ini adalah halaman sementara. Mohon ubah password anda dibawah ini!</strong>
                     <button type'button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                     </button>
               </div>";
      } else {
         echo "<script>alert('Masukkan email kembali untuk dapatkan token'); document.location='lupa.php'</script>";
      }
   } else {
      // echo "<script>alert('Masukkan email kembali untuk dapatkan token'); document.location='lupa.php'</script>";
      exit();
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Lupa password</title>
   <meta content="" name="description">
   <meta content="" name="keywords">


   <!-- Google Fonts -->
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
   <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
   <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
   <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

   <div class="container" data-aos="fade-up">

      <div class="section-title">
         <h2>Covid Rangers <p>Lupa Password</p>
         </h2>
      </div>

      <div class="row justify-content-center">
         <div class="col-lg-8 mt-3 mt-lg-0 d-flex align-items-stretch">
            <form action="update-pass.php" method="post" role="form" class="banners">
               <div class="form-group">
                  <label for="exampleInputEmail1" class="text-white">Email anda adalah</label>
                  <input type="text" class="form-control" name="email" value = "<?php echo $email;?>" autocomplete="off">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1" class="text-white">Password baru anda</label>
                  <input type="password" placeholder="password anda" class="form-control" name="pass" autocomplete="off">
               </div>
               <div class="text-center">
                  <button class="btn btn-success" type="submit">Update data</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
   <div id="preloader"></div>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/jquery/jquery.min.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>
   <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/venobox/venobox.min.js"></script>
   <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
   <script src="assets/vendor/aos/aos.js"></script>

   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>

</body>

</html>