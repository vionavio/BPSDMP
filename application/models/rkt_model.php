<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Rkt_model extends CI_Model
{
    
    function get_rkt()
    {
        //ambil data rkt dari tabel rkt
        
        $list = $this->db->from('rkt')->get()->result();
        return $list;
    }
    
    function get_by_id_rkt($id_rkt)
    {
        $rkt = $this->db->from('rkt')
                           ->where('id_rkt', $id_rkt)
                           ->get()
                           ->row();
        return $rkt;
    }

    function save()
    {
        $id_rkt = $this->input->post('id_rkt');

        $random = round(microtime(true) * 1000); 

        $config['upload_path']          = './assets/pdf';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = 'rkt_'.$random;

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload('pdf');

        // if ( ! $upload)
        // {
        //         print_r (array('error' => $this->upload->display_errors()));
        //         exit();
        // }
       
        $data = array(
            'tahun' => $_POST['tahun'],
            'judul' => $_POST['judul'],
            'file' => $this->upload->data('file_name')
        );


        if($id_rkt)
        {
            //simpan edit
            $this->db->where('id_rkt', $id_rkt);
            $this->db->update('rkt', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('rkt', $data);
        }
    }
} 
       
        

  