<div class="content-wrapper">  
<section class="content">
      <div class="row">
        <!-- left column -->
        
        <div style="padding-left: 20%;" class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data/apa/apa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
                  
                  <table>
                       <tr>
                          <td  style=" text-align: center; font-size: 20px;padding-top: 4%; padding-bottom: 4%;"><?php echo $berita->judul_berita ?></td>
                      </tr>
                      
                      <tr>
                          <td style=" text-align: center; padding: 3%; " >
                              <img style="height: 40%;"  src="<?php echo base_url('assets/images/gambar/'.$berita->url) ?>" alt="Gambar tidak tampil">
                            
                          </td>
                      </tr>
                      <tr>
                          <td style=" padding-left: 5%;">    
                              &nbsp; <?php echo $berita->hari.',' ?>
                              &nbsp; <?php echo $berita->tgl_berita ?></td>
                         
                      </tr>
                      <tr>
                          <td></td>
                      </tr>
                      
                      <tr>
                          <td style="font-size: 17px; text-align: justify; padding-right: 5%; padding-left: 5%; padding-bottom: 3%;">(<?php echo $berita->username ?>)&nbsp;<?php echo $berita->isi_berita ?></td>
                      </tr>
                  </table>
                   
                 
               
              
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>
  
        