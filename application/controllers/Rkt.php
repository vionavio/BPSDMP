<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Rkt extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rkt_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Kebijakan Kominfo BPPKI';
         $data['list'] = $this->rkt_model->get_rkt();
         $this->loadViews("rkt/list", $this->global, $data , NULL);
    }
    function detail($id_rkt=NULL){
       
        $this->global['pageTitle'] = 'Detail Jurnal';
        $data['rkt'] = $this->rkt_model->get_by_id_rkt($id_rkt);
        $this->loadViews("rkt/detail", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data rkt';
         $this->loadViews("rkt/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->rkt_model->save();
        redirect('rkt');
    }

     
    function edit($id_rkt=NULL){
       
        $this->global['pageTitle'] = 'Ubah rkt';
        $data['rkt'] = $this->rkt_model->get_by_id_rkt($id_rkt);
        $this->loadViews("rkt/edit", $this->global, $data , NULL);
    }
    function delete($id_rkt = NULL){
        $this->global['pageTitle'] = 'Hapus Data';
        $this->db->where('id_rkt', $id_rkt);
        $this->db->delete('rkt');
        redirect('rkt') ;
    }
  
} 
?>