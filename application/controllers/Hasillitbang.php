<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Hasillitbang extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hasillitbang_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Hasil Litbang';
         $data['list'] = $this->hasillitbang_model->get_hasillitbang();
         $this->loadViews("hasillitbang/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data Hasil Litbang';
         $this->loadViews("hasillitbang/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->hasillitbang_model->save();
        redirect('hasillitbang');
    }

    function detail($id_hl=NULL){
       
        $this->global['pageTitle'] = 'Detail Hasil Litbang';
        $data['hasillitbang'] = $this->hasillitbang_model->get_by_id_hl($id_hl);
        $this->loadViews("hasillitbang/detail", $this->global, $data , NULL);
    }
   
    function edit($id_hl=NULL){
       
        $this->global['pageTitle'] = 'Ubah Hasil Litbang';
        $data['hasillitbang'] = $this->hasillitbang_model->get_by_id_hl($id_hl);
        $this->loadViews("hasillitbang/edit", $this->global, $data , NULL);
    }
   
    function delete($id_hl = NULL){
        $this->global['pageTitle'] = 'Hapus Hasil Litbang';
        $this->db->where('id_hl', $id_hl);
        $this->db->delete('hasillitbang');
        redirect('hasillitbang') ;
    }
    
} 
?>