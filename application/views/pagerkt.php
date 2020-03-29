<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="panel panel-info">
                        <div class="panel-heading">
                  <div style="padding-top: 10px; padding-left: 10px;"><h3>Rencana Kerja Tahunan</h3></div>
                </div>
                <div class="panel-body">
                	<?php foreach ($pagerkt as $rkt){  ?>
                 <div style=" text-align: center; font-size: 20pt "><?php echo $rkt->judul ?></div>
                  <div style=" text-align: center;"><?php echo $rkt->tahun ?></div><br>
                  <div style=" text-align: center; padding-bottom: 20px;"><center><embed src="<?php echo base_url('assets/pdf/'.$rkt->file) ?>"  width="670px" height="400px"  ></embed></center>
                      </div>
                 
                 
                  <?php } ?>
                 </div>
              </div> 
             </div>
             </form>
             
          </div>
</div>
</div>