<div class="content-wrapper">  
   <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-list-alt"> </i> Visi dan Misi
        <small>Menampilkan Visi dan Misi</small>
      </h1>
    </section>
    
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
                   <?php  foreach ($list as $vm){  ?>
                  
                   <h4>Visi</h4>
                      <?php echo $vm->visi ?><hr>
                     <h4>Misi</h4>
                      <?php echo $vm->misi ?><hr>
           
                   
                 <?php } ?>
                
              
              </div>
              <!-- /.box-body -->
 
            </form>

          </div>
          <!-- /.box -->
        </div>
        <div class=" col-xs-12 text-right">
            <a class="btn btn-info" href="<?php echo base_url(); ?>visimisi/edit/<?php echo  $vm->id_vm ?>">Ubah</a>
          </div>
      
      </div></section></div>
  
        