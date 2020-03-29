<div class="content-wrapper">  

    <section class="content-header">
      <h1>
        <i class="fa fa-photo"></i> Galeri
        <small>Input Foto</small>
      </h1>
    </section>
    <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>galeri/"><i class="fa fa-dashboard"></i> Album</a></li>
        <li><a href="<?php echo base_url(); ?>galeri/detail2">Foto</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>galeri/edit2"> Input Foto</a></li>
      </ol></div>
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
            <form role="form" method="post" action="<?php echo base_url('galeri/simpan2') ?>" enctype="multipart/form-data">
              <div class="box-body">
                   <input type="hidden" name="id_foto" value="<?php if(isset($galeri)) echo $galeri->id_foto; ?>">
                  <table>
                      <tr>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Jam</label> <br>
                            <input type="time" <?php if(!isset($galeri)) ?> class="form-control"  name="jam"  value="<?php if(isset($galeri)) echo $galeri->jam ?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Tanggal</label> <br>
                            <input type="date" <?php if(!isset($galeri)) ?> class="form-control"  name="tanggal"  value="<?php if(isset($galeri)) echo $galeri->tanggal ?>" >
                            </div>
                          </td>

                      
                      </tr>
                  </table> 
                  <div class="form-group ">
                    
                             <label >Nama Album</label> <br>
                             <div class="col-md-7">
                            <select name="id_album" class="form-control ">
                              
                              <option></option>
                              <?php
                              foreach ($album as $album ) {
                                if($album->id_album == $galeri->id_album)
                                 { $selected = 'selected';
                                echo '<option selected value="'.$g->id_album.'" >'.$album->namaalbum.'</option>';}
                                else 
                                  $selected = '';
                                echo '<option selected value="'.$g->id_album.'" >'.$album->namaalbum.'</option>';
                              }

                              ?>
                             
                            </select> </div>
                         
                  </div><br><br>


                  <div class="form-group">
                  <label for="title">Judul</label>
                  <input type="text" <?php if(!isset($galeri)) ?> class="form-control" id="title" name="title" value="<?php if(isset($galeri)) echo $galeri->title ?>">
                  </div>
                 
                 
                  <div class="form-group">
                  <label class="control-label" for="galeri">Masukkan Gambar</label>
                  <input type="file" <?php if(!isset($galeri)) ?> name="galeri" id="gambar" class="form-control" value="<?php if(isset($galeri)) echo $galeri->url ?>">
                  </div>
              
              </div>
              <!-- /.box-body -->

             <div class="box-footer">
               <input  type="submit" class="btn btn-success col-md-1 " name="Simpan" value="Simpan">
               <a class=" col-md-8 "></a>
            <!--    <a style=" padding-right: 70%;"></a>
             -->    
              <a href="<?php echo base_url(); ?>galeri/"   type="button" class="btn btn-warning " name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger  text-right">Reset</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>