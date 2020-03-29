<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
/**
/**
/**
/**
/**
/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Pengumuman extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengumuman_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Pengumuman';
         $data['list'] = $this->pengumuman_model->get_pengumuman();
         $this->loadViews("pengumuman/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data pengumuman';
         $this->loadViews("pengumuman/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->pengumuman_model->save();
        redirect('pengumuman');
    }

    function detail($no_pengumuman=NULL){
       
        $this->global['pageTitle'] = 'Detail pengumuman';
        $data['pengumuman'] = $this->pengumuman_model->get_by_no_pengumuman($no_pengumuman);
        $this->loadViews("pengumuman/detail", $this->global, $data , NULL);
    }
    function edit($no_pengumuman=NULL){
       
        $this->global['pageTitle'] = 'Ubah pengumuman';
        $data['pengumuman'] = $this->pengumuman_model->get_by_no_pengumuman($no_pengumuman);
        $this->loadViews("pengumuman/edit", $this->global, $data , NULL);
    }
  
    function delete($no_pengumuman = NULL){
        $this->global['pageTitle'] = 'Hapus pengumuman';
        $this->db->where('no_pengumuman', $no_pengumuman);
        $this->db->delete('pengumuman');
        redirect('user/Lihat_Data_pengumuman') ;
    }
    

   
} 
?>