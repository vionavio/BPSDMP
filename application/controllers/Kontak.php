<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Kontak extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kontak_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Kontak BPPKI';
         $data['list'] = $this->kontak_model->get_kontak();
         $this->loadViews("kontak/list", $this->global, $data , NULL);
    }
    function detail($id_kontak=NULL){
       
        $this->global['pageTitle'] = 'Detail Jurnal';
        $data['kontak'] = $this->kontak_model->get_by_id_kontak($id_kontak);
        $this->loadViews("kontak/detail", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data kontak';
         $this->loadViews("kontak/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->kontak_model->save();
        redirect('kontak');
    }

    function edit($id_kontak=NULL){
       
        $this->global['pageTitle'] = 'Ubah kontak';
        $data['kontak'] = $this->kontak_model->get_by_id_kontak($id_kontak);
        $this->loadViews("kontak/edit", $this->global, $data , NULL);
    }
    function delete($id_kontak = NULL){
        $this->global['pageTitle'] = 'Hapus ';
        $this->db->where('id_kontak', $id_kontak);
        $this->db->delete('kontak');
        redirect('kontak') ;
    }
  
} 
?>