<?php
   require_once('../koneksi.php');
    // Baca lokasi file sementar dan nama file dari form (fupload)
    $namars = $_POST['namars'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $tlp = $_POST['tlp'];
    $id = $_POST['id'];

    //memasukkan data ke dalam database
        $query = "UPDATE rs SET namars ='$namars', alamat='$alamat', kota='$kota', tlp='$tlp' WHERE id_rs= '$id' ";
        $update= mysqli_query($koneksi, $query);

        if ($update) {
            echo "<script>alert('Berhasil edit data RS!'); document.location='rs.php'</script>";
        } else {
            echo "<script>alert('Memasukkan data gagal!'); document.location='rs.php'</script>";
        }
?>