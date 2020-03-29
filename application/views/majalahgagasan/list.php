<div class="content-wrapper">  
     <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i> Daftar Majalah Gagasan
        <small>Add, Edit, Delete</small>
      </h1>
    </section>


<section class="content">
   
    <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>InputMajalahgagasan"><i class="fa fa-plus"></i> Tambah Majalah Gagasan</a>
                </div>
            </div>
            </div>
    <div class="row">
        
        
        <div style="padding-left: 8%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Majalah Gagasan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            
            <form style=" padding-right: 20px; padding-left: 20px;" role="form">
                
                <table id="table1" class="table table-hover table-responsive table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style=" text-align: center; ">No</th>
                         <th style=" text-align: center;width: 35%; ">Judul</th>
                         <th style=" text-align: center;width: 20%; ">Volume</th>
                         <th style=" text-align: center;width: 20%; ">Tahun</th>
                          <th style=" text-align: center; width: 20%;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($list as $mg){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>

                         <td><?php echo $mg->judul; ?></td>
                        
                        <td><?php echo $mg->volume; ?></td>
                        <td><?php echo $mg->tahun; ?></td>
                        <td>
                        <a class="btn btn-info" href="<?php echo base_url(); ?>majalahgagasan/detail/<?php echo $mg->id_mg ?>">Baca</a>
                        <a class="btn btn-default" href="<?php echo base_url(); ?>majalahgagasan/edit/<?php echo  $mg->id_mg ?>">Ubah</a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>majalahgagasan/delete/<?php echo  $mg->id_mg; ?>">Hapus</a>
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