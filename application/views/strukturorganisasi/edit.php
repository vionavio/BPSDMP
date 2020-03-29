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
            <form role="form" method="post" action="<?php echo base_url('strukturorganisasi/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id_vm" value="<?php if(isset($strukturorganisasi)) echo $strukturorganisasi->id_so; ?>">
              <div class="box-body">
                  
                
               <h4>Struktur Organisasi</h4>
                  <div class="form-group">
                  <label class="control-label" for="gambar">File Gambar</label>
                  <input type="file" name="gambar" id="gambar" class="form-control">
                  </div>

              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
              
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
                  <a style=" padding-right: 70% "></a>
                 <a href="<?php echo site_url(); ?>strukturorganisasi"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger">Reset</button>
              
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>