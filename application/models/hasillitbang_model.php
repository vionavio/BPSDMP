<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Hasillitbang_model extends CI_Model
{
    
    function get_hasillitbang()
    {
        //ambil data hasillitbang dari tabel hasillitbang
        
        $list = $this->db->from('hasillitbang')->get()->result();
        return $list;
    }
    
    function get_by_id_hl($id_hl)
    {
        $hasillitbang = $this->db->from('hasillitbang')
                           ->where('id_hl', $id_hl)
                           ->get()
                           ->row();
        return $hasillitbang;
    }

    function save()
    {
        $id_hl = $this->input->post('id_hl');

       $random = round(microtime(true) * 100); 

        $config['upload_path']          = './assets/images/hl';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
       
        $config['file_name']            = 'hasillitbang_'.$random;
        $this->load->library('upload', $config);
        
        $this->upload->do_upload('cover');
        $filecover = $this->upload->data('file_name');

        $this->upload->do_upload('es');
        $filees = $this->upload->data('file_name');
         
       
        $data = array(
            'tahun' => $_POST['tahun'],
            'judul' => $_POST['judul'],
            'cover' => $filecover,
            'timpenulis' => $_POST['timpenulis'],
            'es' =>$filees
        );

        // $file_ext = end(explode('.', $custom_file_name));

        // if($file_ext=='pdf')
        if($id_hl)
        {
            //simpan edit
            $this->db->where('id_hl', $id_hl);
            $this->db->update('hasillitbang', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('hasillitbang', $data);
        }
    }
} 