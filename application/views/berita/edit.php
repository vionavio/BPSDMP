<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>berita/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>berita/">Berita</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>berita/edit"> Input Berita</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('berita/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="no_berita" value="<?php if(isset($berita)) echo $berita->no_berita; ?>">
              <div class="box-body">
                   <div class="form-group">
                    <label >Username</label> <br>
                    <input type="text" <?php if(!isset($berita)) echo 'readonly'?> class="form-control" name="username" id="judul"  value="<?php if(isset($berita)) echo $berita->username; else echo $_SESSION['name'] ?>" >
               </div>
                  <table>
                      <tr>
                         <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Jam</label> <br>
                            <input type="time" <?php if(!isset($berita)) ?> class="form-control"  name="jam_berita"  value="<?php if(isset($berita)) echo $berita->jam_berita ?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Tanggal</label> <br>
                            <input type="date" <?php if(!isset($berita)) ?> class="form-control"  name="tgl_berita"  value="<?php if(isset($berita)) echo $berita->tgl_berita ?>" >
                            </div>
                          </td>

                          <td style="padding: 2%;">
                             <div class="form-group">
                             <label >Kategori</label> <br>
                             <input type="text" class="form-control" id="judul" required value="Berita" >
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
                  <label class="control-label" for="gambar">Gambar </label>
                  <input type="file" name="gambar" id="gambar" value=" <?php  if(isset($berita)) echo base_url('assets/images/gambar/logo_kominfo.png') ?>" class="form-control">
                  </div>
              
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
               
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
                 <a style=" padding-right:  70%; " "></a>
                 <a href="<?php echo site_url(); ?>berita"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                <input type="reset" class="btn btn-danger" value="Reset" />
              
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>