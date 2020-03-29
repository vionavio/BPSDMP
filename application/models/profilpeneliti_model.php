<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Profilpeneliti_model extends CI_Model
{
    
    function get_profilpeneliti()
    {
        //ambil data profilpeneliti dari tabel profilpeneliti
        
        $list = $this->db->from('profilpeneliti')->get()->result();
        return $list;
    }
    
    function get_by_no_profilpeneliti($no_profilpeneliti)
    {
        $profilpeneliti = $this->db->from('profilpeneliti')
                           ->where('no_profilpeneliti', $no_profilpeneliti)
                           ->get()
                           ->row();
        return $profilpeneliti;
    }

    function save()
    {
        $no_profilpeneliti = $this->input->post('no_profilpeneliti');

        $random = round(microtime(true) * 1000); 

        $config['upload_path']          = './assets/images/gambar';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'profilpeneliti_'.$random;

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload('gambar');

        // if ( ! $upload)
        // {
        //         print_r (array('error' => $this->upload->display_errors()));
        //         exit();
        // }
       
        $data = array(
           
            
            'url' => $this->upload->data('file_name'),
             'text' => $_POST['text']
        );


        if($no_profilpeneliti)
        {
            //simpan edit
            $this->db->where('no_profilpeneliti', $no_profilpeneliti);
            $this->db->update('profilpeneliti', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('profilpeneliti', $data);
        }
    }
} 
       
        

  