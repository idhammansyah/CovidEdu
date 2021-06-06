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

    //memasukkan data ke dalam database
        $query = "INSERT INTO datapasien (namalengkap, namapanggilan, jeniskelamin, usia, alamat, kota, kodepos, nomorhp, kesehatan)
                    VALUES('$namalengkap' ,'$namapanggilan', '$jeniskelamin', '$usia', '$alamat', '$kota', '$kodepos', '$nomorhp', '$kesehatan')";
        mysqli_query($koneksi, $query);

        
        if ($query) {
            echo "<script>alert('Berhasil memasukkan data pasien!'); document.location='home_covidrangers.php#datapasien'</script>";
        } else {
            "<script>alert('Memasukkan data gagal!'); document.location='home_covidrangers.php#datapasien'</script>";
        }
?>