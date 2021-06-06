<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$hapus = mysqli_query($koneksi,"DELETE FROM rs WHERE id_rs='$id'");
if ($hapus) { 
// mengalihkan halaman kembali ke rs.php
    echo "<script>alert('$namars berhasil di hapus!'); 
          document.location='rs.php?berhasil+hapus'</script>";
} else {
    echo "<script>alert('$namars gagal dihapus');
    document.location='rs.php?gagal+dihapus'</script>";
}
 
?>