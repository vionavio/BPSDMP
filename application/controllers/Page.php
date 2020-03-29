<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/FrontendController.php';


class Page extends FrontendController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('page_model');
    }
    function index()
    {
        $this->home();
    }

    public function home()
    {
       $this->set_title('Beranda');
         $data['home'] = $this->page_model->get_berita();
         $this->loadViews('home',$data);
        
    }
      public function detailberita($no_berita=NULL)
    {
         $data['detailberita'] = $this->page_model->get_detailberita($no_berita);
         $this->loadViews('detailberita',$data);
        
    }
     
    public function pageprofil()
    {
        $this->set_title('Profil');
        $data['pageprofil'] = $this->page_model->get_pageprofil();
        $this->loadViews('pageprofil', $data);
        
    }

     
    public function detailiptek($id_ip=NULL)
    {
        $this->set_title('IPTEK-KOM');
        $data['detailiptek'] = $this->page_model->get_detailiptek($id_ip);
        $this->loadViews('detailiptek', $data);
        
    }
    public function profilpeneliti()
    {
        $this->set_title('Profil Peneliti');
        $data['profilpeneliti'] = $this->page_model->get_profilpeneliti();
        $this->loadViews('profilpeneliti', $data);
    }
    public function pagerkt()
    {
        $this->set_title('Rencana Kerja Tahunan');
        $data['pagerkt'] = $this->page_model->get_pagerkt();
        $this->loadViews('pagerkt',$data);

    }
   
    public function detailpeneliti($NIP=NULL)
    {
        $this->set_title('Profil Peneliti');
        $data['detailpeneliti'] = $this->page_model->get_detailpeneliti($NIP);
        $this->loadViews('detailpeneliti', $data);
        
    }
    public function strukturorganisasi()
    {
        $this->set_title('Struktur Organisasi');
        $data['strukturorganisasi'] = $this->page_model->get_strukturorganisasi();
        $this->loadViews('strukturorganisasi', $data);
        
    }
    public function pidownload($id_ip=NULL)
    {
        
        $this->load->helper('download');
        force_download('assets/pdf/FORMULIR PERMOHONAN INFORMASI.pdf',NULL);
    }

    public function mgdownload($id_mg=NULL)
    {
        
        $this->load->helper('download');
        force_download('assets/pdf/FORMULIR PERMOHONAN INFORMASI.pdf',NULL);
    }
    
    // public function pengumuman($id_peng=NULL)
    // {
    //     $this->set_title('Pengumuman');
        
    //     $data['pengumuman'] = $this->page_model->get_pengumuman($id_peng);
    //     $this->loadViews('pengumuman', $data);
    // }
    public function pagegaleri()
    {
        $this->set_title('Galeri');
        
        $data['pagegaleri'] = $this->page_model->get_pagegaleri();
        $this->loadViews('pagegaleri', $data);
    }
    public function pagekontak()
    {
        $this->set_title('Kontak');
        
        $data['pagekontak'] = $this->page_model->get_pagekontak();
        $this->loadViews('pagekontak', $data);
    }
    public function pagevisimisi()
    {
        $this->set_title('Visi Misi');
        
        $data['pagevisimisi'] = $this->page_model->get_pagevisimisi();
        $this->loadViews('pagevisimisi', $data);
    }
     public function pageso()
    {
        $this->set_title('Struktur Organisasi');
        
        $data['pageso'] = $this->page_model->get_pageso();
        $this->loadViews('pagestrukturorganisasi', $data);
    }
    public function pagemg()
    {
        $this->set_title('Majalah Gagasan');
        
        $data['pagemg'] = $this->page_model->get_pagemg();
        $this->loadViews('pagemg', $data);
    }
     public function pagemgdetail($id_mg=NULL)
    {
        $this->set_title(' Detail Majalah Gagasan');
        
        $data['pagemgdetail'] = $this->page_model->get_pagemgdetail($id_mg);
        $this->loadViews('pagemgdetail', $data);
    }

     public function pagepengembangansdm()
    {
        $this->set_title('Pengembangan SDM');
        
        $data['pagepengembangansdm'] = $this->page_model->get_pagepengembangansdm();
        $this->loadViews('pagepengembangansdm', $data);
    } 
    public function pagedetailsdm($id_sdm=NULL)
    {
        $this->set_title('detail SDM');
        
        $data['pagedetailsdm'] = $this->page_model->get_pagedetailsdm($id_sdm);
        $this->loadViews('pagedetailsdm', $data);
    } 
    public function pagebr()
    {
        $this->set_title('Bunga Rampai');
        
        $data['pagebr'] = $this->page_model->get_pagebr();
        $this->loadViews('pagebr', $data);
    }
    public function pagebr2($id_br=NULL)
    {
        $this->set_title('Bunga Rampai');
        
        $data['pagebr2'] = $this->page_model->get_pagebr2($id_br);
        $this->loadViews('pagebr2', $data);
    }
     public function pagebrdetail($id_subbr=NULL)
    {
        $this->set_title('Detail Bunga Rampai');
        
        $data['pagebrdetail'] = $this->page_model->get_pagebrdetail($id_subbr);
        $this->loadViews('pagebrdetail', $data);
    }
      public function pagehl()
    {
        $this->set_title('Hasil Litbang');
        
        $data['pagehl'] = $this->page_model->get_pagehl();
        $this->loadViews('pagehl', $data);
    }

    public function pagehldetail($id_hl=NULL)
    {
        $this->set_title('Hasil Litbang Detail');
        
        $data['pagehldetail'] = $this->page_model->get_pagehldetail($id_hl);
        $this->loadViews('pagehldetail', $data);
    }
     
    
   
    
    
   
} 
?>