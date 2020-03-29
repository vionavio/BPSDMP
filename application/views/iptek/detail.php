<div class="content-wrapper">  
   <section class="content-header">
      <h1>
          <i class="glyphicon glyphicon-list-alt"> </i> IPTEK KOM
        <small>Menampilkan detail jurnal</small>
      </h1>
    </section>
    <div class=" col-xs-12 text-right">
               <a   href="<?php echo site_url(); ?>iptek"  type="button" class="btn btn-warning" name="Kembali" >Kembali</a>
              </div>
<section class="content">
      <div class="row">
        <!-- left column -->
        
        <div style="padding-left: 20%;" class="col-md-10">
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
                          <td  style=" text-align: center; font-size: 20px;padding-top: 4%; padding-bottom: 4%;"><?php echo $iptek->judul ?></td>
                      </tr>
                      
                      
                      <tr>
                          <td style=" padding-left: 5%;">    
                              &nbsp; <?php echo $iptek->tanggal ?> 
                              &nbsp; <?php echo $iptek->edisi ?></td>
                         
                      </tr>
                      <tr>
                          <td></td>
                      </tr>
                      
                      <tr>
                          <td style="font-size: 17px; text-align: justify; padding-right: 5%; padding-left: 5%; padding-bottom: 3%;">(<?php echo $iptek->penulis ?>)&nbsp;<?php echo $iptek->abstrak ?></td>
                      </tr>
                  </table>
                   
                 
               
              
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->
        </div>
      
      </div></section></div>
  
        