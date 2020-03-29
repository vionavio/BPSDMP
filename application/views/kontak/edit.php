<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>kontak/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>kontak/">kontak</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>galeri/edit"> Input kontak</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('kontak/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php if(isset($kontak)) echo $kontak->id_kontak; ?>">
             
                 <div style=" padding: 10px;">
                  <div class="form-group">
                  <label for="judul">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" value="<?php if(isset($kontak)) echo $kontak->alamat ?>">
                  </div>
                   <div class="form-group">
                  <label for="judul">Telfon</label>
                  <input type="text" class="form-control" id="telfon" name="telfon" value="<?php if(isset($kontak)) echo $kontak->telfon ?>">
                  </div>
                   <div class="form-group">
                  <label for="judul">Kode pos</label>
                  <input type="text" class="form-control" id="kodepos" name="kodepos" value="<?php if(isset($kontak)) echo $kontak->kodepos ?>">
                  </div>
                   <div class="form-group">
                  <label for="judul">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($kontak)) echo $kontak->email ?>">
                  </div>
                  <div class="form-group">
                  <label for="judul">Website</label>
                  <input type="text" class="form-control" id="website" name="website" value="<?php if(isset($kontak)) echo $kontak->website ?>">
                  </div>
               
              <div class="box-footer">
             <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
              <a style=" padding-right: 70%;"></a>
                 

                  <a href="<?php echo site_url(); ?>kontak"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger">Reset</button>
              
              </div>
               </div>
              </div>
              <!-- /.box-body -->
                 
              
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>