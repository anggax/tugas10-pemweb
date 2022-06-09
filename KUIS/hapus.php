<?php
//memasukkan koneksi database
include 'dbconnect.php';

$vid = $_GET['id'];

//proses hapus data menurut id pada tabel
mysqli_query($conn, "DELETE FROM guestbook WHERE id = '$vid'");

header("location: cetakGuest.php");
?>