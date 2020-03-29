<div class="content-wrapper">  
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
            <form role="form" method="post" action="<?php echo base_url('berita/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="no_berita" value="<?php if(isset($berita)) echo $berita->no_berita; ?>">
             
                  <table>
                      <tr>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label for="jam" >Jam</label> <br>
                            <input type="text" <?php if(!isset($berita)) echo 'readonly'?> class="form-control" id="jam" name="jam_berita" value="<?php if(isset($berita)) echo $berita->jam_berita; else echo date('H:i:s')?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label for="hari" >Hari</label> <br>
                            <input type="text" <?php if(!isset($berita)) echo 'readonly'?> class="form-control" id="judul" name="hari"  value="<?php if(isset($berita)) echo $berita->hari ?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Tanggal</label> <br>
                            <input type="text" <?php if(!isset($berita)) echo 'readonly'?> class="form-control" id="judul" name="tgl_berita"  value="<?php if(isset($berita)) echo $berita->tgl_berita ?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                             <div class="form-group">
                             <label >Kategori</label> <br>
                             <input type="text" class="form-control" id="judul"  value="Berita" >
                             </div>
                          </td>
                      </tr>
                  </table> 
                  <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul_berita" value="<?php if(isset($berita)) echo $berita->judul_berita ?>">
                  </div>
                 
                  <div class="form-group">
                  <label for="isi">Isi</label>
                  <textarea name="isi_berita" rows="15" cols="88" class="form-control tinymce-editor" id="isi"  ><?php if(isset($berita)) echo $berita->isi_berita ?></textarea>
                  </div>
               
                  <div class="form-group">
                  <label class="control-label" for="gambar">File input</label>
                  <input type="file" name="gambar" id="gambar" class="form-control">
                  </div>
              
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
               <a href="<?php echo site_url(); ?>berita"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger">Reset</button><a style=" padding-right: 70%;"></a>
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
              
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>