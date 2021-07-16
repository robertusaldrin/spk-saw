<?php
include '../../koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);


$query = mysqli_query($con,"INSERT INTO admin(nama,username,password)
							VALUES('$nama','$username','$password')");
if($query){
    echo "<script> alert('Data admin berhasil disimpan'); window.location ='admin.php';</script>";
} else {
    echo "<script> alert('System Error! Please try again!'); window.location ='admin.php';</script>";
}

?>