<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Bungarampai_model extends CI_Model
{
    
    function get_bungarampai()
    {
      
        $list = $this->db->from('bungarampai')
                         ->get()->result();
        return $list;
    }
     
     function get_subbr($id_br)
    {
        $list = $this->db->from('bungarampai')
                        ->where('id_br', $id_br)
                         ->get()->row();
                         
        return $list;
    }

    function get_by_id_br($id_br)
    {
        $bungarampai = $this->db->from('subbr')
                            ->join('bungarampai','subbr.id_br=bungarampai.id_br','left')
                           ->where('bungarampai.id_br', $id_br)
                           ->get()
                           ->result();
        return $bungarampai;
       
    }
    function get_by_subbr($id_subbr)
    {
        $subbr = $this->db->from('bungarampai')
                               ->join('subbr', 'subbr.id_br= bungarampai.id_br','right')
                               ->where('subbr.id_subbr', $id_subbr)
                           ->get()
                           ->row();
        return $subbr;
    }
    function get_pagebrdetail($id_subbr)
        {
           $subbr = $this->db->from('subbr')
                        ->where('id_subbr', $id_subbr)
                                ->get()->row();
            return $subbr;
           
        }
    function get_by_id_subbr($id_subbr)
    {
        // $subbr = $this->db->from('subbr')
        //                    ->where('id_subbr', $id_subbr)
        //                    ->get()
        //                    ->row();
        // return $subbr;

         $subbr = $this->db->from('bungarampai')
                               ->join('subbr', 'subbr.id_br= bungarampai.id_br','right')
                               ->where('subbr.id_subbr', $id_subbr)
                                ->get()->result();
            return $subbr;
    }

    function save()
    {
        $id_br = $this->input->post('id_br');

        $random = round(microtime(true) * 1000); 

        $config['upload_path']          = './assets/images/gambar';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'bungarampai_'.$random;

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload('cover');
       
        $data = array(
            'cover' => $this->upload->data('file_name'),
            'judulutama' => $_POST['judulutama']
        );

        if($id_br)
        {
            //simpan edit
            $this->db->where('id_br', $id_br);
            $this->db->update('bungarampai', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('bungarampai', $data);
        }
    }
    function save2()
    {  
        $id_subbr = $this->input->post('id_subbr');

        $data = array(
             'id_br' => $_POST['id_br'],
            'judul' => $_POST['judul'],
            'penulis' => $_POST['penulis'],
            'isi' => $_POST['isi']
        );


        if($id_subbr)
        {
            //simpan edit
            $this->db->where('id_subbr', $id_subbr);
            $this->db->update('subbr', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('subbr', $data);
        }
    }
} 
       
        

  