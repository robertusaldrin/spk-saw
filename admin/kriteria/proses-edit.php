<?php
include '../../koneksi.php';

$id_kriteria = $_POST['id_kriteria'];
$kd_kriteria = $_POST['kd_kriteria'];
$kriteria = $_POST['kriteria'];
$tipe = $_POST['tipe'];
$bobot = $_POST['bobot'];

$query = mysqli_query($con,"UPDATE kriteria SET kriteria='$kriteria', tipe='$tipe', bobot='$bobot' WHERE id_kriteria='$id_kriteria'");
if($query){
    echo "<script> alert('Kriteria berhasil diubah'); window.location ='kriteria.php';</script>";
} else {
    echo "<script> alert('System Error! Please try again!'); window.location ='kriteria.php';</script>";
}

?>