<?php
include '../../koneksi.php';

$id_siswa = $_POST['id_siswa'];
$siswa = $_POST['siswa'];

$query = mysqli_query($con,"UPDATE siswa SET siswa='$siswa' WHERE id_siswa='$id_siswa'");
if($query){
    echo "<script> alert('Data siswa berhasil diubah'); window.location ='siswa.php';</script>";
} else {
    echo "<script> alert('System Error! Please try again!'); window.location ='siswa.php';</script>";
}

?>