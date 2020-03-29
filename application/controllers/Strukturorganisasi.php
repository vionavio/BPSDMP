<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Strukturorganisasi extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('strukturorganisasi_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Struktur Organisasi';
         $data['list'] = $this->strukturorganisasi_model->get_strukturorganisasi();
         $this->loadViews("strukturorganisasi/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data strukturorganisasi';
         $this->loadViews("strukturorganisasi/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->strukturorganisasi_model->save();
        redirect('strukturorganisasi');
    }

    
    function edit($id_so=NULL){
       
        $this->global['pageTitle'] = 'Ubah Struktur Organisasi';
        $data['strukturorganisasi'] = $this->strukturorganisasi_model->get_by_id_so($id_so);
        $this->loadViews("strukturorganisasi/edit", $this->global, $data , NULL);
    }
  
    function delete($id_so = NULL){
        $this->global['pageTitle'] = 'Hapus Struktur Organisasi';
        $this->db->where('id_so', $id_so);
        $this->db->delete('strukturorganisasi');
        redirect('user/Lihat_Data_strukturorganisasi') ;
    }
    

   
} 
?>