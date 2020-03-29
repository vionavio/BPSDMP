<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>profil/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>profil/">profil</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>galeri/edit"> Input profil</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('profil/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php if(isset($profil)) echo $profil->id; ?>">
              <div class="box-body">
                   <div class="form-group">
                    <label >Username</label> <br>
                    <input type="text" <?php if(!isset($profil)) echo 'readonly'?> class="form-control" name="name" id="judul"  value="<?php if(isset($profil)) echo $profil->name; else echo $_SESSION['name'] ?>" >
               </div>
                  <table>
                      <tr>
                         <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Jam</label> <br>
                            <input type="time" <?php if(!isset($profil)) ?> class="form-control"  name="jam"  value="<?php if(isset($profil)) echo $profil->jam ?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Tanggal</label> <br>
                            <input type="date" <?php if(!isset($profil)) ?> class="form-control"  name="tanggal"  value="<?php if(isset($profil)) echo $profil->tanggal ?>" >
                            </div>
                          </td>

                          <td style="padding: 2%;">
                             <div class="form-group">
                             <label >Kategori</label> <br>
                             <input type="text" class="form-control" id="judul" required value="profil" >
                             </div>
                          </td>
                      </tr>
                  </table> 
                  <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?php if(isset($profil)) echo $profil->judul ?>">
                  </div>
                 
                  <div class="form-group">
                  <label for="text">text</label>
                  <textarea name="text" rows="15" cols="88" class="form-control tinymce-editor" id="text"  ><?php if(isset($profil)) echo $profil->text ?></textarea>
                  </div>
               
                  <div class="form-group">
                  <label class="control-label" for="gambar">File input</label>
                  <input type="file" name="gambar" id="gambar" value=" <?php  if(isset($profil)) echo base_url('assets/images/gambar/logo_kominfo.png') ?>" class="form-control">
                  </div>
              
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
               
                  <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
                  <a style=" padding-right: 70%;"></a>
                 <a href="<?php echo site_url(); ?>Profil"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger">Reset</button>
              
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>