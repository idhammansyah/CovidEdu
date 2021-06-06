<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beranda - Pengguna</title>
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
         <h1 class="logo mr-auto"><a href="home_user.php">EDU-COVID</a></h1>
         <nav class="nav-menu d-none d-lg-block">
            <ul>
               <li class="active">
                  <a href="home_user.php">Beranda</a>
               </li>
               <li>
                  <a href="#penyebaran">Penyebaran</a>
               </li>
               <li>
                  <a href="#donasi">Donasi</a>
               </li>
               <li>
                  <a href="edukasi.php">Edukasi</a>
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
               <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
         </div>
      </div>
   </section><!-- End Hero -->

   <section id="Penyebaran" class="contact">
      <div class="container" data-aos="fade-up">

         <div class="section-title">
            <h2>Data Penyebaran Covid</h2>
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
   <!-- End Contact Section -->

   <section id="donasi" class="contact">
      <div class="container" data-aos="fade-up">

         <div class="section-title">
            <h2>Donasi</h2>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-10 mt-5 mt-lg-0 d-flex align-items-stretch">
               <form action="upload.php" enctype="multipart/form-data" method="post" role="form" class="banners">
                  <div class="form-group">
                     <label for="exampleFormControlInput1" class="text-white">Nama anda</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"
                        value=<?= $_SESSION['nama']?>>
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlInput1" class="text-white">Username anda</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" name="username"
                        value=<?= $_SESSION['username']?>>
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlSelect1" class="text-white">Bank anda</label>
                     <select class="form-control" id="exampleFormControlSelect1" name="bank">
                        <option>-- Silahkan Pilih Bank : --</option>
                        <option disabled></option>
                        <option value="BNI">1. BNI</option>
                        <option value="BCA">2. BCA</option>
                        <option value="BRI">3. BRI</option>
                        <option value="MANDIRI">4. Mandiri</option>
                        <option value="BTN">5. BTN</option>
                     </select>
                  </div>

                  <div class="form-group">
                     <strong for="exampleFormControlFile1" class="text-white">Upload bukti transfer</strong>
                     <input type="file" class="form-control-file text-white" name="bukti_tf">
                  </div>

                  <div class="form-group">
                     <strong class="text-white"><u>PERHATIAN</u></strong>
                     <p class="text-white">Donasi dikirim ke Bank BNI dengan kode <u>009</u> ke Nomor Rekening :
                        <u>00000</u>
                        <br>
                        Dengan memberikan tambahan nominal 1, contoh : Rp. 1001
                        <br>
                        Terima kasih atas donasi yang anda berikan.
                     </p>
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn btn-primary">Donasi Sekarang!</button></div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- End Contact Section -->

   <section id="edukasi" class="faq section-bg">
      <div class="container" data-aos="fade-up">
         <div class="section-title">
            <h2>Kuis COVID-19</h2>
            <p>Kuis ini dilakukan untuk mengetes seberapa tahu Anda dalam Edukasi Virus Corona.</p>
            <p>Anda akan mendapatkan 1 poin setiap menjawab benar..</p>
            <p>Pelajari materi Covid-19 di <a href="http://localhost/CovidEdu/CovidEdu/edukasi.php">Edukasi Virus
                  Corona</a> sebelum Anda menjawab kuis berikut ini.</p>
         </div>
         <div class="container" data-aos="fade-up">
            <div class="section-title">
            </div>
            <br>
            <div id='quiz'></div>
            <div class='button' id='next'><a href='#'>Next</a></div>
            <div class='button' id='prev'><a href='#'>Prev</a></div>
            <div class='button' id='start'> <a href='#'>Start Over</a></div>
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