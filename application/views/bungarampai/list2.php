<div class="content-wrapper">  
      <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>bungarampai/"><i class="fa fa-dashboard"></i> Bunga Rampai</a></li>
        <li><a href="<?php echo base_url(); ?>bungarampai/list2">Sub Judul Bunga Rampai</a></li>
        
      </ol></div>
     
<section class="content">
   
    <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                     <a class="btn btn-primary" href="<?php echo base_url(); ?>bungarampai/edit2"><i class="fa fa-plus"></i> Tambah Judul</a>
                </div>
            </div>
            </div>
    <div class="row">
        
        
        <div style="padding-left: 8%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Judul</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            
            <form role="form" style=" padding-left: 20px; padding-right: 20px;">
                
                <table id="table1" class="table table-hover table-responsive table-bordered table-striped">
                   <thead>
                  <tr>
                    <td style=" width: 10%; text-align: center;; ">No</td>
                    
                    <td style=" text-align: center;width: 40%; ">Judul </td>
                    <td style=" text-align: center; width: 30%;">Penulis </td>
                    <td style=" text-align: center; width: 20%;">Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                     <?php $no=1; foreach ($list2 as $subbr){  ?>
                  <tr><td style=" width: 10%; "><?php echo $no++?></td>
                 
                  <td><?php echo $subbr->judul ?></td>
                  <td><?php echo $subbr->penulis ?></td>
                   <td>
                        <a class="btn btn-info" href="<?php echo base_url(); ?>bungarampai/detail2/<?php echo $subbr->id_subbr ?>">Detail</a>
                        <a class="btn btn-default" href="<?php echo base_url(); ?>bungarampai/edit2/<?php echo  $subbr->id_subbr ?>">Ubah</a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>bungarampai/delete2/<?php echo  $subbr->id_subbr; ?>">Hapus</a>
                        </td>
                </tr>
                 </tbody>
                  
                 <?php } ?>
                   
                </table>

             
            </form>
          </div>
          <!-- /.box -->
        </div>
    </div>
</section></div>