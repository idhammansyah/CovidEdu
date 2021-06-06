<?php 
   session_start();
?>

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
         <h1 class="logo mr-auto"><a href="home_user.php">EDUKASI VIRUS CORONA</a></h1>
      </div>
   </header><!-- End Header -->

   <section id="hero" class="d-flex align-items-center">

      <div class="container">
         <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
               data-aos="fade-up" data-aos-delay="200">
               <h1>Halo, <?=$_SESSION['username']; ?></h1>
               <h2>Pelajari materi berikut uktuk menjawab kuis. Selamat belajar !!!</h2>
               
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
               <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
         </div>
      </div>

   </section><!-- End Hero -->

    <!-- Edukasi Section -->
    <div class="container" data-aos="fade-up">
         <div class="row justify-content-center">
           
            <div class="section-title">
               <h2>Pengertian Virus Corona</h2>
            </div>
            <p> Coronavirus atau disebut juga dengan virus corona merupakan keluarga besar virus yang mengakibatkan
               terjadinya infeksi saluran pernapasan atas ringan hingga sedang, seperti penyakit flu. Banyak orang
               terinfeksi virus ini, setidaknya satu kali dalam hidupnya.</p>

             <div class="section-title">
               <h2> Faktor Risiko Infeksi Coronavirus</h2>
            </div>
            <p> Siapa saja dapat terinfeksi virus corona. Seperti terkena tetesan kecil (droplet) dari hidung atau mulut pada saat batuk atau bersin. Akan tetapi, bayi dan anak kecil serta orang dengan kekebalan tubuh yang lemah lebih rentan terhadap serangan virus ini. Selain itu, kondisi musim juga mungkin berpengaruh. Contohnya, di Amerika Serikat, infeksi virus corona lebih umum terjadi pada musim gugur dan musim dingin. Lalu, seseorang yang tinggal atau berkunjung ke daerah atau negara yang rawan virus corona juga berisiko terserang penyakit ini. Misalnya, berkunjung ke Tiongkok, khususnya kota Wuhan, yang pernah menjadi wabah COVID-19 yang bermulai pada Desember 2019.</p>

            <div class="section-title">
               <h2> Gejala Coronavirus</h2>
            </div>
            <p> Virus corona bisa menimbulkan beragam gejala pada pengidapnya. Gejala yang muncul ini bergantung pada
               jenis virus yang menyerang dan seberapa serius infeksi yang terjadi. Berikut ini beberapa ciri-ciri awal
               corona: 
               <br>1. Hidung Beringus
               <br>2. Sakit Kepala
               <br>3. Batuk
               <br>4. Sakit Tenggorokan
               <br>5. Demam
               <br>6. Merasa Tidak Enak Badan
               <br>7. Hilangnya kemampuan indera perasa dan penciuman</p>
               <p>Hal yang perlu ditegaskan, beberapa virus corona dapat menyebabkan gejala yang parah. Infeksinya dapat berubah menjadi bronkitis dan pneumonia (disebabkan oleh COVID-19), yang mengakibatkan gejala seperti:
               <br>1. Demam yang mungkin cukup tinggi bila pengidap mengidap pneumonia.
               <br>2. Batuk dengan lendir.
               <br>3. Sesak napas.
               <br>4. Nyeri dada atau sesak saat bernapas dan batuk. </p>
               
         </div>
      </div>
      <!-- End Edukasi Section -->

   <!-- ======= Pencegahan Section ======= -->
   <section id="pencegahan" class="pencegahan">
      <div class="container" data-aos="fade-up">
         <div class="section-title">
            <h2>Pencegahan Covid-19</h2>
            <h3>Ayo Lakukan 5M</h3>
         </div>
         <div class="row pencegahan-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 pencegahan-item filter-masker">
               <h3>Memakai Masker</h3>
               <a href="https://www.youtube.com/watch?v=3apsk7aOv7s" class="venobox btn-watch-video" data-vbtype="video"
                  data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
               <div class="pencegahan-img"><img src="assets/img/pencegahan/pencegahan-1.jpg" class="img-fluid" alt="">
               </div>
               <div class="pencegahan-info">
                  <h4>Zoom In</h4>
                  <a href="assets/img/pencegahan/pencegahan-1.jpg" data-gall="pencegahanGallery"
                     class="venobox preview-link" title="Pakai Masker"><i class="bx bx-zoom-in"></i></a>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 pencegahan-item filter-cucitangan">
               <h3>Mencuci Tangan</h3>
               <a href=" https://www.youtube.com/watch?v=Jg8S09oHmpE" class="venobox btn-watch-video"
                  data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
               <div class="pencegahan-img"><img src="assets/img/pencegahan/pencegahan-2.jpg" class="img-fluid" alt="">
               </div>
               <div class="pencegahan-info">
                  <h4>Zoom In</h4>
                  <a href="assets/img/pencegahan/pencegahan-2.jpg" data-gall="pencegahanGallery"
                     class="venobox preview-link" title="Mencuci Tangan"><i class="bx bx-zoom-in"></i></a>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 pencegahan-item filter-jagajarak">
               <h3>Menjaga Jarak</h3>
               <a href=" https://www.youtube.com/watch?v=mLtsLY9R22I" class="venobox btn-watch-video"
                  data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
               <div class="pencegahan-img"><img src="assets/img/pencegahan/pencegahan-3.jpg" class="img-fluid" alt="">
               </div>
               <div class="pencegahan-info">
                  <h4>Zoom In</h4>
                  <a href="assets/img/pencegahan/pencegahan-3.jpg" data-gall="pencegahanGallery"
                     class="venobox preview-link" title="Menjaga Jarak"><i class="bx bx-zoom-in"></i></a>
               </div>
            </div>
         </div>
         <div class="row pencegahan-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 pencegahan-item filter-kerumunan">
               <h3>Menjauhi Kerumunan</h3>
               <a href=" https://www.youtube.com/watch?v=mLtsLY9R22I" class="venobox btn-watch-video"
                  data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
               <div class="pencegahan-img"><img src="assets/img/pencegahan/pencegahan-4.jpg" class="img-fluid" alt="">
               </div>
               <div class="pencegahan-info">
                  <h4>Zoom In</h4>
                  <a href="assets/img/pencegahan/pencegahan-4.jpg" data-gall="pencegahanGallery"
                     class="venobox preview-link" title="Menjauhi Kerumunan"><i class="bx bx-zoom-in"></i></a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 pencegahan-item filter-mobilitas">
               <h3>Mengurangi Mobilitas</h3>
               <a href=" https://www.youtube.com/watch?v=KogFnJiSiOE" class="venobox btn-watch-video"
                  data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
               <div class="pencegahan-img"><img src="assets/img/pencegahan/pencegahan-5.jpg" class="img-fluid" alt="">
               </div>
               <div class="pencegahan-info">
                  <h4>Zoom In</h4>
                  <a href="assets/img/pencegahan/pencegahan-5.jpg" data-gall="pencegahanGallery"
                     class="venobox preview-link" title="Mengurangi Mobilitas"><i class="bx bx-zoom-in"></i></a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 pencegahan-item filter-mobilitas">
               <h3>Pola Hidup Sehat</h3>
               <a href=" https://www.youtube.com/watch?v=KogFnJiSiOE" class="venobox btn-watch-video"
                  data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
               <div class="pencegahan-img"><img src="assets/img/pencegahan/pencegahan-6.png" class="img-fluid" alt="">
               </div>
               <div class="pencegahan-info">
                  <h4>Zoom In</h4>
                  <a href="assets/img/pencegahan/pencegahan-6.jpeg" data-gall="pencegahanGallery"
                     class="venobox preview-link" title="Mengurangi Mobilitas"><i class="bx bx-zoom-in"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End pencegahan Section -->

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