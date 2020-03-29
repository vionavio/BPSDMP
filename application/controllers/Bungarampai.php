<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Bungarampai extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bungarampai_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Bunga Rampai';
         $data['list'] = $this->bungarampai_model->get_bungarampai();
         $this->loadViews("bungarampai/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data Bunga Rampai';
         $this->loadViews("bungarampai/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->bungarampai_model->save();
        redirect('bungarampai');
    }
    function simpan2(){
        $this->bungarampai_model->save2();
        redirect('bungarampai');
    }
 
    function detail($id_br=NULL){
       
        $this->global['pageTitle'] = 'Detail Bunga Rampai';
        $data['list2'] = $this->bungarampai_model->get_by_id_br($id_br);
        $this->loadViews("bungarampai/list2", $this->global, $data , NULL);
    }
   public function detail2($id_subbr=NULL)
    {
       $this->global['pageTitle'] = 'Detail Bunga Rampai'; 
        $data['detail2'] = $this->bungarampai_model->get_pagebrdetail($id_subbr);
        $this->loadViews('bungarampai/detail', $this->global, $data , NULL); 
    }
    function edit($id_br=NULL){
       
        $this->global['pageTitle'] = 'Ubah bungarampai';
        $data['edit3'] = $this->bungarampai_model->get_subbr($id_br);
        $this->loadViews("bungarampai/edit", $this->global, $data , NULL);
    }
    function edit2($id_subbr=NULL){
       
        $this->global['pageTitle'] = 'Ubah bungarampai';
        $data['subbr'] = $this->bungarampai_model->get_by_subbr($id_subbr);
        $data['bungarampai'] = $this->bungarampai_model->get_bungarampai();
        $this->loadViews("bungarampai/edit2", $this->global, $data , NULL);
    }
  
    function delete($id_br = NULL){
        $this->global['pageTitle'] = 'Hapus bungarampai';
        $this->db->where('id_br', $id_br);
        $this->db->delete('bungarampai');
        redirect('bungarampai') ;
    }
    function delete2($id_subbr = NULL){
        $this->global['pageTitle'] = 'Hapus bungarampai';
        $this->db->where('id_subbr', $id_subbr);
        $this->db->delete('subbr');
        redirect('bungarampai/detail') ;
    }
    

   
} 
?>