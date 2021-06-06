<?php 
    include '../koneksi.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title> Dashboard Admin</title>

   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../home_admin.php">
            <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-virus"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Halo <?= $_SESSION['username'];?></div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="index.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
            Penyebaran COVID-19
         </div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
               <i class="fas fa-table"></i>
               <span>Data Penyebaran</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Data :</h6>
                  <a class="collapse-item" href="inputdata.php">Input Data</a>
                  <a class="collapse-item" href="lihatdata.php">Lihat Data</a>
               </div>
            </div>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
            Donasi dari pengguna
         </div>

         <!-- Nav Item - Charts -->
         <li class="nav-item">
            <a class="nav-link" href="donasi.php">
               <i class="fas fa-fw fa-wallet"></i>
               <span>Donasi</span></a>
         </li>

         <!-- Nav Item - Tables -->
         <li class="nav-item">
            <a class="nav-link" href="rs.php">
               <i class="fas fa-fw fa-hospital"></i>
               <span>Rumah Sakit Rujukan</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">
         <!-- Nav Item - Tables -->
         <li class="nav-item">
            <a class="nav-link" href="../logout.php">
               <i class="fas fa-sign-out-alt"></i>
               <span>Logout</span></a>
         </li>

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
               </button>

               <!-- Topbar Search -->
               <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                           <i class="fas fa-search fa-sm"></i>
                        </button>
                     </div>
                  </div>
               </form>

               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown no-arrow d-sm-none">
                     <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                     </a>
                     <!-- Dropdown - Messages -->
                     <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                           <div class="input-group">
                              <input type="text" class="form-control bg-light border-0 small"
                                 placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                 <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['username'];?></span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                     </a>
                     <!-- Dropdown - User Information -->
                     <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        
                        <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                        </a>
                     </div> -->
                  </li>

               </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

               <!-- Page Heading -->
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
               </div>

               <!-- Content Row -->
               <div class="row">

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total pengguna yang berdonasi</div>
                                 <?php
                                       include '../koneksi.php';
                                       $datadonasi = mysqli_query($koneksi, "SELECT * FROM  upload");
                                       $jumlah_orang = mysqli_num_rows($datadonasi); 
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
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Data Pasien Terjangkit (Positif)</div>
                                 <?php 
                                       include '../koneksi.php';
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
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Data Pasien
                                    Terjangkit (Tanpa Gejala)
                                 </div>
                                 <?php 
                                    include '../koneksi.php';
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

                  <!-- Pending Requests Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Total Covid Rangers</div>
                                 <?php 
                                        include '../koneksi.php';
                                        $user = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE level = 'Covid Rangers'");
                                        $pengguna= mysqli_num_rows($user);
                                    ?>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pengguna; ?></div>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-user fa-2x text-gray-300"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Content Row -->

               <div class="row">

                  <!-- Area Chart -->
                  <div class="col-xl-12 col-lg-7">
                     <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Nama-nama Anggota Covid Rangers</h6>
                        </div>
                        <!-- Card Body -->
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tanggal Lahir</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    include '../koneksi.php';
                                    $page = (isset($_GET['page']))? $_GET['page'] : 1;
                                    $limit = 5; 
                                    $limit_start = ($page - 1) * $limit;
                                    $no = $limit_start + 1;
                              
                                    $query = "SELECT * FROM pengguna WHERE level = 'Covid Rangers' ORDER BY id_pengguna ASC LIMIT $limit_start, $limit";
                                    $dewan1 = $koneksi->prepare($query);
                                    $dewan1->execute();
                                    $res1 = $dewan1->get_result();
                                    while ($row = $res1->fetch_assoc()) {
                                 ?>
                                 <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row["nama"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["alamat"]; ?></td>
                                    <td><?php echo $row["tanggal_lahir"]; ?></td>
                                 </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                           <!-- Paginations -->
                           <?php
                              $query_jumlah = "SELECT count(*) AS jumlah FROM pengguna WHERE level = 'Covid Rangers'";
                              $dewan1 = $koneksi->prepare($query_jumlah);
                              $dewan1->execute();
                              $res1 = $dewan1->get_result();
                              $row = $res1->fetch_assoc();
                              $total_records = $row['jumlah'];
                              ?>
                           <p>Total halaman : <?php echo $total_records; ?></p>
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

               <!-- Content Row -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Nama-nama Pengguna</h6>
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tanggal Lahir</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    include '../koneksi.php';
                                    $page = (isset($_GET['page']))? $_GET['page'] : 1;
                                    $limit = 5; 
                                    $limit_start = ($page - 1) * $limit;
                                    $no = $limit_start + 1;
                              
                                    $query = "SELECT * FROM pengguna WHERE level = 'Pengguna' ORDER BY id_pengguna ASC LIMIT $limit_start, $limit";
                                    $dewan1 = $koneksi->prepare($query);
                                    $dewan1->execute();
                                    $res1 = $dewan1->get_result();
                                    while ($row = $res1->fetch_assoc()) {
                                 ?>
                                 <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row["nama"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["alamat"]; ?></td>
                                    <td><?php echo $row["tanggal_lahir"]; ?></td>
                                 </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                           <!-- Paginations -->
                           <?php
                              $query_jumlah = "SELECT count(*) AS jumlah FROM pengguna WHERE level = 'Pengguna'";
                              $dewan1 = $koneksi->prepare($query_jumlah);
                              $dewan1->execute();
                              $res1 = $dewan1->get_result();
                              $row = $res1->fetch_assoc();
                              $total_records = $row['jumlah'];
                              ?>
                           <p>Total halaman : <?php echo $total_records; ?></p>
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
                  <!-- <div class="col-md-6">
                     <div class="card">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Nama-nama Pengguna Terdaftar</h6>

                        </div>
                     </div>
                  </div> -->

               </div>
               <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Your Website 2021</span>
                  </div>
               </div>
            </footer>
            <!-- End of Footer -->

         </div>
         <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
         <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
               </div>
            </div>
         </div>
      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="vendor/chart.js/Chart.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>