<div class="content-wrapper">  
     <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i> Daftar RKT
        <small>Add, Edit, Delete</small>
      </h1>
    </section>


<section class="content">
   
    <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>InputIptek"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            </div>
    <div class="row">
        
        
        <div style="padding-left: 8%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kebijakan Kominfo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div style=" padding: 20px; ">
            
            <form role="form" >
                
                <table id="table1" class="table table-hover table-responsive table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style=" text-align: center; width: 10%; ">No </th>
                         <th style=" text-align: center; width: 20%;">Tahun</th>
                         
                         <th style=" text-align: center; ">Judul</th>
                          <th style=" text-align: center; width: 21%;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($list as $rkt){  ?>
                    <tr>
                        <td style=" text-align: center; "><?php echo $no++; ?></td>

                         <td><?php echo $rkt->tahun; ?></td>
                        
                        <td><?php echo $rkt->judul; ?></td>
                        <td>
                        <a class="btn btn-info" href="<?php echo base_url(); ?>rkt/detail/<?php echo $rkt->id_rkt ?>">Detail</a>
                        <a class="btn btn-default" href="<?php echo base_url(); ?>rkt/edit/<?php echo  $rkt->id_rkt ?>">Ubah</a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>rkt/delete/<?php echo  $rkt->id_rkt; ?>">Hapus</a>
                        </td>
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