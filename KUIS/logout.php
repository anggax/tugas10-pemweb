<?php 
//memulai sesi  
session_start();

//mengakhiri sesi dan mengembalikan ke laman login
session_destroy();
 
header("location:login.php?pesan= Anda berhasil logout");
?>