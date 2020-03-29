<div style="background: #fff;  margin-top: 30px;">
<div class="content-wrapper">  
  
   <section class="content-header">
    <div class="panel panel-info">
                        <div class="panel-heading">
      <div style="padding-top: 10px; padding-left: 10px;"><h3>Struktur Organisasi </h3><small>Posisi BPPKI Yogyakarta dalam Struktur Organisasi Induk </small></div></div>
    </section>


<div class="panel-body">
    
<section class="content">
      <div class="row">
        <!-- left column -->
        
        <div style="padding-left: 10px; padding-right: 10px;" class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
           </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                   <?php foreach ($pageso as $so){  ?>
                  <table>
                       
                    
                     <tr>
                          <td style=" text-align: center; padding: 7%; " >
                              <img style="height: 500px; width: 600px;"  src="<?php echo base_url('assets/images/so/'.$so->gambar) ?>" alt="Gambar tidak tampil">
                            
                          </td>
                      </tr>
                     
                  </table>
                <?php } ?>
               </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div></section></div> </div></div>

  
        