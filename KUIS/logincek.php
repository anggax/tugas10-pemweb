<?php 
// menghubungkan dengan koneksi
include 'dbconnect.php';

// menangkap data yang dikirim dari form
$vusername = $_POST['username'];
$vpassword = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$vusername' AND password='$vpassword'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

//pengecekan nilai untuk memulai sesi 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $vusername;
	$_SESSION['status'] = "login";
	header("location:beranda.php");
}else{
	header("location:login.php");
}
?>