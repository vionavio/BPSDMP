<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    
    function get_berita()
    {
        //ambil data berita dari tabel berita
        
        $list = $this->db->from('berita')->get()->result();
        return $list;
    }
    
    function get_by_no_berita($no_berita)
    {
        $berita = $this->db->from('berita')
                           ->where('no_berita', $no_berita)
                           ->get()
                           ->row();
        return $berita;
    }

    function save()
    {
        $no_berita = $this->input->post('no_berita');

        $random = round(microtime(true) * 1000); 

        $config['upload_path']          = './assets/images/gambar';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'berita_'.$random;

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload('gambar');

        // if ( ! $upload)
        // {
        //         print_r (array('error' => $this->upload->display_errors()));
        //         exit();
        // }
       
        $data = array(
            'username' => $_POST['username'],
            'jam_berita' => $_POST['jam_berita'],
            'tgl_berita' => $_POST['tgl_berita'], 
            'judul_berita' => $_POST['judul_berita'],
            'isi_berita' => $_POST['isi_berita'],
            'url' => $this->upload->data('file_name')
        );


        if($no_berita)
        {
            //simpan edit
            $this->db->where('no_berita', $no_berita);
            $this->db->update('berita', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('berita', $data);
        }
    }
} 
       
        

  