<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA KRITERIA</h2>
            </div>


            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Kriteria
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action="proses-edit.php" method="POST">

                                <?php
                                include '../../koneksi.php';
                                $id_kriteria=$_GET['id_kriteria'];
                                $query = mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'");
                                $a=mysqli_fetch_array($query);
                                ?>

                                <input type="text" hidden="" name="id_kriteria" value="<?php echo $a['id_kriteria'];?>">

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Kode</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" disabled="" value="<?php echo $a['kd_kriteria'];?>">
                                                <input hidden="" name="kd_kriteria" type="text" value="<?php echo $a['kd_kriteria'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Kriteria</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="kriteria" type="text" class="form-control" placeholder="Kriteria" value="<?php echo $a['kriteria'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Tipe</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="tipe">
                                                <?php
                                                include '../../koneksi.php';
                                                $query = mysqli_query($con,"SELECT tipe FROM kriteria WHERE id_kriteria='$id_kriteria'");
                                                $t=mysqli_fetch_array($query);
                                                if ($t['tipe']=='Benefit') { ?>
                                                    <option selected="">Benefit</option>
                                                    <option>Cost</option>
                                                <?php } else { ?>
                                                    <option>Benefit</option>
                                                    <option selected="">Cost</option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Bobot</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="bobot">
                                                <?php
                                                include '../../koneksi.php';
                                                $query = mysqli_query($con,"SELECT bobot FROM kriteria WHERE id_kriteria='$id_kriteria'");
                                                $b=mysqli_fetch_array($query);
                                                if ($b['bobot']=='1') { ?>
                                                    <option value="1" selected="">1 (Sangat Rendah)</option>
                                                    <option value="2">2 (Rendah)</option>
                                                    <option value="3">3 (Tinggi)</option>
                                                    <option value="4">4 (Sangat Tinggi)</option>
                                                <?php } elseif ($b['bobot']=='2') { ?>
                                                    <option value="1">1 (Sangat Rendah)</option>
                                                    <option value="2" selected="">2 (Rendah)</option>
                                                    <option value="3">3 (Tinggi)</option>
                                                    <option value="4">4 (Sangat Tinggi)</option>
                                                <?php } elseif ($b['bobot']=='3') { ?>
                                                    <option value="1">1 (Sangat Rendah)</option>
                                                    <option value="2">2 (Rendah)</option>
                                                    <option value="3" selected="">3 (Tinggi)</option>
                                                    <option value="4">4 (Sangat Tinggi)</option>
                                                <?php } elseif ($b['bobot']=='4') { ?>
                                                    <option value="1">1 (Sangat Rendah)</option>
                                                    <option value="2">2 (Rendah)</option>
                                                    <option value="3">3 (Tinggi)</option>
                                                    <option value="4" selected="">4 (Sangat Tinggi)</option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary m-t-5 waves-effect">&nbsp&nbsp&nbsp&nbsp
                                        <a href="kriteria.php" type="button" class="btn btn-warning m-t-5 waves-effect">Batal</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->


<?php include '../../template/footer.php'; ?>