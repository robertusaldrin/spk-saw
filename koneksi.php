<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'spk_saw';

$con=mysqli_connect($server,$username,$password) or die ("Koneksi Eror");
mysqli_select_db($con,$database) or die ("Database Eror");

?>