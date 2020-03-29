<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="panel panel-warning">
                        <div class="panel-heading">
                  <div style="padding-top: 5px; padding-left: 10px;"><h3><?php echo $detailkominfo->judul ?></h3></div>
                </div>
                <div class="panel-body">
                	
                 <table >
                      
                      <tr>

                          <td style="font-size: 17px; padding-left: 7px; padding-bottom: 10px; "  >
                            <embed src="<?php echo base_url('assets/pdf/'.$detailkominfo->url) ?>"  width="700px" height="700px"  ></embed>

                          	</td>
                      </tr>
                  </table>
                 
                 </div>
              </div> 
             </div>
             </form>
             
          </div>
</div>
</div>