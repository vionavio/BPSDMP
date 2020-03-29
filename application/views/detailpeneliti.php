<div style="background: #fff;  margin-top: 30px;">
<div class="content-wrapper">  
  
   <section class="content-header">
    <div class="panel panel-info">
                        <div class="panel-heading">
      <h3>
          <i class="glyphicon glyphicon-user"> </i> Profil Peneliti
        <small>Menampilkan detail profil peneliti</small>
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
            <form style=" padding-left: 20px;" role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                 
                  <div style=" align-items: center;"><center><img class="img-rounded img-responsive" style=" width: 190px;"   src="<?php echo base_url('assets/profilpeneliti/'.$detailpeneliti->gambar) ?>" alt="Gambar tidak tampil"></center></div>
                  <div style=" padding-left: 5px; padding-right: 15px;">
                  <table  class="table table-hover table-responsive table-bordered table-striped">
                      
                      <tr style="font-size: 17px; ">
                        <td>Nama</td>
                        <td> :</td>
                        <td> &nbsp;&nbsp;<?php echo $detailpeneliti->nama ?></td>
                      </tr>
                      
                      <tr style=" font-size: 17px; ">
                          <td>Tempat dan Tanggal Lahir</td>
                          <td> :</td>
                          <td >    
                               &nbsp; <?php echo $detailpeneliti->tempat_lahir .",". $detailpeneliti->tanggal_lahir ?></td>
                         
                      </tr>
                      <tr style=" font-size: 17px;">
                        <td>Jabatan Fungsional</td>
                        <td> :</td>
                         <td > &nbsp;&nbsp;<?php echo $detailpeneliti->jbt_nama ?></td>
                      </tr>
                      <tr style=" font-size: 17px;">
                           <td>Kepakaran</td>
                           <td> :</td>
                           <td> &nbsp;&nbsp;<?php echo $detailpeneliti->kepakaran ?></td>
                      </tr>
                     
                      <tr  style=" font-size: 17px;">
                        <td>Email</td>
                        <td> :</td>
                          <td > &nbsp;&nbsp;<?php echo $detailpeneliti->email ?></td>
                      </tr>
                      
                  </table>
                </div>
               </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div></section></div> </div></div>

  
        