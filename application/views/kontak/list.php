<div class="content-wrapper">  
   <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-list-alt"> </i> kontak
        <small>Menampilkan detail kontak</small>
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
                   <?php  foreach ($list as $kontak){  ?>
                  
                  <table class=" table table-bordered table-stripped table-hover">
                       <tr   style=" font-size: 20px;">
                        <td>Alamat</td>
                          <td><?php echo $kontak->alamat ?></td>
                       </tr>
                       <tr style=" font-size: 20px;">
                        <td   >Telfon</td>
                          <td><?php echo $kontak->telfon ?></td>
                       </tr>
                       <tr style=" font-size: 20px;">
                        <td>Kode Pos</td>
                          <td><?php echo $kontak->kodepos ?></td>
                       </tr>
                       <tr style=" font-size: 20px;">
                        <td>Email</td>
                          <td><?php echo $kontak->email ?></td>
                       </tr>
                       <tr style=" font-size: 20px;">
                        <td>Website</td>
                          <td><?php echo $kontak->website ?></td>
                       </tr>
                      
                     
                      
                      
                  </table>
                   
                 <?php } ?>
                
              
              </div>
              <!-- /.box-body -->
 
            </form>

          </div>
          <!-- /.box -->
        </div>
        <div class=" col-xs-12 text-right">
            <a class="btn btn-info" href="<?php echo base_url(); ?>kontak/edit/<?php echo  $kontak->id_kontak ?>">Ubah</a>
          </div>
      
      </div></section></div>
  
        