<div class="content-wrapper">  
     <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i> Struktur Organisasi
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
<section class="content">
     <div class="row">
       
        
        <div style="padding-left: 8%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
          </div>

            <!-- /.box-header -->
            <!-- form start -->
             <form role="form" >
             
                   <?php foreach ($list as $so){  ?>
                   <div>
                             <center> <img style=" width: 600px;"  src="<?php echo base_url('assets/images/so/'.$so->gambar) ?>" alt="Gambar tidak tampil"></center>
                            
                         <br>
                    
                   

             </div>
               <?php } ?>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <div class=" col-xs-12 text-right">
            <a class="btn btn-info" href="<?php echo base_url(); ?>strukturorganisasi/edit/<?php echo  $so->id_so ?>">Ubah</a>
          </div>
    </div>
</section></div>