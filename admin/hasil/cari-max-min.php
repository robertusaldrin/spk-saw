<?php
//cari max
$carimax=mysqli_query($con,"SELECT MAX(c1) as max1, MAX(c2) as max2, MAX(c3) as max3, MAX(c4) as max4, MAX(c5) as max5
                                  ,MAX(c6) as max6, MAX(c7) as max7, MAX(c8) as max8, MAX(c9) as max9, MAX(c10) as max10
                                  ,MAX(c11) as max11, MAX(c12) as max12, MAX(c13) as max13, MAX(c14) as max14, MAX(c15) as max15 FROM nilai");
$max = mysqli_fetch_array($carimax);

//cari min
$carimin=mysqli_query($con,"SELECT MIN(c1) as min1, MIN(c2) as min2, MIN(c3) as min3, MIN(c4) as min4, MIN(c5) as min5
                                  ,MIN(c6) as min6, MIN(c7) as min7, MIN(c8) as min8, MIN(c9) as min9, MIN(c10) as min10
                                  ,MIN(c11) as min11, MIN(c12) as min12, MIN(c13) as min13, MIN(c14) as min14, MIN(c15) as min15 FROM nilai");
$min = mysqli_fetch_array($carimin);
?>