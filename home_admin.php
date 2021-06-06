<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beranda - Admin</title>
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

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">
         <h1 class="logo mr-auto"><a href="home_admin.php">EDU-COVID</a></h1>

         <nav class="nav-menu d-none d-lg-block">
            <ul>
               <li class="active">
                  <a href="home_admin.php">Beranda</a>
               </li>
               <li>
                  <a href="dashboard/index.php">Dashboard</a>
               </li>
               <li>
                  <a href="#isiapa">Isi Apa</a>
               </li>
            </ul>
         </nav><!-- .nav-menu -->
      </div>
   </header><!-- End Header -->
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
               data-aos="fade-up" data-aos-delay="200">
               <h1>Halo, <?=$_SESSION['username']; ?></h1>
               <h2>Anda adalah <?=$_SESSION['level']?></h2>
               <h2>Apakah anda ingin logout? <a class="btn btn-outline-danger" href="logout.php">Logout</a></h2>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
               <img src="assets/img/admin-img.png" class="img-fluid animated" alt="">
            </div>
         </div>
      </div>
   </section><!-- End Hero -->


   <section id="isiapa" class="faq section-bg">
      <div class="container" data-aos="fade-up">
         <div class="section-title">
            <h2>Isi Apa?</h2>
         </div>
              
      </div>
   </section>

   <footer id="footer">
      <div class="container footer-bottom clearfix">
         <div class="copyright">
            <strong>
               The Madols
               <p>Dwi Tina Audina / 1402017039</p>
               <p>Idham Mansyah Awwalu / 1402017067</p>
               <p>Muhammad Randi / 1402017105</p>
            </strong>
         </div>
      </div>
   </footer><!-- End Footer -->
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