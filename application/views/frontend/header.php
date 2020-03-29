<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page_title;?> | Website BPSDMP</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/');?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>style.css">
    <script src="<?php echo base_url('assets/');?>bootstrap/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/');?>bootstrap/js/bootstrap.min.js"></script>

    <link rel="icon" href="<?php echo base_url('assets/');?>favicon.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="header">
        <div class="container-fluid date-container">
            <div class="date container">
                <?php echo date('l,d  M  Y'); ?>
            </div>
        </div>
        <div class="container">
            <img id="img-header" class="img-responsive" src="<?php echo base_url('assets/');?>File/head5.png">
            <div class="nav-header">
                <nav class="navbar navbar-inverse" >
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a  class="navbar-brand" href="<?php echo base_url(); ?>page/home"><span style=" padding-left:6.7%;" class="glyphicon glyphicon-home"></span></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul style=" font-size: 120%;" class="nav navbar-nav">

                                <li class="dropdown">
                                    <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang Kami
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="<?php echo base_url(); ?>page/pageprofil">Profil BPSDMP</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>page/profilpeneliti">Data Pegawai</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>page/pagevisimisi">Visi dan Misi</a> </li>
                                         
                                       <!--  <li> <a href="<?php echo base_url(); ?>page/tugasfungsi">Tugas dan Fungsi</a> </li> -->
                                        <li> <a href="<?php echo base_url(); ?>page/pageso">Struktur Organisasi</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>page/pagerkt">Rencana Kerja Tahunan</a> </li>
                                    </ul>
                                </li>
                                

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Publikasi & Penelitian
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="https://jurnal.kominfo.go.id/" target="_blank">Jurnal IPTEK-KOM</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>page/pagemg">Majalah Gagasan</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>page/pagebr">Bunga Rampai</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>page/pagehl">Hasil Litbang</a> </li>
                                    </ul>
                                </li>


                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Layanan Publik
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="<?php echo base_url(); ?>page/pagepengembangansdm">Pengembangan SDM</a> </li>
                                       <!--  <li> <a href="<?php echo base_url(); ?>page/pengumuman">Pengumuman</a> </li> -->
                                    
                                    </ul>
                                </li>

                                <li><a href="#">Peneliti</a></li>

                                <li><a href="<?php echo base_url(); ?>page/pagegaleri">Galeri</a></li>

                                <li><a href="<?php echo base_url(); ?>page/pagekontak">Kontak</a></li>

                            </ul>  
                            <form class="navbar-form navbar-right">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit" style=" height: 35px;;">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- end header -->

    <div id="main" class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-content">