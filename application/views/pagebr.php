<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
   	
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <div class="panel panel-info">
                        <div class="panel-heading">
                        
            <div style="padding-top: 10px; padding-left: 10px;"><h2>Bunga Rampai</h2></div>
            </div>
            <div class="panel-body">
           
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body" style=" padding-left: 20px; padding-right: 20px">
              	
                  <small>Kategori</small>
                <table class="table table-bordered  table-hover">
                  
                  <tr>
                    <td style=" width: 10%; text-align: center;; ">No</td>
                    <td style=" text-align: center; ">Judul</td>
                    </tr>
                  <?php $no=1; foreach ($pagebr as $br){  ?>
                  <tr><td style=" width: 10%; "><?php echo $no++?></td>
                  <td><a href="<?php echo base_url(); ?>page/pagebr2/<?php echo $br->id_br ?>" style=" text-decoration: none "><?php echo $br->judulutama ?></a></td></tr>
                 <?php } ?>
               </table>
               
              	
             </div>
             
             </form>
            </div>
                       
                    </div>
          </div>
</div>
</div>