<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Visimisi extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('visimisi_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Visimisi';
         $data['list'] = $this->visimisi_model->get_visimisi();
         $this->loadViews("visimisi/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data Visimisi';
         $this->loadViews("visimisi/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->visimisi_model->save();
        redirect('visimisi');
    }

    function edit($id_vm=NULL){
       
        $this->global['pageTitle'] = 'Ubah Visimisi';
        $data['visimisi'] = $this->visimisi_model->get_by_id_vm($id_vm);
        $this->loadViews("visimisi/edit", $this->global, $data , NULL);
    }
  
    function delete($id_vm = NULL){
        $this->global['pageTitle'] = 'Hapus Visimisi';
        $this->db->where('id_vm', $id_vm);
        $this->db->delete('visimisi');
        redirect('visimisi') ;
    }
    

   
} 
?>