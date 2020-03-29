<div style="background: #fff;  margin-top: 30px;">
   <div class="box box-primary">
    
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <div class="panel panel-info">
                        <div class="panel-heading">
                        
            <div style="padding-top: 5px; padding-left: 10px;"><h4>Kontak Balai Pengkajian dan Pengembangan Komunikasi dan Informatika</h4></div>
            </div>
            <div class="panel-body">
           
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body" style=" padding-left: 20px; padding-right: 20px">
                 <table  class="table table-bordered table-striped  table-hover">
     
</tbody>
<?php foreach ($pagekontak as $page){  ?>
    <tr>
      <td>Alamat</td>
      <td><?php echo $page->alamat ?></td>
    </tr>
    <tr>
      <td>Telp.</td>
      <td><?php echo $page->telfon ?></td>
    </tr>
     <tr>
      <td>Kode Pos</td>
      <td><?php echo $page->kodepos ?> </td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><?php echo $page->email ?></td>
    </tr>
    <tr>
      <td>Website</td>
      <td><?php echo $page->website ?></td>
    </tr>
    <?php } ?>
</tbody>
  </table>
         </div>
             </form>
            </div>
            </div>
      </div>
</div>
</div>

