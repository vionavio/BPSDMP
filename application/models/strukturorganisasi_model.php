<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Strukturorganisasi_model extends CI_Model
{
    
    function get_strukturorganisasi()
    {
        //ambil data strukturorganisasi dari tabel strukturorganisasi
        $list = $this->db->from('strukturorganisasi')->get()->result();
        return $list;
    }
    
    function get_by_id_so($id_so)
    {
        $strukturorganisasi = $this->db->from('strukturorganisasi')
                           ->where('id_so', $id_so)
                           ->get()
                           ->row();
        return $strukturorganisasi;
    }

    function save()
    {
        $id_so = $this->input->post('id_so');

        $random = round(microtime(true) * 1000); 

        $config['upload_path']          = './assets/images/so';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'strukturorganisasi_'.$random;

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload('gambar');
       
        if ( ! $upload)
        {
                print_r (array('error' => $this->upload->display_errors()));
                exit();
        }
       
        $data = array(
            
            'gambar' => $this->upload->data('file_name'),
        );


        if($id_so)
        {
            //simpan edit
            $this->db->where('id_so', $id_so);
            $this->db->update('strukturorganisasi', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('strukturorganisasi', $data);
        }
    }
} 
       
        

  