<?php

	//Panggil Koneksi database
	include "koneksi.php";

	$pass = md5($_POST['pass']);
	$username = mysqli_escape_string($koneksi, $_POST['username']);
	$password = mysqli_escape_string($koneksi, $pass);
	$level = mysqli_escape_string($koneksi, $_POST['level']);

	//cek username terdaftar atau tidak
	$cek_user = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '$username' AND level = '$level'");
	$valid = mysqli_fetch_array($cek_user);
	//Lalu buat kondisi jika username terdaftar
	if ($valid) {
		//jika username terdaftar
		//jika password sama atau salah
		if ($password == $valid['pass']) {
			//jika password sesuai, lalu buatkan session
			session_start();
			$_SESSION['username'] = $valid['username'];
			$_SESSION['nama'] = $valid['nama'];
			$_SESSION['level'] = $valid['level'];

			//uji level user
			if ($level == "Admin") {
				header('location:home_admin.php');
			} else if ($level == "Pengguna") {
				header('location:home_user.php');
			} else if ($level == "Covid Rangers") {
				header('location:home_covidrangers.php');
			}
		} else {
			echo "<script>alert('Maaf, login gagal. Password anda Salah!');
			document.location='login.php'</script>";
		} 
	} else {
		echo "<script>alert('Maaf, login gagal. Username anda tidak terdaftar!');
		document.location='login.php'</script>";
	}


?>