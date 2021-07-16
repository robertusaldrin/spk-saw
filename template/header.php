<?php
session_start();
if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
    echo "<script> alert('Please Login'); window.location = '../../index.php';</script>";
} ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SPK - SMK PL LEONARDO KLATEN</title>
    <!-- Favicon-->
    <link rel="icon" href="../../assets/images/smk-leonardo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Top Bar -->
    <nav class="navbar" style="background-color: #555;">
        <div class="container-fluid" style="margin-left: 5pt;">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <font style="color: white; font-size: 12pt;">
                    <img src="../../assets/images/smk-leonardo.png" width="50" height="50" alt="logo"/> SMK PL LEONARO KLATEN
                </font>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse" style="margin-right: 10pt;">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="../../logout.php" class="btn btn-danger btn-lg waves-effect" style="font-size: 11pt; padding: 5pt 10pt;">
                            <b>Keluar</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU UTAMA</li>

                    <li>
                        <a href="../home/home.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Kriteria</span>
                        </a>
                        <ul class="ml-menu" style="font-weight: bold;">
                            <li>
                                <a href="../kriteria/kriteria.php">Kriteria</a>
                            </li>
                            <li>
                                <a href="../subkriteria/subkriteria.php">Sub Kriteria</a>
                            </li>
                        </ul>
                    </li>

					<li>
                        <a href="../siswa/siswa.php">
                            <i class="material-icons">view_list</i>
                            <span>Data Siswa</span>
                        </a>
                    </li>

                    <li>
                        <a href="../nilai/nilai.php">
                            <i class="material-icons">add_box</i>
                            <span>input Nilai</span>
                        </a>
                    </li>

                    <li>
                        <a href="../hasil/hasil.php">
                            <i class="material-icons">assessment</i>
                            <span>Hasil Perhitungan SAW</span>
                        </a>
                    </li>
                    
                    <hr>

                    <li>
                        <a href="../admin/admin.php">
                            <i class="material-icons">supervisor_account</i>
                            <span>Admin</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright" style="font-size: 8pt;" align="center">
                    &copy;2021 SMK PL LEONARDO KLATEN<br>
                    Created by Robertus Aldrin - 17120237<br>
                    Template by <a href="https://github.com/gurayyarar/AdminBSBMaterialDesign" target="_blank">AdminBSB - Material Design</a>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>


<!-- SECTION CONTENT -->