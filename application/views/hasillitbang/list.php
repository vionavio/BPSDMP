<div class="content-wrapper">  
     <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i> Hasil Litbang
        <small>Add, Edit, Delete</small>
      </h1>
    </section>


<section class="content">
   
    <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>hasillitbang/edit"><i class="fa fa-plus"></i> Tambah Jurnal</a>
                </div>
            </div>
            </div>
    <div  class="row">
        
        
        <div style="padding-left: 8%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Jurnal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            
            <form style=" padding-right: 15px; padding-left: 15px; " role="form">
                
                <table id="table1" class="table table-hover table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th style=" text-align: center;width: 5%; ">No </th>
                         <th style=" text-align: center;width: 10%; ">Tahun</th>
                         <th style=" text-align: center;width: 33%; ">Judul</th>
                          <th style=" text-align: center;width: 32%; ">Penulis </th>
                          <th style=" text-align: center; width: 20%;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($list as $hl){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>

                         <td><?php echo $hl->tahun; ?></td>
                        
                        <td><?php echo $hl->judul; ?></td>
                        <td><?php echo $hl->timpenulis; ?></td>
                        <td>
                        <a class="btn btn-info" href="<?php echo base_url(); ?>hasillitbang/detail/<?php echo $hl->id_hl ?>">Baca</a>
                        <a class="btn btn-default" href="<?php echo base_url(); ?>hasillitbang/edit/<?php echo  $hl->id_hl ?>">Ubah</a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>hasillitbang/delete/<?php echo  $hl->id_hl; ?>">Hapus</a>
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