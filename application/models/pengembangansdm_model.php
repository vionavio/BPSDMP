<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Pengembangansdm_model extends CI_Model
{
    
    function get_pengembangansdm()
    {
        //ambil data pengembangansdm dari tabel pengembangansdm
        
        $list = $this->db->from('pengembangansdm')->get()->result();
        return $list;
    }
    
    function get_by_id_sdm($id_sdm)
    {
        $pengembangansdm = $this->db->from('pengembangansdm')
                           ->where('id_sdm', $id_sdm)
                           ->get()
                           ->row();
        return $pengembangansdm;
    }

    function save()
    {
        $id_sdm = $this->input->post('id_sdm');
      
        $data = array(
            'judul' => $_POST['judul'],
            'jadwal' => $_POST['jadwal'],
            'deskripsi' => $_POST['deskripsi']
            
        );


        if($id_sdm)
        {
            //simpan edit
            $this->db->where('id_sdm', $id_sdm);
            $this->db->update('pengembangansdm', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('pengembangansdm', $data);
        }
    }
} 