<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>visimisi/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>visimisi/">visimisi</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>galeri/edit"> Input Visi dan Misi</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('visimisi/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id_vm" value="<?php if(isset($visimisi)) echo $visimisi->id_vm; ?>">
             
                 <div style=" padding: 10px;">
                  <div class="form-group">
                  <label for="visi">Visi</label>
                  <textarea name="visi" rows="15" cols="88" class="form-control tinymce-editor" id="visi"  ><?php if(isset($visimisi)) echo $visimisi->visi ?></textarea>
                  </div>
                  <div class="form-group">
                  <label for="isi">Misi</label>
                  <textarea name="misi" rows="15" cols="88" class="form-control tinymce-editor" id="misi"  ><?php if(isset($visimisi)) echo $visimisi->misi ?></textarea>
                  </div>
               
              <div class="box-footer">
               
                   <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
                   <a style=" padding-right: 70%;"></a>
                <a href="<?php echo site_url(); ?>visimisi"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
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