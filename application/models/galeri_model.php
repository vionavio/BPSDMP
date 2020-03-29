<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Galeri_model extends CI_Model
{
    
    function get_galeri()
    {
        //ambil data galeri dari tabel galeri
        
        $list = $this->db->distinct()
                         ->from('album')
                         ->join('galeri','galeri.id_album=album.id_album','left')
                         ->get()->result();
        return $list;

       
    }
    function get_album()
    {
        //ambil data galeri dari tabel galeri
        $list = $this->db->distinct()
                         ->from('album')
                         ->get()->result();
        return $list;
    }
     
  

    function get_by_id_foto($id_foto)
    {
        $galeri = $this->db->from('galeri')
                           ->where('id_foto', $id_foto)
                           ->get()
                           ->row();
        return $galeri;
    }
    function get_by_id_album($id_album)
    {
        $galeri = $this->db->from('galeri')
                           ->join('album','galeri.id_album=album.id_album','left')
                           ->where('album.id_album', $id_album)
                           ->get()
                           ->result();
        return $galeri;
    }
    function get_by_album($id_album)
    {
        $list = $this->db->from('album')
                         ->where('id_album', $id_album)
                         ->get()->row();
        return $list;
    }

   

    function save()
    {
        $id_album = $this->input->post('id_album');

       
        $data = array(
             
            'namaalbum' => $_POST['namaalbum']
        );
        if($id_album)
        {
            //simpan edit
            $this->db->where('id_album', $id_album);
            $this->db->update('album', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('album', $data);
        }
    }

    function save2()
    {

        $id_foto = $this->input->post('id_foto');

        $random = round(microtime(true) * 1000); 

        $config['upload_path']          = './assets/images/galeri';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'galeri_'.$random;

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload('galeri');

        // if ( ! $upload)
        // {
        //         print_r (array('error' => $this->upload->display_errors()));
        //         exit();
        // }
       
        $data = array(
             
            'jam' => $_POST['jam'],
            'tanggal' => $_POST['tanggal'],
            'title' => $_POST['title'],
            'url' => $this->upload->data('file_name'),
            'id_album' => $_POST['id_album']
        );


        if($id_foto)
        {
            //simpan edit
            $this->db->where('id_foto', $id_foto);
            $this->db->update('galeri', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('galeri', $data);
        }
    }
     
} 
       
        

  