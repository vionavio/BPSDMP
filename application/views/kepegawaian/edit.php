<div class="content-wrapper">  
    <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-user"> </i> Kepegawaian
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
            <form role="form" method="post" action="<?php echo base_url('kepegawaian/simpan') ?>">
             <div class="box-body">
                 <div class="row">
                    <div class="col-md-6">                                
                        <div class="form-group">
                        <label for="nama">Nama</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->nama ?>" type="text" class="form-control required" id="nama" name="nama" required >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="NIP">NIP</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->NIP ?>" type="text" class="form-control required " id="NIP"  name="NIP" required >
                        </div>
                    </div>
                </div>
                 <hr>
                 <div class="row">
                       
                    <div class="col-md-6"> 
                        <label >PANGKAT</label>
                        <div class="form-group">
                        <label for="gol_ruang">Golongan Ruang</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->gol_ruang ?>" type="text" class="form-control required" id="gol_ruang" name="gol_ruang" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label><br></label>
                        <div class="form-group">
                        <label for="tmt">TMT</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->tmt ?>" type="date" class="form-control required " id="tmt"  name="tmt" required>
                        </div>
                    </div>
                 </div>
                <hr>
                 <div class="row">
                    
                    <div class="col-md-6">  
                        <label >JABATAN</label>
                        <div class="form-group">
                        <label for="jbt_nama">Nama</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->jbt_nama ?>" type="text" class="form-control required" id="jbt_nama" name="jbt_nama" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label><br></label>
                        <div class="form-group">
                        <label for="jbt_tmt">TMT</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->jbt_tmt ?>" type="date" class="form-control required " id="jbt_tmt"  name="jbt_tmt" required>
                        </div>
                    </div>
                     
                </div>
                <hr>
                 <div class="row">
                    <div class="col-md-6">      
                        <label >MASA KERJA</label>
                        <div class="form-group">
                        <label for="masker_th">Tahun</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->masker_th ?>" type="text" class="form-control required" id="masker_th" name="masker_th" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label><br></label>
                        <div class="form-group">
                        <label for="maasker_bln">Bulan</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->masker_bln ?>" type="text" class="form-control required" id="masker_bln"  name="masker_bln" >
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">      
                        <label>LATIHAN JABATAN</label>
                        <div class="form-group">
                        <label for="latjab_nama">Nama</label>
                          <textarea type="text" class="form-control " id="latjab_nama"  name="latjab_nama" rows="5" required><?php if(isset($kepegawaian)) echo $kepegawaian->latjab_nama ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <label><br></label>
                        <div class="form-group">
                        <label for="latjab_th">Tahun</label>
                          <textarea type="text" class="form-control " id="latjab_th"  name="latjab_th" rows="5" required><?php if(isset($kepegawaian)) echo $kepegawaian->latjab_th ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-2">
                        <label><br></label>
                        <div class="form-group">
                        <label for="latjab_jumlah">Jumlah</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->latjab_jumlah ?>" type="text" class="form-control required " id="latjab_jumlah"  name="latjab_jumlah">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">      
                        <label >PENDIDIKAN</label>
                        <div class="form-group">
                        <label for="pendidikan_nama">Nama</label>
                        <textarea type="text" class="form-control " id="pendidikan_nama"  name="pendidikan_nama" rows="5" required><?php if(isset($kepegawaian)) echo $kepegawaian->pendidikan_nama ?></textarea>
                     </div>
                    </div>
                    <div class="col-md-3">
                        <label><br></label>
                        <div class="form-group">
                        <label for="pendidikan_thlulus">Lulus Tahun</label>
                        <textarea type="text" class="form-control " id="pendidikan_thlulus"  name="pendidikan_thlulus" required rows="5"><?php if(isset($kepegawaian)) echo $kepegawaian->pendidikan_thlulus ?></textarea>
                     </div>
                    </div>
                    <div class="col-md-2">
                        <label><br></label>
                        <div class="form-group">
                        <label for="pend_tingkatijazah">Tingkatan Ijazah</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->pend_tingkatijazah ?>" type="text" class="form-control required " id="pend_tingkatijazah"  name="pend_tingkatijazah" required >
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">      
                        <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->tempat_lahir ?>" type="text" class="form-control required" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->tanggal_lahir ?>" type="date" class="form-control required" id="tanggal_lahir"  name="tanggal_lahir" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">      
                        <div class="form-group">
                        <label for="agama">Agama</label>
                          <select class="form-control required"  id="agama" name="agama"  ">

                                           <option <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->agama ?>"><?php if(isset($kepegawaian)) echo $kepegawaian->agama ?></option>
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
                       <select class="form-control required" id="jenis_kelamin" name="jenis_kelamin" <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->jenis_kelamin ?>">
                                           <option <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->jenis_kelamin ?>"><?php if(isset($kepegawaian)) echo $kepegawaian->jenis_kelamin ?></option>
                                          <option value="">Pilih Jenis Kelamin</option>
                                           <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                       </select></div>
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-6">      
                        <div class="form-group">
                        <label for="tmt_capeg">TMT CAPEG</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->tmt_capeg ?>" type="date" class="form-control required" id="tmt_capeg" name="tmt_capeg" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="Keterangan">Keterangan</label>
                        <textarea type="text" class="form-control " id="Keterangan"  name="Keterangan" rows="5"><?php if(isset($kepegawaian)) echo $kepegawaian->Keterangan ?></textarea>
                    </div>
                    </div>
                </div>
                 <hr>
                
                <div class="row">
                    <div class="col-md-6">      
                        <div class="form-group">
                        <label for="kepakaran">Kepakaran</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->kepakaran ?>" type="text" class="form-control " id="kepakaran" name="kepakaran" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->email ?>" type="email" class="form-control " id="email"  name="email" >
                    </div>
                    </div>
                </div>
               
                <hr>
                  <div class="row">
                    <div class="col-md-6">  

                  <div class="form-group">
                  <label class="control-label" for="gambar">Gambar </label>
                  <input <?php if(!isset($kepegawaian)) ?>  value="<?php if(isset($kepegawaian)) echo $kepegawaian->gambar ?>" type="file" name="gambar" id="gambar" value=" <?php  if(isset($kepegawaian)) echo base_url('assets/profilpeneliti') ?>" class="form-control">
                  </div>
                 </div>
                </div>
              </div>
             <div class="box-footer">
                  
               
                <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan"><a style=" padding-left: 70% "></a>
                
                <a  href="<?php echo site_url(); ?>Kepegawaian"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>


                   <input style=" text-align: right;" type="reset" class="btn btn-danger" value="Reset" />
               
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>