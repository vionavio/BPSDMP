<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
   	
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <div class="panel panel-info">
                        <div class="panel-heading">
                        
            <div style="padding-top: 10px; padding-left: 10px;"><h2>Pengembangan SDM</h2></div>
            </div>
            <div class="panel-body">
           
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body" style=" padding-left: 20px; padding-right: 20px">
              	
                  
                <table class="table table-bordered table-striped  table-hover">
                  
                  <tr>
                    <td>No</td>
                    <td style=" text-align: center; ">Judul</td>
                    <td style=" text-align: center; ">Jadwal</td>
                  </tr>
                  <?php $no=1; foreach ($pagepengembangansdm as $sdm){  ?>
                  <tr><td style=" width: 30px; "><?php echo $no++?></td>
                  <td style=" width: 350px;""><a href="<?php echo base_url(); ?>page/pagedetailsdm/<?php echo $sdm->id_sdm ?>" style=" text-decoration: none "><?php echo $sdm->judul ?></a></td>
                 <td><?php echo $sdm->jadwal ?></td></tr>
                 <?php } ?>
               </table>
               
              	
             </div>
             
             </form>
            </div>
                       
                    </div>
          </div>
</div>
</div>