<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>rkt/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>rkt/">RKT</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>rkt/edit"> Input Data RKT</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('rkt/simpan') ?>" enctype="multipart/form-data">

              <input type="hidden" name="id_rkt" value="<?php if(isset($rkt)) echo $rkt->id_rkt; ?>">
              <div class="box-body">
                   
                  
                  <div class="form-group">
                  <label for="tahun">Tahun</label>
                  <input type="text" class="form-control" id="tahun" name="tahun" value="<?php if(isset($rkt)) echo $rkt->tahun ?>">
                  </div>

                  <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?php if(isset($rkt)) echo $rkt->judul ?>">
                  </div>
                 
                 <div class="form-group">
                  <label class="control-label" for="pdf">File input pdf</label>
                  <input type="file" name="pdf" id="pdf" value=" " class="form-control">
                  </div>
              
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
              
                  <a style=" padding-right: 70%;"></a>

                 <a href="<?php echo site_url(); ?>rkt"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger">Reset</button>
              
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>