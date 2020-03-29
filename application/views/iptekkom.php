<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
   	
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <div class="panel panel-info">
                        <div class="panel-heading">
                        
            <div style="padding-top: 10px; padding-left: 10px;"><h2>Jurnal IPTEK KOM</h2></div>
            </div>
            <div class="panel-body">
           
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body" style=" padding-left: 20px; padding-right: 20px">
              	<?php foreach ($iptekkom as $ip){  ?>
                <table> 
                       <tr><td><strong><?php echo $ip->edisi. "," ?><?php echo $ip->tanggal ?></td></strong>
						
                       		</tr>
                       <tr>
                       		<td style=" text-align: justify; padding-left: 10px;  "><a style="text-decoration: none;" href="<?php echo base_url(); ?>page/detailiptek/<?php echo $ip->id_ip ?>"><?php echo $ip->judul ."&nbsp;oleh&nbsp;".  $ip->penulis?>
                       		</a>
                       		</td>
                      </tr>
                      <tr><td><br></td></tr>
                </table>  <?php } ?>
             </div>
             </form>
            </div>
                       
                    </div>
          </div>
</div>
</div>