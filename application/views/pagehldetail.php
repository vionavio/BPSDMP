<div style="background: #fff;  margin-top: 30px;">
<div class="content-wrapper">  
  
   <section class="content-header">
    <div class="panel panel-info">
                        <div class="panel-heading">
      <h3>
          <i class="glyphicon glyphicon-list-alt"> </i> Hasil Litbang
        <small>Menampilkan detail hasil litbang</small>
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
                  
                  <div  style=" text-align: center; font-size: 20px;"><?php echo $pagehldetail->judul ?></div>
                  <div  style=" text-align: center; "><?php echo $pagehldetail->tahun ?></div>
                  <div  style=" text-align: center; font-size: 17px;"><?php echo $pagehldetail->timpenulis ?></div><br>
                  <div style=" text-align: center; " ><img style="width: 300px;"  src="<?php echo base_url('assets/images/hl/'.$pagehldetail->cover) ?>" alt="Gambar tidak tampil">
                            
                         </div>
                         <br>
                    <div style=" text-align: center; padding-bottom: 20px;"><center><embed src="<?php echo base_url('assets/images/hl/'.$pagehldetail->es) ?>"  width="670px" height="400px"  ></embed></center>
                      </div>

                         <!--  <div style=" text-align: center; padding: 7%; " >
                              <img style="height: 40%;"  src="<?php echo base_url('assets/images/hl/'.$pagehldetail->es) ?>" alt="Gambar tidak tampil">
                          </div> -->
                
               </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div></section></div> </div></div>

  