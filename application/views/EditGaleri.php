<div class="content-wrapper">  
    <section class="content-header">
      <h1>
        <i class="fa fa-photo"></i> Galeri
        <small>Edit Foto</small>
      </h1>
    </section>
<section class="content">
      <div class="row">
        <!-- left column -->
        
        <div style="padding-left: 20%;" class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Foto</h3>
              
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($galeri->result() as $gal) {?>
            <form role="form" method="post" action="<?php echo base_url('SimpanGaleri') ?>" enctype="multipart/form-data">
              <div class="box-body">
                   
                  <table>
                      <tr>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label for="jam" >Jam</label> <br>
                            <input type="text" class="form-control" id="jam" name="jam"  value="<?php echo $gal->jam ?>" >
                            </div>
                          </td>
                         
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Tanggal</label> <br>
                            <input type="text" class="form-control" id="tanggal" name="tanggal"  value="<?php echo $gal->tanggal ?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                             <div class="form-group">
                             <label >Kategori</label> <br>
                             <input type="text" class="form-control" id="judul"  value="Galeri" >
                             </div>
                          </td>
                      </tr>
                  </table> 
                  <div class="form-group">
                  <label for="title">Judul</label>
                  <input type="text" class="form-control" id="title" name="title" value="<?php echo $gal->title ?>">
                  </div>
                 
                 
                  <div class="form-group">
                  <label class="control-label" for="galeri">File input</label>
                  <input type="file" name="galeri" id="gambar" class="form-control" value="<?php echo $gal->url ?>">
                  </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <a href="<?php echo base_url(); ?>LihatDataGaleri/<?php echo  $gal->id_foto; ?>"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger">Reset</button><a style=" padding-right: 70%;"></a>
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
              
              </div>
            </form>
            <?php } ?>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>