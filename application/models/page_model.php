 
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model
{

function get_berita()
    {
        //ambil data berita dari tabel berita
        $home =$this->db->limit(5);
        $home = $this->db->from('berita')->get()->result();
        return $home;
    }
function get_detailberita($no_berita)
    {
        $detailberita = $this->db->from('berita')
                           ->where('no_berita', $no_berita)
                           ->get()
                           ->row();
        return $detailberita;
    }
    function get_pageprofil()
    {
        //ambil data berita dari tabel berita
        $pageprofil = $this->db->from('profil')->get()->result();
        return $pageprofil;
    }

    function get_profilpeneliti()
    {
        //ambil data berita dari tabel berita
       
        $profilpeneliti = $this->db->from('pgw_identitas')
                        // ->like('jbt_nama','peneliti')
                        ->get()->result();
        return $profilpeneliti;
    }

    
    function get_detailiptek($id_ip)
    {
        $detailiptek = $this->db->from('iptek')
                           ->where('id_ip', $id_ip)
                           ->get()
                           ->row();
        return $detailiptek;
    }
    
     function get_detailpeneliti($NIP)
    {
        $detailpeneliti = $this->db->from('pgw_identitas')
                           ->where('NIP', $NIP)
                           ->get()
                           ->row();
        return $detailpeneliti;
    }
    function get_pagerkt()
    {
        //ambil data berita dari tabel berita
        $pagerkt = $this->db->from('rkt')->get()->result();
        return $pagerkt;
    }
    function get_strukturorganisasi()
    {
        //ambil data berita dari tabel berita
        $strukturorganisasi = $this->db->from('strukturorganisasi')->get()->result();
        return $strukturorganisasi;
    }
    function get_pagepermohonaninformasi()
    {
        //ambil data berita dari tabel berita
        $pagepermohonaninformasi = $this->db->from('permohonaninformasi')->get()->result();
        return $pagepermohonaninformasi;
    }
    function get_pengumuman()
    {
        //ambil data berita dari tabel berita
        $pengumuman = $this->db->from('pengumuman')->get()->result();
        return $pengumuman;
    }
    function get_pagegaleri()
    {
        //ambil data berita dari tabel berita
        $pagegaleri = $this->db->from('galeri')->get()->result();
        return $pagegaleri;
    }
    function get_pagekontak()
    {
        //ambil data berita dari tabel berita
        $pagekontak = $this->db->from('kontak')->get()->result();
        return $pagekontak;
    }
    function get_pagevisimisi()
    {
        //ambil data berita dari tabel berita
        $pagevisimisi = $this->db->from('visimisi')->get()->result();
        return $pagevisimisi;
    }
    function get_pageso()
    {
        //ambil data berita dari tabel berita
        $pageso = $this->db->from('strukturorganisasi')->get()->result();
        return $pageso;
    }
    function get_rktdwn()
    {
        //ambil data berita dari tabel berita
        $rktdwn = $this->db->from('rkt')->get()->result();
        return $rktdwn;
    }
    function get_pagepengembangansdm()
    {
        //ambil data berita dari tabel berita
        $pagepengembangansdm = $this->db->from('pengembangansdm')->get()->result();
        return $pagepengembangansdm;
    }
    function get_pagedetailsdm($id_sdm)
    {
        //ambil data berita dari tabel berita
        $pagedetailsdm = $this->db->from('pengembangansdm')
                        ->where('id_sdm', $id_sdm)
                        ->get()
                        ->row();
        return $pagedetailsdm;
    }
        function get_pagebr()
        {
           $subbr = $this->db->from('bungarampai')
                               // ->join('subbr', 'subbr.id_br= bungarampai.id_br','right') 
                                ->get()->result();
            return $subbr;
        }

        function get_pagebr2($id_br)
        {
          $bungarampai = $this->db->from('subbr')
                            ->join('bungarampai','subbr.id_br=bungarampai.id_br','left')
                           ->where('bungarampai.id_br', $id_br)
                           ->get()
                           ->result();
        return $bungarampai;
        }

        function get_pagebrdetail($id_subbr)
        {
           $subbr = $this->db->from('subbr')
                        ->where('id_subbr', $id_subbr)
                                ->get()->row();
            return $subbr;
           
        }


     function get_pagehl()
    {
        //ambil data berita dari tabel berita
        $pagehl = $this->db->from('hasillitbang')->get()->result();
        return $pagehl;
    }
    function get_pagemg()
    {
        //ambil data berita dari tabel berita
        $pagemg = $this->db->from('majalahgagasan')->get()->result();
        return $pagemg;
    }

    function get_pagemgdetail($id_mg)
    {
        //ambil data berita dari tabel berita
        $pagemgdetail = $this->db->from('majalahgagasan')
                        ->where('id_mg', $id_mg)
                        ->get()
                        ->row();
        return $pagemgdetail;
    }

    function get_pagehldetail($id_hl)
    {
        //ambil data berita dari tabel berita
        $pagehldetail = $this->db->from('hasillitbang')
                        ->where('id_hl', $id_hl)
                        ->get()
                        ->row();
        return $pagehldetail;
    }


 
}