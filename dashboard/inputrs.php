<?php
   require_once('../koneksi.php');
    // Baca lokasi file sementar dan nama file dari form (fupload)
    $namars = $_POST['namars'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $tlp = $_POST['tlp'];

    //memasukkan data ke dalam database
        $query = "INSERT INTO rs (namars, alamat, kota, tlp)
                    VALUES('$namars' , '$alamat', '$kota', '$tlp')";
        mysqli_query($koneksi, $query);

        if ($query) {
            echo "<script>alert('Berhasil memasukkan data RS!'); document.location='rs.php'</script>";
        } else {
            "<script>alert('Memasukkan data gagal!'); document.location='rs.php'</script>";
        }
?>