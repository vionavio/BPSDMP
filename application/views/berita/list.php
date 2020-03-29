<div class="content-wrapper">  
     <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i> Daftar Berita
        <small>Add, Edit, Delete</small>
      </h1>
    </section>


<section class="content">
   
    <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>InputBerita"><i class="fa fa-plus"></i> Tambah Berita</a>
                </div>
            </div>
            </div>
    <div class="row">
        
        
        <div style="padding-left: 8%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Berita</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            
            <form role="form" >
                
                <table id="table1" class="table table-hover table-responsive table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style=" text-align: center; ">No Berita</th>
                         <th style=" text-align: center;width: 10%; ">Jam</th>
                         <th style=" text-align: center;width: 10%; ">Tanggal</th>
                          <th style=" text-align: center; ">Judul</th>
                          <th style=" text-align: center; width: 21%;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($list as $berita){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>

                         <td><?php echo $berita->jam_berita; ?></td>
                        
                        <td><?php echo $berita->tgl_berita; ?></td>
                        <td><?php echo $berita->judul_berita; ?></td>
                        <td>
                        <a class="btn btn-info" href="<?php echo base_url(); ?>berita/detail/<?php echo $berita->no_berita ?>">Baca</a>
                        <a class="btn btn-default" href="<?php echo base_url(); ?>berita/edit/<?php echo  $berita->no_berita ?>">Ubah</a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>berita/delete/<?php echo  $berita->no_berita; ?>">Hapus</a>
                        </td>
                    </tr>
                            <?php } ?>
                    
                    </tbody>
                </table>

             
            </form>
          </div>
          <!-- /.box -->
        </div>
    </div>
</section></div>