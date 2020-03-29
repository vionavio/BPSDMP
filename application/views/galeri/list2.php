<div class="content-wrapper">  
    <section class="content-header">
      <h1>
        <i class="fa fa-photo"></i> Galeri
        <small>Add / Edit Foto</small>
      </h1>
    </section>
    <div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>galeri/"><i class="fa fa-dashboard"></i> Album</a></li>
        <li><a href="<?php echo base_url(); ?>galeri/detail2">Foto</a></li>
       
      </ol></div>
<section class="content">
     <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>galeri/edit2
                      "><i class="fa fa-plus"></i> Tambah Foto</a>
                </div>
            </div>
        </div>
    <div class="row">
        
        <div style="padding-left: 7%; " class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url(); ?>InputGaleri">
                <div class="container-fluid">
                    <?php foreach ($list2 as $galeri){  ?>
                       <div style="margin-top: 10px;
                display: inline-block;
                border-color: black;
                width: 250px;
                height: 200px;">

                        <img class="img-rounded img-responsive" style=" width: 210px;"   src="<?php echo base_url('assets/images/galeri/'.$galeri->url) ?>" alt="Gambar tidak tampil">
                        <p> <?php echo $galeri->title; ?> </p>

                        <p style="padding-left: 25%;"> <a class="btn btn-info glyphicon glyphicon-edit" href="<?php echo base_url(); ?>galeri/edit2/<?php echo  $galeri->id_foto ?>"></a>
                          
                       <a class="btn btn-danger glyphicon glyphicon-trash" href="<?php echo base_url(); ?>galeri/delete/<?php echo  $galeri->id_foto; ?>"></a>
                        </p> </div>
                   
                    <?php } ?>
                </div>
                 <br>
                
              
            </form>
          </div>
          <!-- /.box -->
        </div>
    </div>
</section></div>