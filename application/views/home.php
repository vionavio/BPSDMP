 
    <div id="myCarousel" class="carousel slide " data-ride="carousel" style="height: 10%;  ">  
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- deklarasi carousel -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo base_url('assets/')?>File/11.png" alt="KUNJUNGAN MENTRI KOMUNIKASI DAN INFORMATIKA RI" >
                <div class="carousel-caption">
                    <h3>Serah Terima Jabatan Kepala BPPKI Yogyakarta</h3>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url('assets/')?>File/12.png" style="">
                <div style=" " class="carousel-caption">
                    <h3>Menkominfo Tifatul Sembiring Berdialog dengan Pegawai BPPKI Yogyakarta</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <!-- membuat panah next dan previous -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<div style="background: #ffffff;  margin-top: 30px; margin-bottom: 30px;">
    
    <div class="container">

      <!-- Page Heading -->
      
      <h1 class="my-4">Berita
        </h1>

      <!-- Project One -->
       <?php foreach ($home as $berita){  ?>
       <hr>
      <div class="row">
        <div class="col-md-2">
          <a href="#">
            <img  style=" width: 160px; " class="img-fluid rounded mb-3 mb-md-0" src="   <?php  if(isset($berita)) echo base_url('assets/images/gambar/'.$berita->url); else echo base_url('assets/images/gambar/logo_kominfo.png')  ?> " alt="">
          </a>
        </div>
        <div class="col-md-5">
           
          <h4><?php echo $berita->judul_berita ?></h4>
           <small><?php echo $berita->tgl_berita ?></small>
           <p style=" text-align: justify; font-size: 16sp; ">
                               <?= substr($berita->isi_berita, 0,200) ?>....<a href=<?php echo base_url(); ?>page/detailberita/<?php echo $berita->no_berita ?>><b>Selanjutnya</b></a>;
                                </p>
         
        </div>

      </div>
      <?php } ?>
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->


</div>