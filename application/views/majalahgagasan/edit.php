<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>majalahgagasan/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>majalahgagasan/">Majalah Gagasan</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>majalhgagasan/edit"> Input Majalah Gagasan</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('majalahgagasan/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id_mg" value="<?php if(isset($majalahgagasan)) echo $majalahgagasan->id_mg; ?>">
              <div class="box-body">
                 
                  
                  <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?php if(isset($majalahgagasan)) echo $majalahgagasan->judul ?>">
                  </div>

                  <div class="form-group">
                  <label for="volume">Volume</label>
                  <input type="text" class="form-control" id="volume" name="volume" value="<?php if(isset($majalahgagasan)) echo $majalahgagasan->volume ?>">
                  </div>

                 <div class="form-group">
                  <label for="tahun">Tahun</label>
                  <input type="text" class="form-control" id="tahun" name="tahun" value="<?php if(isset($majalahgagasan)) echo $majalahgagasan->tahun ?>">
                  </div>
                 
                  <div class="form-group">
                  <label class="control-label" for="gambar">Gambar input</label>
                  <input type="file" name="cover" id="cover" value=" <?php  if(isset($majalahgagasan)) echo base_url('assets/images/mg/$majalahgagasan->cover ?>') ?>" class="form-control">
                  </div>

                  <div class="form-group">
                  <label class="control-label" for="data">File input</label>
                  <input type="file" name="es" id="data" value=" <?php  if(isset($majalahgagasan)) echo base_url('assets/images/mg/$majalahgagasan->cover ?>') ?>" class="form-control">*pdf
                  </div>



              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
               
                  <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
                  <a style=" padding-right: 70%;"></a>
                 <a href="<?php echo site_url(); ?>majalahgagasan"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>

                  <button  type="reset" class="btn btn-danger">Reset</button>
              
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>