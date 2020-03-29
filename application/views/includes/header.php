<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    <link rel="icon" href="<?php echo base_url('assets/');?>favicon.ico">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- <body class="sidebar-mini skin-black-light"> -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CI</b>AS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>BPSDMP</b> Yogyakarta</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Ubah Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
           <div class="pull-left image">
            <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p><span class="hidden-xs"><?php echo $name; ?></span></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu"  data-widget="tree">
          
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="glyphicon glyphicon-home"></i> <span>Beranda</span></i>
              </a>
            </li>
             <?php
                if($role == ROLE_ADMIN ||$role == ROLE_PENGEMBANG )
            {
            ?>
             <li class="treeview">
              <a href="#" >
                <i class="fa fa-edit"></i>
                <span>Pengembangan SDM<i class="fa fa-angle-left pull-right"></i></span>
              </a>
                <ul class="treeview-menu">
              <li ><a href="<?php echo base_url(); ?>LihatDataPengembangansdm"><i class="fa fa-circle-o"></i> Data Pengembangan SDM</a></li>
               </ul>
            </li>
             <?php }
                if($role == ROLE_ADMIN ||$role == ROLE_EMPLOYEE )
            {
            ?>
            <li class="treeview ">
              <a href="#" >
               <i class=" glyphicon glyphicon-list-alt "></i> <span>Berita<i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>
              <ul class="treeview-menu">
              <li ><a href="<?php echo base_url(); ?>InputBerita"><i class="fa fa-circle-o"></i> Input Berita</a></li>
            <li><a href="<?php echo base_url(); ?>LihatDataBerita"><i class="fa fa-circle-o"></i> Data Berita</a></li>
             <li ><a href="<?php echo base_url(); ?>Komentar"><i class="fa fa-circle-o"></i> Komentar</a></li>
              </ul>
            </li>
            
           <!--  <li class="treeview">
              <a href="#" >
                <i class="fa fa-bullhorn"></i>
                <span>Pengumuman<i class="fa fa-angle-left pull-right"></i> </span>
              </a>
                <ul class="treeview-menu">
             <li ><a href="<?php echo base_url(); ?>LihatDataPengumuman"><i class="fa fa-circle-o"></i> Data Pengumuman</a></li>
               </ul>
            </li> -->

            <li class="treeview menu-open">
              <a href="<?php echo base_url(); ?>InputIptek" >
                <i class="fa fa-code-fork"></i>
                <span>Jurnal Iptek-kom<i class="fa fa-angle-left pull-right"></i></span>

              </a>
                <ul class="treeview-menu">
                  <li ><a href="<?php echo base_url(); ?>InputIptek"><i class="fa fa-circle-o"></i> Input Iptek</a></li>
              <li class="active"><a href="<?php echo base_url(); ?>LihatDataIptek"><i class="fa fa-circle-o"></i> Data Iptek</a></li>
               </ul>
            </li>

            

            <li class="treeview menu-open">
              <a href="<?php echo base_url(); ?>InputMajalahgagasan" >
                <i class="fa fa-newspaper-o"></i>
                <span>Majalah Gagasan<i class="fa fa-angle-left pull-right"></i></span>

              </a>
                <ul class="treeview-menu">
                  <li ><a href="<?php echo base_url(); ?>InputMajalahgagasan"><i class="fa fa-circle-o"></i> Input Majalah Gagasan</a></li>
              <li class="active"><a href="<?php echo base_url(); ?>LihatDataMajalahgagasan"><i class="fa fa-circle-o"></i> Data Majalah Gagasan</a></li>
               </ul>
            </li>

            <li class="treeview menu-open">
              <a href="<?php echo base_url(); ?>InputBungarampai" >
                <i class="fa fa-sun-o"></i>
                <span>Bunga Rampai<i class="fa fa-angle-left pull-right"></i></span>

              </a>
                <ul class="treeview-menu">
                  <li ><a href="<?php echo base_url(); ?>InputBungarampai"><i class="fa fa-circle-o"></i> Input Bunga Rampai</a></li>
              <li class="active"><a href="<?php echo base_url(); ?>LihatDataBungarampai"><i class="fa fa-circle-o"></i> Data Bunga Rampai</a></li>
               </ul>
            </li>

             <li class="treeview menu-open">
              <a href="<?php echo base_url(); ?>InputHasillitbang" >
                <i class="fa fa-check-circle"></i>
                <span>Hasil Litbang<i class="fa fa-angle-left pull-right"></i></span>
               </a>
                <ul class="treeview-menu">
                  <li ><a href="<?php echo base_url(); ?>InputHasillitbang"><i class="fa fa-circle-o"></i> Input Hasil Litbang</a></li>
              <li class="active"><a href="<?php echo base_url(); ?>LihatDataHasillitbang"><i class="fa fa-circle-o"></i> Data Hasil Litbang</a></li>
               </ul>
            </li>
            
            <?php
          }
            if($role == ROLE_ADMIN || $role == ROLE_MANAGER)
            {
            ?>
            <li class="treeview">
              <a href="#" >
                <i class="glyphicon glyphicon-user"></i>
                <span>Kepegawaian<i class="fa fa-angle-left pull-right"></i></span>
              </a>
                <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url(); ?>LihatDataKaryawan"><i class="fa fa-circle-o"></i> Data Kepegawaian</a></li>
              <li ><a href="<?php echo base_url(); ?>InputKaryawan"><i class="fa fa-circle-o"></i> Input Data Kepegawaian</a></li>
               </ul>
            </li>
            <?php
          }
          if($role == ROLE_ADMIN )
            {
            ?>
            <li class="treeview menu-open">
              <a href="<?php echo base_url(); ?>InputGaleri" >
                <i class="glyphicon glyphicon-picture"></i>
                <span>Galeri<i class="fa fa-angle-left pull-right"></i></span>

              </a>
                <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url(); ?>LihatDataGaleri"><i class="fa fa-circle-o"></i> Data Galeri</a></li>
              <li ><a href="<?php echo base_url(); ?>InputGaleri"><i class="fa fa-circle-o"></i> Input Galeri</a></li>
               </ul>
            </li>

            <li class="treeview menu-open">
              <a href="<?php echo base_url(); ?>InputProfil" >
                <i class="glyphicon glyphicon-user"></i>
                <span>Profil BPSDMP<i class="fa fa-angle-left pull-right"></i></span>

              </a>
                <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url(); ?>LihatDataProfil"><i class="fa fa-circle-o"></i> Data Profil</a></li>
              
               </ul>
            </li>

            <li class="treeview menu-open">
              <a href="<?php echo base_url(); ?>InputProfil" >
                <i class="glyphicon glyphicon-book"></i>
                <span>Visi Misi<i class="fa fa-angle-left pull-right"></i></span>

              </a>
                <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url(); ?>LihatDataVisimisi"><i class="fa fa-circle-o"></i> Data Visi Misi</a></li>
              
               </ul>
            </li>

            <li class="treeview menu-open">
              <a href="<?php echo base_url(); ?>InputRkt" >
                <i class="fa fa-institution"></i>
                <span>Rencana Kerja Tahunan<i class="fa fa-angle-left pull-right"></i></span>

              </a>
                <ul class="treeview-menu">
                  <li ><a href="<?php echo base_url(); ?>InputRkt"><i class="fa fa-circle-o"></i> Input RKT</a></li>
              <li class="active"><a href="<?php echo base_url(); ?>LihatDataRkt"><i class="fa fa-circle-o"></i> Data RKT</a></li>
               </ul>
            </li> 

            


             <li class="treeview">
              <a href="#" >
                <i class="fa fa-upload"></i>
                <span>Struktur Organisasi<i class="fa fa-angle-left pull-right"></i></span>
              </a>
                <ul class="treeview-menu">
              <li ><a href="<?php echo base_url(); ?>LihatDataSo"><i class="fa fa-circle-o"></i> Data Struktur Organisasi</a></li>
               </ul>
            </li>

            

            <li class="treeview">
              <a href="#" >
                <i class="fa fa-book"></i>
                <span>Kontak<i class="fa fa-angle-left pull-right"></i></span>
              </a>
                <ul class="treeview-menu">
              <li ><a href="<?php echo base_url(); ?>LihatDataKontak"><i class="fa fa-circle-o"></i> Data Kontak</a></li>
               </ul>
            </li>

            <?php
            }
            if($role == ROLE_ADMIN)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>Users</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li>
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>