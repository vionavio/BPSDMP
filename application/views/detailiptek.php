<div style="background: #fff;  margin-top: 30px;">
<div class="content-wrapper">  
  
   <section class="content-header">
    <div class="panel panel-info">
                        <div class="panel-heading">
      <h3>
          <i class="glyphicon glyphicon-list-alt"> </i> Jurnal IPTEK
        <small>Menampilkan detail Jurnal Iptek</small>
      </h3></div>
    </section>


<div class="panel-body">
    
<section class="content">
      <div class="row">
        <!-- left column -->
        
        <div style="padding-left: 10px; padding-right: 10px;" class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
           </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                 
                  
                  <table>
                      <tr>
                          <td  style=" text-align: center; font-size: 20px;padding-top: 15px;padding-left: 15px;padding-right: 15px;"><?php echo $detailiptek->judul ?></td>
                      </tr>
                      <tr>
                          <td><center><small>Oleh</small></center></td>
                      </tr>
                      <tr>
                          <td  style=" text-align: center; font-size: 17px;"><?php echo $detailiptek->penulis ?></td>
                      </tr>
                      
                      <tr>
                          <td style=" padding-left: 10px; ">    
                              &nbsp; <?php echo $detailiptek->tanggal ?></td>
                         
                      </tr>
                      <tr>
                          <td></td>
                      </tr>
                      
                      <tr>
                          <td style="font-size: 17px; text-align: justify; padding: 15px;">&nbsp;<?php echo $detailiptek->abstrak ?></td>
                      </tr>
                  </table>
                
               </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div></section></div> </div></div>

  
       