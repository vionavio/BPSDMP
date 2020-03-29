<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>pengembangansdm/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>pengembangansdm/">Pengembangan SDM</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>pengembangan SDM/edit"> Input Pengembangan SDM</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('pengembangansdm/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id_sdm" value="<?php if(isset($pengembangansdm)) echo $pengembangansdm->id_sdm; ?>">
              <div class="box-body">
                   
                 
                  <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?php if(isset($pengembangansdm)) echo $pengembangansdm->judul ?>">
                  </div>
                  <div class="form-group">
                  <label for="jadwal">Jadwal</label>
                  <input type="text" class="form-control" id="jadwal" name="jadwal" value="<?php if(isset($pengembangansdm)) echo $pengembangansdm->jadwal ?>">
                  <p>* Contoh penulisan jadwal : 1 Januari 2018 - 7 Februari 2018 </p>
                  </div>
                 
                  <div class="form-group">
                  <label for="text">Deskripsi</label>
                  <textarea name="deskripsi" rows="15" cols="88" class="form-control tinymce-editor" id="text"  ><?php if(isset($pengembangansdm)) echo $pengembangansdm->deskripsi ?></textarea>
                  </div>
               
                  
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
                <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
                  <a style=" padding-right: 70%;"></a>
                
                 <a href="<?php echo site_url(); ?>pengembangansdm"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger">Reset</button>
              
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>