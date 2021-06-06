<?php 

   session_start();
    
?>
<?php
   include 'koneksi.php';
   $id = $_GET['id'];
   // Fetech user data based on id
    $query = "SELECT * FROM datapasien WHERE id_pasien='$id'";
    $result = mysqli_query($koneksi, $query);

    while ($data = mysqli_fetch_array($result)) {
        $id = $data['id_pasien'];
        $namalengkap = $data['namalengkap'];
        $namapanggilan = $data['namapanggilan'];
        $jeniskelamin = $data['jeniskelamin'];
        $usia = $data['usia'];
        $alamat=$data['alamat'];
        $kota = $data['kota'];
        $kodepos=$data['kodepos'];
        $nomorhp = $data['nomorhp'];
        $kesehatan=$data['kesehatan'];
    }
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

   <div class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Edit Data Pasien</h1>
      <!-- DataTales Example -->
      <div class="row">
         <div class="col-md-12">
            <div class="card shadow mb-4">
               <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Data RS</h6>
               </div>
               <div class="card-body">
                  <form action="updatepasien.php" method="POST">
                     <div class="row">
                        <div class="form-group col-md-6">
                           <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                           <label for="exampleInputEmail1">Nama Lengkap</label>
                           <input type="text" name="namalengkap" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp" autocomplete="off" value=<?php echo "'".$namalengkap."'"; ?>>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="exampleInputEmail1">Nama Panggilan</label>
                           <input type="text" name="namapanggilan" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp" autocomplete="off"
                              value=<?php echo "'".$namapanggilan."'"; ?>>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-4">
                           <label for="exampleFormControlSelect1">Jenis Kelamin sebelumnya</label>
                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                              autocomplete="off" value=<?php echo "'".$jeniskelamin."'"; ?> disabled>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="exampleFormControlSelect1">Update jenis kelamin baru</label>
                           <select class="form-control" name="jeniskelamin" id="exampleFormControlSelect1" required>
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                           </select>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="exampleFormControlSelect1">Usia</label>
                           <input type="text" class="form-control" name="usia" id="exampleInputEmail1" aria-describedby="emailHelp"
                              autocomplete="off" value=<?php echo "'".$usia."'"; ?>>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                           <label for="exampleInputPassword1">Alamat</label>
                           <input type="text" name="alamat" class="form-control" autocomplete="off" required
                              id="exampleInputPassword1" value=<?php echo "'".$alamat."'"; ?>>
                        </div>
                        <div class="form-group col-md-4">
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
                        <div class="form-group col-md-4">
                           <label for="exampleInputPassword1">Kodepos</label>
                           <input type="text" class="form-control" autocomplete="off" required name="kodepos"
                              id="exampleInputPassword1" value=<?php echo "'".$kodepos."'"; ?>>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Telepon</label>
                        <input type="text" name="nomorhp" value=<?php echo $nomorhp; ?> placeholder="021990921" required
                           autocomplete="off" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">Status kesehatan sebelumnya</label>
                           <input type="text" class="form-control" autocomplete="off" required
                              id="exampleInputPassword1" value=<?php echo "'".$kesehatan."'"; ?> disabled>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">Kota untuk data baru</label>
                           <select class="form-control" name="kesehatan" id="exampleFormControlSelect1" required>
                              <option value="Positif">Positif</option>
                              <option value="Tanpa Gejala">Tanpa Gejala</option>
                              <option value="Negatif">Negatif</option>
                           </select>
                        </div>
                     </div>
                     <button type="submit" value="simpan" class="btn btn-primary">Edit Data</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div><!-- /.container-fluid -->
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