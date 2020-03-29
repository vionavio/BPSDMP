<div class="content-wrapper">  
    
     <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-user"> </i> Kepegawaian
        <small>Menampilkan data pegawai</small>
      </h1>
    </section>
    
<section class="content">

    <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-success" href="<?php echo base_url(); ?>kepegawaian/download"><i class="fa fa-download"></i> Download Data Kepegawaian</a>
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>InputKaryawan"><i class="fa fa-plus"></i> Tambah Data Kepegawaian</a>
                </div>
            </div>
            </div>
    <div class="row">
        
        <div style=" padding-left:5%;padding-right:5%;  " class="col-md-12" >
          <!-- general form elements -->
          <div class="box box-primary">
              <div class="box-header with-border">
              <h3 class="box-title">Data Kepegawaian</h3>
            </div>
              <div style="
/*                  padding-bottom:1%;*/
      min-height:620px;
      min-width: 1100px;
      width: 99%;
                height: 670px;
                overflow-y: scroll; background-color: white;
                overflow-x: scroll;
                position: absolute;
                /*margin-bottom: 2%;*/
                ">
        
                <form role="form" style="padding-right: 10px; padding-left: 10px;">
                    <table id="table1" style=" background-color: white; "   class="table table-hover table-responsive table-bordered ">
                        <thead>
                            <tr >
                                <th></th>
                                <th></th>
                                <th colspan="2" style=" text-align: center; ">PANGKAT</th>
                                <th colspan="2" style=" text-align: center; ">JABATAN</th>
                                <th colspan="2" style=" text-align: center; ">MASA KERJA</th>
                                <th colspan="3" style=" text-align: center;  " >LATIHAN JABATAN</th>
                                <th colspan="3" style=" text-align: center;" >PENDIDIKAN</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                
                                     
                            </tr>
                            <tr>
                                <th  style=" text-align: center; padding-top: 2.5%; ">No</th>
                                <th  style=" text-align: center; padding-top: 2.5%;">NAMA/NIP</th>
                                <th style=" text-align: center;">GOL RUANG</th>
                                <th style=" text-align: center;">TMT</th>
                                <th style=" text-align: center;">NAMA</th>
                                <th style=" text-align: center;">T.M.T</th>
                                <th style=" text-align: center;">TH</th>
                                <th style=" text-align: center;">BL</th>
                                <th style=" text-align: center;">NAMA</th>
                                <th style=" text-align: center;">BULAN TAHUN</th>
                                <th style=" text-align: center;">JUML</th>
                                <th style=" text-align: center;">NAMA</th>
                                <th style=" text-align: center;">LULUS TAHUN</th>
                                <th style=" text-align: center;">TINGKATAN IJAZAH</th>
                                <th  style=" text-align: center; padding-top: 2.5%; " >TEMPAT/TGL LAHIR</th>
                                <th  style=" text-align: center; padding-top: 2.5%; " >USIA</th>
                                <th  style=" text-align: center; padding-top: 2.5%; " >AGAMA L/P</th>
                                <th  style=" text-align: center; padding-top: 2.5%;" >TMT CAPEG</th>
                                <th  style=" text-align: center; padding-top: 2.5%;" >Ket.</th>
                                <th  style=" text-align: center; width: 200px; padding-top: 2.5%;" >AKSI</th>
                                <th></th>
                          
                            </tr>
                        </thead>

                        <tbody>
                         <?php $no=1; foreach ($list as $pgw_identitas){  
                                $today = new DateTime();
                                $bday = new DateTime($pgw_identitas->tanggal_lahir);

                                $umur = $today->diff($bday)->y;
                            ?>
                    <tr> 
                        <td style=" text-align: center; "><?php echo  $no++; ?></td>
                        <td><?php echo $pgw_identitas->nama; "/" ?>  <?php echo $pgw_identitas->NIP; ?></td>
                        <td><?php echo $pgw_identitas->gol_ruang; ?></td>
                        <td><?php echo $pgw_identitas->tmt; ?></td>
                        <td><?php echo $pgw_identitas->jbt_nama; ?></td>
                        <td><?php echo $pgw_identitas->jbt_tmt; ?></td>
                        <td><?php echo $pgw_identitas->masker_th; ?></td>
                        <td><?php echo $pgw_identitas->masker_bln; ?></td>
                        <td><?php echo $pgw_identitas->latjab_nama; ?></td>
                        <td><?php echo $pgw_identitas->latjab_th; ?></td>
                        <td><?php echo $pgw_identitas->latjab_jumlah; ?></td>
                        <td><?php echo $pgw_identitas->pendidikan_nama; ?></td>
                        <td><?php echo $pgw_identitas->pendidikan_thlulus; ?></td>
                        <td><?php echo $pgw_identitas->pend_tingkatijazah; ?></td>

                        <td><?php echo $pgw_identitas->tempat_lahir; echo ', '; ?> <?php echo $pgw_identitas->tanggal_lahir; ?></td>

                        <td><?php echo $umur.' th'; ?></td>
                        <td><?php echo $pgw_identitas->agama; ?><br><?php echo $pgw_identitas->jenis_kelamin; ?></td>
                        <td><?php echo $pgw_identitas->tmt_capeg; ?></td>
                        <td><?php echo $pgw_identitas->Keterangan; ?></td>
                        
                        <td><a class="btn btn-info glyphicon glyphicon-edit" href="<?php echo base_url(); ?>kepegawaian/edit/<?php echo  $pgw_identitas->NIP ?>"></a></td>
                        <td><a class="btn btn-danger glyphicon glyphicon-trash" href="<?php echo base_url(); ?>kepegawaian/delete/<?php echo  $pgw_identitas->NIP; ?>"></a></td>
                    </tr>
                            <?php } ?>
                        
                   </tbody>
                </table>

             
            </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
    </div>
</section></div>