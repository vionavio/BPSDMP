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
            <form role="form" method="post" action="prosesinput.php">
              <div class="box-body">
                <div class="form-group">
                    <label >Username</label> <br>
                    <input type="text" class="form-control" name="username" id="judul" readonly value="<?php echo $name; ?>" >
               </div>
                  <table>
                      <tr>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label for="jam" >Jam</label> <br>
                            <input type="text" class="form-control" id="jam" name="jam_berita" readonly value="<?php $jam=date('h:i:sa'); echo $jam; ?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label for="hari" >Hari</label> <br>
                            <input type="text" class="form-control" id="judul" name="hari" readonly value="<?php $tgl=date('l');echo $tgl; ?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                            <div class="form-group">
                            <label >Tanggal</label> <br>
                            <input type="text" class="form-control" id="judul" name="tgl_berita" readonly value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>" >
                            </div>
                          </td>
                          <td style="padding: 2%;">
                             <div class="form-group">
                             <label >Kategori</label> <br>
                             <input type="text" class="form-control" id="judul" readonly value="Berita" >
                             </div>
                          </td>
                      </tr>
                  </table> 
                  <div class="form-group">
                  <label for="Judul">Judul</label>
                  <input type="text" class="form-control" id="judul">
                </div>
                  
                  <div class="form-group">
                  <label for="exampleInputPassword1">Isi</label>
                  <textarea name="isi" rows="15" cols="88" class="form-control" id="isi"></textarea>
                </div>
               
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

               </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">POST</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>