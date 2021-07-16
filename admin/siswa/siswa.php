<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA SISWA</h2>
            </div>

            <!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Siswa
                            </h2>
							<a href="tambah-siswa.php" class="btn btn-primary" style="float: right; margin-top: -18pt;">
                            	+ Tambah
                            </a>
                        </div>
                        <div class="body table-responsive">

                            <table class="table table-bordered table-hover" style="font-size: 10pt;">
                                <tbody>
                                    <tr style="font-weight: bold; background-color: #f7f7f7" align="center">
                                        <td width="38">#</td>
                                        <td>Siswa</td>
                                        <td width="150"></td>
                                    </tr>

                                    <?php
                                    include '../../koneksi.php';
                                    $no=0;
                                    $query=mysqli_query($con,"SELECT * FROM siswa");
                                    while ($a=mysqli_fetch_array($query)) {?>
                                    <tr>
                                        <th><?php echo $no=$no+1; ?></th>
                                        <td align="center"><?php echo $a['siswa'] ?></td>
                                        <td align="center">
                                        	<a href="edit-siswa.php?id_siswa=<?php echo $a['id_siswa'];?>" class="btn btn-primary" style="font-size: 9pt; padding: 2pt 4pt;">Edit</a>
                                        	<a href="proses-hapus.php?id_siswa=<?php echo $a['id_siswa'];?>" onClick="return confirm('Hapus data <?php echo $a['siswa'];?> ?')" class="btn btn-danger" style="font-size: 9pt; padding: 2pt 4pt;">Hapus</a>
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