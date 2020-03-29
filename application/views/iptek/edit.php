<div class="content-wrapper">  
 <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>iptek/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>iptek/">iptek</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>iptek/edit"> Input iptek</a></li>
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
            <form role="form" method="post" action="<?php echo base_url('iptek/simpan') ?>" enctype="multipart/form-data">
              <input type="hidden" name="id_ip" value="<?php if(isset($iptek)) echo $iptek->id_ip; ?>">
              <div class="box-body">
                 
                  <table>
                      <tr>
                         
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Tanggal</label> <br>
                            <input type="text" class="form-control"  name="tanggal"  value="<?php if(isset($iptek)) echo $iptek->tanggal ?>" >
                            </div>
                          </td>

                          <td style="padding: 2%;">
                             <div class="form-group">
                             <label >Edisi</label> <br>
                             <input name="edisi" type="text" class="form-control" id="edisi" required value="<?php if(isset($iptek)) echo $iptek->edisi ?>">
                             </div>
                          </td>
                      </tr>
                  </table> 
                  <div class="form-group">
                  <label for="judul">Penulis</label>
                  <input type="text" class="form-control" id="penulis" name="penulis" value="<?php if(isset($iptek)) echo $iptek->penulis ?>">
                  </div>

                  <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?php if(isset($iptek)) echo $iptek->judul ?>">
                  </div>
                 
                  <div class="form-group">
                  <label for="abstrak">Abstrak</label>
                  <textarea name="abstrak" rows="15" cols="88" class="form-control tinymce-editor" id="abstrak"  ><?php if(isset($iptek)) echo $iptek->abstrak ?></textarea>
                  </div>
              </div>
              <!-- /.box-body -->
                 
              <div class="box-footer">
               <a href="<?php echo site_url(); ?>iptek"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>

                  <button  type="reset" class="btn btn-danger">Reset</button>

                  <a style=" padding-right: 70%;"></a>
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
              
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>