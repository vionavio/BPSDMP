<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Majalahgagasan_model extends CI_Model
{
    
    function get_majalahgagasan()
    {
        //ambil data majalahgagasan dari tabel majalahgagasan
        
        $list = $this->db->from('majalahgagasan')->get()->result();
        return $list;
    }
    
    function get_by_id_mg($id_mg)
    {
        $majalahgagasan = $this->db->from('majalahgagasan')
                           ->where('id_mg', $id_mg)
                           ->get()
                           ->row();
        return $majalahgagasan;
    }
 
    function save()
    {
        $id_mg = $this->input->post('id_mg');

        $random = round(microtime(true) * 100); 

        $config['upload_path']          = './assets/images/mg';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['file_name']            = 'majalahgagasan_'.$random;

        $this->load->library('upload', $config);

        $this->upload->do_upload('cover');
        $filecover = $this->upload->data('file_name');

        $this->upload->do_upload('es');
        $filees = $this->upload->data('file_name');
       
        $data = array(
            'judul' => $_POST['judul'],
            'volume' => $_POST['volume'],
            'tahun' => $_POST['tahun'],
            'cover' => $filecover,
            'es' => $filees
        );


        if($id_mg)
        {
            //simpan edit
            $this->db->where('id_mg', $id_mg);
            $this->db->update('majalahgagasan', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('majalahgagasan', $data);
        }
    }
} 
       
        

  