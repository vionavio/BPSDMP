<div class="content-wrapper">  
    <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-edit"> </i> Kepegawaian
        <small>Menambahkan data pegawai</small>
      </h1>
    </section>
<section class="content">
      <div class="row">
        <!-- left column -->
        
        <div style="padding-left: 20%;" class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kepegawaian</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($pgw_identitas->result() as $kar) {?>
            <form role="form" method="post" action="<?php echo base_url('SimpanKaryawan') ?>" enctype="multipart/form-data">
             <div class="box-body">
                 <div class="row">
                    <div class="col-md-6">                                
                        <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control required" id="nama" name="nama" value="<?php echo $kar->nama; ?>" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="NIP">NIP</label>
                        <input type="text" class="form-control required " id="NIP"  name="NIP" value="<?php echo $kar->NIP; ?>" >
                        </div>
                    </div>
                </div>
                 <hr>
                 <div class="row">
                       
                    <div class="col-md-6"> 
                        <label >PANGKAT</label>
                        <div class="form-group">
                        <label for="gol_ruang">Golongan Ruang</label>
                        <input type="text" class="form-control required" id="gol_ruang" name="gol_ruang" value="<?php echo $kar->gol_ruang; ?>" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label><br></label>
                        <div class="form-group">
                        <label for="tmt">TMT</label>
                        <input type="date" class="form-control required " id="tmt"  name="tmt" value="<?php echo $kar->tmt; ?>">
                        </div>
                    </div>
                 </div>
                <hr>
                 <div class="row">
                    
                    <div class="col-md-6">  
                        <label >JABATAN</label>
                        <div class="form-group">
                        <label for="jbt_nama">Nama</label>
                        <input type="text" class="form-control required" id="jbt_nama" name="jbt_nama" value="<?php echo $kar->jbt_nama; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label><br></label>
                        <div class="form-group">
                        <label for="jbt_tmt">TMT</label>
                        <input type="date" class="form-control required " id="jbt_tmt"  name="jbt_tmt" value="<?php echo $kar->jbt_tmt; ?>" >
                        </div>
                    </div>
                     
                </div>
                <hr>
                 <div class="row">
                    <div class="col-md-6">      
                        <label >MASA KERJA</label>
                        <div class="form-group">
                        <label for="masker_th">Tahun</label>
                        <input type="text" class="form-control required" id="masker_th" name="masker_th" value="<?php echo $kar->masker_th; ?>" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label><br></label>
                        <div class="form-group">
                        <label for="maasker_bln">Bulan</label>
                        <input type="text" class="form-control required" id="masker_bln"  name="masker_bln" value="<?php echo $kar->masker_bln; ?>" >
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">      
                        <label>LATIHAN JABATAN</label>
                        <div class="form-group">
                        <label for="latjab_nama">Nama</label>
                          <textarea type="text" class="form-control " id="latjab_nama"  name="latjab_nama" rows="5"><?php echo $kar->latjab_nama; ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <label><br></label>
                        <div class="form-group">
                        <label for="latjab_th">Tahun</label>
                          <textarea type="text" class="form-control " id="latjab_th"  name="latjab_th" rows="5"><?php echo $kar->latjab_th; ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-2">
                        <label><br></label>
                        <div class="form-group">
                        <label for="latjab_jumlah">Jumlah</label>
                        <input type="text" class="form-control required " id="latjab_jumlah"  name="latjab_jumlah" value="<?php echo $kar->latjab_jumlah; ?>">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">      
                        <label >PENDIDIKAN</label>
                        <div class="form-group">
                        <label for="pendidikan_nama">Nama</label>
                        <textarea type="text" class="form-control " id="pendidikan_nama"  name="pendidikan_nama" rows="5"><?php echo $kar->pendidikan_nama; ?></textarea>
                     </div>
                    </div>
                    <div class="col-md-3">
                        <label><br></label>
                        <div class="form-group">
                        <label for="pendidikan_thlulus">Lulus Tahun</label>
                        <textarea type="text" class="form-control " id="pendidikan_thlulus"  name="pendidikan_thlulus" rows="5"><?php echo $kar->pendidikan_thlulus; ?></textarea>
                     </div>
                    </div>
                    <div class="col-md-2">
                        <label><br></label>
                        <div class="form-group">
                        <label for="pend_tingkatijazah">Tingkatan Ijazah</label>
                        <input type="text" class="form-control required " id="pend_tingkatijazah"  name="pend_tingkatijazah" value="<?php echo $kar->pend_tingkatijazah; ?>" >
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">      
                        <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control required" id="tempat_lahir" name="tempat_lahir" value="<?php echo $kar->tempat_lahir; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control required" id="tanggal_lahir"  name="tanggal_lahir" value="<?php echo $kar->tanggal_lahir; ?>" >
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">      
                        <div class="form-group">
                        <label for="agama">Agama</label>
                          <select class="form-control required" id="agama" name="agama" value="<?php echo $kar->agama; ?>">
                                           <option value="">Pilih Agama</option>
                                           <option value="Islam">Islam</option>
                                           <option value="Katolik">Katolik</option>
                                           <option value="Kristen">Kristen</option>
                                           <option value="Hindu">Hindu</option>
                                           <option value="Budha">Budha</option>
                       </select></div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                       <select class="form-control required" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $kar->jenis_kelamin; ?>">
                                           <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                       </select></div>
                    </div>
                </div>
                <hr>
                <b>
                <div class="row">
                    <div class="col-md-6">      
                        <div class="form-group">
                        <label for="tmt_capeg">TMT CAPEG</label>
                        <input type="date" class="form-control required" id="tmt_capeg" name="tmt_capeg" value="<?php echo $kar->tmt_capeg; ?>" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="Keterangan">Keterangan</label>
                        <textarea type="text" class="form-control " id="Keterangan"  name="Keterangan" rows="5"><?php echo $kar->Keterangan; ?></textarea>
                    </div>
                    </div>
                </div></b>
               
                <hr>
                 
              </div>
             <div class="box-footer">
               <a href="<?php echo base_url(); ?>user/Lihat_Data_Karyawan/<?php echo  $kar->NIP; ?>"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
                  <button  type="reset" class="btn btn-danger">Reset</button><a style=" padding-right: 70%;"></a>
                 <input  type="submit" class="btn btn-success" name="Simpan" value="Simpan">
              
              </div>
            </form>
            <?php } ?>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>