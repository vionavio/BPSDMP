<div class="content-wrapper">  
     <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i> Daftar galeri
        <small>Add, Edit, Delete</small>
      </h1>
    </section>


<section class="content">
   
    <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>galeri/edit/"><i class="fa fa-plus"></i> Tambah Album</a>
                </div>
            </div>
            </div>
    <div class="row">
        
        
        <div style="padding-left: 8%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data galeri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            
            <form style=" padding-left: 10px; padding-right: 10px; " role="form" >
                
                <table id="table1" class="table table-hover table-responsive table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style=" width: 10%; text-align: center;; ">No</th>
                        <th style=" text-align: center; width: 55%; ">Judul Album</th>
                        <th style=" text-align: center; width: 35%; ">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($list as $galeri){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>

                         <td><?php echo $galeri->namaalbum ?></td>
                        <td style=" text-align: center; ">
                        <a class="btn btn-info" href="<?php echo base_url(); ?>galeri/detail2/<?php echo $galeri->id_album ?>">Lihat Foto</a>
                        <a class="btn btn-default" href="<?php echo base_url(); ?>galeri/edit3/<?php echo  $galeri->id_album ?>">Ubah</a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>galeri/delete3/<?php echo  $galeri->id_album; ?>">Hapus</a>
                        <a class="btn btn-success" href="<?php echo base_url(); ?>galeri/edit2/<?php echo  $galeri->id_album; ?>
                      "> Tambah Foto</a>
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