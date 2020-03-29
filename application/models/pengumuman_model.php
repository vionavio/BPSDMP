<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman_model extends CI_Model
{
    
    function get_pengumuman()
    {
        //ambil data pengumuman dari tabel pengumuman
        $list = $this->db->from('pengumuman')->get()->result();
        return $list;
    }
    
    function get_by_no_pengumuman($no_pengumuman)
    {
        $pengumuman = $this->db->from('pengumuman')
                           ->where('no_pengumuman', $no_pengumuman)
                           ->get()
                           ->row();
        return $pengumuman;
    }

    function save()
    {
        $no_pengumuman = $this->input->post('no_pengumuman');

        $random = round(microtime(true) * 1000); 

        $config['upload_path']          = './assets/images/gambar';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'pengumuman_'.$random;

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload('gambar');

        // if ( ! $upload)
        // {
        //         print_r (array('error' => $this->upload->display_errors()));
        //         exit();
        // }
       
        $data = array(
            'username' => $_POST['username'],
            'jam_pengumuman' => $_POST['jam_pengumuman'],
            'hari' => $_POST['hari'],
            'tgl_pengumuman' => $_POST['tgl_pengumuman'], 
            'judul_pengumuman' => $_POST['judul_pengumuman'],
            'isi_pengumuman' => $_POST['isi_pengumuman'],
            'url' => $this->upload->data('file_name')
        );


        if($no_pengumuman)
        {
            //simpan edit
            $this->db->where('no_pengumuman', $no_pengumuman);
            $this->db->update('pengumuman', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('pengumuman', $data);
        }
    }
} 
       
        

  