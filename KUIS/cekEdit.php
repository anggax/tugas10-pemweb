<?php
//memasukkan koneksi database
include 'dbconnect.php';

//menangkap data yang dikirim dari form
$vid=$_POST['id'];
$vposted=date('Y-m-d', strtotime($_POST['posted']));
$vname=$_POST['name'];
$vemail=$_POST['email'];
$vaddress=$_POST['address'];
$vcity=$_POST['city'];
$vmessage=$_POST['message'];


//melakukan pembaharuan data ke tabel setelah dilakukan tangkap data
$sql = "UPDATE guestbook SET id='$vid',
posted='$vposted',
name='$vname',
email='$vemail',
address='$vaddress', 
city='$vcity',
message='$vmessage' WHERE id = '$vid'";

//proses penyimpanan ke database
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:cetakGuest.php");
?>