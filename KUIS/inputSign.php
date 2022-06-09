<?php
//konfigurasi server, username, dan password database
$servername="localhost";
$username="root";
$password="";
$database = "myweb";
$conn = mysqli_connect($servername, $username, $password, $database) or die("Koneksi gagal dibangun");

//menangkap data yang dikirim dari form
$vnama=$_POST['name'];
$vaddress=$_POST['address'];
$vemail=$_POST['email'];
$vhomepage=$_POST['homepage'];
$vusername=$_POST['username'];
$vpassword=$_POST['password'];

//memasukkan data ke tabel setelah dilakukan tangkap data
$sql = "INSERT INTO user SET name='$vnama',
address='$vaddress',
email='$vemail',
homepage='$vhomepage', 
username='$vusername',
password='$vpassword'";

//proses penyimpanan ke database
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:login.php");

?>