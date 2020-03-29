<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="panel panel-info">
                        <div class="panel-heading">
                  <div style="padding-top: 10px; padding-left: 10px;"><h3>Visi dan Misi Kementerian Komunikasi dan Informatika </h3><small>mengacu pada Visi dan Misi Presiden Joko Widodo dan Wakil Presiden M. Jusuf Kalla. </small></div>
                </div>
                <div class="panel-body" style=" line-height: 25px; padding-left: 50px;padding-right: 50px; text-align: justify; color: #555;">
                  
                      <?php  foreach ($pagevisimisi as $vm){  ?>
                      <h4>Visi</h4>
                      <?php echo $vm->visi ?><hr>
                     <h4>Misi</h4>
                      <?php echo $vm->misi ?><hr>
					  <?php } ?>
                 
                 </div>
              </div> 
             </div>
             </form>
             
          </div>
</div>
</div>