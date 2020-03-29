<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Visimisi_model extends CI_Model
{
    
    function get_visimisi()
    {
        //ambil data visimisi dari tabel visimisi
        
        $list = $this->db->from('visimisi')->get()->result();
        return $list;
    }
    
    function get_by_id_vm($id_vm)
    {
        $visimisi = $this->db->from('visimisi')
                           ->where('id_vm', $id_vm)
                           ->get()
                           ->row();
        return $visimisi;
    }

    function save()
    {
        $id_vm = $this->input->post('id_vm');

        $data = array(
            'visi' => $_POST['visi'],
            'misi' => $_POST['misi']
        );


        if( $id_vm)
        {
            //simpan edit
            $this->db->where('id_vm', $id_vm);
            $this->db->update('visimisi', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('visimisi', $data);
        }
    }
} 
       
        

  