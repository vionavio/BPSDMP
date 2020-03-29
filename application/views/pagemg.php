<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
   	
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <div class="panel panel-info">
                        <div class="panel-heading">
                        
            <div style="padding-top: 10px; padding-left: 10px;"><h2>Majalah Gagasan</h2></div>
            </div>
            <div class="panel-body">
           
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body" style=" padding-left: 20px; padding-right: 20px">
              	
                  
                <table >
                  
                  <?php $no=1; foreach ($pagemg as $mg){  ?>
                  <tr><td style=" width: 10%; "><?php echo $no++?></td>
                  <td><a href="<?php echo base_url(); ?>page/pagemgdetail/<?php echo $mg->id_mg ?>" style=" text-decoration: none "><?php echo $mg->judul ?>,   <?php echo $mg->volume ?>. </a></td>

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