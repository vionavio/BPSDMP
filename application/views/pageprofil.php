<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($pageprofil as $prof){  ?>
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="panel panel-info">
                        <div class="panel-heading">
                  <div style="padding-top: 10px; padding-left: 10px;"><h2><?php echo $prof->judul ?></h2></div>
                </div>
                <div class="panel-body">
                 <table>
                      <tr>
                        <td>
                         <center> <img class=" img-responsive" style=" width: 310px; align-content: center;"   src="<?php echo base_url('assets/images/profil/'.$prof->url) ?>" alt="Gambar tidak tampil"></center>
                        </td>
                      </tr>
                      <tr>

                          <td style="font-size: 17px; text-align: justify; padding: 5%">

                          	<?php echo $prof->text ?></td>
                      </tr>
                  </table>
                 </div>
              </div> 
             </div>
             </form>
             <?php } ?>
          </div>
</div>
</div>