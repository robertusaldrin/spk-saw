<?php
include '../../koneksi.php';
include 'get-bobot.php';
include 'cari-max-min.php';

$rangking = mysqli_query($con,"SELECT * FROM nilai,siswa WHERE nilai.id_siswa=siswa.id_siswa");
while ($z=mysqli_fetch_array($rangking)) {
	$total = round((round($min['min1']/$z['c1'],3)*$w1)+
        (round($z['c2']/$max['max2'],3)*$w2)+
        (round($min['min3']/$z['c3'],3)*$w3)+
        (round($min['min4']/$z['c4'],3)*$w4)+
        (round($min['min5']/$z['c5'],3)*$w5)+
        (round($min['min6']/$z['c6'],3)*$w6)+
        (round($min['min7']/$z['c7'],3)*$w7)+
        (round($min['min8']/$z['c8'],3)*$w8)+
        (round($min['min9']/$z['c9'],3)*$w9)+
        (round($min['min10']/$z['c10'],3)*$w10)+
        (round($min['min11']/$z['c11'],3)*$w11)+
        (round($min['min12']/$z['c12'],3)*$w12)+
        (round($min['min13']/$z['c13'],3)*$w13)+
        (round($z['c14']/$max['max14'],3)*$w14)+
        (round($z['c15']/$max['max15'],3)*$w15),2);
	//$decimal = round($total,2);
	$query = mysqli_query($con,"UPDATE nilai SET total='$total' WHERE id_siswa='$z[id_siswa]'");
}
header('location:laporan.php');

?>