<div class="content-wrapper">  
   <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>pengembangansdm/"><i class="fa fa-dashboard"></i> Pengembangan SDM</a></li>
        <li><a href="<?php echo base_url(); ?>pengembangansdm/detail">Detail Pengembangan SDM</a></li>
      </ol></div>
      <h3>
          <i class="glyphicon glyphicon-list-alt"> </i> Pengumuman
        <small>Menampilkan detail pengumuman</small>
      </h3>
    
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
                  
                  
                  <div  style=" text-align: center; font-size: 20px;padding-top: 4%; padding-bottom: 10px; "><strong><?php echo $pengembangansdm->judul ?></strong></div>

                  <div style=" text-align: center;">    
                  &nbsp; <?php echo $pengembangansdm->jadwal ?> </div>

                  <div style=" padding-left: 20px; padding-right: 20px; ">&nbsp; <?php echo $pengembangansdm->deskripsi ?></div>
                         
                  
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->
        </div>
      
    <div class=" col-xs-12 text-right">
            <a class="btn btn-info" href="<?php echo base_url(); ?>pengembangansdm/edit/<?php echo  $pengembangansdm->id_sdm ?>">Ubah</a>
    </div>
      </div>
    </section>
 
    </div>
  
        