<div class="content-wrapper">  
   <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-list-alt"> </i> Majalah Gagasan
        <small>Menampilkan detail majalah</small>
      </h1>
    </section>
    <div class=" col-xs-12 text-right">
               <a   href="<?php echo site_url(); ?>majalahgagasan"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
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
                  
                  
                <div  style=" text-align: center; font-size: 20px;padding-top: 4%; padding-bottom: 1%;"><srtong><?php echo $majalahgagasan->judul ?></srtong></div>
                <div style=" text-align: center;"> Volume ke : <?php echo $majalahgagasan->volume ?></div>
                <div style="  text-align: center;"> Tahun : <?php echo $majalahgagasan->tahun ?> </div><hr>
                <div><center><img style="width: 300px;"  src="<?php echo base_url('assets/images/mg/'.$majalahgagasan->cover) ?>" alt="Gambar tidak tampil"></center></div>
                <br>
                 <div style=" text-align: center; padding-bottom: 20px;"><center><embed src="<?php echo base_url('assets/images/mg/'.$majalahgagasan->es) ?>"  width="670px" height="400px"  ></embed></center>
                      </div>
                  <br><br>   
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->
        </div>
       <div class=" col-xs-12 text-right">
            <a class="btn btn-info" href="<?php echo base_url(); ?>majalahgagasan/edit/<?php echo  $majalahgagasan->id_mg ?>">Ubah</a>
    </div>
      </div></section></div>
  
        