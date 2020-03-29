<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Kepegawaian_model extends CI_Model
{
    
    function get_kepegawaian()
    {
        //ambil data kepegawaian dari tabel kepegawaian
        $list = $this->db->from('pgw_identitas')->get()->result();
        return $list;
    }
    
    function get_by_NIP($NIP)
    {
        $kepegawaian = $this->db->from('pgw_identitas')
                           ->where('NIP', $NIP)
                           ->get()
                           ->row();
        return $kepegawaian;
    }

    function save()
    {
      $random = round(microtime(true) * 1000); 

        $config['upload_path']          = './assets/profilpeneliti';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'berita_'.$random;

        $this->load->library('upload', $config);
         $this->upload->do_upload('gambar');
       $data = array(
            'NIP' => $_POST['NIP'],
            'nama' => $_POST['nama'],
            'gol_ruang' => $_POST['gol_ruang'],
            'tmt' => $_POST['tmt'],
            'jbt_nama' => $_POST['jbt_nama'],
            'jbt_tmt' => $_POST['jbt_tmt'],
            'masker_th' => $_POST['masker_th'],
            'masker_bln' => $_POST['masker_bln'],
            'latjab_nama' => $_POST['latjab_nama'],
            'latjab_th' => $_POST['latjab_th'],
            'latjab_jumlah' => $_POST['latjab_jumlah'],
            'pendidikan_nama' => $_POST['pendidikan_nama'],
            'pendidikan_thlulus' => $_POST['pendidikan_thlulus'],
            'pend_tingkatijazah' => $_POST['pend_tingkatijazah'],
            'tempat_lahir' => $_POST['tempat_lahir'],
            'tanggal_lahir' => $_POST['tanggal_lahir'],
            'agama' => $_POST['agama'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'tmt_capeg' => $_POST['tmt_capeg'],
            'Keterangan' => $_POST['Keterangan'],
            'kepakaran' => $_POST['kepakaran'],
            'email' => $_POST['email'],
            'gambar' => $this->upload->data('file_name')
            
             );
      

        if($NIP)
        {
            //simpan edit
            $this->db->where('NIP', $NIP);
            $this->db->update('pgw_identitas', $data);
        }
        else
        {
            //simpan baru
            $this->db->insert('pgw_identitas', $data);
        }
    }
} 
       
        
