<?php
include '../../koneksi.php';

$siswa = $_POST['siswa'];

$query = mysqli_query($con,"INSERT INTO siswa(siswa) VALUES('$siswa')");
if($query){
    echo "<script> alert('Data siswa berhasil disimpan'); window.location ='siswa.php';</script>";
} else {
    echo "<script> alert('System Error! Please try again!'); window.location ='siswa.php';</script>";
}

?>