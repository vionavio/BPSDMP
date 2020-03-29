<div class="content-wrapper">  
     <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i> Daftar Data
        <small>Add, Edit, Delete</small>
      </h1>
    </section>


<section class="content">
   
    <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>InputPengembangansdm"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            </div>
    <div class="row">
        
        
        <div style="padding-left: 8%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            
            <form role="form" >
                
                <table id="table1" class="table table-hover table-responsive table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style=" text-align: center; width: 50px; ">No Data</th>
                         <th style=" text-align: center;width: 50%; ">Judul</th>
                         <th style="text-align: center;width: 30%; ">Jadwal</th>
                         
                         <th style=" text-align: center; width: 20%;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($list as $pengembangansdm){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>
                        <td><?php echo $pengembangansdm->judul; ?></td>
                        <td style=" text-align: center; "><?php echo $pengembangansdm->jadwal; ?></td>
                       
                       <td>
                        <a class="btn btn-info" href="<?php echo base_url(); ?>pengembangansdm/detail/<?php echo $pengembangansdm->id_sdm ?>">Baca</a>
                        
                        <a class="btn btn-default" href="<?php echo base_url(); ?>pengembangansdm/edit/<?php echo  $pengembangansdm->id_sdm ?>">Ubah</a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>pengembangansdm/delete/<?php echo  $pengembangansdm->id_sdm; ?>">Hapus</a>
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