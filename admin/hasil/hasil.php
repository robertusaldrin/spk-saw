<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>HASIL PERHITUNGAN SAW</h2>
            </div>


            <!-- Keterangan -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header" style="padding: 3pt 10pt;">
                            <h5>
                                Keterangan Kriteria
                            </h5>
                        </div>
                        <div class="body table-responsive">
                            <table class="table" style="font-size: 9pt;">
                                <tr>
                                    <td>C1 = Orang Tua</td>
                                    <td>C4 = Luas Tempat Tinggal</td>
                                    <td>C7 = Dinding</td>
                                    <td>C10 = Kendaraan</td>
                                    <td>C13 = Hewan Ternak</td>
                                </tr><tr>
                                    <td>C2 = Saudara Usia Sekolah</td>
                                    <td>C5 = Luas Bangunan Rumah</td>
                                    <td>C8 = Lantai</td>
                                    <td>C11 = Barang Elektronik</td>
                                    <td>C14 = Tagihan Listrik (PLN)</td>
                                </tr><tr>
                                    <td>C3 = Penghasilan Orang Tua</td>
                                    <td>C6 = Atap</td>
                                    <td>C9 = Kemepilikan Rumah</td>
                                    <td>C12 = Luas Sawah/ Ladang</td>
                                    <td>C15 = Tagihan Air (PAM)</td>
                                </tr>
                            </table>
                        </div>
                        <hr style="margin-top: -15pt;">
                        <div class="" style="padding: 3pt 10pt; margin-top: -15pt;">
                            <h5>
                                Bobot : [&nbsp&nbsp
                                <?php include '../../koneksi.php';
                                $query = mysqli_query($con,"SELECT * FROM kriteria ORDER BY id_kriteria ASC");
                                while ($qw=mysqli_fetch_array($query)) {
                                    echo $qw['bobot']."&nbsp&nbsp&nbsp";
                                } ?>
                                ]
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Keterangan -->

            <!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Matrix Keputusan (X)
                            </h2>
                        </div>
                        <div class="body table-responsive">

                            <table class="table table-bordered table-hover" style="font-size: 10pt;">
                                <thead>
                                    <tr style="background-color: #f7f7f7">
                                        <th>#</th>
                                        <th>Siswa</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
                                        <th>C11</th>
                                        <th>C12</th>
                                        <th>C13</th>
                                        <th>C14</th>
                                        <th>C15</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include '../../koneksi.php';
                                    $no=0;
                                    $query = mysqli_query($con,"SELECT * FROM nilai,siswa WHERE nilai.id_siswa=siswa.id_siswa");
                                    while ($da=mysqli_fetch_array($query)) { ?>
                                    <tr align="center">
                                        <th><?php echo $no=$no+1; ?></th>
                                        <td><?php echo substr($da['siswa'],0,30)?></td>
                                        <td><?php echo $da['c1']; ?></td>
                                        <td><?php echo $da['c2']; ?></td>
                                        <td><?php echo $da['c3']; ?></td>
                                        <td><?php echo $da['c4']; ?></td>
                                        <td><?php echo $da['c5']; ?></td>
                                        <td><?php echo $da['c6']; ?></td>
                                        <td><?php echo $da['c7']; ?></td>
                                        <td><?php echo $da['c8']; ?></td>
                                        <td><?php echo $da['c9']; ?></td>
                                        <td><?php echo $da['c10']; ?></td>
                                        <td><?php echo $da['c11']; ?></td>
                                        <td><?php echo $da['c12']; ?></td>
                                        <td><?php echo $da['c13']; ?></td>
                                        <td><?php echo $da['c14']; ?></td>
                                        <td><?php echo $da['c15']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->


<?php include '../../koneksi.php'; include 'cari-max-min.php'; ?>

			<!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Matriks Ternormalisasi (R)
                            </h2>
                        </div>
                        <div class="body table-responsive">

                            <table class="table table-bordered table-hover" style="font-size: 10pt;">
                                <thead>
                                    <tr style="background-color: #f7f7f7">
                                        <th>#</th>
                                        <th>Siswa</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
                                        <th>C11</th>
                                        <th>C12</th>
                                        <th>C13</th>
                                        <th>C14</th>
                                        <th>C15</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include '../../koneksi.php';
                                    $no=0;
                                    $normalisasi = mysqli_query($con,"SELECT * FROM nilai,siswa WHERE nilai.id_siswa=siswa.id_siswa");
                                    while ($r=mysqli_fetch_array($normalisasi)) { ?>
                                    <tr align="center">
                                        <th><?php echo $no=$no+1; ?></th>
                                        <td><?php echo substr($r['siswa'],0,30)?></td>
                                        <td><?php echo round($min['min1']/$r['c1'],2) ?></td>
                                        <td><?php echo round($r['c2']/$max['max2'],2) ?></td>
                                        <td><?php echo round($min['min3']/$r['c3'],2) ?></td>
                                        <td><?php echo round($min['min4']/$r['c4'],2) ?></td>
                                        <td><?php echo round($min['min5']/$r['c5'],2) ?></td>
                                        <td><?php echo round($min['min6']/$r['c6'],2) ?></td>
                                        <td><?php echo round($min['min7']/$r['c7'],2) ?></td>
                                        <td><?php echo round($min['min8']/$r['c8'],2) ?></td>
                                        <td><?php echo round($min['min9']/$r['c9'],2) ?></td>
                                        <td><?php echo round($min['min10']/$r['c10'],2) ?></td>
                                        <td><?php echo round($min['min11']/$r['c11'],2) ?></td>
                                        <td><?php echo round($min['min12']/$r['c12'],2) ?></td>
                                        <td><?php echo round($min['min13']/$r['c13'],2) ?></td>
                                        <td><?php echo round($r['c14']/$max['max14'],2) ?></td>
                                        <td><?php echo round($r['c15']/$max['max15'],2) ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->


<?php include '../../koneksi.php'; include 'get-bobot.php'; ?>

			<!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Nilai Preferensi
                            </h2>
							<a href="update-rank.php" class="btn btn-success" style="float: right; margin-top: -18pt;">
                            	+ Laporan
                            </a>
                        </div>
                        <div class="body table-responsive">

                            <table class="table table-bordered table-hover" style="font-size: 10pt;" align="center">
                                <thead>
                                    <tr style="background-color: #f7f7f7">
                                        <th width="100">#</th>
                                        <th>Siswa</th>
                                        <th width="300">Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include '../../koneksi.php';
                                    $no=0;
                                    $nilaivi = mysqli_query($con,"SELECT * FROM nilai,siswa WHERE nilai.id_siswa=siswa.id_siswa");
                                    while ($z=mysqli_fetch_array($nilaivi)) { ?>
                                    <tr>
                                        <th><?php echo $no=$no+1; ?></th>
                                        <td><?php echo $z['siswa'];?></td>
                                        <td><?php echo 

                                        round((round($min['min1']/$z['c1'],3)*$w1)+
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
                                            (round($z['c15']/$max['max15'],3)*$w15),2); ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->


<?php include '../../template/footer.php'; ?>