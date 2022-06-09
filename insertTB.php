<?php
include 'koneksi.php';

if (!$conn) {
	die("Connection failed : ".mysql_connect_error());
}

$sql = "INSERT INTO tb_siswa (id_siswa, nama, kelas, alamat) VALUES
(1, 'Budi Susanto', 'IMM3', 'Sedati Gede'),
(2, 'Dita Anggraini', 'IMM2', 'Rungkut'),
(3, 'Riska Nur Aini', '3mm1', 'Wonocolo')";

if (mysqli_query($conn, $sql)) {
	echo "Insert Data Behasil";
}
else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn); 
}
mysqli_close($conn); 
?>