<div class="content-wrapper">  
   <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-list-alt"> </i> profil
        <small>Menampilkan detail profil</small>
      </h1>
    </section>
    <div class=" col-xs-12 text-right">
               <a   href="<?php echo site_url(); ?>profil"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
               
              
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
                   <?php  foreach ($list as $profil){  ?>
                  
                  <table>
                       <tr>
                          <td  style=" text-align: center; font-size: 20px;padding-top: 4%; padding-bottom: 4%;"><?php echo $profil->judul ?></td>
                      </tr>
                      
                      <tr>
                          <td style=" text-align: center; padding: 7%; " >
                              <img style="height: 40%;"  src="<?php echo base_url('assets/images/profil/'.$profil->url) ?>" alt="Gambar tidak tampil">
                            
                          </td>
                      </tr>
                     
                      
                      <tr>
                          <td style="font-size: 17px; text-align: justify; padding-right: 5%; padding-left: 5%; padding-bottom: 3%;"><?php echo $profil->text ?></td>
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
            <a class="btn btn-info" href="<?php echo base_url(); ?>profil/edit/<?php echo  $profil->id ?>">Ubah</a>
          </div>
      
      </div></section></div>
  
        