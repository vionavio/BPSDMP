<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>berita/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>berita/">Album</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>berita/edit"> Input Album</a></li>
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
            <form  role="form" method="post" action="<?php echo base_url('galeri/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id_album" value="<?php if(isset($edit3)) echo $edit3->id_album; ?>">
              <div class="box-body">
                  
                  
                  <div class="form-group">
                  <label for="namaalbum">Ubah Nama Album</label>
                  <input value="<?php if(isset($edit3)) echo $edit3->namaalbum ?>" type="text" class="form-control" id="namaalbum" name="namaalbum" >
                  </div>
                 
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
                <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
              <a style=" padding-left: 70% "></a>
                   <input type="reset" class="btn btn-danger" value="Reset" />
                   <a href="<?php echo site_url(); ?>galeri"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>

                
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>