<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Iptek extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('iptek_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data  BPPKI';
         $data['list'] = $this->iptek_model->get_iptek();
         $this->loadViews("iptek/list", $this->global, $data , NULL);
    }
    
    function input(){
         $this->global['pageTitle'] = 'Input Data iptek';
         $this->loadViews("iptek/edit", $this->global, NULL , NULL);
    }
    

    function simpan(){
        $this->iptek_model->save();
        redirect('iptek');
    }
    function detail($id_ip=NULL){
       
        $this->global['pageTitle'] = 'Detail Jurnal';
        $data['iptek'] = $this->iptek_model->get_by_id_ip($id_ip);
        $this->loadViews("iptek/detail", $this->global, $data , NULL);
    }
    function edit($id_ip=NULL){
       
        $this->global['pageTitle'] = 'Ubah iptek';
        $data['iptek'] = $this->iptek_model->get_by_id_ip($id_ip);
        $this->loadViews("iptek/edit", $this->global, $data , NULL);
    }
    function delete($id_ip = NULL){
        $this->global['pageTitle'] = 'Hapus ';
        $this->db->where('id_ip', $id_ip);
        $this->db->delete('iptek');
        redirect('iptek') ;
    }
  
} 
?>