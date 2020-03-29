<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>hasillitbang/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>hasillitbang/">Hasil Litbang</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>hasillitbang/edit"> Input Hasil Litbang</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('hasillitbang/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id_hl" value="<?php if(isset($hasillitbang)) echo $hasillitbang->id_hl; ?>">
              <div class="box-body">
                 
                  
                   <div class="form-group">
                  <label for="tahun">Tahun</label>
                  <input type="text" class="form-control" id="tahun" name="tahun" value="<?php if(isset($hasillitbang)) echo $hasillitbang->tahun ?>">
                  </div>

                   <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?php if(isset($hasillitbang)) echo $hasillitbang->judul ?>">
                  </div>


                  <div class="form-group">
                  <label class="control-label" for="cover">Cover</label>
                  <input type="file" name="cover" id="cover" value=" <?php  if(isset($berita)) echo base_url('assets/images/hl/logo_kominfo.png') ?>" class="form-control">
                  </div>

                  <div class="form-group">
                  <label for="timpenulis">Tim Penulis</label>
                  <input type="text" class="form-control" id="timpenulis" name="timpenulis" value="<?php if(isset($hasillitbang)) echo $hasillitbang->timpenulis ?>">
                  </div>

                  <div class="form-group">
                  <label class="control-label" for="es">Executive Summary</label>
                  <input type="file" name="es" id="es" value=" <?php  if(isset($berita)) echo base_url('assets/images/hl/logo_kominfo.png') ?>" class="form-control">
                  </div>
                 
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
              
                <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
                  <a style=" padding-right: 70%;"></a>
                 <a href="<?php echo site_url(); ?>hasillitbang"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
              <input type="reset" class="btn btn-danger" value="Reset" />
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>