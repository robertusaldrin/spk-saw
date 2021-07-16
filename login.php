<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($con,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
$ketemu = mysqli_num_rows($query);
$q = mysqli_fetch_array($query);

if ($ketemu > 0) {
	session_start();

	$_SESSION['username'] = $q['username'];
	$_SESSION['password'] = $q['password'];
	$_SESSION['nama'] = $q['nama'];
	$_SESSION['id_admin'] = $q['id_admin'];

	header('location:admin/home/home.php');
} else {
	echo "<script> alert('Login Failed! Please try again!'); window.location = 'index.php';</script>";
}

?>