<?php
    require_once 'koneksi.php';

    // Baca lokasi file sementar dan nama file dari form (fupload)

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $bank = $_POST['bank'];
    $lokasi_file = $_FILES['bukti_tf']['tmp_name'];
    $nama_file   = $_FILES['bukti_tf']['name'];

    // Tentukan folder untuk menyimpan file

    $folder = "buktitf/$nama_file";

    // tanggal sekarang

    $tgl_upload = date("Ymd");

    // Apabila file berhasil di upload
        if (move_uploaded_file($lokasi_file,"$folder")){
            echo "<script>alert('File $nama_file berhasil di Upload!'); 
                    document.location='home_user.php?berhasil+upload'</script>";
            
            // Masukkan informasi file ke database
            $koneksi = mysqli_connect("localhost","root","","covid_rangers");

            $query = "INSERT INTO upload (nama, username, bank, nama_file, tgl_upload)
                        VALUES('$nama' , '$username' , '$bank' , '$nama_file', '$tgl_upload')";
                        
            mysqli_query($koneksi, $query);
        } else {
            echo "<span>Kembali ke <a href ='home_user.php?alert=gagal+upload'>Beranda</a></span>";
            // echo "<script>alert('File gagal di upload!'); document.location='home_user.php?gagal+upload'</script>";
        }

?>