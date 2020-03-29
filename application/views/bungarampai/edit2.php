<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>bungarampai/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>bungarampai/">Bunga Rampai</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>bungarampai/edit"> Input Bunga Rampai</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('bungarampai/simpan2') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id_subbr" value="<?php if(isset($subbr)) echo $subbr->id_subbr; ?>">
              <div class="box-body">
                 
                  
                 
                  <div class="form-group">
                             <label >Judul Utama</label> <br>
                            <select   name="id_br">
                              <option></option>
                              <?php
                              foreach ($bungarampai as $br ) {
                                if($br->id_br == $subbr->id_br)
                                 {$selected = 'selected';  echo '<option value="'.$br->id_br.'" '.$selected.'>'.$br->judulutama.'</option>';}
                                else 
                                  $selected = '';
                                echo '<option value="'.$br->id_br.'" '.$selected.'>'.$br->judulutama.'</option>';
                              }

                              ?>
                            </select>
                             </div>


                   <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?php if(isset($subbr)) echo $subbr->judul ?>">
                  </div>

                   <div class="form-group">
                  <label for="penulis">Penulis</label>
                  <input type="text" class="form-control" id="penulis" name="penulis" value="<?php if(isset($subbr)) echo $subbr->penulis ?>">
                  </div>

                  

                   <div class="form-group">
                  <label for="isi">Isi</label>
                  <textarea name="isi" rows="15" cols="88" class="form-control tinymce-editor" id="isi"  ><?php if(isset($subbr)) echo $subbr->isi ?></textarea>
                  </div>
                 
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
               
                   <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
                  <a style=" padding-right: 70%;"></a>
                
              <a href="<?php echo site_url(); ?>bungarampai"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>

                  <button  type="reset" class="btn btn-danger">Reset</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>