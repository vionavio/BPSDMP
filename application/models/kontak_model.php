<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Kontak_model extends CI_Model
{
    
    function get_kontak()
    {
        //ambil data kontak dari tabel kontak
        
        $list = $this->db->from('kontak')->get()->result();
        return $list;
    }
    
    function get_by_id_kontak($id_kontak)
    {
        $kontak = $this->db->from('kontak')
                           ->where('id_kontak', $id_kontak)
                           ->get()
                           ->row();
        return $kontak;
    }

    function save()
    {
        $id_kontak = $this->input->post('id_kontak');

        $data = array(
            'alamat' => $_POST['alamat'],
            'telfon' => $_POST['telfon'],
            'kodepos' => $_POST['kodepos'],
            'email' => $_POST['email'],
            'website' => $_POST['website']
        );


        if($id_kontak)
        {
            //simpan edit
            $this->db->where('id_kontak', $id_kontak);
            $this->db->update('kontak', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('kontak', $data);
        }
    }
}