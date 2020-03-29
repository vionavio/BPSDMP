<div style="background: #fff;  margin-top: 30px;">
<div class="content-wrapper">  
  
   <section class="content-header">
    <div class="panel panel-info">
                        <div class="panel-heading">
      <h3>
          <i class="glyphicon glyphicon-list-alt"> </i> Berita
        <small>Menampilkan detail Berita</small>
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
                          <td  style=" text-align: center; font-size: 20px;padding-left: 15px;padding-right: 15px;"><?php echo $detailberita->judul_berita ?></td>
                      </tr>
                    
                     <tr>
                          <td style=" text-align: center; padding: 7%; " >
                              <img style="height: 40%;"  src="<?php echo base_url('assets/images/gambar/'.$detailberita->url) ?>" alt="Gambar tidak tampil">
                            
                          </td>
                      </tr>
                      <tr>
                          <td style=" padding-left: 5%;">    
                              &nbsp; <?php echo $detailberita->tgl_berita ?></td>
                         
                      </tr>
                      <tr>
                          <td></td>
                      </tr>
                      
                      <tr>
                          <td style="font-size: 17px; text-align: justify; padding-right: 5%; padding-left: 5%; padding-bottom: 3%;">(<?php echo $detailberita->username ?>)&nbsp;<?php echo $detailberita->isi_berita ?></td>
                      </tr>
                      <tr>
                        <td><div id="disqus_thread"></div></td>
                      </tr>
                  </table>
                
               </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div></section></div> </div></div>

  
        <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '<?php echo site_url('page/detail/'.$detailberita->no_berita); ?>';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '<?php echo $detailberita->no_berita; ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://bppkiyk123-org.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>