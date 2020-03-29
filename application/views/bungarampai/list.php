<div class="content-wrapper">  
     
    
     <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i> Daftar Kategori
        <small>Kategori Bungarampai Add, Edit, Delete</small>
      </h1>
    </section>


<section class="content">
   
    <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>bungarampai/edit"><i class="fa fa-plus"></i> Tambah Kategori</a>
                </div>
            </div>
            </div>
    <div class="row">
        
        
        <div style="padding-left: 8%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            
            <form style=" padding-left: 20px; padding-right: 20px;" role="form">
                
                <table id="table1" class="table table-hover table-responsive table-bordered table-striped">
                   <thead>
                  <tr>
                    <th style=" width: 10%; text-align: center;; ">No</th>
                    <th style=" text-align: center; width: 60%; ">Judul Utama</th>
                    <th style=" text-align: center; width: 30%; ">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($list as $br){  ?>
                  <tr><td style=" text-align: center; "><?php echo $no++?></td>
                  <td><?php echo $br->judulutama ?></td>
                   <td style=" text-align: center; ">
                        <a class="btn btn-info" href="<?php echo base_url(); ?>bungarampai/detail/<?php echo $br->id_br ?>">Detail</a>
                        <a class="btn btn-default" href="<?php echo base_url(); ?>bungarampai/edit/<?php echo  $br->id_br ?>">Ubah</a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>bungarampai/delete/<?php echo  $br->id_br; ?>">Hapus</a>
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