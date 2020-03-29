<div class="content-wrapper">  
    <section class="content-header">
      <h1>
        <i class="fa fa-photo"></i> Album
        <small>Input Foto</small>
      </h1>
    </section>
<section class="content">
      <div class="row">
        <!-- left column -->
        
        <div style="padding-left: 20%;" class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data</h3>
              
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('galeri/simpan') ?>" enctype="multipart/form-data">
              <div class="box-body">
                   <input type="hidden" name="id_album" value="<?php if(isset($galeri)) echo $galeri->id_foto; ?>">
                  

                          <div style="padding: 2%;">
                             <div class="form-group">
                             <label >Nama Album</label> <br>
                            <select >
                              <option></option>
                              <?php
                              foreach ($album as $g ) {
                                if($g->id_album == $galeri->id_album)
                                  $selected = 'selected';
                                else 
                                  $selected = '';
                                echo '<option value"'.$g->id_album.'" '.$selected.'>'.$g->namaalbum.'</option>';
                              }

                              ?>
                            </select>
                             </div>
                          </div>
                          <div style="padding: 2%;">
                            <div class="form-group">
                            <label >Tambah Nama Album</label> <br>
                            <input type="text" <?php if(!isset($galeri)) ?> class="form-control"  name="namaalbum"   >
                            </div>
                          </div>
                     
              </div>
              <!-- /.box-body -->

             <div class="box-footer">
               <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
               <a style=" padding-right: 70%;"></a>
               <a href="<?php echo base_url(); ?>galeri/"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger">Reset</button>
                
              
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>