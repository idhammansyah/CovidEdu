<?php
   require_once('koneksi.php');
    // Baca lokasi file sementar dan nama file dari form (fupload)
    $namalengkap = $_POST['namalengkap'];
    $namapanggilan = $_POST['namapanggilan'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $kodepos = $_POST['kodepos'];
    $nomorhp = $_POST['nomorhp'];
    $kesehatan = $_POST['kesehatan'];
    $id = $_POST['id'];

    //memasukkan data ke dalam database
        $query = "UPDATE datapasien SET namalengkap ='$namalengkap', namapanggilan ='$namapanggilan', jeniskelamin ='$jeniskelamin',
                    usia ='$usia', alamat='$alamat', kota='$kota', kodepos ='$kodepos' , nomorhp='$nomorhp' WHERE id_pasien= '$id' ";
        $update= mysqli_query($koneksi, $query);

        if ($update) {
            echo "<script>alert('Berhasil edit data RS!'); document.location='home_covidrangers.php#datapasien'</script>";
        } else {
            echo "<script>alert('Memasukkan data gagal!'); document.location='home_covidrangers.php#datapasien'</script>";
        }
?>