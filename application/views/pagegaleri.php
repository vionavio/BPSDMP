<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
   	
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <div class="panel panel-info">
                        <div class="panel-heading">
                        
            <div style="padding-top: 10px; padding-left: 10px;"><h2>Galeri</h2></div>
            </div>
            <div class="panel-body">
           
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body" style=" padding-left: 20px; padding-right: 20px">
              	<center><h4>Galeri</h4></center>
               
              	<?php foreach ($pagegaleri as $pg) {
                 ?>
                 <div style="margin-top: 10px;
                display: inline-block;
                border-color: black;
                width: 220px;
                height: 200px;">
                  <p style=" text-align: center; "> <?php echo $pg->title; ?> </p>
              	 <img class="img-rounded img-responsive" style=" width: 210px;"   src="<?php echo base_url('assets/images/galeri/'.$pg->url) ?>" alt="Gambar tidak tampil">
                        </div>
                        <?php } ?>
                     
              
             </div>
             
             </form>
            </div>
                       
                </div>
          </div>
</div>
</div>