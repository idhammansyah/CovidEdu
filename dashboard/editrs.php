<?php 
    include '../koneksi.php';
    session_start();
?>

<?php 
   $id = $_GET['id'];
   // Fetech user data based on id
    $query = "SELECT * FROM rs WHERE id_rs=$id";
    $result = mysqli_query($koneksi, $query);

 while($data = mysqli_fetch_array($result)) {
    $id = $data['id_rs'];
    $namars = $data['namars'];
    $alamat = $data['alamat'];
    $kota = $data['kota'];
    $tlp = $data['tlp'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Dashboard Admin - RS Rujukan</title>

   <!-- Custom fonts for this template -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/sb-admin-2.min.css" rel="stylesheet">

   <!-- Custom styles for this page -->
   <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">

      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-virus"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Halo <?= $_SESSION['username'];?></div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item">
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
                  <a class="collapse-item active" href="lihatdata.php">Lihat Data</a>
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
         <li class="nav-item active">
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
               <form class="form-inline">
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                     <i class="fa fa-bars"></i>
                  </button>
               </form>

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
                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['username']; ?></span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
               <!-- Page Heading -->
               <h1 class="h3 mb-2 text-gray-800">Rumah Sakit Rujukan</h1>
               <p class="mb-4">Rumah Sakit Rujukan untuk para pasien yang terkena COVID-19</p>

               <!-- DataTales Example -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Edit Data RS</h6>
                        </div>
                        <div class="card-body">
                           <form action="updaters.php" method="POST">
                              <div class="form-group">
                              <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                 <label for="exampleInputEmail1">Nama Rumah Sakit</label>
                                 <input type="text" name="namars" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" autocomplete="off"
                                    value=<?php echo "'".$namars."'"; ?>>
                              </div>
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" autocomplete="off" required
                                       id="exampleInputPassword1" value=<?php echo "'".$alamat."'"; ?>>
                                 </div>
                                 <div class="form-group col-md-8">
                                    <label for="exampleInputPassword1">Kota di data sebelumnya</label>
                                    <input type="text" class="form-control" autocomplete="off" required
                                       id="exampleInputPassword1" value=<?php echo "'".$kota."'"; ?> disabled>
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Kota untuk data baru</label>
                                    <select class="form-control" name="kota" id="exampleFormControlSelect1" required>
                                       <option value="Jakarta Utara">Jakarta Utara</option>
                                       <option value="Jakarta Pusat">Jakarta Pusat</option>
                                       <option value="Jakarta Timur">Jakarta Timur</option>
                                       <option value="Jakarta Barat">Jakarta Barat</option>
                                       <option value="Jakarta Selatan">Jakarta Selatan</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Telepon</label>
                                 <input type="text" name="tlp" value=<?php echo $tlp; ?> placeholder="021990921"
                                    required autocomplete="off" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                              </div>
                              <button type="submit" value="simpan" class="btn btn-primary">Edit Data</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div><!-- /.container-fluid -->
         </div><!-- End of Main Content -->

         <!-- Footer -->
         <footer class="sticky-footer bg-white">
            <div class="container my-auto">
               <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Your Website 2020</span>
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



   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="js/demo/datatables-demo.js"></script>

</body>

</html>