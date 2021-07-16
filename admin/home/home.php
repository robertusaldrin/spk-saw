<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Home -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SELAMAT DATANG, <?php echo $_SESSION['nama'];?> !
                            </h2>
                        </div>
                        <div class="body" align="center">
                            <p style="font-size: 20pt;">
                                Sistem Pendukung Keputusan<br>
                                Penentuan Siswa Penerima Bantuan Dana
                            </p>
                            <img src="../../assets/images/smk-leonardo.png" class="img-responsive" style="height: 180pt;">
                            <p style="font-size: 20pt;"><p style="font-size: 20pt;">
                                SMK PL Leonardo Klaten
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Home -->


<?php include '../../template/footer.php'; ?>