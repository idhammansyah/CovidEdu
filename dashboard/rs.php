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
                           <h6 class="m-0 font-weight-bold text-primary">Input data Rumah Sakit Rujukan</h6>
                        </div>
                        <div class="card-body">
                           <form action="inputrs.php" method="POST">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Nama Rumah Sakit</label>
                                 <input type="text" name="namars" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" autocomplete="off" required>
                              </div>
                              <div class="row">
                                 <div class="form-group col-md-8">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" autocomplete="off" required
                                       id="exampleInputPassword1">
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Kota</label>
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
                                 <input type="text" name="tlp" placeholder="021990921" required autocomplete="off"
                                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>
                     </div>
                  </div>
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
                                       <th>Edit/Hapus</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    include '../koneksi.php';
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
                                       <td>
                                           <a href="editrs.php?id=<?php echo $row['id_rs']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
                                          <p></p>
                                          <a href="hapusrs.php?id=<?php echo $row['id_rs']?>" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                                       </td>
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
   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="js/demo/datatables-demo.js"></script>

</body>

</html>