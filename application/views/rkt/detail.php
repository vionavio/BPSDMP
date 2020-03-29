<div class="content-wrapper">  
   <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-list-alt"> </i> RKT
        <small>Menampilkan detail rkt</small>
      </h1>
    </section>
    <div class=" col-xs-12 text-right">
               <a   href="<?php echo site_url(); ?>rkt"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
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
                  
                <div style=" text-align: center; font-size: 20pt "><?php echo $rkt->judul ?></div>   
                <div style=" text-align: center;"><?php echo $rkt->tahun ?></div><br>

                <div style=" text-align: center; padding-bottom: 20px;"><center><embed src="<?php echo base_url('assets/pdf/'.$rkt->file) ?>"  width="670px" height="400px"  ></embed></center>
                      </div>
                   
              </div>
              <!-- /.box-body -->

            </form>
          </div>
          <!-- /.box -->
        </div>
      <div class=" col-xs-12 text-right">
            <a class="btn btn-info" href="<?php echo base_url(); ?>rkt/edit/<?php echo  $rkt->id_rkt ?>">Ubah</a>
    </div>
      </div></section></div>
  
        