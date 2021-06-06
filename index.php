<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Education COVID</title>
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
         <h1 class="logo mr-auto"><a href="index.html">EDU-COVID</a></h1>

         <nav class="nav-menu d-none d-lg-block">
            <ul>
               <li class="active">
                  <a href="index.php">Beranda</a>
               </li>
               <li>
                  <a href="#kuis">Data dan Statistik</a>
               </li>
               <li>
                  <a href="#daftar">Daftar</a>
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
               <h1>Solusi untuk Pencegahan Covid-19</h1>
               <h2>Edu-Covid adalah website untuk memberikan beberapa informasi yang berisi tentang edukasi pencegahan
                  Covid-19</h2>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
               <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
         </div>
      </div>

   </section><!-- End Hero -->

   <!-- ======= Quis Section ======= -->
   <section id="kuis" class="faq section-bg">
      <div class="container" data-aos="fade-up">

         <div class="section-title">
            <h2>Data Covid</h2>
         </div>

         <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
               <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                     <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                           <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Data Pasien Sembuh (Negatif)</div>
                           <?php
                                       include 'koneksi.php';
                                       $pasienn = mysqli_query($koneksi, "SELECT * FROM  datapasien WHERE kesehatan = 'Negatif'");
                                       $jumlah_orang = mysqli_num_rows($pasienn); 
                                    ?>
                           <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_orang;?></div>
                        </div>
                        <div class="col-auto">
                           <i class="fas fa-wallet fa-2x text-gray-300"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
               <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                     <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                           <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              Data Pasien Terjangkit (Positif)</div>
                           <?php 
                                       include 'koneksi.php';
                                       $pasien = mysqli_query($koneksi, "SELECT * FROM datapasien WHERE kesehatan = 'Positif' ");
                                       $total_pasien = mysqli_num_rows($pasien);
                                    ?>
                           <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_pasien;?></div>
                        </div>
                        <div class="col-auto">
                           <i class="fas fa-virus fa-2x text-gray-300"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
               <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                     <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                           <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Data Pasien
                              Terjangkit (Tanpa Gejala)
                           </div>
                           <?php 
                                    include 'koneksi.php';
                                    $pasien = mysqli_query($koneksi,"SELECT * FROM datapasien WHERE kesehatan = 'Tanpa Gejala'");
                                    $totalpasien= mysqli_num_rows($pasien);
                                 ?>
                           <div class="row no-gutters align-items-center">
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalpasien; ?>
                              </div>
                           </div>
                        </div>
                        <div class="col-auto">
                           <i class="fas fa-virus fa-2x text-gray-300"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ======= End Quis Section ======= -->


   <!-- ======= Contact Section ======= -->
   <section id="daftar" class="contact">
      <div class="container" data-aos="fade-up">

         <div class="section-title">
            <h2>Daftar</h2>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-10 mt-5 mt-lg-0 d-flex align-items-stretch">
               <form action="prosesdaftar.php" method="post" role="form" class="banners">
                  <div class="form-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="nama"
                           placeholder="Nama Lengkap" autocomplete="off" required>
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="email" id="formGroupExampleInput"
                           placeholder="Email" autocomplete="off" required>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-6">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fa fa-user"></i></span>
                           <input type="text" class="form-control" id="formGroupExampleInput" name="username"
                              placeholder="Username" autocomplete="off" required>
                        </div>
                     </div>

                     <div class="form-group col-md-6">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fa fa-lock"></i></span>
                           <input type="password" class="form-control" name="pass" id="formGroupExampleInput"
                              placeholder="Password" autocomplete="off" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                        <input type="text" class="form-control" name="alamat" id="formGroupExampleInput"
                           placeholder="Alamat" autocomplete="off" required>
                     </div>
                  </div>

                  <div class="row">
                     <div class="form-group col-md-6">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                           <input type="text" class="form-control" name="tanggal_lahir" id="formGroupExampleInput"
                              placeholder="Tanggal Lahir" autocomplete="off" required>
                        </div>
                     </div>

                     <div class="form-group col-md-6">
                        <select class="form-control" name="level">
                           <option>-- Pilih daftar sebagai : --</option>
                           <option value="Pengguna">Pengguna</option>
                           <option value="Covid Rangers">Pegawai Covid Ranger</option>
                        </select>
                     </div>

                     <div class="form-group col-md-6">
                        <div class="input-group-prepend">
                           <!-- <span class="input-group-text"><i class="fa fa-eye"></i></span> -->
                           <input type="hidden" class="form-control" name="token" id="formGroupExampleInput"
                              placeholder="kosongkan saja" autocomplete="off">
                        </div>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-success form-control" type="submit">Daftar</button>
                  </div> <br>
                  <div class = "text-center">
                        <a href="login.php">Sudah punya akun? Login disini</a>
                    </div>
               </form>
            </div>
         </div>
      </div>
   </section><!-- End Contact Section -->

   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
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