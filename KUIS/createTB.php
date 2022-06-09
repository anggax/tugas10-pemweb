<?php
//konfigurasi server, username, dan password database
$servername	="localhost";
$username	="root";
$password	="";
$database	="myweb";

//menyertakan koneksi yang sudah dibuat
include 'dbconnect.php';

//membuat tabel kontak pada database
$querysql= "CREATE TABLE user(
id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
address VARCHAR(50),
email VARCHAR(50),
homepage VARCHAR(50),
username VARCHAR(25),
password VARCHAR (25)
)";

//pengecekkan berhasil tidaknya database dibuat
if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>