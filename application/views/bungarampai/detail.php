<div class="content-wrapper">  
   <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-list-alt"> </i> Bunga Rampai
        <small>Menampilkan Detail Bunga Rampai</small>
      </h1>
    </section>
    <div class=" col-xs-12 text-right">
               <a   href="<?php echo site_url(); ?>bungarampai/detail"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
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
                  
                  
                    
                      <div   style=" font-size: 20px; text-align: center; "><?php echo $detail2->judul ?></div>
                     
                         <div style=" font-size: 12px; text-align: center; ">    
                              &nbsp; <?php echo $detail2->penulis ?></div>
                              <div style=" text-align: justify; ">    
                              &nbsp; <?php echo $detail2->isi ?></div>
                         
                    
                    
                
                
               </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
       <div class=" col-xs-12 text-right">
             <a class="btn btn-info" href="<?php echo base_url(); ?>bungarampai/edit2/<?php echo  $detail2->id_subbr ?>">Ubah</a>
    </div>
      </div></section></div>
  