<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Iptek_model extends CI_Model
{
    
    function get_iptek()
    {
        //ambil data iptek dari tabel iptek
        
        $list = $this->db->from('iptek')->get()->result();
        return $list;
    }
    
    function get_by_id_ip($id_ip)
    {
        $iptek = $this->db->from('iptek')
                           ->where('id_ip', $id_ip)
                           ->get()
                           ->row();
        return $iptek;
    }

    function save()
    {
        $id_ip = $this->input->post('id_ip');

        $data = array(
            'tanggal' => $_POST['tanggal'],
            'edisi' => $_POST['edisi'],
            'penulis' => $_POST['penulis'],
            'judul' => $_POST['judul'],
            'abstrak' => $_POST['abstrak']
        );


        if( $id_ip)
        {
            //simpan edit
            $this->db->where('id_ip', $id_ip);
            $this->db->update('iptek', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('iptek', $data);
        }
    }
} 
       
        

  