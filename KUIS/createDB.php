<?php
//konfigurasi server, username, dan password database
$servername		="localhost";
$username		="root";
$password		="";
$conn 			= mysqli_connect($servername, $username, $password); 

//melakukan pengecekan koneksi
if (!$conn) {
	die("Koneksi gagal: ".mysqli_connect_error()); 
}

//membuat database dan pengecekan apakah database berhasil dibuat
$sql = "CREATE DATABASE myweb";
//pengecekkan berhasil tidaknya database dibuat
if (mysqli_query($conn, $sql)) {
	echo "Database berhasil dibuat"; 
} else {
	echo "Gagal membuat database: ".mysqli_error($conn); 
}

mysqli_close($conn); 
?>


