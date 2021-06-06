<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beranda - Covid Rangers</title>
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
         <h1 class="logo mr-auto"><a href="home_covidrangers.php">EDU-COVID</a></h1>

         <nav class="nav-menu d-none d-lg-block">
            <ul>
               <li class="active">
                  <a href="home_covidrangers.php">Beranda</a>
               </li>
               <li>
                  <a href="#infocovid">Info Covid</a>
               </li>
               <li>
                  <a href="#datapasien">Data Pasien</a>
               </li>
               <li>
                  <a href="#rs">Data RS Rujukan</a>
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
               <img src="assets/img/covidrangers-img.png" class="img-fluid animated" alt="">
            </div>
         </div>
      </div>
   </section><!-- End Hero -->


   <section id="infocovid" class="faq section-bg">
      <div class="container" data-aos="fade-up">
         <div class="section-title">
            <h2>Info Covid</h2>
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
   </section>

   <section id="datapasien" class="faq section-bg">
      <div class="container" data-aos="fade-up">
         <div class="section-title">
            <h2>Data pasien</h2>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Masukkan Data Pasien</h6>
                  </div>
                  <div class="card-body">
                     <form action="statuspasien.php" method="POST">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="inputEmail4">Nama Lengkap</label>
                              <input type="text" name="namalengkap" placeholder="John thor" class="form-control"
                                 id="inputEmail4" autocomplete="off" required>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="inputPassword4">Nama Panggilan</label>
                              <input type="text" name="namapanggilan" placeholder="Thor thor" class="form-control"
                                 id="inputPassword4" autocomplete="off" required>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                              <select class="form-control" name="jeniskelamin" id="exampleFormControlSelect1">
                                 <option value="Laki-Laki">Laki-Laki</option>
                                 <option value="Perempuan">Perempuan</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="inputPassword4">Usia</label>
                              <input type="text" name="usia" placeholder="mis : 16" class="form-control"
                                 id="inputPassword4" autocomplete="off" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Alamat lengkap</label>
                           <input type="text" name="alamat" class="form-control" id="inputAddress"
                              placeholder="1234 Main St" autocomplete="off" required>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="inputCity">Kota</label>
                              <input type="text" name="kota" placeholder="Jakarta Utara, Selatan, dsb"
                                 class="form-control" id="inputCity" autocomplete="off" required>
                           </div>
                           <div class="form-group col-md-2">
                              <label for="inputZip">Kode Pos</label>
                              <input type="text" name="kodepos" class="form-control" placeholder="14340" id="inputZip"
                                 autocomplete="off" required>
                           </div>
                           <div class="form-group col-md-4">
                              <label for="inputZip">Nomor Hp</label>
                              <input type="text" name="nomorhp" class="form-control" placeholder="0812-9080-1234"
                                 id="inputCity" autocomplete="off" required>
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="exampleFormControlSelect1">Status kesehatan</label>
                           <select class="form-control" name="kesehatan" id="exampleFormControlSelect1">
                              <option value="Positif">Positif</option>
                              <option value="Tanpa Gejala">Tanpa Gejala</option>
                              <option value="Negatif">Negatif</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <strong class="text-danger">*MOHON INPUT SESUAI DATA PASIEN</strong>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                     </form>
                  </div>
               </div>
            </div>

            <div class="col-md-12">
               <!-- Area Chart -->
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
                  </div>
                  <div class="card-body" style="overflow-x:auto;">
                     <style>
                        table {
                           border-collapse: collapse;
                           border-spacing: 0;
                           width: 100%;
                           border: 1px solid #ddd;
                        }

                        th,
                        td {
                           text-align: left;
                           padding: 8px;
                        }

                        tr:nth-child(even) {
                           background-color: #f2f2f2
                        }
                     </style>
                     <table class="table">
                        <thead class="thead-dark">
                           <tr>
                              <th scope="col">Nomor</th>
                              <th scope="col">Nama Lengkap</th>
                              <th scope="col">Nama Panggilan</th>
                              <th scope="col">Jenis Kelamin</th>
                              <th scope="col">Usia</th>
                              <th scope="col">Alamat</th>
                              <th scope="col">Kota</th>
                              <th scope="col">Kode Pos</th>
                              <th scope="col">Nomor HP</th>
                              <th scope="col">Status Kesehatan</th>
                              <th scope="col">Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                                    include 'koneksi.php';
                                    $page = (isset($_GET['page']))? $_GET['page'] : 1;
                                    $limit = 5; 
                                    $limit_start = ($page - 1) * $limit;
                                    $no = $limit_start + 1;
                              
                                    $query = "SELECT * FROM datapasien ORDER BY namalengkap ASC LIMIT $limit_start, $limit";
                                    $dewan1 = $koneksi->prepare($query);
                                    $dewan1->execute();
                                    $res1 = $dewan1->get_result();
                                    while ($row = $res1->fetch_assoc()) {
                                 ?>
                           <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $row["namalengkap"]; ?></td>
                              <td><?php echo $row["namapanggilan"]; ?></td>
                              <td><?php echo $row["jeniskelamin"]; ?></td>
                              <td><?php echo $row["usia"]; ?></td>
                              <td><?php echo $row["alamat"]; ?></td>
                              <td><?php echo $row["kota"]; ?></td>
                              <td><?php echo $row["kodepos"]; ?></td>
                              <td><?php echo $row["nomorhp"]; ?></td>
                              <td><?php echo $row["kesehatan"]; ?></td>
                              <td>
                                 <a href="editpasien.php?id=<?php echo $row['id_pasien']; ?>" class="btn btn-warning"><i
                                       class="fa fa-edit"></i>Edit</a>
                                 <p></p>
                                 <a href="hapuspasien.php?id=<?php echo $row['id_pasien']?>" class="btn btn-danger"><i
                                       class="fa fa-trash"></i>Hapus</a>
                              </td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                     <!-- Paginations -->
                     <?php
                              $query_jumlah = "SELECT count(*) AS jumlah FROM datapasien";
                              $dewan1 = $koneksi->prepare($query_jumlah);
                              $dewan1->execute();
                              $res1 = $dewan1->get_result();
                              $row = $res1->fetch_assoc();
                              $total_records = $row['jumlah'];
                              ?>
                     <p>Total data : <?php echo $total_records; ?></p>
                     <nav class="mb-5">
                        <ul class="pagination justify-content-end">
                           <?php
                                    $jumlah_page = ceil($total_records / $limit);
                                    $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
                                    $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
                                    $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
                                    
                                    if($page == 1){
                                    echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                                    echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                                    } else {
                                    $link_prev = ($page > 1)? $page - 1 : 1;
                                    echo '<li class="page-item"><a class="page-link" href="?page=1">First</a></li>';
                                    echo '<li class="page-item"><a class="page-link" href="?page='.$link_prev.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                                    }
                              
                                    for($i = $start_number; $i <= $end_number; $i++){
                                    $link_active = ($page == $i)? ' active' : '';
                                    echo '<li class="page-item '.$link_active.'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
                                    }
                              
                                    if($page == $jumlah_page){
                                    echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                                    echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
                                    } else {
                                    $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                                    echo '<li class="page-item"><a class="page-link" href="?page='.$link_next.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                                    echo '<li class="page-item"><a class="page-link" href="?page='.$jumlah_page.'">Last</a></li>';
                                    }
                                 ?>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="rs" class="faq section-bg">
      <div class="container" data-aos="fade-up">
         <div class="section-title">
            <h2>RS Rujukan</h2>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Nama RS Rujukan</h6>
                  </div>
                  <div class="card-body" style="overflow-x:auto;">
                     <style>
                        table {
                           border-collapse: collapse;
                           border-spacing: 0;
                           width: 100%;
                           border: 1px solid #ddd;
                        }

                        th,
                        td {
                           text-align: left;
                           padding: 8px;
                        }

                        tr:nth-child(even) {
                           background-color: #f2f2f2
                        }
                     </style>
                     <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Nama RS</th>
                                 <th>Alamat</th>
                                 <th>Kota</th>
                                 <th>Nomor tlp</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 include 'koneksi.php';
                                 $page = (isset($_GET['page']))? $_GET['page'] : 1;
                                 $limit = 10; 
                                 $limit_start = ($page - 1) * $limit;
                                 $no = $limit_start + 1;

                                 $query = "SELECT * FROM rs ORDER BY id_rs ASC LIMIT $limit_start, $limit";
                                 $dewan1 = $koneksi->prepare($query);
                                 $dewan1->execute();
                                 $res1 = $dewan1->get_result();
                                 while ($row = $res1->fetch_assoc()) {
                              ?>
                              <tr>
                                 <td><?php echo $no++; ?></td>
                                 <td><?php echo $row["namars"]; ?></td>
                                 <td><?php echo $row["alamat"]; ?></td>
                                 <td><?php echo $row["kota"]; ?></td>
                                 <td><?php echo $row["tlp"]; ?></td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                        <!-- Paginations -->
                        <?php
                           $query_jumlah = "SELECT count(*) AS jumlah FROM rs";
                           $dewan1 = $koneksi->prepare($query_jumlah);
                           $dewan1->execute();
                           $res1 = $dewan1->get_result();
                           $row = $res1->fetch_assoc();
                           $total_records = $row['jumlah'];
                        ?>
                        <p>Total data : <?php echo $total_records; ?></p>
                        <nav class="mb-5">
                           <ul class="pagination justify-content-end">
                              <?php
                                 $jumlah_page = ceil($total_records / $limit);
                                 $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
                                 $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
                                 $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
                                             
                                 if($page == 1){
                                    echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                                    echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                                 } else {
                                    $link_prev = ($page > 1)? $page - 1 : 1;
                                    echo '<li class="page-item"><a class="page-link" href="?page=1">First</a></li>';
                                    echo '<li class="page-item"><a class="page-link" href="?page='.$link_prev.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                                 }  for($i = $start_number; $i <= $end_number; $i++){
                                       $link_active = ($page == $i)? ' active' : '';
                                       echo '<li class="page-item '.$link_active.'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
                                    } if($page == $jumlah_page){
                                          echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                                          echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
                                       } else {
                                          $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                                          echo '<li class="page-item"><a class="page-link" href="?page='.$link_next.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                                          echo '<li class="page-item"><a class="page-link" href="?page='.$jumlah_page.'">Last</a></li>';
                                       }
                              ?>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
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