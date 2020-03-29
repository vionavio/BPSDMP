<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
   	
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <div class="panel panel-info">
                        <div class="panel-heading">
                        
            <div style="padding-top: 10px; padding-left: 10px;"><h2>Hasil Litbang</h2></div>
            </div>
            <div class="panel-body">
           
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body" style=" padding-left: 20px; padding-right: 20px">
              	
                  
                <table >
                  
                  <?php $no=1; foreach ($pagehl as $hl){  ?>
                  <tr><td style=" width: 10%; "><?php echo $no++?></td>
                  <td><a href="<?php echo base_url(); ?>page/pagehldetail/<?php echo $hl->id_hl ?>" style=" text-decoration: none "><?php echo $hl->judul ?>, oleh  <?php echo $hl->timpenulis ?>. </a></td>

                </tr>
                 <?php } ?>
               </table>
               
              	
             </div>
             
             </form>
            </div>
                       
                    </div>
          </div>
</div>
</div>