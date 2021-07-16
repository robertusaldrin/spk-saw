<?php

$bobot1 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='1'");
$b1=mysqli_fetch_array($bobot1);

$bobot2 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='2'");
$b2=mysqli_fetch_array($bobot2);

$bobot3 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='3'");
$b3=mysqli_fetch_array($bobot3);

$bobot4 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='4'");
$b4=mysqli_fetch_array($bobot4);

$bobot5 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='5'");
$b5=mysqli_fetch_array($bobot5);

$bobot6 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='6'");
$b6=mysqli_fetch_array($bobot6);

$bobot7 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='7'");
$b7=mysqli_fetch_array($bobot7);

$bobot8 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='8'");
$b8=mysqli_fetch_array($bobot8);

$bobot9 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='9'");
$b9=mysqli_fetch_array($bobot9);

$bobot10 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='10'");
$b10=mysqli_fetch_array($bobot10);

$bobot11 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='11'");
$b11=mysqli_fetch_array($bobot11);

$bobot12 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='12'");
$b12=mysqli_fetch_array($bobot12);

$bobot13 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='13'");
$b13=mysqli_fetch_array($bobot13);

$bobot14 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='14'");
$b14=mysqli_fetch_array($bobot14);

$bobot15 = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='15'");
$b15=mysqli_fetch_array($bobot15);

$w1 = $b1['bobot'];
$w2 = $b2['bobot'];
$w3 = $b3['bobot'];
$w4 = $b4['bobot'];
$w5 = $b5['bobot'];
$w6 = $b6['bobot'];
$w7 = $b7['bobot'];
$w8 = $b8['bobot'];
$w9 = $b9['bobot'];
$w10 = $b10['bobot'];
$w11 = $b11['bobot'];
$w12 = $b12['bobot'];
$w13 = $b13['bobot'];
$w14 = $b14['bobot'];
$w15 = $b15['bobot'];

$nw1 = $b1['kriteria'];
$nw2 = $b2['kriteria'];
$nw3 = $b3['kriteria'];
$nw4 = $b4['kriteria'];
$nw5 = $b5['kriteria'];
$nw6 = $b6['kriteria'];
$nw7 = $b7['kriteria'];
$nw8 = $b8['kriteria'];
$nw9 = $b9['kriteria'];
$nw10 = $b10['kriteria'];
$nw11 = $b11['kriteria'];
$nw12 = $b12['kriteria'];
$nw13 = $b13['kriteria'];
$nw14 = $b14['kriteria'];
$nw15 = $b15['kriteria'];

?>