<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="panel panel-info">
                        <div class="panel-heading">
                  <div style="padding-top: 10px; padding-left: 10px;"><h3>Profil Fungsional Peneliti BPSDMP Yogyakarta</h3></div>
                </div>
                <div class="panel-body">
                  
                 <table>
                 
                      <?php $no=1; foreach ($profilpeneliti as $profpen){  ?>
                  <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td style="font-size: 17px;  padding-left: 10px">
                        <a href="<?php echo base_url(); ?>page/detailpeneliti/<?php echo $profpen->NIP ?>" style=" text-decoration: none "><?php echo $profpen->nama ?></a></td>
                  </tr> <?php } ?>
                  </table> 
                 </div>
              </div> 
             </div>
             </form>
             
          </div>
</div>
</div>