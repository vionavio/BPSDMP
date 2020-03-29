<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Profil_model extends CI_Model
{
    
    function get_profil()
    {
        //ambil data profil dari tabel profil
        
        $list = $this->db->from('profil')->get()->result();
        return $list;
    }
    
    function get_by_id($id)
    {
        $profil = $this->db->from('profil')
                           ->where('id', $id)
                           ->get()
                           ->row();
        return $profil;
    }

    function save()
    {
        $id = $this->input->post('id');

        $random = round(microtime(true) * 1000); 

        $config['upload_path']          = './assets/images/profil';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'profil_'.$random;

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload('gambar');

        // if ( ! $upload)
        // {
        //         print_r (array('error' => $this->upload->display_errors()));
        //         exit();
        // }
       
        $data = array(
            'judul' => $_POST['judul'],
            'jam' => $_POST['jam'],
            'tanggal' => $_POST['tanggal'],
            'url' => $this->upload->data('file_name'),
            'text' => $_POST['text']
        );


        if($id)
        {
            //simpan edit
            $this->db->where('id', $id);
            $this->db->update('profil', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('profil', $data);
        }
    }
} 
       
        

  