<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "covid_rangers";

	$koneksi = mysqli_connect($server, $user, $password, $db) or die (mysqli_error($koneksi));
?>