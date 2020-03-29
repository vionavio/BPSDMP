<div class="content-wrapper">  
   <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-list-alt"> </i> Hasil Litbang
        <small>Menampilkan detail majalah</small>
      </h1>
    </section>
    <div class=" col-xs-12 text-right">
               <a   href="<?php echo site_url(); ?>hasillitbang"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
              </div>
<section class="content">
      <div class="row">
        <!-- left column -->
        
        <div style="padding-left: 20%;" class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
           </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
                  
                <div  style=" text-align: center; font-size: 20px;padding-top: 4%; padding-bottom: 1%;"><srtong><?php echo $hasillitbang->judul ?></srtong></div>
                <div style=" text-align: center;">  <?php echo $hasillitbang->timpenulis ?></div>
                <div style="  text-align: center;"> Tahun : <?php echo $hasillitbang->tahun ?> </div><hr>
                <div><center><img style="width: 300px;"  src="<?php echo base_url('assets/images/hl/'.$hasillitbang->cover) ?>" alt="Gambar tidak tampil"></center></div>
                         
                  <br>
                   <div style=" text-align: center; padding-bottom: 20px;"><center><embed src="<?php echo base_url('assets/images/hl/'.$hasillitbang->es) ?>"  width="670px" height="400px"  ></embed></center>
                      </div>
                      <br>
                  
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->
        </div>
       <div class=" col-xs-12 text-right">
            <a class="btn btn-info" href="<?php echo base_url(); ?>hasillitbang/edit/<?php echo  $hasillitbang->id_hl ?>">Ubah</a>
    </div>
      </div></section></div>
  
        