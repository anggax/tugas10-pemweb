<?php
//konfigurasi server, username, dan password database
$servername	="localhost";
$username	="root";
$password	="";
$database	="myweb";

//menyertakan koneksi yang sudah dibuat
include 'dbconnect.php';

//membuat tabel kontak pada database
$querysql= "CREATE TABLE guestbook(
id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
posted DATE,
name VARCHAR(75),
email VARCHAR(75),
address VARCHAR(75),
city VARCHAR(75),
message text
)";

//pengecekkan berhasil tidaknya database dibuat
if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>