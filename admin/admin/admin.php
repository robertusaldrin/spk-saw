<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA  ADMIN</h2>
            </div>

            <!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Admin
                            </h2>
							<a href="tambah-admin.php" class="btn btn-primary" style="float: right; margin-top: -18pt;">
                            	+ Tambah
                            </a>
                        </div>
                        <div class="body table-responsive">

                            <table class="table table-bordered table-hover" style="font-size: 10pt;">
                                <tbody>
                                    <tr style="font-weight: bold; background-color: #f7f7f7" align="center">
                                        <td width="38">#</td>
                                        <td>Nama</td>
                                        <td>Username</td>
                                        <td width="120"></td>
                                    </tr>

                                    <?php
                                    include '../../koneksi.php';
                                    $no=0;
                                    $query=mysqli_query($con,"SELECT * FROM admin");
                                    while ($a=mysqli_fetch_array($query)) {?>
                                    <tr>
                                        <th><?php echo $no=$no+1; ?></th>
                                        <td align="center"><?php echo $a['nama'] ?></td>
                                        <td align="center"><?php echo $a['username'];?></td>
                                        <td align="center">
                                        	<a href="proses-hapus.php?id_admin=<?php echo $a['id_admin'];?>" onClick="return confirm('Anda akan kehilangan seluruh hak akses. Lanjutkan?')" class="btn btn-danger" style="font-size: 9pt; padding: 2pt 4pt;">Hapus</a>
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